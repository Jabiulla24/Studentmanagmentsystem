<?php
	session_start();
	if (isset($_SESSION['users']['username'])) 
	
{
$fid=$_SESSION['users']['fid'];

	
	if (isset($_POST['Submitone'])){
	
	
	
	$scode=$_POST['subject'];
	echo $scode;
	include("db.php");

	$sem="select * from subjects where scode='$scode' ";
		   			 $semres = mysql_query($sem);
					while($semfs=mysql_fetch_array($semres)){
				
					$semnedded=$semfs[4];
					$branch=$semfs[3];
					echo "Semis\n".$semnedded;
					header('Location:dispalyie.php?scode='.$scode.'&sem='.$semnedded.'&branch='.$branch.'');
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
        <title>Take Attendance</title>

        <!-- CSS -->
      </head>       		
					<?php 
					include('facultyheader.php');	
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
					<form name="complaint" method="post" action="#" onSubmit="return validate()" >

<table width="100%" border="1"  bgcolor="#FFFFFF">


<tr>
<td  bgcolor="#FFFFFF">Select Subjects</td>
</tr>
<tr>
<td>
<?php
					include('db.php');
					$faq="select * from subjects where fid= $fid";
		   			 $faq2 = mysql_query($faq);
					echo "<select name='subject'>";
					while($fs=mysql_fetch_array($faq2)){
					echo  "<option value=".$fs['scode'].">".$fs['sname']."</option>"; 
					
							
					
				
					}
					echo "<select>";
				    ?>
					</td>
					
					
		
</tr>


<tr>
  

<td align="center" valign="middle" bordercolor="#00FF00" bgcolor="#FFFFFF">
<input name="Submitone" type="submit" class="style1" value="Select Subject" /></td>
</tr>
</table>
</td>
</form>
	
</div>
</div>
    </body>
	<?php
	include('footer.php');
	?>

</html>
<?php
}
else
{
header('Location:facultylogin.php');
}
?>