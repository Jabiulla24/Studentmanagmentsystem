	<!DOCTYPE html>
<html lang="en">
             		<body>
						
						
						<?php
session_start();
if (isset($_SESSION['users']['username']) ) 
{
include 'facultyheader.php';
}
else
{
include 'header.php';
}
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
						<td>DELETE</td> 
						</tr>
						<?php
					include('db.php');
					$q2="select * from student";
		   			 $r2 = mysql_query($q2);
					$url="";
					while($rs=mysql_fetch_array($r2)){
					 
						
						echo "<tr>";
						
					    echo "<td>".$rs['sname']."</td>";
						echo "<td>".$rs['usn']."</td>";
						echo "<td>".$rs['sem']."</td>";
						echo "<td>".$rs['branch']."</td>";
						echo "<td>".$rs['mobile']."</td>";
						
						echo "<td><a href='editstudents.php?usn=$rs[usn]'><input type=button value=edit></a></td>";
						echo "<td><a href='deletestudents.php?usn=$rs[usn]'><input type=button value=Delete></a></td>";
						echo "</tr>";
				
					}
				    ?>
						
						</table>
						</div>
</div>
<?php
include 'footer.php';

						
						?>
    </body>

</html>