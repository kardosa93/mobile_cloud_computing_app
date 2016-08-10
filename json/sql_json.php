<?php
$db_hostname="lochnagar.abertay.ac.uk"; //server name
$db_username="sql1206633";  //mysql username.
$db_password="MjWvMmKt";       //password
$db_database="sql1206633";  //database name which you created
$connection=mysqli_connect($db_hostname,$db_username,$db_password,$db_database) or die("Error " . mysqli_error($connection));

//fetch table rows from mysql db
$sql = "select * from prototype";
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

//create an array
$emparray = array();
while($row =mysqli_fetch_assoc($result))
{
    $emparray[] = $row;
}

//write to json file
$fp = fopen('question_data.json', 'w');
fwrite($fp, json_encode($emparray));
fclose($fp);

//close the db connection
mysqli_close($connection);
?>