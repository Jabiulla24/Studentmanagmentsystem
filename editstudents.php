	<?php
	$usn=$_GET['usn'];
	if(isset($_POST['Submit'])){
		include("db.php");
		
		$user = $_POST['name'];
		
		$sem=	$_POST['sem'];
		$branch=$_POST['branch'];
		$mobile=$_POST['mobile'];
		
		$sql = "update student set sname='$user',sem='$sem',branch='$branch',mobile='$mobile' where usn='$usn'";
		
		$result=mysql_query($sql) or trigger_error(mysql_error().$sql);
		
		
		if($result){
					?>
<script>
	alert("Student Updated Successfully ");
	location.href="viewstudents.php";
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
						<td>Name</td>
						<td>USN</td>
						<td>SEM</td>
						<td>BRANCH</td>
						<td>MOBILENO</td> 
						<td>EDIT</td> 
						
						</tr>
						<form action="#" method="post">
						<?php
					include('db.php');
					$q2="select * from student where usn='$usn'";
		   			 $r2 = mysql_query($q2);
					$url="";
					while($rs=mysql_fetch_array($r2)){
					 
						
						echo "<tr>";
						
					    echo "<td><input type='text' name='name' value='$rs[sname]'></td>";
						echo "<td>".$rs['usn']."</td>";
						echo "<td><input type='text' name='sem' value='$rs[sem]'></td>";
						echo "<td><input type='text' name='branch' value='$rs[branch]'></td>";
						echo "<td><input type='text' name='mobile' value='$rs[mobile]'></td>";
						
						echo "<td align='center' valign='middle'><input name='Submit' type='submit'  value='Update Student' /></td>";
						
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