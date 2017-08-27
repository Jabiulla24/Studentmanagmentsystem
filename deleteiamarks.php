<?php

$scode=$_GET['scode'];
	$usn=$_GET['usn'];
	
	$branch=$_GET['branch'];
	$testno=$_GET['testno'];
include("db.php");
$sql = "delete from iamarks where usn='$usn' and branch='$branch' and scode='$scode' and testno='$testno'";
		
		$result=mysql_query($sql) or trigger_error(mysql_error().$sql);
		
		
		if($result){
					?>
<script>
	alert("IA Marks Deleted Successfully ");
	location.href="viewiamarks.php";
</script>
<?php 
			
			}
		else{
			echo "<script type='text/javascript'>alert('Insertion Failed..');</script>";
		}
?>