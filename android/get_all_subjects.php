<?php

/*
 * Following code will list all the products
 */

// array for JSON response
$response = array();
if  ( !empty($_GET["sem"])  ) {
    
    $sem = $_GET['sem'];
  

// include db connect class
require_once __DIR__ . '/db_connect.php';

// connecting to db
$db = new DB_CONNECT();

// get all products from products table
$result = mysql_query("SELECT * FROM subjects where sem=$sem") or die(mysql_error());

// check for empty result
if (mysql_num_rows($result) > 0) {
    // looping through all results
    // products node
    $response["products"] = array();
    
    while ($row = mysql_fetch_array($result)) {
        // temp user array
        $product = array();
        $product["pid"] = $row["scode"];
        $product["name"] = $row["sname"];
        $product["price"] = $row["branch"];
        $product["description"] = $row["sem"];
        $product["created_at"] = $row["max_ia"];
        $product["updated_at"] = $row["min_ia"];



        // push single product into final response array
        array_push($response["products"], $product);
    }
    // success
    $response["success"] = 1;
	 $response["message"] = "products found";
    // echoing JSON response
    echo json_encode($response);
}
 else {
    // no products found
    $response["success"] = 0;
    $response["message"] = "No products found";

    // echo no users JSON
    echo json_encode($response);
}
}
?>
