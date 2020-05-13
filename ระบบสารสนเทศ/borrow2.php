
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
<body>
<?php
//include "login.php";
include "menu.php";

?>



<center>
<table>
<h3>การยืมทรัพยากรสารสนเทศ</h3>

<td>
<form id="form1" name="form1" method="post" action="">
  <br>
  <br>
<span class="mylabel">ประเภททรัพยากรสารสนเทศ : </span>    
<select name="call_no" id="call_no"  >
					<option value=00> -- เลือก --</option>
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
					<option value=ก>วารสาร</option>
					<option value=CD>โสตทัสนวัสดุ</option>
					</select>


<br>
<span class="mylabel">คณะที่ศึกษา : </span>   
<select name="fac_name_thai" id="facu_name_thai">
					<option value=00> -- เลือก --</option>
					<option value="คณะศึกษาศาสตร์">คณะศึกษาศาสตร์</option>
                    <option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
					<option value="คณะวิทยาศาสตร์และเทคโนโลยี">คณะวิทยาศาสตร์และเทคโนโลยี</option>
					<option value="บัณฑิตวิทยาลัย">บัณฑิตวิทยาลัย</option>
					<option value="วิทยาลัยอิสลามศึกษา">วิทยาลัยอิสลามศึกษา</option>
					<option value="คณะวิทยาการสื่อสาร">คณะวิทยาการสื่อสาร</option>
					<option value="คณะศิลปกรรมศาสตร์">คณะศิลปกรรมศาสตร์</option>
					<option value="คณะรัฐศาสตร์">คณะรัฐศาสตร์</option>
					<option value="คณะพยาบาลศาสตร์ วิทยาเขตปัตตานี">คณะพยาบาลศาสตร์ วิทยาเขตปัตตานี</option>
					</select>
					
<br>
<span class="mylabel">หน่วยงาน : </span>   
<select name="faculty_name_thai" id="faculty_name_thai">
					<option value=00> -- เลือก --</option>
					<option value="ส่วนกลางมหาวิทยาลัย">ส่วนกลางมหาวิทยาลัย</option>
                    <option value="สำนักงานอธิการบดี">สำนักงานอธิการบดี</option>
					<option value="สำนักงานอธิการบดี วิทยาเขตปัตตานี">สำนักงานอธิการบดี วิทยาเขตปัตตานี</option>
					<option value="หน่วยคอมพิวเตอร์ วิทยาเขตปัตตานี">หน่วยคอมพิวเตอร์ วิทยาเขตปัตตานี</option>
					<option value="สำนักวิจัยและพัฒนา">สำนักวิจัยและพัฒนา</option>
					<option value="สำนักส่งเสริมและการศึกษาต่อเนื่อง">สำนักส่งเสริมและการศึกษาต่อเนื่อง</option>
					<option value="คณะวิศวกรรมศาสตร์">คณะวิศวกรรมศาสตร์</option>
					<option value="คณะศึกษาศาสตร์">คณะศึกษาศาสตร์</option>
					<option value="คณะวิทยาศาสตร์">คณะวิทยาศาสตร์</option>
					<option value="คณะแพทยศาสตร์">คณะแพทยศาสตร์</option>
					<option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
					<option value="คณะวิทยาการจัดการ">คณะวิทยาการจัดการ</option>
					<option value="คณะทรัพยากรธรรมชาติ">คณะทรัพยากรธรรมชาติ</option>
					<option value="คณะเภสัชศาสตร์">คณะเภสัชศาสตร์</option>
					<option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
					<option value="คณะทันตแพทยศาสตร์">คณะทันตแพทยศาสตร์</option>
					<option value="คณะวิทยาศาสตร์และเทคโนโลยี">คณะวิทยาศาสตร์และเทคโนโลยี</option>
					<option value="บัณฑิตวิทยาลัย">บัณฑิตวิทยาลัย</option>
					<option value="สำนักวิทยบริการ">สำนักวิทยบริการ</option>
					<option value="ศูนย์เครื่องมือวิทยาศาสตร์">ศูนย์เครื่องมือวิทยาศาสตร์</option>
					<option value="วิทยาลัยอิสลามศึกษา">วิทยาลัยอิสลามศึกษา</option>
					<option value="สถาบันวัฒนธรรมศึกษากัลยาณิวัฒนา">สถาบันวัฒนธรรมศึกษากัลยาณิวัฒนา</option>
					<option value="วิทยาลัยชุมชนภูเก็ต">วิทยาลัยชุมชนภูเก็ต</option>
					<option value="โครงการจัดตั้ง คณะการจัดการโรงแรมและการท่องเที่ยว">โครงการจัดตั้ง คณะการจัดการโรงแรมและการท่องเที่ยว</option>
					<option value="วิทยาลัยชุมชนสุราษฎร์ธานี">วิทยาลัยชุมชนสุราษฎร์ธานี</option>
					</select>
