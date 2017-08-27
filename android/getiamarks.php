<?php

$response = array();

if  ( !empty($_GET["usn"]) && !empty($_GET["scode"]) && !empty($_GET["branch"]) ) 
{
    
  $usn = $_GET['usn'];
	$scode=$_GET['scode'];
	$branch=$_GET['branch'];

	require_once __DIR__ . '/db_connect.php';

// connecting to db
$db = new DB_CONNECT();

	
	$query = mysql_query("SELECT * FROM iamarks where usn='$usn' and branch='$branch' and scode='$scode'") or die(mysql_error());

if (mysql_num_rows($query) > 0) {
    // looping through all results
    // products node
    $response["marks"] = array();
    
    while ($result = mysql_fetch_array($query)) {
        // temp user array
        $mark = array();
        $mark["usn"] = $result["usn"];
        $mark["branch"] = $result["branch"];
        $mark["scode"] = $result["scode"];
        $mark["pid"] = $result["testno"];
        $mark["name"] = $result["marks"];
        



        // push single product into final response array
        array_push($response["marks"], $mark);
    }
    // success
    $response["success"] = 1;
$response["message"] = "Marks found";

    // echoing JSON response
    echo json_encode($response);
}
 else {
    // no products found
    $response["success"] = 0;
    $response["message"] = "No Marks found";

    // echo no users JSON
    echo json_encode($response);
}
}
?>
				