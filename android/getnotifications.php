<?php

$response = array();



	require_once __DIR__ . '/db_connect.php';

// connecting to db
$db = new DB_CONNECT();

	
	$query = mysql_query("SELECT * FROM notification") or die(mysql_error());

if (mysql_num_rows($query) > 0) {
    // looping through all results
    // products node
    $response["marks"] = array();
    
    while ($result = mysql_fetch_array($query)) {
        // temp user array
        $mark = array();
        $mark["n_id"] = $result["n_id"];
        $mark["date"] = $result["date"];
        $mark["description"] = $result["description"];
  
        



        // push single product into final response array
        array_push($response["marks"], $mark);
    }
    // success
    $response["success"] = 1;
$response["message"] = "Notifications found";

    // echoing JSON response
    echo json_encode($response);
}
 else {
    // no products found
    $response["success"] = 0;
    $response["message"] = "No Notifications found";

    // echo no users JSON
    echo json_encode($response);
}

?>
				