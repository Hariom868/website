<?php
session_start();
include_once('pdo.php');
?>
<?php
 $dataviewing=new Database_Connection();
              $sql = $dataviewing->viewingdata();//it basically send the value to the function viewing 
             $data = array();
			 $value = array();
			 $datapoints = array();
                // this will continue till it have any row where there is any expenses and delete function take you to the delete.php file with Regdate to it so that it can be deleted
              while ($row=mysqli_fetch_array($sql)) {
				  array_push($data,$row['num']);
				  
				  $timestamp = strtotime($row['registerdate']);
				  $datestamp = date('d-m-Y', $timestamp);
				  array_push($value,$datestamp);
				  $data = array("y" => $row['num'], "label" => $datestamp);
					array_push($datapoints,$data);				  
 }?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Doctor/Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../CSS/dashboard.css">
   <script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "No Of Patients"
	},
	axisY: {
		title: "Patients"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($datapoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>

<body>
    <header>
        <a class="btn  btn-primary btn-lg btn-hover-shadow mb-3 px-4 mx-2" href="logout.php">Log-Out</a>
        
</header>
        <div class="container important text-center">
            <div class="card dashboard">
  <div class="card-body">
      <div class="card-title mb-3 pb-3">  <h1 class="display-2">Welcome <?php echo $_SESSION['Username'] ?></h1></div>
	    <hr class="my-4 " style={{ width: '75%', marginLeft: '15%' }}></hr>
      <div class="card-text">
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
</div>
  </div>
</div>
</div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>