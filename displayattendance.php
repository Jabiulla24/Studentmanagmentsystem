<?php
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
   $branch=$_GET['branch'];
   echo "Semis\n".$semnedded;
				
			
			
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
		echo '<br/>firstUSN->'.$name;
		//echo '<br/>firstStat->'.$status;
		
		include("db.php");
		$q22="SELECT * FROM student where usn='$name' ";
		   			 $r22 = mysql_query($q22);
					
					while($res=mysql_fetch_array($r22)){
					 $number=$res[5];
					 echo $number;
					 $message="Your attendance is shortage".$status;
					 sendsms($number,$message);
					 
					 }
	
	</script>
	alert("Message Sent Successfully");
	location.href="facultyprofile.php";
	</script>
	<?php 
			}
		else
			{
			echo "<script type='text/javascript'>alert('Attendance Failed may be u taken it already..');</script>";
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
				<?php
				echo "<td><a href='http://localhost/ealerts/displayallattendance.php?scode=$scode&sem=$semnedded&branch=$branch'>Click For All Attendnace</a></td>";
?>
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
						<table align="center" >
<form name="complaint" method="post" action="#" onSubmit="return validate()" >
<td>
<table width="100%" border="1" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<?php
			
					
	
?>

</tr>
<tr>
<td  bgcolor="#FFFFFF">Student  USN</td>
<td>% Attendance</td>

</tr>
<tr>

<td bgcolor="#FFFFFF"> <?php
	

					include('db.php');
					$q2="select distinct(usn) from attendance where scode='$scode' && sem='$semnedded'";
		   			 $r2 = mysql_query($q2);
					
					while($rs=mysql_fetch_array($r2)){
					 $usn[]=$rs[0];
						/*
						echo "<tr>";
						
					    echo "<td>".$rs[0]."</br></td>";
						
						
						echo "<td>".$rs[3]."</br></td>";
						echo "<td>".$rs[4]."</br></td>";
						echo "</tr>";
				*/
					}
				    
					foreach ($usn as $usnindividual)
					{
				
					include('db.php');
					$q3="select count(*) from attendance where scode='$scode' && sem='$semnedded' && usn='$usnindividual' ";
		   			 $r3 = mysql_query($q3);
					
					while($rs1=mysql_fetch_array($r3)){
					 //echo"<h1>New Value</h1>";
							//echo $usnindividual;
						echo "<tr>";
						$totalatt=$rs1[0];
					   // echo "<td>"."Total Att".$rs1[0]."</br></td>";
						/*$usn[]=$rs[0];
						
						echo "<td>".$rs[3]."</br></td>";
						echo "<td>".$rs[4]."</br></td>";
						*/
						echo "</tr>";
				
					}
					
					$q4="select count(*) from attendance where scode='$scode' && sem='$semnedded' && usn='$usnindividual' && status=1 ";
		   			 $r4 = mysql_query($q4);
					
					while($rs11=mysql_fetch_array($r4)){
				
						
						echo "<tr>";
						$patt=$rs11[0];
						
					   // echo "<td>"."Present Att".$rs11[0]."</br></td>";
						/*$usn[]=$rs[0];
						
						echo "<td>".$rs[3]."</br></td>";
						echo "<td>".$rs[4]."</br></td>";
						*/
						echo "</tr>";
				
					}
					//echo $usnindividual;
					//echo "<td>"."Total Att".$totalatt."</td>";
					 //echo "<td>"."Present Att".$patt."</br></td>";
					$avg=($patt/$totalatt)*100;
					//echo "Avg".$avg;
					echo "</br>";
					$avgnedded=round($avg,2);
					if ($avg<85)
					{
					
					echo "<td><input type ='text' name='studentname[]' value=".$usnindividual." readonly='readonly'</td>";
					
					echo "<td><input type ='text' name='status[]' value=".$avgnedded." readonly='readonly'</td>";
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
<?php
}
else
{
header('Location:facultylogin.php');
}
?>