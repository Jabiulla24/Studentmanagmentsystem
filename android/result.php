<?php


$response = array();


$res1='null';
$res2='null';
if  (!empty($_POST["name"]) && !empty($_POST["password"]) ) {

 $name = $_POST['name'];
    $password = $_POST['password'];

   require_once __DIR__ . '/db_connect.php';

    // connecting to db
    $db = new DB_CONNECT();

  $result1= mysql_query("select * from stations where stationname='$name' ");
 
						while ($row1 = mysql_fetch_array($result1)) {
    					$res1=$row1['routeid'];
							}
						
						
	$result2= mysql_query("select * from stations where stationname='$password'");					
						while ($row2 = mysql_fetch_array($result2)) {
    					$res2=$row2['routeid'];
			
					
					
			}
			
						if ($res1 == $res2)
						{
						$result3 = mysql_query("select * from busroutes where routeid='$res1'");
						
						while ($row3 = mysql_fetch_array($result3)) {
    					$res3=$row3['busno'];
						 $response["success"] = 1;
 						$response["message"] = "Search successfully.";

							
        	
					$response["username"]=$res3;
			
        // echoing JSON response
        echo json_encode($response);
						}
						}
						else		
						{
						$response["success"] = 0;
							$response["username"]="Sorry Try Again";
						 $response["message"] = "Search Failed.";
        
        // echoing JSON response
        echo json_encode($response);
						}



 
}
 else {
 $response["success"] = 2;
  $response["message"] = "Required field(s) is missing";

    // echoing JSON response
    echo json_encode($response);

}

?>

