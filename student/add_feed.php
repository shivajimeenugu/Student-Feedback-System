<?php


include("auth.php"); 
include("db.php");
//include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script src="/YC_FEED/select/js/jquery.min.js">
</script>

<link rel="stylesheet" href="/YC_FEED/select/css/select2.min.css" />
<link rel="stylesheet" href="w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#t1 {
  -moz-tab-size: 4; /* Firefox */
  -o-tab-size: 4; /* Opera 10.6-12.1 */
  tab-size: 4;
}


</style>


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
<?php
if(isset($_POST["q14"]))
{
	$q1=$_REQUEST['q1'];
	
	$q2=$_REQUEST['q2'];
	
	$q3=$_REQUEST['q3'];
	
	$q4=$_REQUEST['q4'];
	
	$q5=$_REQUEST['q5'];
	
	$q6=$_REQUEST['q6'];
	
	$q7=$_REQUEST['q7'];
	
	$q8=$_REQUEST['q8'];
	
	$q9=$_REQUEST['q9'];
	
	$q10=$_REQUEST['q10'];
	
	$q11=$_REQUEST['q11'];
	
	$q12=$_REQUEST['q12'];
	
	$q13=$_REQUEST['q13'];
	
	$q14=$_REQUEST['q14'];
	$emp_code=$_REQUEST['emp_code'];
	$sub_code_q=$_REQUEST['form_sub_code'];
	
	$q="insert into feed(q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,emp_code,sub_code) values
('$q1',
'$q2',
'$q3',
'$q4',
'$q5',
'$q6',
'$q7',
'$q8',
'$q9',
'$q10',
'$q11',
'$q12',
'$q13',
'$q14',$emp_code,'$sub_code_q');";



$st=mysqli_query($con,$q) or die(mysqli_error($con));
//header('Location: suss_newinsert.php');

if($st)
{

echo '<div id="id01" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container"><p class="w3-panel w3-green w3-round" >FEEDBACK ADDED<p></div></div></div>'; 
	  echo'<script>document.getElementById("id01").style.display="block"</script>';
}
else{
	echo '<div id="id01" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container"><p class="w3-panel w3-green w3-round" >ERROR! CAN NOT ADD FEEDBACK<p></div></div></div>'; 
	  echo'<script>document.getElementById("id01").style.display="block"</script>';
}
	
}

?>

<br/><br/><br/>
<div class="w3-container" >
 <form class="w3-container" action="" method="post" name="submitfeedback" >
<div class="w3-row ">

<label class="w3-label w3-xlarge w3-half">SELECT SUBJECT</label>
<div class="w3-responsive w3-half w3-select w3-border ">
<select id="sub_data"  style="width:200px;" name="form_sub_code" required >
  <?php
  
  $emp_code=$_REQUEST['emp_code'];
$sel_query="Select * from sub_db where sub_allotted='$emp_code' ";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>



<option value="<?php echo $row["sub_code"]; ?>"><?php  echo $row["sub_name"].'-->' .$row["sub_code"]; ?></option>


<?php  }?>
</select>  
</div>
<br/>

</div>
<div class="w3-panel w3-sand w3-xlarge"><center>GIVE FEEDBACK</center></div>
<br/>





<!--Basic Structure-------------------------------------------------------------------------->
<div class="w3-row ">
<label class="w3-half w3-xlarge   w3-serif">Clarity in explaining the subjects?</label>

<table class="w3-half w3-responsive">
<tr>
<th><input type="radio" class="w3-radio " name="q1" value="VERY POOR" > VERY POOR</input></th>
<th><input type="radio" class="w3-radio  " name="q1" value="POOR"> POOR</input></th>
<th><input type="radio"class="w3-radio  " name="q1" value="AVERAGE"> AVERAGE</input></th>
<th><input type="radio" class="w3-radio  " name="q1" value="GOOD"> GOOD</input></th>
<th><input type="radio"  class="w3-radio  " name="q1" value="VERY GOOD"> VERY GOOD</input></th>
</tr>
</table>

</div>
<br/>
<!--Basic Structure END---------------------------------------------------------------------------->




<!--Basic Structure-------------------------------------------------------------------------->
<div class="w3-row ">
<label class="w3-half w3-xlarge   w3-serif">Subject explaining was easy to understand?</label>
<table class="w3-half w3-responsive">
<tr>
<th><input type="radio" class="w3-radio " name="q2" value="VERY POOR" > VERY POOR</input></th>
<th><input type="radio" class="w3-radio  " name="q2" value="POOR"> POOR</input></th>
<th><input type="radio"class="w3-radio  " name="q2" value="AVERAGE"> AVERAGE</input></th>
<th><input type="radio" class="w3-radio  " name="q2" value="GOOD"> GOOD</input></th>
<th><input type="radio"  class="w3-radio  " name="q2" value="VERY GOOD"> VERY GOOD</input></th>
</tr>
</table>

</div>
<br/>
<!--Basic Structure END---------------------------------------------------------------------------->



