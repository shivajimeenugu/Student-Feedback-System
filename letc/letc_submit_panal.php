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
$sub_code_geted=$_GET["sub_code_geted"];
//SELECT * FROM call_mgmt_table WHERE date BETWEEN #'$from_date'# AND #'$to_date'#
$query = "SELECT * FROM class_log where class_log_todayornot=1 and letc_emp_id='$emp_id' and class_log_self_approve=0 and class_log_subject_code='$sub_code_geted'";
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
<th>
<input type="checkbox" id="select_all" name="select_all" value=""> <br>
</th>					
<th>SI.NO</th>							
<th>LOG ID</th>	
<th>SUBJECT CODE</th>					
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
echo '<form action="" method="post">	';	
while($row = mysqli_fetch_array($result))
	{
		echo'
			<tr class="w3-hover-grey ">';
			
			?>
			

<input type="hidden" name="sub_code_posted[]" value="<?php echo $row["class_log_subject_code"]; ?>" />
<td align="center"><input type="checkbox" name="checked_id[]" value="<?php echo $row["class_log_id"]; ?>"> <br></td>
<td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["class_log_id"]; ?></td>
<td align="center"><?php echo $row["class_log_subject_code"]; ?></td>
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


?>

</tbody>
</table>
<br/><br/>
<br/><br/>
<br/>
<input type="submit" value="submit" />
</form>

<!--<script>window.print();</script>-->
<center><button class="w3-button w3-red" onclick="window.print()">PRINT</button></center>

<?php 
if(isset($_POST['checked_id']))
{
	
	$ef=0;
	foreach($_POST['checked_id'] as $id_chk )
	{
		$q="UPDATE class_log SET class_log_self_approve=1,record_id='$record_id' WHERE class_log_id=$id_chk";
		$st=mysqli_query($con,$q) or die(mysqli_error($con));
		if($st)
		{
			$ef=$ef+1;
		}
	}

if($st)
{
 	echo '<div id="id02" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container"><p class="w3-panel w3-green w3-round" >SUCESSFULLY SUBMITTED '.$ef.' RECORDS</p>
	 
	  <p><center><a class="w3-button w3-red" href="letc_submit_panal.php">DONE</a></center></p>
	  
	  </div>
	  
	  </div>
	  </div>';
echo'<script>document.getElementById("id02").style.display="block"</script>';  
}
else{
	echo '<div id="id01" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container"><p class="w3-panel w3-green w3-round" >ERROR! CAN NOT LOG SUBITTED</p>
	  <p><center><a class="w3-button w3-red" href="letc_submit_panal.php">DONE</a></center></p>
	  </div></div></div>'; 
	  echo'<script>document.getElementById("id01").style.display="block"</script>';
}
}	

?>


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
