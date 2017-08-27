<?php
	session_start();
	if(isset($_POST['Submit'])){
		include("db.php");
		$user = $_POST['username'];
		$pwd = $_POST['password'];
		$_SESSION['users']=array();
		$_SESSION['users']['username']=$user;
		$sql = "SELECT * FROM faculty WHERE email = '".$user."' AND pass = '".$pwd."'";
		
		$result=mysql_query($sql) or trigger_error(mysql_error().$sql);
		while($rs=mysql_fetch_array($result)){
					 
		$fid=$rs[0];
		}
		echo "V".$fid;
		
		$_SESSION['users']['fid']=$fid;
			echo "the value is".$_SESSION['users']['fid'];
		$count=mysql_num_rows($result);
		
		if($count==1){
		
			
				header('Location:facultyprofile.php');
			}
		else{
			echo "<script type='text/javascript'>alert('Wrong User name and password..');</script>";
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

       

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
<script type="text/javascript">
	function validate(){
	 //window.location.assign("member.php");
		var fno = document.forms["complaint"]["username"].value;
		var fn= document.forms["complaint"]["password"].value;
		if(fno=="" || fn==""){
			alert("You have missed some field ...!");
			return false;
		}
	}
</script>
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
						<li>
							<a href="index.php"><span aria-hidden="true" class="icon_house"></span><br>Home</a>
						</li>
						<li class="active">
							<a href="facultylogin.php"><span aria-hidden="true" class="icon_camera"></span><br>Login</a>
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
                        <span aria-hidden="true" class="icon_camera"></span>
                      <h1>Login</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio -->
        <div class="portfolio-container" align="center">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		
		
<table align="center" ><caption align="center">Please Login</caption>
<form name="complaint" method="post" action="#" onSubmit="return validate()" >
<td>
<table width="100%" border="1" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<th colspan="3" bgcolor="#FFFFFF"><h1 class="style1">Faculty Login </h1></th>
</tr>
<tr>
<td  bgcolor="#FFFFFF">Faculty Email ID</td>
<td width="4">:</td>
<td  bgcolor="#FFFFFF"><input name="username" type="text" id="username"></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">Password</td>
<td width="4">:</td>
<td bgcolor="#FFFFFF"><input name="password" type="password" id="password"></td>
</tr>
<tr>
  <td bgcolor="#FFFFFF">&nbsp;</td>
  <td>&nbsp;</td>
<td align="center" valign="middle" bordercolor="#00FF00" bgcolor="#FFFFFF">
<input name="Submit" type="submit" class="style1" value="Login" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</div>

</div>
						
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