<div class="w3-row ">
<label class="w3-half w3-xlarge   w3-serif">Subject explaining was easy to understand?</label>
<table class="w3-half w3-responsive">
<tr>
<th><input type="radio" class="w3-radio " name="q3" value="VERY POOR" > VERY POOR</input></th>
<th><input type="radio" class="w3-radio  " name="q3" value="POOR"> POOR</input></th>
<th><input type="radio"class="w3-radio  " name="q3" value="AVERAGE"> AVERAGE</input></th>
<th><input type="radio" class="w3-radio  " name="q3" value="GOOD"> GOOD</input></th>
<th><input type="radio"  class="w3-radio  " name="q3" value="VERY GOOD"> VERY GOOD</input></th>
</tr>
</table>

</div>
<br/>

<div class="w3-row   ">
<label class=" w3-half w3-xlarge   w3-serif">Faculty answers to your queries / questions?</label>
<table class="w3-half w3-responsive">
<tr>
<th><input type="radio" class="w3-radio  " name="q4" value="VERY POOR" > VERY POOR</input></th>
<th><input type="radio" class="w3-radio  " name="q4" value="POOR"> POOR</input></th>
<th><input type="radio"class="w3-radio  " name="q4" value="AVERAGE"> AVERAGE</input></th>
<th><input type="radio" class="w3-radio  " name="q4" value="GOOD"> GOOD</input></th>
<th><input type="radio"  class="w3-radio  " name="q4" value="VERY GOOD"> VERY GOOD</input></th>
</tr>
</table>

</div>
<br/>



<div class="w3-row ">
<label class=" w3-half w3-xlarge   w3-serif">Coverage of topic / subject is on time?</label>
<table class="w3-half w3-responsive">
<tr>
<th><input type="radio" class="w3-radio  " name="q5" value="VERY POOR" > VERY POOR</input></th>
<th><input type="radio" class="w3-radio  " name="q5" value="POOR"> POOR</input></th>
<th><input type="radio"class="w3-radio  " name="q5" value="AVERAGE"> AVERAGE</input></th>
<th><input type="radio" class="w3-radio  " name="q5" value="GOOD"> GOOD</input></th>
<th><input type="radio"  class="w3-radio  " name="q5" value="VERY GOOD"> VERY GOOD</input></th>
</tr>
</table>

</div>
<br/>





<div class="w3-row ">
<label class=" w3-half w3-xlarge   w3-serif">The Concepts were explained with example?</label>
<table class="w3-half w3-responsive">
<tr>
<th><input type="radio" class="w3-radio  " name="q6" value="VERY POOR" > VERY POOR</input></th>
<th><input type="radio" class="w3-radio  " name="q6" value="POOR"> POOR</input></th>
<th><input type="radio"class="w3-radio  " name="q6" value="AVERAGE"> AVERAGE</input></th>
<th><input type="radio" class="w3-radio  " name="q6" value="GOOD"> GOOD</input></th>
<th><input type="radio"  class="w3-radio  " name="q6" value="VERY GOOD"> VERY GOOD</input></th>
</tr>
</table>

</div>
<br/>

<div class="w3-row "  required  >
<label class=" w3-half w3-xlarge   w3-serif">Faculty's preparation for the class?</label>
<table class="w3-half w3-responsive">
<tr>
<th><input type="radio" class="w3-radio  " name="q7" value="VERY POOR" > VERY POOR</input></th>
<th><input type="radio" class="w3-radio  " name="q7" value="POOR"> POOR</input></th>
<th><input type="radio"class="w3-radio  " name="q7" value="AVERAGE"> AVERAGE</input></th>
<th><input type="radio" class="w3-radio  " name="q7" value="GOOD"> GOOD</input></th>
<th><input type="radio"  class="w3-radio  " name="q7" value="VERY GOOD"> VERY GOOD</input></th>
</tr>
</table>

</div>
<br/>



<div class="w3-row "  required  >
<label class=" w3-half w3-xlarge   w3-serif">Faculty guidance for preparation of seminar, conference and exam?</label>
<table class="w3-half w3-responsive">
<tr>
<th><input type="radio" class="w3-radio  " name="q8" value="VERY POOR" > VERY POOR</input></th>
<th><input type="radio" class="w3-radio  " name="q8" value="POOR"> POOR</input></th>
<th><input type="radio"class="w3-radio  " name="q8" value="AVERAGE"> AVERAGE</input></th>
<th><input type="radio" class="w3-radio  " name="q8" value="GOOD"> GOOD</input></th>
<th><input type="radio"  class="w3-radio  " name="q8" value="VERY GOOD"> VERY GOOD</input></th>
</tr>
</table>

</div>
<br/>


