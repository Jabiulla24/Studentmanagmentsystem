<?php

$scode=$_GET['scode'];
include("db.php");
$sql = "delete from subjects where scode='$scode'";
		
		$result=mysql_query($sql) or trigger_error(mysql_error().$sql);
		
		
		if($result){
					?>
<script>
	alert("Subjec Deleted Successfully ");
	location.href="viewsubjects.php";
</script>
<?php 
			
			}
		else{
			echo "<script type='text/javascript'>alert('Insertion Failed..');</script>";
		}
?>