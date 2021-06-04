<?php
include("db.php");
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
                                       <a class="w3-bar-item w3-button" href="std_index.php">HOME</a>

                                       <a class="w3-bar-item w3-button" href="std_dashboard.php">DASHBOARD</a>
		
		

                                       

                                       <a class="w3-bar-item w3-button" href="std_logout.php">LOGOUT</a>
                             
            </div> 


<div class="w3-container w3-animate-right" id="main">
             <div class="w3-container w3-blue">

   <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>

        <center><img src="logo.png"  class="logo" alt="LOGO GOSE HEAR" ></img></center>
        <center><h2>Dr.YC JAMES YEN GOVT POLYTECHNIC,KUPPAM </h2></center>
        <center><h3>FEEDBACK MANAGEMENT SYSTEM</h3></center>
        

</div>

<br/>

<div class="w3-container" >
<div class=" w3-container w3-card w3-light-blue">
  <center> <div class="w3-panel w3-round w3-white"><p class="w3-blue">WELCOME TO DASHBORD</p></div></center>
  <center> <button class="w3-btn w3-yellow w3-border" onclick="document.getElementById('id01').style.display='block'">ADD FEEDBACK</center><br/>
 

	
 

 
  </div>
  <div id="id01" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

  
	<center><p class="w3-tag w3-highway-schoolbus w3-xlarge w3-card">SELECT LECTURER</p></center><br/>
	<table  class="w3-container">
	<?php 
	$std_branch=$_SESSION['stdbranch'];
	$q_get_sub="Select * from letc where emp_branch='$std_branch' ";
	$result = mysqli_query( $con, $q_get_sub);
	$row_count=@mysqli_num_rows($result);
	echo '<thead>
	<tr><th colspan="'.$row_count.'" ></th></tr>
	</thead><tbody>';
	while($row_re_row = mysqli_fetch_array($result))
	{
	?>
	<tr>
	<td><button class="w3-tag w3-highway-schoolbus w3-xlarge w3-card" onclick="window.location.href ='add_feed.php?emp_code=<?php echo $row_re_row["emp_code"]; ?>';"> <?php echo $row_re_row["emp_name"].'['.$row_re_row["emp_code"].']'; ?>  </button></td>
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

<br />



<div class="w3-container w3-blue">
<p>COPYRIGHT©SHIVAJI MEENUGU</p>
       </div></div>
	   
	   <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


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


























