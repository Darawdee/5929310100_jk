<!DOCTYPE html>
<html lang="en">
<title>ระบบสารสนเทศฯ</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>

body {
  margin: 0;
}

/* Style the header */
.header {
   background-color: powderblue;
  padding: 20px;
  text-align: center;
}

body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}



</style>
<body>
<?php
include "menu.php";
?>


<center><table>
<h3>การยืมทรัพยากรสารสนเทศ</h3>

<form id="form1" name="form1" method="post" action="">
  <br>
  <br>
<span class="mylabel">ประเภททรัพยากรสารสนเทศ : </span>    
<select name="call_no" id="call_no"><option value=00> -- เลือก --</option>
					<option value=0>วิทยาการคอมพิวเตอร์ สารสนเทศ และความรู้ทั่วไป</option>
					<option value=1>ปรัชญา</option>
                    <option value=2>ศาสนา</option>
					<option value=3>สังคมศาสตร์</option>
					<option value=4>ภาษา</option>
					<option value=5>วิทยาศาสตร์</option>
					<option value=6>เทคโนโลยี</option>
					<option value=7>ศิลปะและนันทนาการ</option>
					<option value=8>วรรณคดี</option>
					<option value=9>ประวัติศาสตร์และภูมิศาสตร์</option>
					<option value=น>นวนิยาย</option>
					<option value=กข>วารสาร</option>
					<option value=CD>โสตทัสนวัสดุ</option>
					</select>


<br>
<span class="mylabel">คณะที่ศึกษา : </span>   
<select name="fac_name" id="fac_name"><option value=00> -- เลือก --</option>
					<option value=07>คณะศึกษาศาสตร์</option>
                    <option value=10>คณะมนุษยศาสตร์และสังคมศาสตร์</option>
					<option value=16>คณะวิทยาศาสตร์และเทคโนโลยี</option>
					<option value=17>บัณฑิตวิทยาลัย</option>
					<option value=20>วิทยาลัยอิสลามศึกษา</option>
					<option value=36>คณะวิทยาการสื่อสาร</option>
					<option value=43>คณะศิลปกรรมศาสตร์</option>
					<option value=51>คณะรัฐศาสตร์</option>
					<option value=76>คณะพยาบาลศาสตร์ วิทยาเขตปัตตานี</option>
					</select>
					
<br>
<span class="mylabel">หน่วยงาน : </span>   
<select name="faculty_name" id="faculty_name"><option value=00> -- เลือก --</option>
					<option value=00>ส่วนกลางมหาวิทยาลัย</option>
                    <option value=01>สำนักงานอธิการบดี</option>
					<option value=02>สำนักงานอธิการบดี วิทยาเขตปัตตานี</option>
					<option value=03>หน่วยคอมพิวเตอร์ วิทยาเขตปัตตานี</option>
					<option value=04>สำนักวิจัยและพัฒนา</option>
					<option value=05>สำนักส่งเสริมและการศึกษาต่อเนื่อง</option>
					<option value=06>คณะวิศวกรรมศาสตร์</option>
					<option value=07>คณะศึกษาศาสตร์</option>
					<option value=08>คณะวิทยาศาสตร์</option>
					<option value=09>คณะแพทยศาสตร์</option>
					<option value=10>คณะมนุษยศาสตร์และสังคมศาสตร์</option>
					<option value=11>คณะวิทยาการจัดการ</option>
					<option value=12>คณะทรัพยากรธรรมชาติ</option>
					<option value=13>คณะเภสัชศาสตร์</option>
					<option value=14>คณะพยาบาลศาสตร์</option>
					<option value=15>คณะทันตแพทยศาสตร์</option>
					<option value=16>คณะวิทยาศาสตร์และเทคโนโลยี</option>
					<option value=17>บัณฑิตวิทยาลัย</option>
					<option value=18>สำนักวิทยบริการ</option>
					<option value=19>ศูนย์เครื่องมือวิทยาศาสตร์</option>
					<option value=20>วิทยาลัยอิสลามศึกษา</option>
					<option value=21>สถาบันวัฒนธรรมศึกษากัลยาณิวัฒนา</option>
					<option value=22>วิทยาลัยชุมชนภูเก็ต</option>
					<option value=23>โครงการจัดตั้ง คณะการจัดการโรงแรมและการท่องเที่ยว</option>
					<option value=24>วิทยาลัยชุมชนสุราษฎร์ธานี</option>
					</select>
<br>
<span class="mylabel">ประเภทผู้ใช้บริการ: </span>   
<select name="description" id="description"><option value=00> -- เลือก --</option>
					<option value=01>นักศึกษาปริญาตรี</option>
					<option value=02>นักศึกษาบัณฑิตศึกษา</option>
					<option value=03>อาจารย์</option>
					<option value=04>บุคคลากร</option>
					<option value=05>บุคคลภายนอก</option>
					</select>
					
					
					
					
