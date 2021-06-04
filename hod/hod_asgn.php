<?php include("hod_auth.php"); 



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="font_assom.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> FORM</title>
<link rel="stylesheet" href="/YC_FEED/select/css/select2.min.css" />
<script src="/YC_FEED/select/js/jquery.min.js">
</script>
</head>
<body  >
     <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
                             <button onclick="w3_close()" class="w3-bar-item w3-button w3-large">Close &times;</button>
                                       <a class="w3-bar-item w3-button" href="index.php">HOME</a>

                                       <a class="w3-bar-item w3-button" href="hod_dashboard.php">DASHBOARD</a>
		
		

                                       

                                       <a class="w3-bar-item w3-button" href="hod_logout.php">LOGOUT</a>
                             
            </div> 


<div class="w3-container w3-animate-right" id="main">
            <?php include 'header.php';?>

     

<div class="w3-container" >

<?php
include 'db.php';





if(isset($_POST['new']) && $_POST['new']==1)
{
$sub_code_recived=$_REQUEST['emp_subject_asgn'];
$emp_code_recived=$_REQUEST['emp_code_asgn'];
//echo $sub_code_recived.'|----------|'.$emp_code_recived;


$q="UPDATE sub_db SET sub_allotted=$emp_code_recived , a_flag=1 WHERE sub_code='$sub_code_recived' ";

$st=mysqli_query($con,$q) or die(mysqli_error($con));
//header('Location: suss_newinsert.php');


if($st)
{
 

 
echo '<div id="id01" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container"><p class="w3-panel w3-green w3-round" >SUBJECT ASSIGNED <p></div></div></div>'; 
	  echo'<script>document.getElementById("id01").style.display="block"</script>';
}
else{
	echo '<div id="id01" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container"><p class="w3-panel w3-green w3-round" >ERROR! CAN NOT ASSIGN SUBJECT<p></div></div></div>'; 
	  echo'<script>document.getElementById("id01").style.display="block"</script>';
}	
	

//-------------------------------------------------------------------------------
	

}




?>









<br/>







<form action="" class=" w3-card-4   w3-padding" method="post" enctype="multipart/form-data" align="center">
<center><p class="w3-blue">ADD Lecturer </p></center>

<input type="hidden" name="new" value="1" />











<div class="w3-row">
<label class="w3-label w3-half">LECTURER</label> 
<div  class="w3-select w3-border w3-half"  >
<select id="emp_code_data" style="width:300px;" name="emp_code_asgn" required>
  <?php
  $emp_code_asgn_letc=$_SESSION['hod_username'];
$query_letc_list="SELECT * FROM letc where emp_branch='$_SESSION[hod_username]'";
$result_query_letc_list = mysqli_query($con,$query_letc_list) or die(mysql_error($con));

while($row_query_letc_list = mysqli_fetch_array($result_query_letc_list))
	{ 
?>

<option value="<?php echo $row_query_letc_list['emp_code'];?>"><?php echo $row_query_letc_list['emp_name'];?>-<?php echo $row_query_letc_list['emp_code'];?></option>
	<?php } ?>
</select> 
</div>
</div>



<br/>

<div class="w3-row">
<label class="w3-label w3-half">SUBJECT</label> 
<div  class="w3-select w3-border w3-half" >
<select id="sub_db" style="width:300px;" name="emp_subject_asgn" required>
  <?php
  $emp_code_asgn_letc=$_SESSION['hod_username'];
$query_letc_list2="SELECT * FROM sub_db where sub_branch='$_SESSION[hod_username]' and a_flag=0";
$result_query_letc_list2 = mysqli_query($con,$query_letc_list2) or die(mysql_error($con));

while($row_query_letc_list2 = mysqli_fetch_array($result_query_letc_list2))
	{ 
?>

<option value="<?php echo $row_query_letc_list2['sub_code'];?>"><?php echo $row_query_letc_list2['sub_code'];?>-<?php echo $row_query_letc_list2['sub_name'];?></option>
	<?php } ?>
</select> 
</div>
</div>

<br/>


<center><input align="center" value="ASSIGN" type="submit" class="w3-btn  w3-center w3-blue" name="" > </center>


</form>

<?php 
if(true){
	$query = "SELECT * FROM letc where emp_branch='$_SESSION[hod_username]'";
$result = mysqli_query( $con, $query);
$row_count=@mysqli_num_rows($result);
echo '
	
<br/>

<br/>
<div class="w3-blue"><center>EMPLOYEES LIST</center></div>
<br/>
	<table style="border-collapse: collapse; border: 1px solid black;" class="w3-responsive w3-table-all">
						<thead>
						<tr><th colspan="9"></th></tr>
					<tr class="w3-indigo">						
<th>SI.NO</th>							
<th>EMPLOYEE CODE</th>						
<th>EMPLOYEE NAME</th>
<th >ASSIGNED SUBJECT</th>

				</tr>
				
				</thead>
				<tbody>
				
				
				
				
				';
if(@mysqli_num_rows($result) > 0)
	{
	
	echo '';
$row_span_flag=1;		
$count=1;		
while($row = mysqli_fetch_array($result))
	{
		echo'
			<tr class="w3-hover-grey ">';
			
			?>
			
	
	
<td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["emp_code"]; $im_emp_code=$row["emp_code"]; ?></td>
<td align="center"><?php 
$query_emp_name_im = "SELECT * FROM letc where emp_code='$im_emp_code'";
$result_emp_name_im = mysqli_query( $con, $query_emp_name_im);
$row_emp_name_im = mysqli_fetch_array($result_emp_name_im);
echo $row_emp_name_im['emp_name'];

 ?></td>

<td align="center"><?php 
$query_emp_name_im2 = "SELECT * FROM sub_db where sub_allotted='$im_emp_code'";
$result_emp_name_im2 = mysqli_query( $con, $query_emp_name_im2); 
$incount=1;
while($row_emp_name_im2 = mysqli_fetch_array($result_emp_name_im2))
	{
echo '<div class="w3-hover-red">'.$incount++.')'.$row_emp_name_im2["sub_name"].',<a href="hod_delete_sub.php?id='.$row_emp_name_im2["sub_code"].'" class="w3-button" ><i class="fa fa-minus-circle" style="font-size:20px;color:red"></i></a></div><br/>';
	}
 ?></td>

		</tr>
		<?php
		$count++;
		
	}
	}

else
{
	
	echo '<h1 class="w3-red">NO EMPLOYEES ARE FOUND</h1>';
	
}
echo '</table><br/>';
}

?>



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
<script src="/YC_FEED/select/js/select2.min.js"></script>
	   <script>
$("#emp_code_data").select2( {
	placeholder: "Select Employee",
	allowClear: true
	} );
</script> 

	   <script>
$("#sub_db").select2( {
	placeholder: "Select Subject",
	allowClear: true
	} );
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
