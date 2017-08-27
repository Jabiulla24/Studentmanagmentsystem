<?php
	session_start();
	$icount=0;
	$jcount=0;
	$nextname=null;
	$nextstatus=null;
	$date=date("Y/m/d");
	
	if (isset($_SESSION['users']['username'])) 
	
{
		$fid=$_SESSION['users']['fid'];

	
	
	$scode=$_GET['scode'];
	echo $scode;
   $semnedded=$_GET['sem'];
   echo "Semis\n".$semnedded;
   $branch=$_GET['branch'];
				
			
			
			if(isset($_POST['Submit']))
			{
				include("db.php");
			$usn=null;
			$att = $_POST['status'];
			$sname = $_POST['studentname'];
		$sizename=sizeof($sname);
			$sizeatt=sizeof($att);
		
		//echo $sizename;
		//echo $sizestat;
		foreach ($att as $stat)
		{
		//echo $stat."<br />";
			$jcount++;
			foreach ($sname as $studentname)
			{
		//echo $studentname."<br />";
		$icount++;
		$name = current($sname); 
		$status=current($att);
			if ((!empty($name))&& (!empty($status)))
			{
			if (($usn!=  $nextname) || ($status!=  $nextstatus))
		{
		//
		//echo '<br/>firstUSN->'.$name;
		//echo '<br/>firstStat->'.$status;
		$sql = "insert into attendance values('$name',$semnedded,'$scode','$date',$status)";
		$result=mysql_query($sql) or trigger_error(mysql_error().$sql);
		//echo 'i:</br>'.$icount;
		//echo  'j:</br>'.$jcount;
		if($result)
			{
		?>
	<script>
	alert("Attendance Taken Successfully");
	location.href="facultyprofile.php";
	</script>
	<?php 
			}
		else
			{
			echo "<script type='text/javascript'>alert('Attendance Failed may be u taken it already..');</script>";
			}
		
 			}
					
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
                      <h1>Select Attendance</h1>
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
<td>Status</td>

</tr>
<tr>

<td bgcolor="#FFFFFF"> <?php
					include('db.php');
					$q2="select * from student where branch='$branch'";
		   			 $r2 = mysql_query($q2);
					
					while($rs=mysql_fetch_array($r2)){
					 
						
						echo "<tr>";
						
					    echo "<td>".$rs['sname']."<input type ='text' name='studentname[]' value=".$rs['usn']." readonly='readonly'</td>";
						echo "<td><select name='status[]'><option value='1'>Present</option><option value='2'>Absent</option></td></br>";
						echo "</tr>";
				
					}
				    ?>
					
					
					</td>
</tr>


<tr>
  
  <td>&nbsp;</td>
<td align="center" valign="middle" bordercolor="#00FF00" bgcolor="#FFFFFF">
<input name="Submit" type="submit" class="style1" value="Take Attendance" /></td>
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
<?php
}
?>