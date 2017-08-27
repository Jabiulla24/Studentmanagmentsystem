<?php

$usn=$_GET['usn'];
include("db.php");
$sql = "delete from student where usn='$usn'";
		
		$result=mysql_query($sql) or trigger_error(mysql_error().$sql);
		
		
		if($result){
					?>
<script>
	alert("Student Deleted Successfully ");
	location.href="viewstudents.php";
</script>
<?php 
			
			}
		else{
			echo "<script type='text/javascript'>alert('Insertion Failed..');</script>";
		}
?>