<div class="w3-row "  required  >
<label class=" w3-half w3-xlarge   w3-serif">Punctuality of the faculty for the class?</label>
<table class="w3-half w3-responsive">
<tr>
<th><input type="radio" class="w3-radio  " name="q9" value="VERY POOR" > VERY POOR</input></th>
<th><input type="radio" class="w3-radio  " name="q9" value="POOR"> POOR</input></th>
<th><input type="radio"class="w3-radio  " name="q9" value="AVERAGE"> AVERAGE</input></th>
<th><input type="radio" class="w3-radio  " name="q9" value="GOOD"> GOOD</input></th>
<th><input type="radio"  class="w3-radio  " name="q9" value="VERY GOOD"> VERY GOOD</input></th>
</tr>
</table>

</div>
<br/>

<div class="w3-row "  required  >
<label class=" w3-half w3-xlarge   w3-serif">Communicates distinctly and effectively?</label>
<table class="w3-half w3-responsive">
<tr>
<th><input type="radio" class="w3-radio  " name="q10" value="VERY POOR" > VERY POOR</input></th>
<th><input type="radio" class="w3-radio  " name="q10" value="POOR"> POOR</input></th>
<th><input type="radio"class="w3-radio  " name="q10" value="AVERAGE"> AVERAGE</input></th>
<th><input type="radio" class="w3-radio  " name="q10" value="GOOD"> GOOD</input></th>
<th><input type="radio"  class="w3-radio  " name="q10" value="VERY GOOD"> VERY GOOD</input></th>
</tr>
</table>

</div>
<br/>

<div class="w3-row "  required  >
<label class=" w3-half w3-xlarge   w3-serif">Treats students with respect and courtesy?</label>
<table class="w3-half w3-responsive">
<tr>
<th><input type="radio" class="w3-radio  " name="q11" value="VERY POOR" > VERY POOR</input></th>
<th><input type="radio" class="w3-radio  " name="q11" value="POOR"> POOR</input></th>
<th><input type="radio"class="w3-radio  " name="q11" value="AVERAGE"> AVERAGE</input></th>
<th><input type="radio" class="w3-radio  " name="q11" value="GOOD"> GOOD</input></th>
<th><input type="radio"  class="w3-radio  " name="q11" value="VERY GOOD"> VERY GOOD</input></th>
</tr>
</table>

</div>
<br/>

<div class="w3-row "  required  >
<label class=" w3-half w3-xlarge   w3-serif">Control of the classroom by the faculty?</label>
<table class="w3-half w3-responsive">
<tr>
<th><input type="radio" class="w3-radio  " name="q12" value="VERY POOR" > VERY POOR</input></th>
<th><input type="radio" class="w3-radio  " name="q12" value="POOR"> POOR</input></th>
<th><input type="radio"class="w3-radio  " name="q12" value="AVERAGE"> AVERAGE</input></th>
<th><input type="radio" class="w3-radio  " name="q12" value="GOOD"> GOOD</input></th>
<th><input type="radio"  class="w3-radio  " name="q12" value="VERY GOOD"> VERY GOOD</input></th>
</tr>
</table>

</div>
<br/>

<div class="w3-row "  required  >
<label class=" w3-half w3-xlarge   w3-serif">Assessment of Students with impartiality?</label>
<table class="w3-half w3-responsive">
<tr>
<th><input type="radio" class="w3-radio  " name="q13" value="VERY POOR" > VERY POOR</input></th>
<th><input type="radio" class="w3-radio  " name="q13" value="POOR"> POOR</input></th>
<th><input type="radio"class="w3-radio  " name="q13" value="AVERAGE"> AVERAGE</input></th>
<th><input type="radio" class="w3-radio  " name="q13" value="GOOD"> GOOD</input></th>
<th><input type="radio"  class="w3-radio  " name="q13" value="VERY GOOD"> VERY GOOD</input></th>
</tr>
</table>

</div>
<br/>

<div class="w3-row "  required  >
<label class=" w3-half w3-xlarge   w3-serif">Overall satisfaction?</label>
<table class="w3-half w3-responsive">
<tr>
<th><input type="radio" class="w3-radio  " name="q14" value="VERY POOR" > VERY POOR</input></th>
<th><input type="radio" class="w3-radio  " name="q14" value="POOR"> POOR</input></th>
<th><input type="radio"class="w3-radio  " name="q14" value="AVERAGE"> AVERAGE</input></th>
<th><input type="radio" class="w3-radio  " name="q14" value="GOOD"> GOOD</input></th>
<th><input type="radio"  class="w3-radio  " name="q14" value="VERY GOOD"> VERY GOOD</input></th>
</tr>
</table>

</div>
<br/>
<br/><br/>
<center><input type="submit" value="SUBMIT FEEDBACK" name="submit" class="w3-button w3-red w3-xlarge" /></center>
<br /><br /><br /><br />
</form>


<div class="w3-container w3-blue">
<p>COPYRIGHT©SHIVAJI MEENUGU</p>
       </div></div>
	   <script src="/YC_FEED/select/js/select2.min.js"></script>
	   <script>
$("#sub_data").select2( {
	placeholder: "Select Subject",
	allowClear: true
	} );
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


























