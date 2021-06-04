<?php 
include 'db.php';
function calc_emp_progress($emp_code,$question,$sub_code)
{
	include 'db.php';
		$q1_query_question="Select * from que where que_no='".$question."'";
		$result_question = mysqli_query($con,$q1_query_question);
		$question_data_row=mysqli_fetch_assoc($result_question);
		$question_data=$question_data_row['que'];
		
		
		$q1_query_very_poor="Select ".$question." from feed where ".$question."='VERY POOR' and emp_code=".$emp_code." and sub_code='".$sub_code."';";
		$result_q1_very_poor = mysqli_query($con,$q1_query_very_poor);
		$num_q1_very_poor=mysqli_num_rows($result_q1_very_poor);	
		
		$q1_query_poor="Select ".$question." from feed where ".$question."='POOR' and emp_code=".$emp_code." and sub_code='".$sub_code."';";
		$result_q1_poor = mysqli_query($con,$q1_query_poor);
		$num_q1_poor=mysqli_num_rows($result_q1_poor);	
		
		$q1_query_average="Select ".$question." from feed where ".$question."='AVERAGE' and emp_code=".$emp_code." and sub_code='".$sub_code."';";
		$result_q1_average = mysqli_query($con,$q1_query_average);
		$num_q1_average=mysqli_num_rows($result_q1_average);	
		
		$q1_query_good="Select ".$question." from feed where ".$question."='GOOD' and emp_code=".$emp_code." and sub_code='".$sub_code."';";
		$result_q1_good = mysqli_query($con,$q1_query_good);
		$num_q1_good=mysqli_num_rows($result_q1_good);	
		
		$q1_query_very_good="Select ".$question." from feed where ".$question."='VERY GOOD' and emp_code=".$emp_code." and sub_code='".$sub_code."';";
		$result_q1_very_good = mysqli_query($con,$q1_query_very_good);
		$num_q1_very_good=mysqli_num_rows($result_q1_very_good);
		
		$data = array("very_poor"=>$num_q1_very_poor, "poor"=>$num_q1_poor, "average"=>$num_q1_average,"good"=>$num_q1_good,"very_good"=>$num_q1_very_good,"question_data"=>$question_data);
		return $data;
}


?>
