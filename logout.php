<?php
   session_start();
   	echo "Name: [".$_SESSION['username']."]";

		unset($_SESSION['username']);
		session_destroy();
		session_unset();
		$_SESSION = array();

?>
<script>
	alert("Sign Out Successfully");
	location.href="index.php";
</script>
<?php 
//}
?>