<?php
include('db.php');
include("letc_auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from class_log where class_log_id=$id and class_log_edit_flag=1";
$result = mysqli_query($con,$query) or die(mysql_error($con));
$row= mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>EDIT LOG FORM</title>

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

<div class="w3-container" >

<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$no=$_REQUEST['no'];
$name=$_REQUEST['name'];
$author=$_REQUEST['author'];
$bookcategory=$_REQUEST['bookcategory'];
$publisher=$_REQUEST['publisher'];
$pyear=$_REQUEST['pyear'];
$edition=$_REQUEST['edition'];
$pages=$_REQUEST['pages'];
$price=$_REQUEST['price'];
$rack=$_REQUEST['rack'];

$update="update bookdb set no='".$no."',name='".$name."',author='".$author."',bookcategory='".$bookcategory."',publisher='".$publisher."',pyear='".$pyear."',edition='".$edition."',pages='".$pages."',price='".$price."',rack='".$rack."',status='1',pin='0' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error($con));
$status = "Record Updated Successfully. </br></br><a href='book_view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>

<form action="" class=" w3-card-4   w3-padding" method="post" enctype="multipart/form-data" align="center">
<center><p class="w3-blue">EDIT FORM</p></center>

<input type="hidden" name="new" value="1" />

<div class="w3-row">
<lable class="w3-label w3-half">SELECT SUBJECT</lable>
<input  class="w3-input w3-border w3-half"   list="brow" name="sub_code" placeholder="ENTER SUBJECT CODE"/>
<datalist id="brow">
  <?php
$query_bank='select * from sub_db where sub_allotted ="'.$login_emp_id.'"';
$result = mysqli_query($con,$query_bank) or die(mysql_error($con));
echo'<option value="'.$row['class_log_subject'].'">'.$row['sub_code'].'</option>';
while($row2 = mysqli_fetch_array($result))
	{ 
?>

<option value="<?php echo $row2['sub_name'];?>"><?php echo $row2['sub_code'];?></option>
	<?php } ?>
</datalist> 

</div>

<br/>

<div class="w3-row">
<lable class="w3-label w3-half">ENTER DATE</lable> 
<input class=" w3-input w3-border w3-half" type="date" name="class_log_date"  value="<?php echo $row['class_log_date']; ?>" disabled  /> 
</div>

<br/>


<div class="w3-row">
<lable class="  w3-half">ENTER PERIOD OF THE DAY: </lable> 
<input class=" w3-input w3-border w3-half" type="number" name="class_log_period_of_the_day"  value="<?php echo $row['class_log_period_of_day']; ?>" required  /> 
</div>
<br/>


<div class="w3-row">
<lable class="w3-half">ENTER TOPIC COVERED: </lable> 
<input class=" w3-input w3-border w3-half" type="text" name="class_log_topic"  value="<?php echo $row['class_log_topic']; ?>" required  /> 
</div>
<br/>
<div class="w3-row">
<lable class="w3-half">ENTER ABSENTEES: </lable> 
<input class=" w3-input w3-border w3-half"  type="NUMBER" name="class_log_absentees"  value="<?php echo $row['class_log_absentees']; ?>" required  /> 
</div>
<br/>
<div class="w3-row">
<lable class="w3-half" >ENTER CUMULATIVE PERIODES</lable> 
<input class=" w3-input w3-border w3-half"  type="text" name="class_log_cumulative_periodes"  value="<?php echo $row['class_log_cumulative_periodes']; ?>" required  /> 

</div>

<br/>

<div class="w3-row">
<lable class="w3-half" >REMARKS</lable> 

<textarea  class="w3-half w3-textarea" name="class_log_remarks" value="<?php echo $row['class_log_remarks']; ?>" width="300px" height="300px">NONE</textarea>
</div>
<br/>



<center><input align="center"  type="submit" class="w3-btn  w3-center w3-blue" name="" > </center>


</form>

<?php } ?>

<br /><br /><br /><br />







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
