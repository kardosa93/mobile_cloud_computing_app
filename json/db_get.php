<?php
 
/*
 * Following code will list all the products
 */
 
// array for JSON response
$response = array();
 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
 
// get all products from products table
$result = mysql_query("SELECT date_time, ext_temperature, int_temperature, humidity FROM greenhouse") or die(mysql_error());
 
// check for empty result
if (mysql_num_rows($result) > 0) {
    // looping through all results
    // products node
    $response["greenhouse"] = array();
 
    while ($row = mysql_fetch_array($result)) {
        // temp user array
        $data = array();
		$data["date_time"] = $row["date_time"];
		$data["ext_temperature"] = $row["ext_temperature"];
        $data["int_temperature"] = $row["int_temperature"];
        $data["humidity"] = $row["humidity"];
        
 
        // push single product into final response array
        array_push($response["greenhouse"], $data);
    }
    // success
    $response["success"] = 1;
 
    // echoing JSON response
    echo json_encode($response);
} else {
    // no products found
    $response["success"] = 0;
    $response["message"] = "No data found";
 
    // echo no users JSON
    echo json_encode($response);
}
?>