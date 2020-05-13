<?php
include "db_link.php";

if(isset($_POST['inspatient'])){ //in case of insertion
       $id	=$_POST['id'];
	$dete1	=$_POST['dete1'];
	$time1	=$_POST['time1'];
	$staff	=$_POST['staff'];
	$patron_name 	=$_POST['patron_name'];
	$patron_barcode	=$_POST['patron_barcode'];
	$call_no	=$_POST['call_no'];
	$patron_type	=$_POST['patron_type'];
	$item_barcode	=$_POST['item_barcode'];
	$item_title	=$_POST['item_title'];
//2. query ข้อมูลจากตาราง cir_2553:
$query = "SELECT * FROM cir2 ORDER BY id " or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($link, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
echo "<div class='container'>";
echo "<div class='row'>";
echo "<div class='col-md-8'>";

echo "<table border='1' align='center' class='table table-hover'>";
  echo "
  <tr align='center' bgcolor='#CCCCCC'>
    <td>รหัส</td>
    <td>วันเดือนปี</td>
    <td>เวลาที่ยืม</td>
    <td>วันในแต่ละวันเทียบเป็นตัวเลข</td>
    <td>ชื่อเจ้าหน้าที่บริการ</td>
	<td>ชื่อผู้ยืม</td>
	<td>บาร์โค้ตของผู้ยืม</td>
	<td>เลขหนังสือ</td>
	<td>ชนิดของผู้ยืม</td>
	<td>โค้ดหนังสือ</td>
	<td>ชื่อหัวข้อหนังสือ</td>
  </tr>";
  foreach( $result as $value ) 
  {
  echo "<tr>";
    echo "<td>" .$value["id"] .  "</td> ";
    echo "<td>" .$value["date1"] .  "</td> ";
    echo "<td>" .$value["time1"] .  "</td> ";
    echo "<td>" .$value["nd"] .  "</td> ";
	echo "<td>" .$value["staff"] .  "</td> ";
	echo "<td>" .$value["patron_name"] .  "</td> ";
	echo "<td>" .$value["patron_barcode"] .  "</td> ";
	echo "<td>" .$value["call_no"] .  "</td> ";
	echo "<td>" .$value["patron_type"] .  "</td> ";
	echo "<td>" .$value["item_barcode"] .  "</td> ";
    echo "<td>" .$value["item_title"] .  "</td> ";
  echo "</tr>";
  }
echo "</table>";
//5. close connection
echo '<hr>';
 
?>