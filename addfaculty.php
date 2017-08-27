<?php
	session_start();
	if (isset($_SESSION['username'])) 
{

	if(isset($_POST['Submit'])){
		include("db.php");
		
		$user = $_POST['username'];
		$pwd = $_POST['password'];
		$email=	$_POST['emailid'];
		$designation=$_POST['designation'];
		
		
		$_SESSION['username']=$user;
		
		$sql = "insert into faculty(fname,email,pass,desgn) values('$user','$email','$pwd','$designation')";
		
		$result=mysql_query($sql) or trigger_error(mysql_error().$sql);
		
		
		if($result){
		
						?>
<script>
	alert("Faculty Successfully Added");
	location.href="profile.php";
</script>
<?php 
			
			}
		else{
			echo "<script type='text/javascript'>alert('Insertion Failed..');</script>";
		}
		
	}	
?>

<!DOCTYPE html>
<html lang="en">
     <body>
<head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Management System</title>

        <!-- CSS -->
       
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/elegant-font/code/style.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/flexslider/flexslider.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>
             		
						
						<?php
						include 'header.php';
						?>
						 <div class="page-title-container">
            <div class="container">
                <div class="row">
                  <div class="col-sm-10 col-sm-offset-1 page-title wow fadeIn">
                        <span aria-hidden="true" class="icon_camera"></span>
                      <h1>Add Faculty Information</h1>
                    </div>
                </div>
            </div>
        </div>
  <div class="portfolio-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		
						
						<table align="center" ><caption>Add Faculty Information</caption>
<form name="complaint" method="post" action="#" onSubmit="return validate()" >
<td>
<table width="100%" border="1" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>

</tr>
<tr>
<td  bgcolor="#FFFFFF">Faculty  Name</td>
<td >:</td>
<td bgcolor="#FFFFFF"><input name="username" type="text" id="userame"></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">Email Id</td>
<td>:</td>
<td bgcolor="#FFFFFF"><input name="emailid" type="text" id="usn"></td>
</tr>

<tr>
<td bgcolor="#FFFFFF">Password</td>
<td>:</td>
<td bgcolor="#FFFFFF"><input name="password" type="password" id="password"></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">Designation</td>
<td>:</td>
<td bgcolor="#FFFFFF"><input name="designation" type="text" id="mobile"></td>
</tr>

<tr>
  <td bgcolor="#FFFFFF">&nbsp;</td>
  <td>&nbsp;</td>
<td align="center" valign="middle" bordercolor="#00FF00" bgcolor="#FFFFFF">
<input name="Submit" type="submit" class="style1" value="Add Faculty" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table>


	</div>
	            </div>
<?php
include 'footer.php';

						
?>
						
    </body>

</html>
<?php
}
else
{
header('Location:adminlogin.php');
}
?>