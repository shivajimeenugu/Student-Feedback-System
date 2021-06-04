
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body  >
     <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
                             <button onclick="w3_close()" class="w3-bar-item w3-button w3-large">Close &times;</button>
                                       <a class="w3-bar-item w3-button" href="std_login.php">HOME</a>

                        
                             
            </div> 


<div class="w3-container w3-animate-right" id="main">
             <div class="w3-container w3-blue">

   <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>

        <center><img src="logo.png"  class="logo" alt="LOGO GOSE HEAR" ></img></center>
        <center><h2>Dr.YC JAMES YEN GOVT POLYTECHNIC,KUPPAM </h2></center>
       <center><h3>FEEDBACK MANAGEMENT SYSTEM</h3></center>
        

</div>



     

<div class="w3-container" >


<?php
require_once "phpmailer/class.phpmailer.php";
	require('db.php');
    //require('mail_verify/language/index.php');
	// If form submitted, insert values into the database.
    if (isset($_REQUEST['cglcode'])){
		//$username = stripslashes($_REQUEST['username']); // removes backslashes
		//$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		
$bname=$_REQUEST['br'];
	$cglcode=$_REQUEST['cglcode'];
$br=strtoupper($_REQUEST['br']);
$stdno=$_REQUEST['stdno'];
$stdpin=$cglcode."-".$br."-".$stdno;
$stdpin=stripslashes($stdpin);
$stdpin=mysqli_real_escape_string($con,$stdpin);	
		
		
		
		
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $hash = md5( rand(0,1000) );
		$std_branch='D'.$br.'E';
		$std_year='20'.substr($cglcode,0,2);
$q_chk="Select * from std_users where username='$stdpin';";
$result_chk = mysqli_query($con,$q_chk);
$row_chk= mysqli_fetch_assoc($result_chk);
	
if($row_chk['username']!=$stdpin && $row_chk['email']!=$email){

$query = "INSERT into `std_users` (username, password, email, trn_date,hash,branch,year) VALUES ('$stdpin', '".md5($password)."', '$email', '$trn_date','$hash','$std_branch',$std_year)";
        $result = mysqli_query($con,$query);
        if($result){
            //echo "<div class='form'><h3>You are registered successfully.</h3><br/><br/><h3>PLEASE VERIFY YOUR MAIL. VERIFICATION LINK HAS BEEN SENT... </h3><br/></div>";
        
		echo '
	<div id="id01" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container w3-card">
	  <span onclick="document.getElementById("id01").style.display="none"" class="w3-button w3-display-topright">&times;</span>
	<h1 class="w3-panel w3-green w3-round">You are registered successfully.</h1>
	<center><a href="std_login.php"  class="w3-button w3-blue" >Done</a></center>
	                    <br/>
	</div></div></div>
	
	<script>document.getElementById("id01").style.display="block"</script>
	';
		
		
		
		}
		
    }
	else{
	echo '
	<div id="id01" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container w3-card">
	  <span onclick="document.getElementById("id01").style.display="none"" class="w3-button w3-display-topright">&times;</span>
	<h1 class="w3-panel w3-green w3-round">EMAIL OR PIN ALREDY EXISTS!</h1></div></div></div>
	<script>document.getElementById("id01").style.display="block"</script>
	';
	
	}
	}
	
	
	
?>
<br/><br/>
<div class="w3-card w3-padding-large" align="center" >
<h1 class="w3-blue">Registration</h1>
<form name="registration" action="" method="post"><br>

<div class="w3-row">
<label class="w3-label w3-half " >PIN:</label>

<table class="w3-half">
<tr>
<th><input type="textbox" style="width:100px;"  class="w3-input w3-border" name="cglcode"  required ></input></th  ><th class="w3-large" ><b>-</b></th>
<th><select name="br" class="w3-select w3-border" style="width:100px;" >

<option value="CM">CM</option> 
<option value="EC">EC</option> 
<option value="EE">EE</option> 
<option value="M">M</option> 

</select></th><th class="w3-large"><b>-</b></th>
<th><input type="textbox" class="w3-input w3-border" style="width:100px;"  name="stdno"  required ></th>
</tr></table>


</div>


<br/>
<div class="w3-row">
<label class="w3-label w3-half " >E-MAIL:</label>
<input class="w3-input w3-half w3-border" type="email" name="email" placeholder="Email" required />
</div>
<br/>
<div class="w3-row">
<label class="w3-label w3-half " >PASSWORD:</label>
<input class="w3-input w3-half w3-border" type="password" name="password" placeholder="Password" required />
</div>

<br/>

<center><input type="submit"  class="w3-button w3-blue"   name="submit" value="Register" /></center>
</form>
</div>
<br/>

<br /><br />

</div>



<br />

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

<div class="w3-container w3-blue">
<p>COPYRIGHT©SHIVAJI MEENUGU</p>
       </div></div>
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
