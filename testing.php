<?php
$scode='1CSE';
$semnedded='1';
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
					echo $usnindividual;
					echo "<td>"."Total Att".$totalatt."</td>";
					 echo "<td>"."Present Att".$patt."</br></td>";
					$avg=($patt/$totalatt)*100;
					echo "Avg".$avg;
					echo "</br>";
					if ($avg<85)
					{
					echo "Les Att",$usnindividual;
					}
					
					}
					
					?>