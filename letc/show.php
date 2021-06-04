<?php include("letc_auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
<style>
@page {
  /*margin: 2mm*/
}

@media screen {
  div.divFooterms {
    display: none;
  }
}
@media print {
  div.divFooterms {
    position: fixed;
    bottom: 0;
  }
}
</style>
<meta charset="utf-8">
<link rel="stylesheet" href="w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo 'DATA-LOGS-'.date("Ymd") ; ?></title>

</head>
<body  >
     <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
                             <button onclick="w3_close()" class="w3-bar-item w3-button w3-large">Close &times;</button>
                                       <a class="w3-bar-item w3-button" href="index.php">HOME</a>
                                       <a class="w3-bar-item w3-button" href="letc_dashboard.php">DASHBOARD</a>
                                       <a class="w3-bar-item w3-button" href="letc_logout.php">LOGOUT</a>
            </div> 


<div class="w3-container w3-animate-right" id="main">
<?php include 'header.php';?>


<br/>
     



<?php
include 'db.php';
$emp_id=$_SESSION["letc_username"];
$query='';
$count=1;
$output = '';
//SELECT * FROM call_mgmt_table WHERE date BETWEEN #'$from_date'# AND #'$to_date'#
$query = "SELECT * FROM class_log where class_log_todayornot=1 and letc_emp_id='$emp_id'";
$result = mysqli_query( $con, $query);
$row_count=@mysqli_num_rows($result);
echo '
	
<br/>

<br/>
<div class="w3-blue"><center>LOGS</center></div>
<br/>
	<table style="border-collapse: collapse; border: 1px solid black;" class="w3-responsive w3-table-all">
						<thead>
						<tr><th colspan="9"></th></tr>
					<tr class="w3-indigo">						
<th>SI.NO</th>							
<th>LOG ID</th>						
<th>SUBJECT</th>
<th >LOG DATE</th>
<th >PERIOD OF THE DAY</th>
<th >TOPIC</th>
<th >ABSENTEES</th>
<th >CUMULATIVE PERIODS</th>
<th >REMARKS</th>
				</tr>
				
				</thead>
				<tbody>
				
				
				
				
				';
if(@mysqli_num_rows($result) > 0)
	{
	
	echo '';
$row_span_flag=1;		
		
while($row = mysqli_fetch_array($result))
	{
		echo'
			<tr class="w3-hover-grey ">';
			
			?>
			
	
	
<td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["class_log_id"]; ?></td>
<td align="center"><?php echo $row["class_log_subject"]; ?></td>
<td align="center"><?php echo $row["class_log_date"]; ?></td>
<td align="center"><?php echo $row["class_log_period_of_the_day"]; ?></td>
<td align="center"><?php echo $row["class_log_topic"]; ?></td>
<td align="center"><?php echo $row["class_log_absentees"]; ?></td>
<td align="center"><?php echo $row["class_log_cumulative_periodes"]; ?></td>
<td align="center"><?php echo $row["class_log_remarks"]; ?></td>

		</tr>
		<?php
		$count++;
		
	}
	}

else
{
	
	echo '<h1 class="w3-red">NO LOGS</h1>';
	
}

echo '</table><br/><br/>';
//-----------------------------------------------------------------
$query2='';
$count2=1;
$output2 = '';
//SELECT * FROM call_mgmt_table WHERE date BETWEEN #'$from_date'# AND #'$to_date'#
$query2 = "SELECT * FROM class_log  where class_log_todayornot=0 and letc_emp_id='$emp_id'";
$result2 = mysqli_query( $con, $query2);
$row_count2=@mysqli_num_rows($result2);
echo '
<br/>
<br/>
<br/>
<div class="w3-blue"><center>EXPIRED LOGS</center></div>
<br/>
	<table style="border-collapse: collapse; border: 1px solid black;" class="w3-responsive w3-table-all">
						<thead>
						<tr><th colspan="9"></th></tr>
					<tr class="w3-indigo">						
<th>SI.NO</th>							
<th>LOG ID</th>						
<th>SUBJECT</th>
<th >LOG DATE</th>
<th >PERIOD OF THE DAY</th>
<th >TOPIC</th>
<th >ABSENTEES</th>
<th >CUMULATIVE PERIODS</th>
<th >REMARKS</th>
				</tr>
				
				</thead>
				<tbody>
				
				
				
				
				';
if(@mysqli_num_rows($result2) > 0)
	{
	
	echo '';
$row_span_flag2=1;		
		
while($row2 = mysqli_fetch_array($result2))
	{
		echo'
			<tr class="w3-hover-grey ">';
			
			?>
			
	
	
<td align="center"><?php echo $count2; ?></td>
<td align="center"><?php echo $row2["class_log_id"]; ?></td>
<td align="center"><?php echo $row2["class_log_subject"]; ?></td>
<td align="center"><?php echo $row2["class_log_date"]; ?></td>
<td align="center"><?php echo $row2["class_log_period_of_the_day"]; ?></td>
<td align="center"><?php echo $row2["class_log_topic"]; ?></td>
<td align="center"><?php echo $row2["class_log_absentees"]; ?></td>
<td align="center"><?php echo $row2["class_log_cumulative_periodes"]; ?></td>
<td align="center"><?php echo $row2["class_log_remarks"]; ?></td>

		</tr>
		<?php
		$count2++;
		
	}
	
}
else
{
	
	echo '<h1 class="w3-red">NO EXPIRED LOGS</h1>';
	
}


?>

</tbody>
</table>
<br/><br/>
<br/><br/>
<br/>



<!--<script>window.print();</script>-->
<center><button class="w3-button w3-red" onclick="window.print()">PRINT</button></center>




<?php include 'footer.php';?>
	   
	   </div>
<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
</div>
 </body>



</html>
