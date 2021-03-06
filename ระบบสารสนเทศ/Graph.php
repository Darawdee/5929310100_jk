<html lang="en-US">
<body>

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// ใส่ข้อมูลลงไปในแผนภูมิวงกลม
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Work', 8],
  ['Eat', 2],
  ['TV', 2],
  ['Gym', 3],
  ['Sleep', 9]
]);

  // ชื่อหัข้อวงกลม ขนาด และความสูงของแผนภูมิวงกลม
  var options = {'title':'ชีวิตประจำวัน', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</body>
</html>