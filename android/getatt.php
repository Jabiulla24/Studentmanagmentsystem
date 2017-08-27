<?php


$response = array();
if  ( !empty($_GET["usn"]) && !empty($_GET["scode"]) && !empty($_GET["sem"]) ) 
{
    
  $usn = $_GET['usn'];
	$scode=$_GET['scode'];
	$sem=$_GET['sem'];

	
	require_once __DIR__ . '/db_connect.php';

// connecting to db
$db = new DB_CONNECT();

	
	$query = mysql_query("select count(*) from attendance where scode='$scode' && sem='$sem' && usn='$usn'") or die(mysql_error());

if (mysql_num_rows($query) > 0) {
    // looping through all results
    // products node
   
    
    while ($result = mysql_fetch_array($query)) {
        // temp user array
   $totalatt=$result[0];
	 $response["totalattendance"]=$totalatt;

        // push single product into final response array
      
    }
	
	$query2=mysql_query("select count(*) from attendance where scode='$scode' && sem='$sem' && usn='$usn' && status='1' ")or die(mysql_error()) ;
		  
		  while ($result2 = mysql_fetch_array($query2)) {
        // temp user array
   $patt=$result2[0];
$response["presentattendance"]=$patt;

        // push single product into final response array
      
    }
	$avg=($patt/$totalatt)*100;
	$avgnedded=round($avg,2);
	$response["avg"] =$avgnedded ;	   			
    // success
    $response["success"] = 1;
$response["message"] = "Att found";

    // echoing JSON response
    echo json_encode($response);
}
 else {
    // no products found
    $response["success"] = 0;
    $response["message"] = "No Att found";

    // echo no users JSON
    echo json_encode($response);
}
}
?>
					