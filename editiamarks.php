	<?php
	$scode=$_GET['scode'];
	$usn=$_GET['usn'];
	$branch=$_GET['branch'];
	$testno=$_GET['testno'];
	if(isset($_POST['Submit'])){
		include("db.php");
		
		$marks=$_POST['marks'];
	
		
		
		
		$sql = "update iamarks set marks='$marks' where usn='$usn' and branch='$branch' and scode='$scode' and testno='$testno'";
		
		$result=mysql_query($sql) or trigger_error(mysql_error().$sql);
		
		
		if($result){
					?>
<script>
	alert("I A Updated Successfully ");
	location.href="viewiamarks.php";
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
						<td>USN</td>
						<td>SEM</td>
						<td>Subject Code</td>
						<td>Test No</td>
						<td>Marks</td>
						
						<td>EDIT</td> 
					
						</tr>
						<form action="#" method="post">
						<?php
					include('db.php');
					$q2="select * from iamarks where usn='$usn' and branch='$branch' and scode='$scode' and testno='$testno'";
		   			 $r2 = mysql_query($q2);
					$url="";
					while($rs=mysql_fetch_array($r2)){
					 
						
						echo "<tr>";
						echo "<td>".$rs[0]."</td>";
						echo "<td>".$rs[1]."</td>";
				
						echo "<td>".$rs[2]."</td>";
					
					   echo "<td>".$rs[3]."</td>";
					echo "<td><input type='text' name='marks' value='$rs[4]'></td>";	
				    
				    
					
					 
						
		
						echo "<td align='center' valign='middle'><input name='Submit' type='submit'  value='Update IA Marks' /></td>";
						
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