<br>
<span class="mylabel">ประเภทผู้ใช้บริการ: </span>   
<select name="description" id="description">
					<option value=00> -- เลือก --</option>
					<option value="นักศึกษาปริญญาตรี">นักศึกษาปริญญาตรี</option>
					<option value="บัณฑิตวิทยาลัย">นักศึกษาบัณฑิตศึกษา</option>
					<option value="อาจารย์">อาจารย์</option>
					<option value="บุคคลภายนอกนักศึกษา(ยืมได้)">บุคคลากร</option>
					<option value="บุคคลภายนอกทั่วไป(ยืมได้)">บุคคลภายนอก</option>
					</select>
					
					
					
					
<br>
<span class="mylabel">ปี: </span><input type="radio" name="ปีการศึกษา" value="1" checked > ปีงบประมาณ
<input type="radio" name="ปีการศึกษา" value="2"> ปีการศึกษา
<input type="radio" name="ปีการศึกษา" value="3"> ปี พ. ศ .
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
include "db_link.php";
require "function.php";

/*$x1 = "daw";
$x2 = "ma";
$x3 = "kaew";
$x4 = "nana";*/
 	

/*if(isset($_POST['call_no']) && !empty($_POST['call_no'])){
	//$x1.= "SELECT * FROM cir2 WHERE call_no LIKE '%".$x1."%' ";
	$x1 .= $_POST['call_no'];
	echo "call_no";
}
if (isset($_POST['faculty_name_thai']) && empty(@$_POST['faculty_name_thai']))  {
	$x2 .= $_POST['faculty_name_thai'];
	echo "faculty_name_thai";
}
if (isset($_POST['faculty_name_thai']) && empty(@$_POST['faculty_name_thai']))  {
	$x3 .= $_POST['faculty_name_thai'];
	echo "333333333333333";
}
if (isset($_POST['description']) && empty(@$_POST['description']))  {
	$x4 .= $_POST['description'];
	echo "444444444444444";
}*/
//$x1 = $_POST['call_no'];
$x1 = 'call_no';
$x2 = 'fac_name_thai';
$x3 = 'faculty_name_thai';
$x4 = 'description';


if(isset($_POST['call_no'])){
	//$x1.= "SELECT * FROM cir2 WHERE call_no LIKE '%".$x1."%' ";
	$x1 = $_POST['call_no'];
	
	//echo "$x1";
}
if (isset($_POST['fac_name_thai']))  {
	$x2 = $_POST['fac_name_thai'];
	
	//echo "$x2";
}
if (isset($_POST['faculty_name_thai']))  {
	$x3 = $_POST['faculty_name_thai'];
	
	//echo "$x3";
}
if (isset($_POST['description']))  {
	$x4 = $_POST['description'];
	
	//echo "$x4";
}




?>
<?php

//$sql = "SELECT * FROM cir2 limit 10 ";
/*$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "alist";

$conn = @mysqli_connect("localhost", "root", "", "alist"); */

//$x1 = "0";

//$sql .= "";
/*หาเงื่อนไขตรวจสอบว่าถ้าเลือกกรองแค่คัวเดียวใช้ if อะไร
if(กรองแค่ตัวเดียว){
ให้ทำ sql นี้

}
โอเคร*/
/*if((isset($x11))&&(isset($x22))&&(isset($x33))&&(isset($x44))) {
	$sql = "select c4.date1 as date,c4.staff as staff,c4.patron_name ,c4.patron_barcode,c4.call_no,c4.item_title,alfac.faculty_name_thai ,f.fac_name_thai,cm.description  from cir4 as c4 
	 INNER JOIN student_alist as s on c4.patron_barcode = s.stud_id
	 INNER JOIN r_faculty_alist as f on f.fac_id= s.fac_id
	 INNER JOIN cirmembertype as cm on cm.membertype = c4.patron_type
	 INNER JOIN alist_faculty as alfac on alfac.faculty_id = s.fac_id
	 where c4.call_no LIKE '$x1%'AND f.fac_name_thai LIKE '$x2%'AND alfac.faculty_name_thai LIKE '$x3%'AND cm.description LIKE '$x4%'";
	 echo "ค้นหา4ตัว";
	$result = mysqli_query($conn, $sql);		
}
 else{

	$sql =  "select c4.date1 as date,c4.staff as staff,c4.patron_name ,
	c4.patron_barcode,c4.call_no,c4.item_title,alfac.faculty_name_thai ,
	f.fac_name_thai,cm.description from cir4 as c4 INNER JOIN student_alist as s
	 on c4.patron_barcode = s.stud_id INNER JOIN r_faculty_alist as f 
	 on f.fac_id= s.fac_id INNER JOIN cirmembertype as cm on cm.membertype = c4.patron_type
  INNER JOIN alist_faculty as alfac on alfac.faculty_id = s.fac_id where c4.call_no LIKE '$x1%'";
	//echo $sql;

	$result = mysqli_query($conn, $sql);
 }*/




