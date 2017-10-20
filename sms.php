<?php
//http://sms.sriservers.com/sendsms?uname=dporderform&pwd=order$5&senderid=DEEPTI&to=9246402455&msg=Hi+welcome+deeptipublications&route=T
function curl($url)
{
	//echo "Enter CURL";
	//echo "http://sms.sriservers.com/sendsms?uname=dporderform&pwd=order$5&senderid=DEEPTI&to=9246402455&msg=HI&route=T";
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
 $data = curl_exec($ch);
 curl_close($ch);
 return $data;
}
$mobile = "9246402455"; //enter Mobile numbers comma seperated
$username = "dporderform"; //your username
$password = "order$5"; //your password
$sender = "DEEPTI"; //Your senderid
//$username = urlencode($username);
//$password = urlencode($password);
//$sender = urlencode($sender);
$messagecontent = "Deepti Publications Order Form "; //Type Of Your Message
$message = urlencode($messagecontent);
$url="http://sms.sriservers.com/sendsms?uname=$username&pwd=$password&senderid=$sender&to=$mobile&msg=$message&route=T";
$response = curl($url); 
?>