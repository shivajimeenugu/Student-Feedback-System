<!DOCTYPE html>
<html>


<head>
<link rel="stylesheet" href="w3.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript"/>
<meta charset="utf-8"/>
<link rel="stylesheet" href="w3.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
  </head>




<div class="w3-container w3-animate-right" id="main">
             <?php include 'header.php';
			    include 'db.php';
				include 'chart_lib.php';
				$emp_code=$_REQUEST['emp_code'];
				$sub_code=$_REQUEST['sub_code'];
				$data_q1=calc_emp_progress($emp_code,'q1',$sub_code);
				$data_q2=calc_emp_progress($emp_code,'q2',$sub_code);
				$data_q3=calc_emp_progress($emp_code,'q3',$sub_code);
				$data_q4=calc_emp_progress($emp_code,'q4',$sub_code);
				$data_q5=calc_emp_progress($emp_code,'q5',$sub_code);
				$data_q6=calc_emp_progress($emp_code,'q6',$sub_code);
				$data_q7=calc_emp_progress($emp_code,'q7',$sub_code);
				$data_q8=calc_emp_progress($emp_code,'q8',$sub_code);
				$data_q9=calc_emp_progress($emp_code,'q9',$sub_code);
				$data_q10=calc_emp_progress($emp_code,'q10',$sub_code);
				$data_q11=calc_emp_progress($emp_code,'q11',$sub_code);
				$data_q12=calc_emp_progress($emp_code,'q12',$sub_code);
				$data_q13=calc_emp_progress($emp_code,'q13',$sub_code);
				$data_q14=calc_emp_progress($emp_code,'q14',$sub_code);
			 ?>
