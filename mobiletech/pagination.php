<?php
$conn = mysql_connect('lochnagar.abertay.ac.uk','sql1206633','MjWvMmKt') or trigger_error("SQL", E_USER_ERROR);
$db = mysql_select_db('sql1206633',$conn) or trigger_error("SQL", E_USER_ERROR);

$sql = "SELECT count(date_time) FROM greenhouse";
$result = mysql_query($sql, $conn) or trigger_error("SQL", E_USER_ERROR);
$r = mysql_fetch_row($result);
$numrows = $r[0];
echo "<div class='services'><h5>";
echo "<div class='services'><h5>Number of records: ". $numrows;
echo "</h5></div><br />";

// number of rows to show per page
$rowsperpage = 6;
// find out total pages
$totalpages = ceil($numrows / $rowsperpage);

// get the current page or set a default
if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
   // cast var as int
   $currentpage = (int) $_GET['currentpage'];
} else {
   // default page num
   $currentpage = 1;
} // end if
 
 // if current page is greater than total pages...
if ($currentpage > $totalpages) {
   // set current page to last page
   $currentpage = $totalpages;
} // end if

// if current page is less than first page...
if ($currentpage < 1) {
   // set current page to first page
   $currentpage = 1;
} // end if

// the offset of the list, based on current page 
$offset = ($currentpage - 1) * $rowsperpage;

// get the info from the db 
$sql = "SELECT date_time, ext_temperature, int_temperature, illuminance FROM greenhouse ORDER BY date_time DESC LIMIT $offset, $rowsperpage";
$result = mysql_query($sql, $conn) or trigger_error("SQL", E_USER_ERROR);

// while there are rows to be fetched...
while ($row = mysql_fetch_assoc($result)) {
   // echo data
	echo "<tr>";
	echo "<td>".$row['date_time']."</td>";
	echo "<td>".$row['ext_temperature']." °C</td>";
	echo "<td>".$row['int_temperature']." °C</td>";
	echo "<td>".$row['illuminance']." lux</td>";
	echo "</tr>";

} // end while

/******  build the pagination links ******/
// range of num links to show
$range = 3;
echo "<div class='pagination'>";
// if not on page 1, don't show back links
if ($currentpage > 1) {
   // show << link to go back to page 1
   echo " <a class='link1' href='{$_SERVER['PHP_SELF']}?currentpage=1'><<</a> ";
   // get previous page num
   $prevpage = $currentpage - 1;
   // show < link to go back to 1 page
   echo " <a class='link2' href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><</a> ";
} // end if 

// loop to show links to range of pages around current page
for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
   // if it's a valid page number...
   if (($x > 0) && ($x <= $totalpages)) {
      // if we're on current page...
      if ($x == $currentpage) {
         // 'highlight' it but don't make a link
         echo " [<b>$x</b>] ";
      // if not current page...
      } else {
         // make it a link
         echo " <a class='link3' href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a> ";
      } // end else
   } // end if 
} // end for
                 
// if not on last page, show forward and last page links        
if ($currentpage != $totalpages) {
   // get next page
   $nextpage = $currentpage + 1;
    // echo forward link for next page 
   echo " <a class='link4' href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'>></a> ";
   // echo forward link for lastpage
   echo " <a class='link5' href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>>></a> ";
} // end if
echo "</div>";
/****** end build pagination links ******/
?> 