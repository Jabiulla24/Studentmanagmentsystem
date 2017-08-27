<?php

$scode=$_GET['scode'];
	$usn=$_GET['usn'];
	$sem=$_GET['sem'];
	$date=$_GET['date'];
include("db.php");
$sql = "delete from attendance where usn='$usn' and sem='$sem' and scode='$scode' and date='$date'";
		
		$result=mysql_query($sql) or trigger_error(mysql_error().$sql);
		
		
		if($result){
					?>
<script>
	alert("Attendance Deleted Successfully ");
	location.href="viewattendance.php";
</script>
<?php 
			
			}
		else{
			echo "<script type='text/javascript'>alert('Insertion Failed..');</script>";
		}
?>