</div>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['VERY POOR',<?php echo $data_q1["very_poor"];  ?>],
          ['POOR',<?php echo $data_q1["poor"];  ?>],
          ['AVERAGE', <?php echo $data_q1["average"];  ?>],
          ['GOOD', <?php echo $data_q1["good"];  ?>],
          ['VERY GOOD',    <?php echo $data_q1["very_good"];  ?>]
        ]);

        var options = {
          title: <?php echo '"'.$data_q1['question_data'].'"';  ?>
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
	
	
	
	
	
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['VERY POOR',<?php echo $data_q2["very_poor"];  ?>],
          ['POOR',<?php echo $data_q2["poor"];  ?>],
          ['AVERAGE', <?php echo $data_q2["average"];  ?>],
          ['GOOD', <?php echo $data_q2["good"];  ?>],
          ['VERY GOOD',    <?php echo $data_q2["very_good"];  ?>]
        ]);

        var options = {
          title: <?php echo '"'.$data_q2['question_data'].'"';  ?>
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_2'));

        chart.draw(data, options);
      }
    </script>
	
	
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['VERY POOR',<?php echo $data_q3["very_poor"];  ?>],
          ['POOR',<?php echo $data_q3["poor"];  ?>],
          ['AVERAGE', <?php echo $data_q3["average"];  ?>],
          ['GOOD', <?php echo $data_q3["good"];  ?>],
          ['VERY GOOD',    <?php echo $data_q3["very_good"];  ?>]
        ]);

        var options = {
          title: <?php echo '"'.$data_q3['question_data'].'"';  ?>
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3'));

        chart.draw(data, options);
      }
    </script>
	
	
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['VERY POOR',<?php echo $data_q4["very_poor"];  ?>],
          ['POOR',<?php echo $data_q1["poor"];  ?>],
          ['AVERAGE', <?php echo $data_q4["average"];  ?>],
          ['GOOD', <?php echo $data_q4["good"];  ?>],
          ['VERY GOOD',    <?php echo $data_q4["very_good"];  ?>]
        ]);

        var options = {
          title: <?php echo '"'.$data_q4['question_data'].'"';  ?>
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_4'));

        chart.draw(data, options);
      }
    </script>
	
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['VERY POOR',<?php echo $data_q5["very_poor"];  ?>],
          ['POOR',<?php echo $data_q5["poor"];  ?>],
          ['AVERAGE', <?php echo $data_q5["average"];  ?>],
          ['GOOD', <?php echo $data_q5["good"];  ?>],
          ['VERY GOOD',    <?php echo $data_q5["very_good"];  ?>]
        ]);

        var options = {
          title: <?php echo '"'.$data_q5['question_data'].'"';  ?>
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_5'));

        chart.draw(data, options);
      }
    </script>
	
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['VERY POOR',<?php echo $data_q6["very_poor"];  ?>],
          ['POOR',<?php echo $data_q6["poor"];  ?>],
          ['AVERAGE', <?php echo $data_q6["average"];  ?>],
          ['GOOD', <?php echo $data_q6["good"];  ?>],
          ['VERY GOOD',    <?php echo $data_q6["very_good"];  ?>]
        ]);

        var options = {
          title: <?php echo '"'.$data_q6['question_data'].'"';  ?>
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_6'));

        chart.draw(data, options);
      }
    </script>
	
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['VERY POOR',<?php echo $data_q7["very_poor"];  ?>],
          ['POOR',<?php echo $data_q7["poor"];  ?>],
          ['AVERAGE', <?php echo $data_q7["average"];  ?>],
          ['GOOD', <?php echo $data_q7["good"];  ?>],
          ['VERY GOOD',    <?php echo $data_q7["very_good"];  ?>]
        ]);

        var options = {
          title: <?php echo '"'.$data_q7['question_data'].'"';  ?>
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_7'));

        chart.draw(data, options);
      }
    </script>
	
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['VERY POOR',<?php echo $data_q8["very_poor"];  ?>],
          ['POOR',<?php echo $data_q8["poor"];  ?>],
          ['AVERAGE', <?php echo $data_q8["average"];  ?>],
          ['GOOD', <?php echo $data_q8["good"];  ?>],
          ['VERY GOOD',    <?php echo $data_q8["very_good"];  ?>]
        ]);

        var options = {
          title: <?php echo '"'.$data_q8['question_data'].'"';  ?>
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_8'));

        chart.draw(data, options);
      }
    </script>
	
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['VERY POOR',<?php echo $data_q9["very_poor"];  ?>],
          ['POOR',<?php echo $data_q9["poor"];  ?>],
          ['AVERAGE', <?php echo $data_q9["average"];  ?>],
          ['GOOD', <?php echo $data_q9["good"];  ?>],
          ['VERY GOOD',    <?php echo $data_q9["very_good"];  ?>]
        ]);

        var options = {
          title: <?php echo '"'.$data_q9['question_data'].'"';  ?>
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_9'));

        chart.draw(data, options);
      }
    </script>
	
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['VERY POOR',<?php echo $data_q10["very_poor"];  ?>],
          ['POOR',<?php echo $data_q10["poor"];  ?>],
          ['AVERAGE', <?php echo $data_q10["average"];  ?>],
          ['GOOD', <?php echo $data_q10["good"];  ?>],
          ['VERY GOOD',    <?php echo $data_q10["very_good"];  ?>]
        ]);

        var options = {
          title: <?php echo '"'.$data_q10['question_data'].'"';  ?>
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_10'));

        chart.draw(data, options);
      }
    </script>
	
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['VERY POOR',<?php echo $data_q11["very_poor"];  ?>],
          ['POOR',<?php echo $data_q11["poor"];  ?>],
          ['AVERAGE', <?php echo $data_q11["average"];  ?>],
          ['GOOD', <?php echo $data_q11["good"];  ?>],
          ['VERY GOOD',    <?php echo $data_q11["very_good"];  ?>]
        ]);

        var options = {
          title: <?php echo '"'.$data_q11['question_data'].'"';  ?>
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_11'));

        chart.draw(data, options);
      }
    </script>
	
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['VERY POOR',<?php echo $data_q12["very_poor"];  ?>],
          ['POOR',<?php echo $data_q12["poor"];  ?>],
          ['AVERAGE', <?php echo $data_q12["average"];  ?>],
          ['GOOD', <?php echo $data_q12["good"];  ?>],
          ['VERY GOOD',    <?php echo $data_q12["very_good"];  ?>]
        ]);

        var options = {
          title: <?php echo '"'.$data_q12['question_data'].'"';  ?>
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_12'));

        chart.draw(data, options);
      }
    </script>
	
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['VERY POOR',<?php echo $data_q13["very_poor"];  ?>],
          ['POOR',<?php echo $data_q13["poor"];  ?>],
          ['AVERAGE', <?php echo $data_q13["average"];  ?>],
          ['GOOD', <?php echo $data_q13["good"];  ?>],
          ['VERY GOOD',    <?php echo $data_q13["very_good"];  ?>]
        ]);

        var options = {
          title: <?php echo '"'.$data_q13['question_data'].'"';  ?>
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_13'));

        chart.draw(data, options);
      }
    </script>
	
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['VERY POOR',<?php echo $data_q14["very_poor"];  ?>],
          ['POOR',<?php echo $data_q14["poor"];  ?>],
          ['AVERAGE', <?php echo $data_q14["average"];  ?>],
          ['GOOD', <?php echo $data_q14["good"];  ?>],
          ['VERY GOOD',    <?php echo $data_q14["very_good"];  ?>]
        ]);

        var options = {
          title: <?php echo '"'.$data_q14['question_data'].'"';  ?>
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_14'));

        chart.draw(data, options);
      }
    </script>
	
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['VERY POOR',<?php echo $data_q1["very_poor"];  ?>],
          ['POOR',<?php echo $data_q1["poor"];  ?>],
          ['AVERAGE', <?php echo $data_q1["average"];  ?>],
          ['GOOD', <?php echo $data_q1["good"];  ?>],
          ['VERY GOOD',    <?php echo $data_q1["very_good"];  ?>]
        ]);

        var options = {
          title: <?php echo '"'.$data_q1['question_data'].'"';  ?>
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
	
	

  <body>
  <div class="w3-row">
    <div id="piechart" class="w3-card-4  w3-quarter" ></div>
	<div id="piechart_2" class="w3-card-4  w3-quarter" ></div>
	<div id="piechart_3" class="w3-card-4  w3-quarter" ></div>
	<div id="piechart_4" class="w3-card-4  w3-quarter" ></div>
	</div>
  <div class="w3-row">
	<div id="piechart_5" class="w3-card-4  w3-quarter" ></div>
	<div id="piechart_6" class="w3-card-4  w3-quarter" ></div>
	<div id="piechart_7" class="w3-card-4  w3-quarter" ></div>
	<div id="piechart_8" class="w3-card-4  w3-quarter" ></div>
	</div>
	  <div class="w3-row">
	<div id="piechart_9" class="w3-card-4  w3-quarter" ></div>
	<div id="piechart_10" class="w3-card-4  w3-quarter" ></div>
	<div id="piechart_11" class="w3-card-4  w3-quarter" ></div>
	<div id="piechart_12" class="w3-card-4  w3-quarter" ></div>
	</div>
	  <div class="w3-row">
	<div id="piechart_13" class="w3-card-4  w3-half" ></div>
	<div id="piechart_14" class="w3-card-4  w3-half" ></div>
</div>
  </body>



















</html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

</script>