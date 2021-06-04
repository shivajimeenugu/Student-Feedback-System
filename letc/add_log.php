<?php include("letc_auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LOG FORM</title>

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

     

<div class="w3-container" >

<?php
include 'db.php';

$login_emp_id=$_SESSION["letc_username"];



if(isset($_POST['new']) && $_POST['new']==1)
{
if($_REQUEST['log_type']!="LEAVE")
{
$sub_details=explode("|",$_REQUEST['sub_name']);
$sub_code=$sub_details[1];
$sub_name=$sub_details[0];
$today_date=date("Y-m-d");
$class_log_date=$_REQUEST['class_log_date'];
$class_log_period_of_the_day=$_REQUEST['class_log_period_of_the_day'];
$class_log_topic=strtoupper($_REQUEST['class_log_topic']);
$class_log_absentees=$_REQUEST['class_log_absentees'];
$class_log_cumulative_periodes=$_REQUEST['class_log_cumulative_periodes'];  
$class_log_remarks=strtoupper($_REQUEST["class_log_remarks"]);
$letc_emp_id=$login_emp_id;





$_SESSION["letc_username"];
if($today_date==$class_log_date){
$q="insert into class_log(class_log_subject,class_log_subject_code,class_log_date,class_log_period_of_the_day,class_log_topic,class_log_absentees,class_log_cumulative_periodes,class_log_remarks,letc_emp_id,class_log_todayornot)
 values
(
'$sub_name',
'$sub_code',
'$class_log_date',
'$class_log_period_of_the_day',
'$class_log_topic',
'$class_log_absentees',
'$class_log_cumulative_periodes',
'$class_log_remarks',
'$letc_emp_id',
1
);";

$st=mysqli_query($con,$q) or die(mysqli_error($con));
//header('Location: suss_newinsert.php');


if($st)
{
 

 
echo '<div id="id01" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container"><p class="w3-panel w3-green w3-round" >LOG ADDED '.$today_date.'<p></div></div></div>'; 
	  echo'<script>document.getElementById("id01").style.display="block"</script>';
}
else{
	echo '<div id="id01" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container"><p class="w3-panel w3-green w3-round" >ERROR! CAN NOT ADD LOG<p></div></div></div>'; 
	  echo'<script>document.getElementById("id01").style.display="block"</script>';
}	
	
}
//-------------------------------------------------------------------------------
else{
$q="insert into class_log(class_log_subject,class_log_subject_code,class_log_date,class_log_period_of_the_day,class_log_topic,class_log_absentees,class_log_cumulative_periodes,class_log_remarks,letc_emp_id,class_log_todayornot)
 values
(
'$sub_name',
'$sub_code',
'$class_log_date',
'$class_log_period_of_the_day',
'$class_log_topic',
'$class_log_absentees',
'$class_log_cumulative_periodes',
'$class_log_remarks',
'$letc_emp_id',
0
);";


$st=mysqli_query($con,$q) or die(mysqli_error($con));




if($st)
{
 

 
echo '<div id="id01" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container"><p class="w3-panel w3-green w3-round" >LOG ADDED TO EXPIRED LOG '.$today_date.'<p></div></div></div>'; 
	  echo'<script>document.getElementById("id01").style.display="block"</script>';
}
else{
	echo '<div id="id01" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container"><p class="w3-panel w3-green w3-round" >ERROR! CAN NOT ADD LOG<p></div></div></div>'; 
	  echo'<script>document.getElementById("id01").style.display="block"</script>';
}	
	
	
}
	}
//----/////////////////////////////////////////////--LEAVE--///////////////////////////////////////////////////////
else{
	
$log_type=strtoupper($_REQUEST['log_type']);	
$leave_type=strtoupper($_REQUEST['leave_type']);	
//$sub_details=explode("|",$_REQUEST['sub_name']);
//$sub_code=$sub_details[0];
//$sub_name==$sub_details[1];
$today_date=date("Y-m-d");
$class_log_date=$_REQUEST['class_log_date'];
//$class_log_period_of_the_day=$_REQUEST['class_log_period_of_the_day'];
//$class_log_topic=strtoupper($_REQUEST['class_log_topic']);
//$class_log_absentees=$_REQUEST['class_log_absentees'];
//$class_log_cumulative_periodes=$_REQUEST['class_log_cumulative_periodes'];  
$class_log_remarks=strtoupper($_REQUEST["class_log_remarks"]);
$letc_emp_id=$_SESSION["letc_username"];






if($today_date==$class_log_date){
$q="insert into class_log(class_log_date,class_log_todayornot,class_log_remarks,class_log_type,class_log_leave_type,letc_emp_id)
 values
(
'$class_log_date',
1,
'$class_log_remarks',
'$log_type',
'$leave_type',
'$letc_emp_id'
);";

$st=mysqli_query($con,$q) or die(mysqli_error($con));
//header('Location: suss_newinsert.php');


if($st)
{
 

 
echo '<div id="id01" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container"><p class="w3-panel w3-green w3-round" >LEAVE ADDED '.$today_date.'<p></div></div></div>'; 
	  echo'<script>document.getElementById("id01").style.display="block"</script>';
}
else{
	echo '<div id="id01" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container"><p class="w3-panel w3-green w3-round" >ERROR! CAN NOT ADD LEAVE<p></div></div></div>'; 
	  echo'<script>document.getElementById("id01").style.display="block"</script>';
}	
	
}
//-------------------------------------------------------------------------------
else{
$q="insert into class_log(class_log_date,class_log_todayornot,class_log_remarks,class_log_type,class_log_leave_type)
 values
(
'$class_log_date',
0,
'$class_log_remarks',
'$log_type',
'$leave_type'
);";


$st=mysqli_query($con,$q) or die(mysqli_error($con));




if($st)
{
 

 
echo '<div id="id01" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container"><p class="w3-panel w3-green w3-round" >LEAVE ADDED TO EXPIRED LEAVE '.$today_date.'<p></div></div></div>'; 
	  echo'<script>document.getElementById("id01").style.display="block"</script>';
}
else{
	echo '<div id="id01" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container"><p class="w3-panel w3-green w3-round" >ERROR! CAN NOT ADD LEAVE<p></div></div></div>'; 
	  echo'<script>document.getElementById("id01").style.display="block"</script>';
}	
	
	
}	
	
	
	
}
	

}


?>









<br/>







<form action="" class=" w3-card-4   w3-padding" method="post" enctype="multipart/form-data" align="center">
<center><p class="w3-blue">LOG FORM</p></center>

<input type="hidden" name="new" value="1" />

<div class="w3-row">
<label class="w3-label w3-half" id="log_type_l" >SELECT LOG TYPE</label>
<select class="w3-input w3-half w3-border w3-margin-bottom" onchange="log_type_chk()" id="log_type" name="log_type" required>
	<option value="">SELECT LOG TYPE</option>  
<option value="LEAVE">LEAVE</option>
  <option value="NORMAL">NORMAL</option>
</select> 

</div>


<div class="w3-row">
<label id="leave_type_l" class="w3-label w3-half">SELECT LEAVE TYPE</label>
<select class="w3-input w3-half w3-border w3-margin-bottom" id="leave_type" name="leave_type" required>
	<option value="">SELECT LEAVE TYPE</option>  
<option value="LEAVE1">LEAVE1</option>
  <option value="LEAVE2">LEAVE2</option>
  <option value="LEAVE3">LEAVE3</option>
</select> 

</div>






<div class="w3-row">
<label id="sub_name_1" class="w3-label w3-half">SELECT SUBJECT</label>
<input  class="w3-input w3-border w3-half" list="brow" id="sub_name" name="sub_name" placeholder="ENTER SUBJECT CODE" required />
<datalist id="brow">
  <?php
$query_bank='select * from sub_db where sub_allotted ="'.$login_emp_id.'"';
$result = mysqli_query($con,$query_bank) or die(mysql_error($con));

while($row = mysqli_fetch_array($result))
	{ 
?>

<option value="<?php echo $row['sub_name'].'|'.$row['sub_code'];?>"><?php echo $row['sub_code'];?></option>
	<?php } ?>
</datalist> 

</div>

<br/>

<div class="w3-row">
<label class="w3-label w3-half" id="class_log_date_chk_l">ENTER DATE</label> 
<input class=" w3-input w3-border w3-half" type="date" id="class_log_date_chk" onchange="date_chk()" name="class_log_date"  placeholder="ENTER LOG DATE" required  /> 

</div>

<br/>
<div class="w3-row">
<div class="date_dis" id="date_dis"></div>
</div>
<br/>





<div class="w3-row">
<label class="  w3-half" id="class_log_period_of_the_day_l" >ENTER PERIOD OF THE DAY: </label> 
<input class=" w3-input w3-border w3-half" type="number" id="class_log_period_of_the_day" name="class_log_period_of_the_day"  placeholder="ENTER PERIOD OF THE DAY" required  /> 
</div>
<br/>


<div class="w3-row">
<label class="w3-half" id="class_log_topic_l">ENTER TOPIC COVERED: </label> 
<input class=" w3-input w3-border w3-half" type="text" id="class_log_topic" name="class_log_topic"  placeholder="ENTER TOPIC COVERED" required  /> 
</div>
<br/>
<div class="w3-row">
<label class="w3-half" id="class_log_absentees_l">ENTER ABSENTEES: </label> 
<input class=" w3-input w3-border w3-half"  type="NUMBER" id="class_log_absentees" name="class_log_absentees"  placeholder="ENTER ABSENTEES" required  /> 
</div>
<br/>
<div class="w3-row">
<label class="w3-half" id="class_log_cumulative_periodes_l">ENTER CUMULATIVE PERIODES</label> 
<input class=" w3-input w3-border w3-half"  type="text" name="class_log_cumulative_periodes"  id="class_log_cumulative_periodes" placeholder="ENTER CUMULATIVE PERIODES" required  /> 

</div>

<br/>

<div class="w3-row">
<label class="w3-half" id="class_log_remarks_l">REMARKS</label> 

<textarea  class="w3-half w3-textarea" name="class_log_remarks" id="class_log_remarks" width="300px" height="300px">NONE</textarea>
</div>
<br/>



<center><input align="center"  type="submit" value="ADD LOG" class="w3-btn  w3-center w3-blue" id="add_btn" name="" > </center>


</form>





<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function date_chk()
{
var msg='<div class="w3-panel w3-red w3-display-container"> <span onclick="close_me()" id="close_alert" class="w3-button w3-large w3-display-topright">&times;</span><h3>Alert!</h3><p>TREATED AS EXPIRED LOG. NEED PRINCIPAL APPROVAL</p></div>';

	var x=document.getElementById('class_log_date_chk').value;
	//document.getElementById('date_dis').innerHTML=x;
	
	var cdate=new Date();
	var day=cdate.getDate();
	var month =cdate.getMonth();
	var year =cdate.getFullYear();
	var month2 = new Array();
  month2[0] = "01";
  month2[1] = "02";
  month2[2] = "03";
  month2[3] = "04";
  month2[4] = "05";
  month2[5] = "06";
  month2[6] = "07";
  month2[7] = "08";
  month2[8] = "09";
  month2[9] = "10";
  month2[10] = "11";
  month2[11] = "12";
  if(day<=9)
  {
	var todaydate=year+'-'+month2[month]+'-'+'0'+day;
  }
  else{
	 var todaydate=year+'-'+month2[month]+'-'+day; 
  }
	if(x!=todaydate)
	{
	document.getElementById('date_dis').innerHTML=msg;
	}
	else{
		document.getElementById('date_dis').innerHTML="";
	}
}

function close_me()
{
	x=document.getElementById('close_alert');
	x.parentElement.style.display='none';
}
</script>


<br/>



</div>
<?php include 'footer.php';?>

<script>
function log_type_chk(){
var isleave=document.getElementById("log_type").value;

if(isleave!='LEAVE')
{

	
	document.getElementById("leave_type").disabled = true;
	document.getElementById("leave_type").style.display = "none";
	document.getElementById("leave_type_l").disabled = true;
	document.getElementById("leave_type_l").style.display = "none";	
	var color_1='gray';
	var color="";
	
	//document.getElementById("leave_type").style.background = color;

	
	
	
	

	document.getElementById("sub_name").disabled = false;
	//document.getElementById("brow").disabled = false;
	//document.getElementById("class_log_date_chk").disabled = false;
	document.getElementById("class_log_period_of_the_day").disabled = false;
	document.getElementById("class_log_topic").disabled = false;
	document.getElementById("class_log_absentees").disabled = false;
	document.getElementById("class_log_cumulative_periodes").disabled = false;
	//-----------------------------------------------------------------------
	document.getElementById("sub_name_1").disabled = false;
		//document.getElementById("brow").disabled = true;
	//document.getElementById("class_log_date_chk_l").disabled = false;
	document.getElementById("class_log_period_of_the_day_l").disabled = false;
	document.getElementById("class_log_topic_l").disabled = false;
	document.getElementById("class_log_absentees_l").disabled = false;
	document.getElementById("class_log_cumulative_periodes_l").disabled = false;
	
	
	
	document.getElementById("sub_name").style.background = color;
	//document.getElementById("brow").style.background = color;
	//document.getElementById("class_log_date_chk").style.background = color;
	document.getElementById("class_log_period_of_the_day").style.background = color;
	document.getElementById("class_log_topic").style.background = color;
	document.getElementById("class_log_absentees").style.background = color;
	document.getElementById("class_log_cumulative_periodes").style.background = color;
	
	document.getElementById("sub_name").style.display = "block";
	//document.getElementById("brow").style.display = "block";
	document.getElementById("class_log_date_chk").style.display = "block";
	document.getElementById("class_log_period_of_the_day").style.display = "block";
	document.getElementById("class_log_topic").style.display = "block";
	document.getElementById("class_log_absentees").style.display = "block";
	document.getElementById("class_log_cumulative_periodes").style.display = "block";
	/*-------------------------------------------------------------------------------*/
	document.getElementById("sub_name_1").style.display = "block";
	//document.getElementById("class_log_date_chk_l").style.display = "block";
	document.getElementById("class_log_period_of_the_day_l").style.display = "block";
	document.getElementById("class_log_topic_l").style.display = "block";
	document.getElementById("class_log_absentees_l").style.display = "block";
	document.getElementById("class_log_cumulative_periodes_l").style.display = "block";
	
	
	
	
	
	
	
	
	
	
	
	
}
else{
	document.getElementById("leave_type").disabled = false;
	document.getElementById("leave_type").style.display = "block";
	document.getElementById("leave_type_l").disabled = false;
	document.getElementById("leave_type_l").style.display = "block";	
	var color='gray';
	//document.getElementById("leave_type").style.background = color;
	
	
	

	document.getElementById("sub_name").disabled = true;
	//document.getElementById("brow").disabled = true;
	//document.getElementById("class_log_date_chk").disabled = true;
	document.getElementById("class_log_period_of_the_day").disabled = true;
	document.getElementById("class_log_topic").disabled = true;
	document.getElementById("class_log_absentees").disabled = true;
	document.getElementById("class_log_cumulative_periodes").disabled = true;
	//-----------------------------------------------------------------------
	document.getElementById("sub_name_1").disabled = true;
		//document.getElementById("brow").disabled = true;
	//document.getElementById("class_log_date_chk_l").disabled = true;
	document.getElementById("class_log_period_of_the_day_l").disabled = true;
	document.getElementById("class_log_topic_l").disabled = true;
	document.getElementById("class_log_absentees_l").disabled = true;
	document.getElementById("class_log_cumulative_periodes_l").disabled = true;
	
	
	
	document.getElementById("sub_name").style.background = color;
	//document.getElementById("brow").style.background = color;
	//document.getElementById("class_log_date_chk").style.background = color;
	document.getElementById("class_log_period_of_the_day").style.background = color;
	document.getElementById("class_log_topic").style.background = color;
	document.getElementById("class_log_absentees").style.background = color;
	document.getElementById("class_log_cumulative_periodes").style.background = color;
	
	document.getElementById("sub_name").style.display = "none";
	//document.getElementById("brow").style.display = "none";
	//document.getElementById("class_log_date_chk").style.display = "none";
	document.getElementById("class_log_period_of_the_day").style.display = "none";
	document.getElementById("class_log_topic").style.display = "none";
	document.getElementById("class_log_absentees").style.display = "none";
	document.getElementById("class_log_cumulative_periodes").style.display = "none";
	/*-------------------------------------------------------------------------------*/
	document.getElementById("sub_name_1").style.display = "none";
	//document.getElementById("class_log_date_chk_l").style.display = "none";
	document.getElementById("class_log_period_of_the_day_l").style.display = "none";
	document.getElementById("class_log_topic_l").style.display = "none";
	document.getElementById("class_log_absentees_l").style.display = "none";
	document.getElementById("class_log_cumulative_periodes_l").style.display = "none";
	
	


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
 </body>



</html>
