<?php
	session_start();
	
	if (isset($_SESSION['username'])) 
{

	if(isset($_POST['Submit'])){
		include("db.php");
		$usn= $_POST['usn'];
		$user = $_POST['username'];
		$pwd = $_POST['password'];
		$sem=	$_POST['sem'];
		$branch=$_POST['branch'];
		$mobile=$_POST['mobile'];
		
		$_SESSION['username']=$user;
		
		$sql = "insert into student values('$usn',$sem,'$branch','$user','$pwd',$mobile)";
		
		$result=mysql_query($sql) or trigger_error(mysql_error().$sql);
		
		
		if($result){
					?>
<script>
	alert("Student Successfully Added");
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

    <body>

        <!-- Top menu -->
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">Home</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">						
						<li >
							<a href="index.php"><span aria-hidden="true" class="icon_house"></span><br>Home</a>
						</li>
						<li >
							<a href="addstudents.php"><span aria-hidden="true" class="icon_camera"></span><br>Students</a>
						</li>
						<li>
							<a href="addfaculty.php"><span aria-hidden="true" class="icon_comment"></span><br>Faculty</a>
						</li>
						<li>
							<a href="addsubjects.php"><span aria-hidden="true" class="icon_tools"></span><br>Subjects</a>
						</li>
						<li>
							<a href="takeattendance.php"><span aria-hidden="true" class="icon_profile"></span><br>Take Attendance</a>
						</li>
						<li>
							<a href="enteriamarks.php"><span aria-hidden="true" class="icon_mail"></span><br>I A Marks</a>
						</li>
						<li>
							<a href="addnotifications.php"><span aria-hidden="true" class="icon_mail"></span><br>Notifications</a>
						</li>
						<li>
							<a href="logout.php"><span aria-hidden="true" class="icon_mail"></span><br>Logout</a>
						</li>
						
					</ul>
				</div></div>
			</div>
		</nav>
        
        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                  <div class="col-sm-10 col-sm-offset-1 page-title wow fadeIn">
                        <span aria-hidden="true" class="icon_camera"></span>
                      <h1>Add Student Information</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio -->
        <div class="portfolio-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		
						
						<table align="center" >
<form name="complaint" method="post" action="#" onSubmit="return validate()" >
<td>
<table width="100%" border="1" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>

</tr>
<tr>
<td  bgcolor="#FFFFFF">Student  Name</td>
<td >:</td>
<td bgcolor="#FFFFFF"><input name="username" type="text" id="userame"></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">U S N</td>
<td>:</td>
<td bgcolor="#FFFFFF"><input name="usn" type="text" id="usn"></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">SEM</td>
<td>:</td>
<td bgcolor="#FFFFFF"><select name="sem">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
</select></td>
</tr>

<tr>
<td bgcolor="#FFFFFF">Branch</td>
<td>:</td>
<td bgcolor="#FFFFFF"><select name="branch">
  <option value="cs">Computer Science</option>
  <option value="is">Information Science</option>
 
</select></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">Password</td>
<td>:</td>
<td bgcolor="#FFFFFF"><input name="password" type="password" id="password"></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">Mobile No</td>
<td>:</td>
<td bgcolor="#FFFFFF"><input name="mobile" type="text" id="mobile"></td>
</tr>

<tr>
  <td bgcolor="#FFFFFF">&nbsp;</td>
  <td>&nbsp;</td>
<td align="center" valign="middle" bordercolor="#00FF00" bgcolor="#FFFFFF">
<input name="Submit" type="submit" class="style1" value="Add Students" /></td>
</tr>
</table>
</td>
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

        <!-- Footer -->
        <footer>
            <div class="container">
              <div class="row"></div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-sm-7 footer-copyright wow fadeIn">
                        <p>&copy; Devleoped by B V V S Students.</p>
                    </div>
                    <div class="col-sm-5 footer-social wow fadeIn">
                        <a href="#"><span class="social_facebook"></span></a>
                        <a href="#"><span class="social_dribbble"></span></a>
                        <a href="#"><span class="social_twitter"></span></a>
                        <a href="#"><span class="social_pinterest"></span></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Javascript -->
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