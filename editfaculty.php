	<?php
	$fid=$_GET['fid'];
	if(isset($_POST['Submit'])){
		include("db.php");
		
		$user = $_POST['name'];
		
		$sem=	$_POST['sem'];
		$branch=$_POST['branch'];
		
		
		$sql = "update faculty set fname='$user',email='$sem',desgn='$branch' where fid='$fid'";
		
		$result=mysql_query($sql) or trigger_error(mysql_error().$sql);
		
		
		if($result){
					?>
<script>
	alert("Faculty Updated Successfully ");
	location.href="viewfaculty.php";
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
						
						<?php
						include 'header.php';
						?>
						<div class="page-title-container">
            <div class="container">
                <div class="row">
                  <div class="col-sm-10 col-sm-offset-1 page-title wow fadeIn">
                        <span aria-hidden="true" class="icon_camera"></span>
                      <h1>View Information</h1>
                    </div>
                </div>
            </div>
        </div>
						<div class="portfolio-container">
	        <div class="container">
                     
                    
 <h1 align="center">Student Details are</h1>
						<table align="center" border="3">
						
						<tr>
						<td>FID</td>
						<td>Name</td>
						<td>Email</td>
						<td>Designation</td>
						
						<td>EDIT</td> 
					
						</tr>
						<form action="#" method="post">
						<?php
					include('db.php');
					$q2="select * from faculty where fid='$fid'";
		   			 $r2 = mysql_query($q2);
					$url="";
					while($rs=mysql_fetch_array($r2)){
					 
						
						echo "<tr>";
						echo "<td>".$rs[0]."</td>";
					    echo "<td><input type='text' name='name' value='$rs[1]'></td>";
						
						echo "<td><input type='text' name='sem' value='$rs[2]'></td>";
						echo "<td><input type='text' name='branch' value='$rs[4]'></td>";
						
						echo "<td align='center' valign='middle'><input name='Submit' type='submit'  value='Update Faculty' /></td>";
						
						echo "</tr>";
				
					}
				    ?>
						</form>
						</table>
						</div>
</div>
<?php
include 'footer.php';

						
						?>
    </body>

</html>