<?php
	session_start();
	if (isset($_SESSION['username'])) 
{
	$date=date("Y/m/d");
	if(isset($_POST['Submit'])){
		include("db.php");
		$not=$_POST['notification'];
		

			

		
		$sql = "insert into notification values(null,'$date','$not')";
		
		$result=mysql_query($sql) or trigger_error(mysql_error().$sql);
		
		
		if($result){
		?>
<script>
	alert("NOtification Added Successfully");
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
                      <h1>Add Notification</h1>
                    </div>
                </div>
            </div>
        </div>
  <div class="portfolio-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		
						<table align="center" >
<form name="complaint" method="post" action="#" onSubmit="return validate()" >
<td>
<table  border="1"  bgcolor="#FFFFFF" align="center">
<tr>

</tr>
<tr>
<td  bgcolor="#FFFFFF">Notifications</td>
<td >:</td>
<td bgcolor="#FFFFFF"><input name="notification" type="textarea" id="userame"></td>
</tr>
<tr>
  <td bgcolor="#FFFFFF">&nbsp;</td>
  <td>&nbsp;</td>
<td align="center" valign="middle" bordercolor="#00FF00" bgcolor="#FFFFFF">
<input name="Submit" type="submit" class="style1" value="Add Notification" /></td>
</tr>


</form>
</tr>
</table>


</div>
</div>
<div class="row">
            	  <div class="col-sm-12 portfolio-masonry"></div>
	            </div>
	        </div>
        </div>
        
        <!-- Call To Action -->
        <div class="call-to-action-container">
        	<div class="container">
              <div class="row"></div>
	        </div>
        </div>
<?php
include 'footer.php';

						
						?>
						 <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/flexslider/jquery.flexslider-min.js"></script>
        <script src="assets/js/jflickrfeed.min.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>

</html>
<?php
}
else
{
header('Location:adminlogin.php');
}
?>