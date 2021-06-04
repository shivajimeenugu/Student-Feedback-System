<?php


include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome Home</title>

</head>
<body  >
     <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
                             <button onclick="w3_close()" class="w3-bar-item w3-button w3-large">Close &times;</button>
                                       <a class="w3-bar-item w3-button" href="index.php">HOME</a>

                                       <a class="w3-bar-item w3-button" href="dashboard.php">DASHBOARD</a>

                                       <a class="w3-bar-item w3-button" href="logout.php">LOGOUT</a>
                             
            </div> 


<div class="w3-container w3-animate-right" id="main">
      <?php include 'header.php';?>


<br/>
     

<div class="w3-container" >

<div class="w3-card w3-padding-32 w3-padding-left-16 w3-padding-right-16 ">
<form method="POST" action="">
<input type="text" class="w3-input w3-border" placeholder="search with any details"  name="key">
<br/>
<center><button class="w3-btn w3-blue" name="submit"  >SEARCH</button></center>
</form>
</div>
<?php
include 'db.php';
$query='';
$count=1;
//$con = mysqli_connect("localhost", "root", "", "lib");
$output = '';
if(isset($_POST["submit"]))
{
	$search = mysqli_real_escape_string($con, $_POST["key"]);
	$query = "
	SELECT * FROM lablog_table 
	WHERE student_name LIKE '%".$search."%'
	OR student_pin LIKE '%".$search."%' 
	OR system_name LIKE '%".$search."%' 
	OR ip LIKE '%".$search."%' 
	OR reason LIKE '%".$search."%' 
	OR period_count LIKE '%".$search."%' 
	OR log_date LIKE '%".$search."%' 
	OR log_time LIKE '%".$search."%' 
	OR end_date LIKE '%".$search."%'
	OR end_time LIKE '%".$search."%'
	
	";


$result = mysqli_query( $con, $query);
if(mysqli_num_rows($result) > 0)
{
	echo '<br/><table class="w3-table-all w3-responsive">
						<tr class="w3-hover-grey w3-red">
<th>SI.NO</th>							

							

<th>ID</th>
							
<th>STUDENT NAME</th>
<th >STUDENT PIN</th>
<th >SYSTEM NAME</th>
<th >IP</th>
<th >LAB</th>
<th >NO OF PERIODS</th>
<th >START DATE</th>
<th >START TIME</th>
<th >END DATE</th>
<th >END TIME</th>


				</tr>';
while($row = mysqli_fetch_array($result))
	{
		//echo'?>
			<tr class="w3-hover-grey ">
			
	
	
<td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["student_name"]; ?></td>
<td align="center"><?php echo $row["student_pin"]; ?></td>
<td align="center"><?php echo $row["system_name"]; ?></td>
<td align="center"><?php echo $row["ip"]; ?></td>
<td align="center"><?php echo $row["reason"]; ?></td>
<td align="center"><?php echo $row["period_count"]; ?></td>
<td align="center"><?php echo $row["log_date"]; ?></td>
<td align="center"><?php echo $row["log_time"]; ?></td>
<td align="center"><?php echo $row["end_date"]; ?></td>
<td align="center"><?php echo $row["end_time"]; ?></td>


		</tr>
		<?php
		$count++;
		//';
	}
	
}
else
{
	echo '<h1 class="w3-panel w3-green w3-round">NO DATA FOUND</h1>';
}
}

?>

</table>
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
