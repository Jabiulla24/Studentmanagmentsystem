<?php
	session_start();
	

	$nextname=null;
	$nextstatus=null;
		
	$scode=$_GET['scode'];
	echo $scode;
   $semnedded=$_GET['sem'];
   echo "Semis\n".$semnedded;
	$branch=$_GET['branch'];
	
	
	if(isset($_POST['Submit'])){
		include("db.php");
	
	$att = $_POST['ia'];
	$sname = $_POST['studentname'];
	
		
		foreach ($att as $stat){
			
		
		
		foreach ($sname as $studentname){
		
		$name = current($sname); 
		$status=current($att);
		if ((!empty($name))&& (!empty($status)))
		{
		
		
				//	if ($name!= $nextname) 
				//{
		
		echo '<br/>firstUSN->'.$name;
		echo '<br/>firstStat->'.$status;
		$sql = "insert into iamarks values('$name','$branch','$scode',1,$status)";
		$result=mysql_query($sql) or trigger_error(mysql_error().$sql);
		//echo 'i:</br>'.$icount;
		//echo  'j:</br>'.$jcount;
		if($result)
		{
		?>
	<script>
	alert("IA  Successfully");
	location.href="facultyprofile.php";
	</script>
	<?php 
		}
		else
		{
			echo "<script type='text/javascript'>alert('Attendance Failed may be u taken it already..');</script>";
		}
		
		
 	//}
					
					
		$name=next($sname);
		
		$status = next($att);
		$nextname=$name;
		$nextstatus=$status;
			}
				
		
				}
		
	
		}
		
	}	
	if(isset($_POST['Submittwo'])){
		include("db.php");
	
	$att = $_POST['ia2'];
	$sname = $_POST['studentname'];
	
		
		foreach ($att as $stat){
			
		
		
		foreach ($sname as $studentname){
		
		$name = current($sname); 
		$status=current($att);
		if ((!empty($name))&& (!empty($status)))
		{
		
		
				//	if ($name!= $nextname) 
				//{
		
		echo '<br/>firstUSN->'.$name;
		echo '<br/>firstStat->'.$status;
		$sql = "insert into iamarks values('$name','$branch','$scode',2,$status)";
		$result=mysql_query($sql) or trigger_error(mysql_error().$sql);
		//echo 'i:</br>'.$icount;
		//echo  'j:</br>'.$jcount;
		if($result)
		{
		?>
	<script>
	alert("IA  Successfully");
	location.href="facultyprofile.php";
	</script>
	<?php 
		}
		else
		{
			echo "<script type='text/javascript'>alert('Attendance Failed may be u taken it already..');</script>";
		}
		
		
 	//}
					
					
		$name=next($sname);
		
		$status = next($att);
		$nextname=$name;
		$nextstatus=$status;
			}
				
		
				}
		
	
		}
		
	}	
	if(isset($_POST['Submitthree'])){
		include("db.php");
	
	$att = $_POST['ia3'];
	$sname = $_POST['studentname'];
	
		
		foreach ($att as $stat){
			
		
		
		foreach ($sname as $studentname){
		
		$name = current($sname); 
		$status=current($att);
		if ((!empty($name))&& (!empty($status)))
		{
		
		
				//	if ($name!= $nextname) 
				//{
		
		echo '<br/>firstUSN->'.$name;
		echo '<br/>firstStat->'.$status;
		$sql = "insert into iamarks values('$name','$branch','$scode',3,$status)";
		$result=mysql_query($sql) or trigger_error(mysql_error().$sql);
		//echo 'i:</br>'.$icount;
		//echo  'j:</br>'.$jcount;
		if($result)
		{
		?>
	<script>
	alert("IA  Successfully");
	location.href="facultyprofile.php";
	</script>
	<?php 
		}
		else
		{
			echo "<script type='text/javascript'>alert('Attendance Failed may be u taken it already..');</script>";
		}
		
		
 	//}
					
					
		$name=next($sname);
		
		$status = next($att);
		$nextname=$name;
		$nextstatus=$status;
			}
				
		
				}
		
	
		}
		
	}
	if(isset($_POST['Submitfour'])){
		include("db.php");
	
	$att = $_POST['ia4'];
	$sname = $_POST['studentname'];
	
		
		foreach ($att as $stat){
			
		
		
		foreach ($sname as $studentname){
		
		$name = current($sname); 
		$status=current($att);
		if ((!empty($name))&& (!empty($status)))
		{
		
		
				//	if ($name!= $nextname) 
				//{
		
		echo '<br/>firstUSN->'.$name;
		echo '<br/>firstStat->'.$status;
		$sql = "insert into iamarks values('$name','$branch','$scode',4,$status)";
		$result=mysql_query($sql) or trigger_error(mysql_error().$sql);
		//echo 'i:</br>'.$icount;
		//echo  'j:</br>'.$jcount;
		if($result)
		{
		?>
	<script>
	alert("IA  Successfully");
	location.href="facultyprofile.php";
	</script>
	<?php 
		}
		else
		{
			echo "<script type='text/javascript'>alert('Attendance Failed may be u taken it already..');</script>";
		}
		
		
 	//}
					
					
		$name=next($sname);
		
		$status = next($att);
		$nextname=$name;
		$nextstatus=$status;
			}
				
		
				}
		
	
		}
		
	}
	if(isset($_POST['Submitfive'])){
		include("db.php");
	
	$att = $_POST['ia5'];
	$sname = $_POST['studentname'];
	
		
		foreach ($att as $stat){
			
		
		
		foreach ($sname as $studentname){
		
		$name = current($sname); 
		$status=current($att);
		if ((!empty($name))&& (!empty($status)))
		{
		
		
				//	if ($name!= $nextname) 
				//{
		
		echo '<br/>firstUSN->'.$name;
		echo '<br/>firstStat->'.$status;
		$sql = "insert into iamarks values('$name','$branch','$scode',5,$status)";
		$result=mysql_query($sql) or trigger_error(mysql_error().$sql);
		//echo 'i:</br>'.$icount;
		//echo  'j:</br>'.$jcount;
		if($result)
		{
		?>
	<script>
	alert("IA  Successfully");
	location.href="facultyprofile.php";
	</script>
	<?php 
		}
		else
		{
			echo "<script type='text/javascript'>alert('Attendance Failed may be u taken it already..');</script>";
		}
		
		
 	//}
					
					
		$name=next($sname);
		
		$status = next($att);
		$nextname=$name;
		$nextstatus=$status;
			}
				
		
				}
		
	
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
                      <h1>Enter I A Marks ---  Developed</h1>
                    </div>
                </div>
            </div>
        </div>
  <div class="portfolio-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
						
						<table align="center" >
<form name="complaint" method="post" action="#" onSubmit="return validate()" >
<td>
<table width="100%" border="1" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>

</tr>

<tr>
<td  bgcolor="#FFFFFF">Student  Name</td>
<td>I A 1 Marks</td>
<td>I A 2 Marks</td>
<td>I A 3 Marks</td>
<td>I A 4 Marks</td>
<td> Special IA/Assigment</td>

</tr>
<tr>

<td bgcolor="#FFFFFF"> <?php
					include('db.php');
					$q2="select * from student where branch='$branch'";
		   			 $r2 = mysql_query($q2);
					
					while($rs=mysql_fetch_array($r2)){
					 
						
						echo "<tr>";
						
					    echo "<td>".$rs['sname']."<input type ='text' name='studentname[]' value=".$rs['usn']." readonly='readonly'</td>";
						echo "<td><input type='text' name='ia[]' /td></br>";
						echo "<td><input type='text' name='ia2[]' /td></br>";
						echo "<td><input type='text' name='ia3[]' /td></br>";
						echo "<td><input type='text' name='ia4[]' /td></br>";
						echo "<td><input type='text' name='ia5[]' /td></br>";
						echo "</tr>";
				
					}
				    ?>
					
					
					</td>
</tr>


<tr>
  
  <td>&nbsp;</td>
<td align="center" valign="middle" bordercolor="#00FF00" bgcolor="#FFFFFF">
<input name="Submit" type="submit" class="style1" value="Update I A 1 Marks" /></td>
<td align="center" valign="middle" bordercolor="#00FF00" bgcolor="#FFFFFF">
<input name="Submittwo" type="submit" class="style1" value="Update I A 2 Marks" /></td>
<td align="center" valign="middle" bordercolor="#00FF00" bgcolor="#FFFFFF">
<input name="Submitfour" type="submit" class="style1" value="Update I A 3 Marks" /></td>
<td align="center" valign="middle" bordercolor="#00FF00" bgcolor="#FFFFFF">
<input name="Submitfive" type="submit" class="style1" value="Update I A 3 Marks" /></td>
<td align="center" valign="middle" bordercolor="#00FF00" bgcolor="#FFFFFF">
<input name="Submitthree" type="submit" class="style1" value="Update I A 3 Marks" /></td>



</tr>
</table>
</td>
</form>
</tr>
</table>
</div>
</div>
    </body>
	<?php
	include('footer.php');
	?>

</html>
