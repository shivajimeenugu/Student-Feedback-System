<?php include("hod_auth.php"); 



?>
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
$emp_name=strtoupper($_REQUEST['emp_name']);
$emp_code=strtoupper($_REQUEST['emp_code']);
$emp_branch=$_SESSION["hod_username"];
$emp_desi=strtoupper($_REQUEST['emp_desi']);
$emp_mail=$_REQUEST['emp_mail'];

$query = "SELECT * from letc where emp_code=$emp_code";
$result = mysqli_query($con,$query) or die(mysql_error($con));
$row= mysqli_fetch_assoc($result);

if(@mysqli_num_rows($result) > 0){
	echo '<div id="id01" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container"><p class="w3-panel w3-green w3-round" >ALREADY LECTURER ADDED<p></div></div></div>'; 
	  echo'<script>document.getElementById("id01").style.display="block"</script>';
	
}
else{
$q="INSERT INTO `letc`(`emp_name`, `emp_code`, `emp_branch`, `emp_dg`,`emp_mail`) 
VALUES(
'$emp_name',
'$emp_code',
'$emp_branch',
'$emp_desi',
'$emp_mail'
);";

$st=mysqli_query($con,$q) or die(mysqli_error($con));
//header('Location: suss_newinsert.php');


if($st)
{
 

 
echo '<div id="id01" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container"><p class="w3-panel w3-green w3-round" >LECTURER ADDED <p></div></div></div>'; 
	  echo'<script>document.getElementById("id01").style.display="block"</script>';
}
else{
	echo '<div id="id01" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container"><p class="w3-panel w3-green w3-round" >ERROR! CAN NOT ADD LECTURER<p></div></div></div>'; 
	  echo'<script>document.getElementById("id01").style.display="block"</script>';
}	
	
}
//-------------------------------------------------------------------------------
	

}




?>









<br/>







<form action="" class=" w3-card-4   w3-padding" method="post" enctype="multipart/form-data" align="center">
<center><p class="w3-blue">ADD Lecturer </p></center>

<input type="hidden" name="new" value="1" />

<div class="w3-row">
<label class="w3-label w3-half">FULL NAME OF LECTURER </label>
<input type="text"  class="w3-input w3-border w3-half"  name="emp_name" placeholder="SELECT FULL NAME OF LECTURER" required />

</div>

<br/>

<div class="w3-row">
<label class="w3-label w3-half">ENTER EMPLOYEE CODE</label> 
<input class=" w3-input w3-border w3-half" type="text" id="emp_code"  name="emp_code"  placeholder="ENTER EMPLOYEE CODE" required  /> 

</div>

<br/>

<div class="w3-row">
<label class="w3-label w3-half">LECTURER BRANCH</label> 
<select class="w3-select w3-border w3-half" name="emp_branch" disabled >
<option value="<?php echo $_SESSION["hod_username"]; ?>"><?php echo $_SESSION["hod_username"]; ?></option>
<option value="DCME">DCME</option>
  <option value="DECE">DECE</option>
  <option value="DEEE">DEEE</option>
  <option value="DME">DME</option>
</select>
</div>

<br/>



<div class="w3-row">
<label class="w3-half">ENTER DESIGNATION : </label> 
<input class=" w3-input w3-border w3-half" type="text" name="emp_desi"  placeholder="ENTER DESIGNATION" required  /> 
</div>
<br/>



<div class="w3-row">
<label class="w3-half">ENTER EMPLOYEE MAIL: </label> 
<input class=" w3-input w3-border w3-half"  type="text" name="emp_mail"  placeholder="ENTER EMPLOYEE MAIL" required  /> 
</div>
<br/>

<center><input align="center" value="ADD" type="submit" class="w3-btn  w3-center w3-blue" name="" > </center>


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
<th >EMPLOYEE DESIGNATION</th>
<th >EMPLOYEE BRANCH</th>
<th >EMPLOYEE MAIL</th>
<th colspan="2">OPTIONS</th>
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
<td align="center"><?php echo $row["emp_code"]; ?></td>
<td align="center"><?php echo $row["emp_name"]; ?></td>
<td align="center"><?php echo $row["emp_dg"]; ?></td>
<td align="center"><?php echo $row["emp_branch"]; ?></td>
<td align="center"><?php echo $row["emp_mail"]; ?></td>
<td><button onclick="window.location.href ='hod_delete.php?id=<?php echo $row["emp_code"]; ?>';"> DEELTE </button><br></td>
<td><button onclick="window.location.href ='#';"> EDIT </button><br></td>
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
