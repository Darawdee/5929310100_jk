<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="icon" href="img/icon.jpg">
</head>
<body>

<?php
 
	include "menu.php";
?>

<form action='reportCooperativeTraining.php' method='post'>
        <div class="row">
            <div class="col-sm-4"></div>

            <div class="col-sm-3">
            <div class='input-group'><span class='input-group-addon'>ปีการศึกษา</span><select class='form-control' name='search' ><option value=''>- แสดงทั้งหมด -</option><option value='2562'>2562</option></select></div>           
            </div>

            <div class='col-sm-1'>
            <input type='submit' name='searchbtn' class='btn btn-primary' value='ค้นหา'>
            </div>

            <div class="col-sm-4"></div>        
        </div><br><hr>     
        </form>

		
    <!-- --------------------------------------------------------- -->


    <!-- ====================การปุ่มแบ่งหลายหน้า================================= -->
 <!-- =============================================================================== -->

    <!-- ********แสดงกราฟ แยกตามสาขางาน************ -->
    
		 
	<?php
 $dataPoints = array(
	array("x" => 946665000000, "y" => 3289000),
	array("x" => 978287400000, "y" => 3830000),
	array("x" => 1009823400000, "y" => 2009000),
	array("x" => 1041359400000, "y" => 2840000),
	array("x" => 1072895400000, "y" => 2396000),
	array("x" => 1104517800000, "y" => 1613000),
	array("x" => 1136053800000, "y" => 1821000),
	array("x" => 1167589800000, "y" => 2000000),
	array("x" => 1199125800000, "y" => 1397000),
	array("x" => 1230748200000, "y" => 2506000),
	array("x" => 1262284200000, "y" => 6704000),
	array("x" => 1293820200000, "y" => 5704000),
	array("x" => 1325356200000, "y" => 4009000),
	array("x" => 1356978600000, "y" => 3026000),
	array("x" => 1388514600000, "y" => 2394000),
	array("x" => 1420050600000, "y" => 1872000),
	array("x" => 1451586600000, "y" => 2140000)
 );
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "ตารางแสดงการยืมทรัพยากรสารสนเทศของแต่ละคณะทั้ง 9 ปี"
	},
	axisY: {
		title: "ปีการศึกษา",
		valueFormatString: "",
		suffix: "คณะ",
		prefix: ""
	},
	data: [{
		type: "spline",
		markerSize: 5,
		xValueFormatString: "YYYY",
		yValueFormatString: "$#,##0.##",
		xValueType: "dateTime",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
 
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html> 
