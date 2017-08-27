<?php
	session_start();
	function sendsms($number,$message)
{

	// Authorisation details.
	$username = "jabiulla24@gmail.com";
	$hash = "37f2081bac13b640160358cb99cdfc622bae51024caff6823f184c8c7b7945d3";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $number; // A single number or a comma-seperated list of numbers
	$message = $message;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);



}

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
		
		include("db.php");
		$q22="SELECT * FROM student where usn='$name' ";
		   			 $r22 = mysql_query($q22);
					
					while($res=mysql_fetch_array($r22)){
					 $number=$res[5];
					 echo $number;
					 $message="Your IA MArks is shortage test name is:".$status;
					 sendsms($number,$message);
					 }
						
		/*$sql = "insert into iamarks values('$name','$scode',1,$status)";
		$result=mysql_query($sql) or trigger_error(mysql_error().$sql);
		//echo 'i:</br>'.$icount;
		//echo  'j:</br>'.$jcount;
		if($result)
		{
		?>
	<script>
	alert("IA  Successfully");
	location.href="profile.php";
	</script>
	<?php 
		}
		else
		{
			echo "<script type='text/javascript'>alert('Attendance Failed may be u taken it already..');</script>";
		}
		
		
 	//}
			*/		
					
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
				<?php
				echo "<p>Click Below For Getting All Student Details</p>";
				echo "<ul class='nav navbar-nav navbar-right'>";
						
				echo "<li><a href='http://localhost/ealerts/dispalyallinternals.php?scode=$scode&sem=$semnedded&branch=$branch&testno=1'>Click For 1st IA MARKS</a><li>";
?>
<?php
				echo "<li><a href='http://localhost/ealerts/dispalyallinternals.php?scode=$scode&sem=$semnedded&branch=$branch&testno=2'>Click For 2nd IA MARKS</a><li>";
?>
<?php
				echo "<li><a href='http://localhost/ealerts/dispalyallinternals.php?scode=$scode&sem=$semnedded&branch=$branch&testno=3'>Click For  3rd IA MARKS</a><li>";
?>
<?php
				echo "<li><a href='http://localhost/ealerts/dispalyallinternals.php?scode=$scode&sem=$semnedded&branch=$branch&testno=4'>Click For  4th IA MARKS</a><li>";
?>
<?php
				echo "<li><a href='http://localhost/ealerts/dispalyallinternals.php?scode=$scode&sem=$semnedded&branch=$branch&testno=5'>Click For  5th IA MARKS</a><li>";
				echo "</ul>";
?>
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
						<p align="center"> Students Total MarksBelow 20 from IA 1 to 5</p>
						<table align="center" >
<form name="complaint" method="post" action="#" onSubmit="return validate()" >
<td>
<table width="100%" border="1" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>

</tr>

<tr>
<td  bgcolor="#FFFFFF">Student  Name</td>
<td>Total Marks</td>



</tr>
<tr>

<td bgcolor="#FFFFFF"> <?php
					
					$tot=0;
					include('db.php');
					$my="select distinct(usn) from iamarks WHERE  iamarks.scode='$scode' and branch='$branch'";
					$my2=mysql_query($my);
					while($myrs=mysql_fetch_array($my2))
					{
					$ausn[]=$myrs[0];
					//echo $ausn;
					
					foreach ($ausn as $usn){
					$un= current($ausn); 
					//echo $un;
					if ($un!=null)
					{
					$q2="SELECT sum(marks) FROM iamarks WHERE  iamarks.scode='$scode' and branch='$branch' and usn='$un' ";
					
		   			 $r2 = mysql_query($q2);
					
					while($rs=mysql_fetch_array($r2)){
					
						if ($rs[0]<20)
						{
					    
						echo "<tr>";
						echo "<td><input type ='text' name='studentname[]' value=".$un." readonly='readonly'</td>";
						echo "<td>".$rs[0]."<input type='text' name='ia[]' /td></br>";
						
						echo "</tr>";
				}
					}
					}
					$un= next($ausn); 
					}
					}
				    ?>
					
					
					</td>
</tr>
<tr>
  
  <td>&nbsp;</td>
<td align="center" valign="middle" bordercolor="#00FF00" bgcolor="#FFFFFF">
<input name="Submit" type="submit" class="style1" value="Send SMS" /></td>

<td align="center" valign="middle" bordercolor="#00FF00" bgcolor="#FFFFFF">


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
