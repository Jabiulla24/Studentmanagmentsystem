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
                     
                    
 <h1 align="center">Subjects Details are</h1>
						<table align="center" border="3">
						
						<tr>
						<td>Subject Code</td>
						<td>Faculty ID</td>
						<td>Subject Name</td>
						<td>BRANCH</td>
						<td>SEM</td>
						<td>MAX IA</td>
						<td>MIN IA</td> 
						
						<td>EDIT</td> 
						<td>DELETE</td> 
						</tr>
						<?php
					include('db.php');
					$q2="select * from subjects";
		   			 $r2 = mysql_query($q2);
					$url="";
					while($rs=mysql_fetch_array($r2)){
					 
						$fid=$rs[1];
						echo "<tr>";
						
					    echo "<td>".$rs[0]."</td>";
						
						include('db.php');
					$q3="select * from faculty where fid=$fid";
		   			 $r3 = mysql_query($q3);
					
					while($rs1=mysql_fetch_array($r3)){
					    $fname=$rs1[1];
					    
					}
						echo "<td>".$fname."</td>";
						echo "<td>".$rs[2]."</td>";
						echo "<td>".$rs[3]."</td>";
						echo "<td>".$rs[4]."</td>";
						echo "<td>".$rs[5]."</td>";
						echo "<td>".$rs[6]."</td>";
						
						echo "<td><a href='editsubjects.php?scode=$rs[0]'><input type=button value=edit></a></td>";
						echo "<td><a href='deletesubjects.php?scode=$rs[0]'><input type=button value=Delete></a></td>";
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