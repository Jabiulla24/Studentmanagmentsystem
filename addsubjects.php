<?php
	session_start();
	if (isset($_SESSION['username'])) 
{

	if(isset($_POST['Submit'])){
		include("db.php");
		$subcode=$_POST['scode'];
		$fid=$_POST['fid'];
		$sname = $_POST['sname'];
		$sem = $_POST['sem'];
		$branch=$_POST['branch'];
		$maxia=	$_POST['maxia'];
		$minia=$_POST['minia'];
		
	

			

		
		$sql = "insert into subjects values('$subcode',$fid,'$sname','$branch',$sem,$maxia,$minia)";
		
		$result=mysql_query($sql) or trigger_error(mysql_error().$sql);
		
		
		if($result){
		?>
<script>
	alert("Subject Added Successfully");
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
                      <h1>Add Subject Information</h1>
                    </div>
                </div>
            </div>
        </div>
  <div class="portfolio-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		
						<table align="center" ><caption>Add Subjects Information</caption>
<form name="complaint" method="post" action="#" onSubmit="return validate()" >
<td>
<table width="100%" border="1" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>

</tr>
<tr>
<td  bgcolor="#FFFFFF">Subject  Code</td>
<td >:</td>
<td bgcolor="#FFFFFF"><input name="scode" type="text" id="userame"></td>
</tr>
<tr>


<td  bgcolor="#FFFFFF">Faculty </td>
<td >:</td>

<td >
<select name="fid" >
				    
				    
				    <?php
					include('db.php');
					$q2="select * from faculty";
		   			 $r2 = mysql_query($q2);
					
					while($rs=mysql_fetch_array($r2)){
					    $fid=$rs[fid];
					    echo "<option value=".$rs['fid'].">".$rs['fname']."</option>";
					}
				    ?>
	
			    
				
				    
				</select>
<br/>
</br>
</br>
</td>
</tr>

<td  bgcolor="#FFFFFF">Subject  Name</td>
<td >:</td>
<td bgcolor="#FFFFFF"><input name="sname" type="text" id="userame"></td>
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
<td bgcolor="#FFFFFF">Max I A Marks</td>
<td>:</td>
<td bgcolor="#FFFFFF"><input name="maxia" type="text" id="password"></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">Min I A Marks</td>
<td>:</td>
<td bgcolor="#FFFFFF"><input name="minia" type="text" id="mobile"></td>
</tr>

<tr>
  <td bgcolor="#FFFFFF">&nbsp;</td>
  <td>&nbsp;</td>
<td align="center" valign="middle" bordercolor="#00FF00" bgcolor="#FFFFFF">
<input name="Submit" type="submit" class="style1" value="Add Subject" /></td>
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