//if (isset($_POST['call_no'])) 


	$sql =  "select c4.date1 as date,c4.staff as staff,c4.patron_name ,
	c4.patron_barcode,c4.call_no,c4.item_title,alfac.faculty_name_thai ,
	f.fac_name_thai,cm.description from cir4 as c4 INNER JOIN student_alist as s
	 on c4.patron_barcode = s.stud_id INNER JOIN r_faculty_alist as f 
	 on f.fac_id= s.fac_id INNER JOIN cirmembertype as cm on cm.membertype = c4.patron_type
  INNER JOIN alist_faculty as alfac on alfac.faculty_id = s.fac_id where c4.call_no LIKE '$x1%'AND f.fac_name_thai LIKE '$x2%'AND alfac.faculty_name_thai LIKE '$x3%'AND cm.description LIKE '$x4%'";
	
	
	$result = mysqli_query($conn, $sql);

// 		$sql = "select c4.date1 as date,c4.staff as staff,c4.patron_name ,
// 		c4.patron_barcode,c4.call_no,c4.item_title,alfac.faculty_name_thai ,
// 		f.fac_name_thai,cm.description from cir4 as c4 INNER JOIN student_alist as s
// 		 on c4.patron_barcode = s.stud_id INNER JOIN r_faculty_alist as f 
// 		 on f.fac_id= s.fac_id INNER JOIN cirmembertype as cm on cm.membertype = c4.patron_type
// 	  INNER JOIN alist_faculty as alfac on alfac.faculty_id = s.fac_id
//  where c4.call_no LIKE '$x1%'AND f.fac_name_thai LIKE '$x2%'AND alfac.faculty_name_thai LIKE '$x3%'AND cm.description LIKE '$x4%'";
//$result = mysqli_query($conn, $sql);	 
	
	
// 	if($x2 != 0 ){
	

// 		$sql = "select c3.date1 as date,c3.staff as staff,c3.patron_name ,c3.patron_barcode,c3.call_no,c3.item_title,alfac.faculty_name_thai ,f.fac_name_thai,cm.description  from cir3 as c3  INNER JOIN student_alist as s on c3.patron_barcode = s.stud_id
// 		INNER JOIN r_faculty_alist as f on f.fac_id= s.fac_id
// 		INNER JOIN cirmembertype as cm on cm.membertype = c3.patron_type
// 		INNER JOIN alist_faculty as alfac on alfac.faculty_id = s.fac_id
// 		where  f.fac_name_thai LIKE '$x2%'";
// 		//echo "eeeeeeeeeeeeeeeeeeeeeee";
// 	}
// 	if($x3 != 00 ){
// 		$sql = "select c3.date1 as date,c3.staff as staff,c3.patron_name ,c3.patron_barcode,c3.call_no,c3.item_title,alfac.faculty_name_thai ,f.fac_name_thai,cm.description  from cir3 as c3  INNER JOIN student_alist as s on c3.patron_barcode = s.stud_id
// 		INNER JOIN r_faculty_alist as f on f.fac_id= s.fac_id
// 		INNER JOIN cirmembertype as cm on cm.membertype = c3.patron_type
// 		INNER JOIN alist_faculty as alfac on alfac.faculty_id = s.fac_id
// 		where alfac.faculty_name_thai LIKE '$x3%'";
// 		//echo "eeeeeeeeeeeeeeeeeeeeeee";
// 	}
// 	if($x4 != 00 ){
// 		$sql = "select c3.date1 as date,c3.staff as staff,c3.patron_name ,c3.patron_barcode,c3.call_no,c3.item_title,alfac.faculty_name_thai ,f.fac_name_thai,cm.description  from cir3 as c3  INNER JOIN student_alist as s on c3.patron_barcode = s.stud_id
// 		INNER JOIN r_faculty_alist as f on f.fac_id= s.fac_id
// 		INNER JOIN cirmembertype as cm on cm.membertype = c3.patron_type
// 		INNER JOIN alist_faculty as alfac on alfac.faculty_id = s.fac_id
// 		where  cm.description LIKE '$x4%'";
// 		//echo "eeeeeeeeeeeeeeeeeeeeeee";
// 	}

 	



