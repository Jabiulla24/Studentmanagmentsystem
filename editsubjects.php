	<?php
	$scode=$_GET['scode'];
	if(isset($_POST['Submit'])){
		include("db.php");
		
		$fid=$_POST['fid'];
		$sname = $_POST['name'];
		$sem = $_POST['sem'];
		$branch=$_POST['branch'];
		$maxia=	$_POST['maxia'];
		$minia=$_POST['minia'];
		
		
		
		$sql = "update subjects set fid='$fid',sname='$sname',branch='$branch',sem='$sem',max_ia='$maxia',min_ia='$minia' where scode='$scode'";
		
		$result=mysql_query($sql) or trigger_error(mysql_error().$sql);
		
		
		if($result){
					?>
<script>
	alert("Subject Updated Successfully ");
	location.href="viewsubjects.php";
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
						<td>Subject Code</td>
						<td>Faculty Name</td>
						<td>Subject Name</td>
						<td>Branch</td>
						<td>Sem</td>
						<td>Max IA</td>
						<td>Min IA</td>
						
						<td>EDIT</td> 
					
						</tr>
						<form action="#" method="post">
						<?php
					include('db.php');
					$q2="select * from subjects where scode='$scode'";
		   			 $r2 = mysql_query($q2);
					$url="";
					while($rs=mysql_fetch_array($r2)){
					 
						
						echo "<tr>";
						echo "<td>".$rs[0]."</td>";
					   // echo "<td><input type='text' name='name' value='$rs[1]'></td>";
								echo "<td><select name='fid' >";
				    
				    
				    
					include('db.php');
					$q33="select * from faculty";
		   			 $r33 = mysql_query($q33);
					
					while($rs3=mysql_fetch_array($r33))
					{
					    $fid=$rs3[fid];
					    echo "<option value=".$rs3['fid'].">".$rs3['fname']."</option>";
					}
					  
				echo "</select></td>";
				
						echo "<td><input type='text' name='name' value='$rs[2]'></td>";
				
						echo "<td><input type='text' name='branch' value='$rs[3]'></td>";
						echo "<td><input type='text' name='sem' value='$rs[4]'></td>";
						echo "<td><input type='text' name='maxia' value='$rs[5]'></td>";
						echo "<td><input type='text' name='minia' value='$rs[6]'></td>";
						echo "<td align='center' valign='middle'><input name='Submit' type='submit'  value='Update Subject' /></td>";
						
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