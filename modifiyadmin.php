
<?php
session_start();
if (isset($_SESSION['username'])) 
{
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Management System</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:700,400">
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
							<a href="profile.php"><span aria-hidden="true" class="icon_house"></span><br>Home</a>
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
				</div>
			</div>
		</nav>
        
        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                  <div class="col-sm-10 col-sm-offset-1 page-title wow fadeIn">
                                              <h1>Admin Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio -->
        <div class="portfolio-container">
	        <div class="container">
	            <div class="row">
	            	<div class="">
	            		
						<ul class="nav navbar-nav navbar-right">
						<li>
						<a href="viewstudents.php">Modify Student Details</a>
				       </li>
					  <li>
						<a href="viewfaculty.php">Modify Faculty Details</a>
				       </li>
					   <li>
						<a href="viewsubjects.php">Modify Subject Details</a>
				       </li>
					  <li>
						<a href="viewiamarks.php">Modify IA Details</a>
				       </li>
					  <li>
						<a href="viewattendance.php">Modify Attendance Details</a>
				       </li>
					  
					   
						</ul>
						
						
						
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