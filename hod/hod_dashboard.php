<?php

 
require('db.php');
include("hod_auth.php"); //include auth.php file on all secure pages ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DASHBOARD</title>

</head>
<body class="" >
     <div class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left" style="display:none" id="mySidebar">
                             <button onclick="w3_close()" class="w3-bar-item w3-button w3-large">Close &times;</button>
                                       <a class="w3-bar-item w3-button" href="index.php">HOME</a>

                                       <a class="w3-bar-item w3-button" href="hod_dashboard.php">DASHBOARD</a>
		
		

                                       

                                       <a class="w3-bar-item w3-button" href="hod_logout.php">LOGOUT</a>
                             
            </div> 


<div class="w3-container w3-animate-right" id="main">
      <?php include 'header.php';?>
	  
<br/>
   <div class="w3-bar w3-light-blue"  >
  <button class="w3-bar-item w3-button tablink w3-red" onclick="openCity(event,'London')"> OPTIONS</button>
     <!-- <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Paris')">ADD OR REMOVE</button>
    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Tokyo')">NOTIFICATIONS</button>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'tiruvuru')">SEARCH OPTIONS

</button>
   <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'kuppam')">LOGS</button>
</div>-->

<!--/////////////////////////////////////////-->
<div id="London" class="w3-container w3-display-container city">
 <!-- <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-large w3-display-topright">&times;</span>-->
 <br/>
 <div class="  w3-container w3-card w3-light-blue">
  
  
 <!--<center> <div class="w3-panel w3-round w3-white"><p> LOG OPTIONS</p></div></center>-->
  
<br/>
  <center> <button class="w3-btn w3-yellow w3-border" onclick="window.location.href='hod_add_letc.php'">ADD EMPLOYEE</button></center><br/>
  <center> <button class="w3-btn w3-yellow w3-border" onclick="window.location.href='hod_asgn.php'">ASSGN EMPLOYEE </button></center><br/>
   <!-- <center> <button class="w3-btn w3-yellow w3-border" onclick="document.getElementById('id01').style.display='block'">APPROVE LOGS</button></center><br/>
 -->


 
</div>
 


<div id="id01" class="w3-modal w3-animate-opacity">
<style>
  .w3-highway-brown
{color:#fff;background-color:#633517}

.w3-highway-red
{color:#fff;background-color:#a6001a}

.w3-highway-orange
{color:#fff;background-color:#e06000}

.w3-highway-schoolbus
{color:#fff;background-color:#ee9600}

.w3-highway-yellow
{color:#fff;background-color:#ffab00}

.w3-highway-green
{color:#fff;background-color:#004d33}

.w3-highway-blue
{color:#fff;background-color:#00477e}
  </style>
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

  
	<center><p class="w3-tag w3-highway-schoolbus w3-xlarge w3-card">SELECT EMPLOYEE</p></center><br/>
	<table  class="w3-container">
	<?php 
	$branch_name=$_SESSION["hod_username"];
	$q_get_sub="SELECT * from letc where emp_branch='$branch_name'";
	
	$result = mysqli_query( $con, $q_get_sub);
	$row_count=@mysqli_num_rows($result);
	echo '<thead>
	<tr><th colspan="'.$row_count.'" ></th></tr>
	</thead><tbody>';
	while($row_re_row = mysqli_fetch_array($result))
	{
		
	?>
	<tr>
	<td><table class="w3-responsive"><tr><th><button class="w3-tag w3-highway-green w3-xlarge w3-card" onclick="window.location.href ='letc_submit_panal.php?sub_code_geted=<?php echo $row_re_row["emp_code"]; ?>';"><?php 
	$temp_emp_code=$row_re_row["emp_code"];
	$q_log_updates="SELECT * FROM class_log WHERE class_log_self_approve=1 and letc_emp_id='$temp_emp_code' ";
	$result_log_updates = mysqli_query( $con, $q_log_updates);
	$row_count_log_updates=@mysqli_num_rows($result_log_updates);
	if($row_count_log_updates>0){$update_chk_msg="<div style='font-size:15px;' class='w3-animate-fading w3-red'>SOME LOGS NEED APROVAL</div>";}
	else{$update_chk_msg="<div class='w3-text-orange' style='font-size:50px;'>✓</div>";}
	
	echo ''.$row_re_row["emp_name"].'   ['.$row_re_row["emp_code"].']</button></th><th>'.$update_chk_msg.'</th></tr></table>'; ?></td>
	</tr>
	<?php }?>
	
	</tbody>
	</table>
    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey" style="background-color:#f1f1f1">
      <center><button type="button" onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-red">Cancel</button></center>
	  <!--<span class="psw">  not register  <a href="#">Click Here!</a></span>-->
    </div>
    
  
  </div>






 
</div>
   
   <br/>
  
  
</div>
 


<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>


 


 
 



<br/>

	   
	   
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
<?php include 'footer.php';?>
 </body>



</html>














