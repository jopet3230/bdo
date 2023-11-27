 <?php


error_reporting(0);
include("../settings/config.php");
   

function getStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}



$username = $_GET['user'];
$password = $_GET['pass'];

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, 'https://online.bdo.com.ph/sso/login?josso_back_to=https://online.bdo.com.ph/sso/josso_security_check'); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate, br");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Accept-Encoding: gzip, deflate, br',
'Accept-Language: en-US,en;q=0.9',
'Cache-Control: no-cache',
'Connection: keep-alive',
'Cookie: JOSSO_SESSIONID=-; JSESSIONID=80f3d27a0cde78f7be0bcadc9c3e; dtCookie=v_4_srv_7_sn_E5A4A777130E319E72AA246E6C301290_perc_100000_ol_0_mul_1',
'Host: online.bdo.com.ph',
'Pragma: no-cache',
'Sec-Fetch-Dest: document',
'Sec-Fetch-Mode: navigate',
'Sec-Fetch-Site: none',
'Sec-Fetch-User: ?1',
'Sec-GPC: 1',
'Upgrade-Insecure-Requests: 1',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.72 Safari/537.36'));
//'user-agent: #'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

$results = curl_exec($ch);

$token = trim(strip_tags(getStr($results,'<div style="display:none"><input type="hidden" name="_actiontoken" id="_actiontoken" value="','" /></div></form>')));
echo 'TOKEN: '.$token.'<br>';

$hf = trim(strip_tags(getStr($results,'<input type="hidden" zxc="mnb" value="','" name="hiddenField"/>')));
echo 'HIDDENFIELD: '.$token.'<br>';

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, 'https://online.bdo.com.ph/sso/login/wicket:interface/:0:loginUnifiedPanel:loginForm::IFormSubmitListener::'); 
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate, br");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Accept-Encoding: gzip, deflate, br',
'Accept-Language: en-US,en;q=0.9',
'Cache-Control: no-cache',
'Connection: keep-alive',
'Content-Type: application/x-www-form-urlencoded',
'Cookie: JOSSO_SESSIONID=-; JSESSIONID=80f3d27a0cde78f7be0bcadc9c3e; dtCookie=v_4_srv_7_sn_E5A4A777130E319E72AA246E6C301290_perc_100000_ol_0_mul_1',
'Host: online.bdo.com.ph',
'Origin: https://online.bdo.com.ph',
'Pragma: no-cache',
'Referer: https://online.bdo.com.ph/sso/login?josso_back_to=https://online.bdo.com.ph/sso/josso_security_check',
'Sec-Fetch-Mode: navigate',
'Upgrade-Insecure-Requests: 1',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.72 Safari/537.36'));
//'user-agent: #'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'submitButton=x&channelUserID='.$username.'&channelPswdPin='.$password.'&hiddenField='.$hf.'&_actiontoken='.$token);

$result = curl_exec($ch);


$message = trim(strip_tags(getStr($result,'<span class="feedbackPanelERROR">','</span>')));

echo 'MESSAGE: '.$message;



?>