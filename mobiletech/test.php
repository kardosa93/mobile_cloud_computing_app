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
//$hum = $data['hum'];

echo "random";
echo $int; 

//insert values into mysql database
$sql="INSERT INTO greenhouse (ext_temperature, int_temperature) 
VALUES ('$ext', '$int')";

if(!mysql_query($sql,$con)) //$con is mysql connection object
{
     die('Error : ' . mysql_error());
}

?>