//echo $sql;
/*$sql =  " SELECT DISTINCT cir3.date1, cir3.staff, cir3.patron_name, cir3.patron_barcode,
	  			cir3.call_no, cir3.patron_type, cir3.item_title, stu_fac.faculty_name_thai 
	  			FROM cir3 INNER JOIN( SELECT DISTINCT student_alist.stud_id, student_alist.stu_name,
	   			faculty.faculty_id,faculty.faculty_name_thai FROM student_alist INNER JOIN( 
		   		SELECT DISTINCT alist_faculty.faculty_id, alist_faculty.faculty_name_thai 
		   	from alist_faculty where alist_faculty.faculty_id LIKE '%".$x2."%' ) as faculty on 
		   faculty.faculty_id = student_alist.fac_id ) as stu_fac on stu_fac.stud_id = cir3.patron_barcode where cir3.call_no LIKE '%".$x1."%' limit 10";
*/

	   
	   	
		
		  
		  //$num = mysql_num_rows($sql);
		 // @$row = mysql_fetch_array($result);
		 "<body>";
        //แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
echo "<div class='container'>";
echo "<div class='row'>";
echo "<div class='col-md-8'>";
echo "<table border='2' align='center' class='table table-hover'>";
		
		
?>
  <?php
if (isset($_POST['call_no']) || (isset($_POST['fac_name_thai']))||(isset($_POST['faculty_name_thai']))||(isset($_POST['description']))){
	echo "<tr align='center' bgcolor='#CCCCCC'>
    
	
	
	<td>ชื่อเจ้าหน้าที่บริการ</td>
	<td>ชื่อผู้ยืม</td>
	<td>บาร์โค้ตของผู้ยืม</td>
	<td>เลขหนังสือ</td>
	
	
	<td>ชื่อหัวข้อหนังสือ</td>
	<td>คณะที่ศึกษา</td>
	<td>หน่วยงาน</td>
	<td>ผู้ใช้บริการ</td>

   
   
   </tr>";
}
 while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	
	

	
  
	//if (mysqli_num_rows($result) == 0) { 
		//results are empty, do something here 
	// } else { 
	  //  while($row = mysqli_fetch_array($result)) { 
		   //processing when you have some data 
		   
	// } 

	  echo "<tr>";
	  //echo "<td>" .@$row['id']. "</td> ";
	  //echo "<td>" .convert_date($row['date1']).  "</td> ";
	//   echo "<td>" .ไม่พบ ."</td>";
	  //echo "<td>" .$row['date1'].  "</td> ";
	  //echo "<td>" .substr(@$row['time1'],0,2).".".substr(@$row['time1'],3,2)."น." .  "</td> ";   
	  echo "<td>" .$row['staff'] .  "</td> ";
	  echo "<td>" .$row['patron_name'] .  "</td> ";
	  echo "<td>" .$row['patron_barcode'] .  "</td> ";
	  echo "<td>" .$row['call_no'] .  "</td> ";
	  //echo "<td>" .convert_type(@$row['patron_type']) .  "</td> ";
	  //echo "<td>" .$row['item_barcode'] .  "</td> ";
	  echo "<td>" .$row['item_title'] .  "</td> ";
	  echo "<td>" .$row['fac_name_thai'] .  "</td> ";
	  echo "<td>" .$row['faculty_name_thai'] .  "</td> ";
	  echo "<td>" .$row['description'] .  "</td> ";
	
	  

   }
	  






?>
	

	

</center>
<?php
   mysqli_close($conn);
?>


<div align="center">
						<!-- &copy; 2009 John F Kennedy Library PSU Pattani Campus -->
						 <b>สงวนลิขสิทธิ์ &copy;2010-2011 หอสมุดจอห์น เอฟ เคนเนดี้ สำนักวิทยบริการ มหาวิทยาลัยสงขลานครินทร์. <a href="http://tanee.oas.psu.ac.th/">ติดต่อผู้ดูแลเว็บไซต์</a></b><br>เลขที่ 181 ถ.เจริญประดิษฐ์ ต.รูสะมิแล อ.เมือง จ.ปัตตานี 94000 โทรศัพท์ 0-7331-3486 โทรสาร 0-7333-3587<br>
						 Your IP : 171.7.231.165						 <br>
 						
						<table>
						<tr>
						<td valign="bottom">
						<script type="text/javascript" language="javascript1.1" src="http://tracker.stats.in.th/tracker.php?uid=16168"></script><noscript><a target="_blank" href="http://www.stats.in.th/">www.Stats.in.th</a></noscript>
						<p></p>
                        </td>
                        </div></br></table>
</body>

</html>