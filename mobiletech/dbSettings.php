<?php
//display PHP errors
ini_set("display_errors", 1);
error_reporting(E_ALL);

function fanStatus() {

//Connect to the database 
Include("connect_pdo.php");
//read any data from the table with a simple SELECT query
$sql = "SELECT fanStatus FROM greenhouseSettings"; 
 $stmt = $db->query($sql);
 $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
 if ($results) {
  $output = "";
  foreach($results as $row) {
  $output .="<h6>".$row['fanStatus']."</h6>";  
  }
 }

 // return the string of result so that they can be output
 return $output;
}

function fanButton() {

//Connect to the database 
Include("connect_pdo.php");
//read any data from the table with a simple SELECT query
$sql = "SELECT fanStatus FROM greenhouseSettings"; 
 $stmt = $db->query($sql);
 $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
 if ($results) {
  $output = "";
  foreach($results as $row) {
	  if ($row['fanStatus'] == 'ON')
	  {
		$dp = 'OFF';
		$output .="<h6><a href='change.php?func=foff'>Turn ".$dp."</a></h6>";
	  } else
	  {
		$dp = 'ON';
		$output .="<h6><a href='change.php?func=fon'>Turn ".$dp."</a></h6>"; 
	  }  
  }
 }

 // return the string of result so that they can be output
 return $output;
}

function heaterStatus() {

//Connect to the database 
Include("connect_pdo.php");
//read any data from the table with a simple SELECT query
$sql = "SELECT heaterStatus FROM greenhouseSettings"; 
 
 $stmt = $db->query($sql);
 $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
 if ($results) {
  $output = "";
  foreach($results as $row) {
$output .="<h6>".$row['heaterStatus']."</h6>";    
  }
 }

 // return the string of result so that they can be output
 return $output;
}

function heaterButton() {

//Connect to the database 
Include("connect_pdo.php");
//read any data from the table with a simple SELECT query
$sql = "SELECT heaterStatus FROM greenhouseSettings"; 
 $stmt = $db->query($sql);
 $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
 if ($results) {
  $output = "";
  foreach($results as $row) {
	  if ($row['heaterStatus'] == 'ON')
	  {
		$dp = 'OFF';
		$output .="<h6><a href='change.php?func=hoff'>Turn ".$dp."</a></h6>";
	  } else
	  {
		$dp = 'ON';
		$output .="<h6><a href='change.php?func=hon'>Turn ".$dp."</a></h6>"; 
	  }  
  }
 }

 // return the string of result so that they can be output
 return $output;
}

function autoStatus() {

//Connect to the database 
Include("connect_pdo.php");
//read any data from the table with a simple SELECT query
$sql = "SELECT auto FROM greenhouseSettings"; 
 
 $stmt = $db->query($sql);
 $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
 if ($results) {
  $output = "";
  foreach($results as $row) {
$output .="<h6>".$row['auto']."</h6>";    
  }
 }

 // return the string of result so that they can be output
 return $output;
}

function autoButton() {

//Connect to the database 
Include("connect_pdo.php");
//read any data from the table with a simple SELECT query
$sql = "SELECT auto FROM greenhouseSettings"; 
 $stmt = $db->query($sql);
 $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
 if ($results) {
  $output = "";
  foreach($results as $row) {
	  if ($row['auto'] == 'ON')
	  {
		$dp = 'OFF';
		$output .="<h6><a href='change.php?func=aoff'>Turn ".$dp."</a></h6>";
	  } else
	  {
		$dp = 'ON';
		$output .="<h6><a href='change.php?func=aon'>Turn ".$dp."</a></h6>"; 
	  }  
  }
 }

 // return the string of result so that they can be output
 return $output;
}

function cTemp() {

//Connect to the database 
Include("connect_pdo.php");
//read any data from the table with a simple SELECT query
$sql = "SELECT int_temperature FROM greenhouse ORDER BY date_time DESC LIMIT 0,1"; 
 
 $stmt = $db->query($sql);
 $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
 if ($results) {
  $output = "";
  foreach($results as $row) {
$output .="<h6>".$row['int_temperature']."°C</h6>";    
  }
 }

 // return the string of result so that they can be output
 return $output;
}

function cLight() {

//Connect to the database 
Include("connect_pdo.php");
//read any data from the table with a simple SELECT query
$sql = "SELECT illuminance FROM greenhouse ORDER BY date_time DESC LIMIT 0,1"; 
 
 $stmt = $db->query($sql);
 $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
 if ($results) {
  $output = "";
  foreach($results as $row) {
	  if ($row['illuminance'] < 35000)
	  {
		$output .="<h6>Dark</h6>"; 
	  } else
	  {
		$output .="<h6>Bright</h6>";
	  }
  }
 }

 // return the string of result so that they can be output
 return $output;
}

