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

        
						<?php
						include 'header.php';
						?>
        
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
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		
						
						<p>
						A  student management systemis a management information system for education establishments to manage student data. Student information systems provide capabilities for registering students in courses, documenting grading, transcripts, results of student tests and other assessment scores, building student schedules, tracking student attendance, and managing many other student-related data needs in a school. A SIS should not be confused with a learning management system or virtual learning environment, where course materials, assignments and assessment tests can be published electronically.
						<p>
           		  
						
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