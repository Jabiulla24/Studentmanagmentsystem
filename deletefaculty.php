<?php

$fid=$_GET['fid'];
include("db.php");
$sql = "delete from faculty where fid='$fid'";
		
		$result=mysql_query($sql) or trigger_error(mysql_error().$sql);
		
		
		if($result){
					?>
<script>
	alert("Faculty Deleted Successfully ");
	location.href="viewfaculty.php";
</script>
<?php 
			
			}
		else{
			echo "<script type='text/javascript'>alert('Insertion Failed..');</script>";
		}
?>