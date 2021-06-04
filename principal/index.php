<?php  ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">

<script src="/YC_FEED/select/js/jquery.min.js">
</script>

<link rel="stylesheet" href="/YC_FEED/select/css/select2.min.css" />
<!--<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv = "refresh" content = "1; url=dashboard.php" />-->
<title>Welcome Home</title>
<style>
        html,
        body,
        #myChart {
            height: 100%;
            width: 100%;
        }
 
        zing-grid[loading] {
            height: 450px;
        }
    </style>
</head>
<body  >
     <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
                             <button onclick="w3_close()" class="w3-bar-item w3-button w3-large">Close &times;</button>
                                       <a class="w3-bar-item w3-button" href="index.php">HOME</a>

                                       <a class="w3-bar-item w3-button" href="dashboard.php">LOG</a>

                                       <a class="w3-bar-item w3-button" href="logout.php">LOGOUT</a>
                             
            </div> 


<div class="w3-container w3-animate-right" id="main">
             <?php 
			 include 'db.php';
			 include 'header.php';?>
	<?php 
	if(isset($_POST['emp_code']))
	{
		$emp_code=$_POST['emp_code'];
		
		
	echo '<div id="id01" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
	<div class="w3-blue"><center>SELECT SUBJECT</center></div><br/>
      <div class="w3-container">';
	  $sel_query_get="Select * from sub_db where sub_allotted='$emp_code' ";
		$result_get = mysqli_query($con,$sel_query_get);
		while($row_get = mysqli_fetch_assoc($result_get)) {
			echo'
			<br/>
			<center>
			<a href="show_chart.php?emp_code='.$emp_code.'&sub_code='.$row_get["sub_code"].'" class="w3-button w3-blue">'.$row_get["sub_name"].'</a>
			</center>
			<br/>
			';
			
		} 
	  
	  echo '</div></div></div>'; 
	  echo'<script>document.getElementById("id01").style.display="block"</script>';

	}
	
	
	?>		 
			 


<br/><br/>
<center><form class=" w3-card-4 w3-padding-16" method="POST" action="">
<div class="w3-row" >
  <label class="w3-label w3-half">Select Employee</label>
  
  
  
  <div class="w3-half w3-select w3-border">
<select id="emp_code_data" style="width:300px;" name="emp_code"   required >
  <?php
$sel_query="Select * from letc";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>



<option value="<?php echo $row["emp_code"]; ?>"><?php  echo $row["emp_name"].'-' .$row["emp_branch"].'-' .$row["emp_code"]; ?></option>


<?php  }?>
</select> 
</div>
<br/>

  
  
  
  
  
  
 
  
  </div>
  <br/>
 
	<br/><center>
  <input type="submit" class="w3-button w3-row w3-red" value="Show Chart" />
</form></center></center>

     



   

<br /><br /><br /><br />



<?php include 'footer.php';?>
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

<script src="/YC_FEED/select/js/select2.min.js"></script>
<script>
$("#emp_code_data").select2( {
	placeholder: "Select Employee",
	allowClear: true
	} );
</script>

</div>
 </body>



</html>
