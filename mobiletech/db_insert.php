<?php
$db_hostname="lochnagar.abertay.ac.uk"; //server name
$db_username="sql1206633";  //mysql username.
$db_password="MjWvMmKt";       //password
$db_database="sql1206633";  //database name which you created
$con=mysql_connect($db_hostname,$db_username,$db_password);
if(! $con)
{
	die('Connection Failed'.mysql_error());
}

mysql_select_db($db_database,$con);
//read the json file contents
$jsondata = file_get_contents('php://input');

//convert json object to php associative array
$data = json_decode($jsondata, true);

//store the element values into variables
$ext = $data['external'];
$int = $data['internal'];
$lum = $data['light'];

$fan = $data['fan'];
$heater = $data['heater'];
$auto = $data['auto'];
$alert = $data['alert'];

//insert values into mysql database
$sql="INSERT INTO greenhouse (ext_temperature, int_temperature, illuminance, alert) 
VALUES ('$ext', '$int', '$lum', '$alert')";

if(!mysql_query($sql,$con)) //$con is mysql connection object
{
     die('Error : ' . mysql_error());
}

if ($alert == "ON")
{
	// create a new cURL resource
	$ch = curl_init();

	// set URL and other appropriate options
	curl_setopt($ch, CURLOPT_URL, "http://adamcoursework.byethost31.com/alert.php");
	curl_setopt($ch, CURLOPT_HEADER, 0);

	// grab URL and pass it to the browser
	curl_exec($ch);

	// close cURL resource, and free up system resources
	curl_close($ch);
}

if ($fan == "1")
{
	if ($heater == "1")
	{
		$sql2 = "UPDATE  `sql1206633`.`greenhouseSettings` SET  `fanStatus` =  'ON' , `heaterStatus` =  'ON'";
	} else if ($heater == "0")
	{
		$sql2 = "UPDATE  `sql1206633`.`greenhouseSettings` SET  `fanStatus` =  'ON' , `heaterStatus` =  'OFF'";
	}
} else if ($fan == "0")
{
	if ($heater == "1")
	{
		$sql2 = "UPDATE  `sql1206633`.`greenhouseSettings` SET  `fanStatus` =  'OFF' , `heaterStatus` =  'ON'";
	} else if ($heater == "0")
	{
		$sql2 = "UPDATE  `sql1206633`.`greenhouseSettings` SET  `fanStatus` =  'OFF' , `heaterStatus` =  'OFF'";
	}
}

if(!mysql_query($sql2,$con)) //$con is mysql connection object
{
     die('Error : ' . mysql_error());
}

if ($auto == "1")
{
	$sql3 = "UPDATE  `sql1206633`.`greenhouseSettings` SET  `auto` =  'ON'";
} else if ($auto == "0")
{
	$sql3 = "UPDATE  `sql1206633`.`greenhouseSettings` SET  `auto` =  'OFF'";
}

if(!mysql_query($sql3,$con)) //$con is mysql connection object
{
     die('Error : ' . mysql_error());
}

?>