<br>
<span class="mylabel">ปี: </span><input type="radio" name="ปีการศึกษา" value="1" checked > ปีงบประมาณ
<input type="radio" name="ปีการศึกษา" value="2"> ปีการศึกษา
<input type="radio" name="ปีการศึกษา" value="3"> ปี พ. ศ .
<input type="radio" name="ปีการศึกษา" value="4"> อื่่นๆ
<br>
<span class="mylabel">ช่วงเวลา: 
<select name='year'><option value=000> -- เลือก --</option>
					<option value=00>มกราคม</option>
					<option value=00>กุมภาพันธ์</option>
					<option value=00>มีนาคม</option>
					<option value=00>เมษายน</option>
					<option value=00>พฤษภาคม</option>
					<option value=00>มิถุนายน</option>
					<option value=00>กรกฏาคม</option>
					<option value=00>สิงหาคม</option>
					<option value=00>กันยายน</option>
					<option value=00>ตุลาคม</option>
					<option value=00>พฤศจิกายน</option>
					<option value=00>ธันวาคม</option>
					</select></td></tr>
	<tr><center><td height="50" colspan="5" align="center"><input type="submit" name="Submit" value="ค้นหา" />
      <input type="submit" name="Submit2" value="ยกเลิก" /></td></center></tr>
	</form>
	</table>
<?php
require "function.php";
	include "db_link.php";
	
	if(isset($_POST['insert']))
		
	$call_no = $_POST['call_no'];
	
	
 //$sql = "SELECT * FROM cir2 limit 10" ; //แสดงข้อมูลทั้งหมด
 
 $sql = " SELECT * FROM `cir2` WHERE `call_no` REGEXP '^0[0-9][0-9]' limit 10";
 
 
//if($call_no !="")
		//$sql = " SELECT * FROM `cir2` WHERE `call_no` REGEXP '^0[0-9][0-9]' ";
 


$result = mysqli_query($link, $sql);


	
	
//$query = "SELECT * FROM cir2 WHERE call_no OR limit 10" ;

/*SELECT * FROM tbl_search
WHERE title LIKE '%word%' OR detail LIKE '%word%'
ORDER BY id DESC
1
2
3
SELECT * FROM tbl_search
WHERE title LIKE '%word%' OR detail LIKE '%word%'
*/
//$query = "SELECT * FROM `cir2` WHERE `call_no` LIKE '00%'  limit 10" ;
	
	//$result = mysqli_query($link, $query) or die("Error:" . mysqli_error());
	//$result = mysqli_query($link, $query) ;



//แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
echo "<div class='container'>";
echo "<div class='row'>";
echo "<div class='col-md-8'>";
//echo "<table width="500" border="0" cellspacing="2" cellpadding="0">;
//echo "<table  border='1' width='100%'  class='table table-hover'>";
//echo "<table style='width:100% 'border='1' align='center' class='table table-hover'>";
echo "<table border='1' align='center' class='table table-hover'>";
  echo "
  <tr align='center' bgcolor='#CCCCCC'>
    <td>ลำดับที่</td>
    <td>วันเดือนปี</td>
    <td>เวลาที่ยืม</td>
    <td>ชื่อเจ้าหน้าที่บริการ</td>
	<td>ชื่อผู้ยืม</td>
	<td>บาร์โค้ตของผู้ยืม</td>
	<td>เลขหนังสือ</td>
	<td>ชนิดของผู้ยืม</td>
	<td>โค้ดหนังสือ</td>
	<td>ชื่อหัวข้อหนังสือ</td>
  </tr>";
  
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	
    echo "<tr>";
    echo "<td>" .$row['id']. "</td> ";
    echo "<td>" .convert_date($row['date1']).  "</td> ";
    echo "<td>" .substr($row['time1'],0,2).".".substr($row['time1'],3,2)."น." .  "</td> ";   
	echo "<td>" .$row['staff'] .  "</td> ";
	echo "<td>" .$row['patron_name'] .  "</td> ";
	echo "<td>" .$row['patron_barcode'] .  "</td> ";
	echo "<td>" .$row['call_no'] .  "</td> ";
    //$res = callfunction($row['call_no'] );
	//echo "<td>".$res."</td>";
	echo "<td>" .convert_type($row['patron_type']) .  "</td> ";

	echo "<td>" .$row['item_barcode'] .  "</td> ";
    echo "<td>" .$row['item_title'] .  "</td> ";
    echo "</tr>";
  }
	
	
	
	
	
	echo "</table>";
//5. close connection
	echo '<hr>';
	
	//show 
	
	echo "แสดงหน้าที่ : <select name = pageno value =$page>";

		for($i=1;$i<=$total_page;$i++){ 
			echo "<option ";
			 if($page==$i)
				     echo "selected='selected'";
			echo "value=",$i, ">",$i;
		}
	
	echo "</select>  จากทั้งหมด ".$total_page." หน้า";
	echo " จำนวนรายการต่อหน้า <input name = 'nrec' type='text' value = $p_size size = 3/>";
	echo "<input name = 'showPage' type='submit' value='show' />";
	echo "<input name = 'firstPage' type='submit' value='<<first' />";
	echo "<input name = 'prePage' type='submit' value='<previous' />";
	echo "<input name = 'nextPage' type='submit' value='next>' />";
	echo "<input name = 'lastPage' type='submit' value='last>>' />";
	echo "</form>";
echo "</td></tr>";
	
	
echo "<tr><td colspan='14'><a href='index.php'>ระบบสารสนเทศ</a></td></tr>";

?>

	
	

</center>




</body>

</html>