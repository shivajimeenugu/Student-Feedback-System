<?php

echo'<head><link rel="stylesheet" href="w3.css"><meta name="viewport" content="width=device-width, initial-scale=1"></head>';
include('db.php');
require('hod_auth.php');
$id=$_REQUEST['id'];
$sub_code_pre=$id;
$query_del_row = "select * from sub_db where sub_code='$id'";


$result_del_row = mysqli_query( $con, $query_del_row);

$count=1;


echo '<div id="id01" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container"><p class="w3-panel w3-green w3-round" >--->DEALLOCATE SUBJECT<---</p>
	  <table class="w3-table-all w3-responsive">
	  <tr>
<th>SI.NO</th>							
<th>SUBJECT CODE</th>						
<th>SUBJECT NAME</th>
<th >ASSGNED EMPLOYEE CODE</th>
<th >ASSGNED EMPLOYEE</th>
	  </tr>';
	  
while($row_del_row = mysqli_fetch_array($result_del_row))
	{
	  $get_emp_name=$row_del_row["sub_allotted"];
	  $query_del_row2 = "select * from letc where emp_code=$get_emp_name";
      $result_del_row2 = mysqli_query( $con, $query_del_row2);
	  $row_del_row2 = mysqli_fetch_array($result_del_row2);
	  echo'
	  <tr class="w3-hover-grey ">
			
	
	

		<td align="center">'. $count.'</td>
		<td align="center">'.$row_del_row["sub_code"].'</td>
		<td align="center">'.$row_del_row["sub_name"].'</td>
		<td align="center">'.$row_del_row["sub_allotted"].'</td>
		<td align="center">'.$row_del_row2["emp_name"].'</td>
';

}
	  echo'
		</tr>
	  </table>
	
	  
	  <p><form action="" method="post">
	  <label>DO U WANT TO DEALLOCATE SUBJECT FROM ABOVE EMPLOYEE?</label>
	 <select name="final_submit_chk" class="w3-select w3-panel w3-border w3-responsive w3-card w3-pale-red w3-round-xxlarge">
	
	  <option value="NO">NO</option>
	   <option value="YES">YES</option>
	 </select>
	 <center><input class="w3-button-blue" type="submit" ></input></center>
	 </form>
	  </p>
	  
	  </div>
	  
	  </div>
	  </div>'; 
	  
	  echo'<script>document.getElementById("id01").style.display="block"</script>';

if(isset($_POST['final_submit_chk']))
{
	$id=$_REQUEST['id'];
	$chk_flag=$_REQUEST['final_submit_chk'];
	if($chk_flag=='YES')
	{
$query = "UPDATE sub_db SET a_flag=0,sub_allotted=0 WHERE sub_code='$sub_code_pre'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));

if($result)
{
	echo '<div id="id02" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container"><p class="w3-panel w3-green w3-round" >SUCESSFULLY DEALLOCATED</p>
	 
	  <p><a class="w3-button w3-red" href="hod_asgn.php">DONE</a></p>
	  
	  </div>
	  
	  </div>
	  </div>';
echo'<script>document.getElementById("id02").style.display="block"</script>';	  
}
	
	else{
		echo '<div id="id03" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container"><p class="w3-panel w3-green w3-round" >!ERROR CAN"T DEALLOCATE</p>
	   <p><a class="w3-button w3-red" href="hod_asgn.php">DONE</a></p>
	 
	  
	  </div>
	  
	  </div>
	  </div>'; 
	  echo'<script>document.getElementById("id03").style.display="block"</script>';
	}
	}
	else{
		echo '<div id="id04" class="w3-modal  w3-animate-zoom">
    <div class="w3-modal-content w3-padding-16 w3-card">
      <div class="w3-container"><p class="w3-panel w3-green w3-round" >CANCLED......</p>
	  <p><a class="w3-button w3-red" href="hod_asgn.php">GO BACK</a></p>
	 
	  
	  </div>
	  
	  </div>
	  </div>
	  
	   ';
	  echo'<script>document.getElementById("id04").style.display="block"</script>';
	}
} 
?>