function fanColor() {

//Connect to the database 
Include("connect_pdo.php");
//read any data from the table with a simple SELECT query
$sql = "SELECT fanStatus FROM greenhouseSettings"; 
 $stmt = $db->query($sql);
 $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
 if ($results) {
  $output = "";
  foreach($results as $row) {
	  if ($row['fanStatus'] == 'ON')
	  {
		$output .="<div class='intro2' style='background-color: #179C49;'>";
	  } else
	  {
		$output .="<div class='intro2' style='background-color: red;'>"; 
	  }  
  }
 }

 // return the string of result so that they can be output
 return $output;
}

function heaterColor() {

//Connect to the database 
Include("connect_pdo.php");
//read any data from the table with a simple SELECT query
$sql = "SELECT heaterStatus FROM greenhouseSettings"; 
 $stmt = $db->query($sql);
 $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
 if ($results) {
  $output = "";
  foreach($results as $row) {
	  if ($row['heaterStatus'] == 'ON')
	  {
		$output .="<div class='intro2' style='background-color: #179C49;'>";
	  } else
	  {
		$output .="<div class='intro2' style='background-color: red;'>"; 
	  }  
  }
 }

 // return the string of result so that they can be output
 return $output;
}

function autoColor() {

//Connect to the database 
Include("connect_pdo.php");
//read any data from the table with a simple SELECT query
$sql = "SELECT auto FROM greenhouseSettings"; 
 $stmt = $db->query($sql);
 $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
 if ($results) {
  $output = "";
  foreach($results as $row) {
	  if ($row['auto'] == 'ON')
	  {
		$output .="<div class='intro2' style='background-color: #179C49;'>";
	  } else
	  {
		$output .="<div class='intro2' style='background-color: red;'>"; 
	  }  
  }
 }

 // return the string of result so that they can be output
 return $output;
}

function templow() {
//Connect to the database 
Include("connect_pdo.php");
//read any data from the table with a simple SELECT query
$sql = "SELECT tempLow FROM greenhouseSettings"; 
 
 $stmt = $db->query($sql);
 $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
 if ($results) {
  $output = "";
  foreach($results as $row) {
$output .=$row['tempLow'];    
  }
 }
 // return the string of result so that they can be output
 return $output;
}

function temphigh() {
//Connect to the database 
Include("connect_pdo.php");
//read any data from the table with a simple SELECT query
$sql = "SELECT tempHigh FROM greenhouseSettings"; 
 
 $stmt = $db->query($sql);
 $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
 if ($results) {
  $output = "";
  foreach($results as $row) {
$output .=$row['tempHigh'];    
  }
 }
 // return the string of result so that they can be output
 return $output;
}

/* function setup() {
//Connect to the database 
Include("agent.php");
Include("connect_pdo.php");
//temp max
$sql = "SELECT tempHigh FROM greenhouseSettings"; 
$stmt = $db->query($sql);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
if ($results) {
	$output = "";
	foreach($results as $row) {
	$output .=$row['tempHigh'];
	}
	$ch = curl_init($agent."?max=$output");
	curl_exec($ch);
 }


//temp min
$sql = "SELECT tempLow FROM greenhouseSettings"; 
$stmt = $db->query($sql);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
if ($results) {
	$output = "";
	foreach($results as $row) {
	$output .=$row['tempLow'];    
	}	
	$ch = curl_init($agent."?min=$output");
	curl_exec($ch);
 }


//heater status
$sql = "SELECT heaterStatus FROM greenhouseSettings"; 
$stmt = $db->query($sql);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
if ($results) {
	$output = "";
	foreach($results as $row) {
	$output .=$row['heaterStatus'];    
	}
	if ($output = "OFF"){$ch = curl_init($agent."?heater=0");} 
	else if ($output = "ON"){$ch = curl_init($agent."?heater=1");}
	curl_exec($ch);
 }


//fan status
$sql = "SELECT fanStatus FROM greenhouseSettings"; 
$stmt = $db->query($sql);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
if ($results) {
	$output = "";
	foreach($results as $row) {
	$output .=$row['fanStatus'];    
	}
	if ($output = "OFF"){$ch = curl_init($agent."?fan=0");} 
	else if ($output = "ON"){$ch = curl_init($agent."?fan=1");}
	curl_exec($ch);
 }


//auto
$sql = "SELECT auto FROM greenhouseSettings"; 
$stmt = $db->query($sql);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
if ($results) {
	$output = "";
	foreach($results as $row) {
	$output .=$row['auto'];    
	}
	if ($output = "OFF"){$ch = curl_init($agent."?auto=0");} 
	else if ($output = "ON"){$ch = curl_init($agent."?auto=1");}
	curl_exec($ch);
 }


} /// */

?>