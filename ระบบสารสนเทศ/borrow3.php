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


<center>
<table>
<h3>การยืมทรัพยากรสารสนเทศ</h3>

<td>
<form id="form1" name="form1" method="post" action="">
  <br>
  <br>
<span class="mylabel">ประเภททรัพยากรสารสนเทศ : </span>    
<select name="call_no" id="call_no" value="" >
					<option value="" disabled selected>--เลือก--</option>
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
include "db_link.php";
require "function.php";

if(isset($_POST['Submit'])){ 
    
	$x1 = $_POST['call_no'];
	$x2 = $_POST['faculty_name_thai'];
	//$x2 = $_POST['call_no'];

        $sql = "SELECT DISTINCT cir2.date1, cir2.staff, cir2.patron_name, cir2.patron_barcode,
		cir2.call_no, cir2.patron_type, cir2.item_title, stu_fac.faculty_name_thai 
		FROM cir2 INNER JOIN( SELECT DISTINCT student_alist.stud_id, student_alist.stu_name,
		 faculty.faculty_id,faculty.faculty_name_thai FROM student_alist INNER JOIN( 
		 SELECT DISTINCT alist_faculty.faculty_id, alist_faculty.faculty_name_thai 
	 from alist_faculty where alist_faculty.faculty_id LIKE '%".$x2."%' ) as faculty on 
 faculty.faculty_id = student_alist.fac_id ) as stu_fac on stu_fac.stud_id = cir2.patron_barcode "; 
		 
        $result = $conn->query($sql);

    // ============================การแบ่งหน้า=====================================================
    $numfound = $result->num_rows; //return the number of records

	$p_size = 10; //กำหนดจำนวน record เริ่มต้นที่จะแสดงผลต่อ 1 เพจ
	
	$total_page=(int)($numfound/$p_size); 
	//ทำการหารหาจำนวนหน้าทั้งหมดของข้อมูล ในที่นี้ให้หารออกมาเป็นเลขจำนวนเต็ม 
	if(($numfound % $p_size)!=0){ //ถ้าข้อมูลมีเศษให้ทำการบวกเพิ่มจำนวนหน้าอีก 1 
	   $total_page++;
	}

    if($_POST['nextPage']){
		$p = $_POST['pageno'];
		if ( $p < $total_page)
			$page=$p + 1;
		else $page=$p;
		$start=$p_size*($page-1);

	}else if($_POST['firstPage']){
		$page=1;
		$start=$p_size*($page-1);

	}else if($_POST['lastPage']){
		$page=$total_page;
		$start=$p_size*($page-1);
	}else if($_POST['prePage']){
		$p= $_POST['pageno'];
		if($p >= 2)
			$page = $p - 1;
		else $page = $p;
		$start = $p_size*($page-1);
	}else if($_POST['pageno']){
		$page=$_POST['pageno'];
		$start=$p_size*($page-1);

	}else{
	/*
	ถ้่ายังไม่มีการส่งค่ามาเพื่อทำการเลือกดูหน้าข้อมูลใด ๆ ให้กำหนดเป็นหน้าแรกของข้อมูลเป็นค่า Default และให้ Record แรกเริ่มที่ Record ที่ 0 หรือ Record แรก
	*/ 
	   $page=1;
	   $start=0;
	}		
    // =============================================================================================
}

else{
    $sql = "SELECT DISTINCT  cir2.staff, cir2.patron_name, cir2.patron_barcode,
	cir2.call_no, cir2.patron_type, cir2.item_title, stu_fac.faculty_name_thai 
	FROM cir2 INNER JOIN( SELECT DISTINCT student_alist.stud_id, student_alist.stu_name,
	 faculty.faculty_id,faculty.faculty_name_thai FROM student_alist INNER JOIN( 
	 SELECT DISTINCT alist_faculty.faculty_id, alist_faculty.faculty_name_thai 
 from alist_faculty where alist_faculty.faculty_id LIKE '%".$x2."%' ) as faculty on 
faculty.faculty_id = student_alist.fac_id ) as stu_fac on stu_fac.stud_id = cir2.patron_barcode ";
    $result = $conn->query($sql);

        // ============================การแบ่งหน้า=====================================================
        $numfound = $result->num_rows; //return the number of records
		
        $p_size = 10; //กำหนดจำนวน record เริ่มต้นที่จะแสดงผลต่อ 1 เพจ

        $total_page=(int)($numfound/$p_size); 
        //ทำการหารหาจำนวนหน้าทั้งหมดของข้อมูล ในที่นี้ให้หารออกมาเป็นเลขจำนวนเต็ม 
        if(($numfound % $p_size)!=0){ //ถ้าข้อมูลมีเศษให้ทำการบวกเพิ่มจำนวนหน้าอีก 1 
           $total_page++;
        }

        if($_POST['nextPage']){
            $p = $_POST['pageno'];
            if ( $p < $total_page)
                $page=$p + 1;
            else $page=$p;
            $start=$p_size*($page-1);
    
        }else if($_POST['firstPage']){
            $page=1;
            $start=$p_size*($page-1);
    
        }else if($_POST['lastPage']){
            $page=$total_page;
            $start=$p_size*($page-1);
        }else if($_POST['prePage']){
            $p= $_POST['pageno'];
            if($p >= 2)
                $page = $p - 1;
            else $page = $p;
            $start = $p_size*($page-1);
        }else if($_POST['pageno']){
            $page=$_POST['pageno'];
            $start=$p_size*($page-1);
    
        }else{
        /*
        ถ้่ายังไม่มีการส่งค่ามาเพื่อทำการเลือกดูหน้าข้อมูลใด ๆ ให้กำหนดเป็นหน้าแรกของข้อมูลเป็นค่า Default และให้ Record แรกเริ่มที่ Record ที่ 0 หรือ Record แรก
        */ 
           $page=1;
           $start=0;
        }          
        // =============================================================================================
}

// $conn->close();
"<body>";
echo "<center>";

echo "<h2>การยืมทรัพยากรสารสนเทศ</h2>";
echo "<br>";

echo "<form action='borrow3.php' method='post'>";


echo "<div class='row'>";
echo "<div class='col-sm-4'></div>";
echo "<div class='col-sm-3'>";
echo "<input type='text' class='form-control'  name='search' >";
echo "</div>";
echo "<div class='col-sm-1'>";
echo "<input type='submit' name='searchbtn' class='btn btn-primary' value='ค้นหา'>";
echo "</div>";
echo "<div class='col-sm-4'></div>";
echo "</div>";
echo "<br>";
echo "</form>";



// =================แสดงจำนวน============================

if($numfound > 0){
    echo "<tr>";
    echo "<td>.<h4>ข้อมูลทั้งหมด :".$numfound." คน</h4></td>";
    echo "</tr>";
}
else{
    echo "<br><h3>-ไม่พบข้อมูลที่ค้นหา-</h3>";
}
echo "</table>";

// ======================แสดงตารางข้อมูล============================
$sql = $sql."LIMIT $start , $p_size";
$result = $conn->query($sql);

echo "<table class='w3-table-all w3-card-4' style = 'width: 70%'>";
if ($result->num_rows > 0) {

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
    
    while($row = $result->fetch_assoc()) {
        
        echo "<tr>";
    echo "<td>" .@$row['id']. "</td> ";
    echo "<td>" .convert_date(@$row['date1']).  "</td> ";
    echo "<td>" .substr(@$row['time1'],0,2).".".substr(@$row['time1'],3,2)."น." .  "</td> ";   
	echo "<td>" .@$row['staff'] .  "</td> ";
	echo "<td>" .@$row['patron_name'] .  "</td> ";
	echo "<td>" .@$row['patron_barcode'] .  "</td> ";
	echo "<td>" .@$row['call_no'] .  "</td> ";
	echo "<td>" .convert_type(@$row['patron_type']) .  "</td> ";
	//echo "<td>" .$row['item_barcode'] .  "</td> ";
	echo "<td>" .$row['item_title'] .  "</td> ";
	echo "<td>" .$row['faculty_name_thai'] .  "</td> ";
	
    echo "</tr>"; 
    }
}
echo "</table>";

if($numfound > 0){
// ====================การแบ่งหลายหน้า=================================
echo "<table>";
echo "<tr style = 'text-align: center;'><td style = 'text-align: center;'>";
	echo"<form name='divide' action = 'borrow2.php' method ='post'> ";

	echo "แสดงหน้าที่ : <select  name = pageno value =$page onchange='document.divide.submit();'>";

		for($i=1;$i<=$total_page;$i++){ //สร้าง list เพื่อให้ผู้ใช้งานเลือกชมหน้าข้อมูล
			echo "<option ";
			 if($page==$i)
				     echo "selected='selected'";
			echo "value=",$i, ">",$i;
        }        	
	echo "</select>  จากทั้งหมด ".$total_page." หน้า &nbsp";
echo "</td></tr>";

echo "<tr style = 'text-align: center;'><td style = 'text-align: center;'>";
	echo "<input class='btn btn-info btn-sm' name = 'firstPage' type='submit' value='<< หน้าเเรก' /> &nbsp";
	echo "<input class='btn btn-default btn-sm' name = 'prePage' type='submit' value='< ก่อนหน้า' /> &nbsp";
	echo "<input class='btn btn-default btn-sm' name = 'nextPage' type='submit' value='ถัดไป >' /> &nbsp";
	echo "<input class='btn btn-info btn-sm' name = 'lastPage' type='submit' value='สุดท้าย >>' /> &nbsp";
    echo "</form>";    
echo "</td></tr>";
echo "</table>";

}
echo "</center>";
?>






















	<?php
	/*if (isset($_POST["call_no"]) =="0") {
        @$sql .=  "SELECT * FROM `cir2` limit 10 ";
        //echo "wwwwwwwwwwwwwwwwwwwwwww";
        }
        //@$sql = "SELECT * FROM academic_pro INNER JOIN type_work ON academic_pro.work_id=type_work.work_id WHERE (Year LIKE '%".$_POST["txtKey"]."%' or Name_thai LIKE '%".$_POST["txtKey"]."%' or Name_eng LIKE '%".$_POST["txtKey"]."%' or Tech_name1 LIKE '%".$_POST["txtKey"]."%' or Tech_name2 LIKE '%".$_POST["txtKey"]."%' or Tech_name3 LIKE '%".$_POST["txtKey"]."%' or Stu_name1 LIKE '%".$_POST["txtKey"]."%' or Stu_name2 LIKE '%".$_POST["txtKey"]."%' or Stu_name3 LIKE '%".$_POST["txtKey"]."%' or work_name LIKE '%".$_POST["txtKey"]."%' )";
        //@$sql = " SELECT * FROM `cir2` WHERE `call_no` LIKE '0%' limit 10 ";
        elseif($_POST["call_no"]=="1" ){
            @$sql .= "SELECT * FROM `cir2` WHERE `call_no` LIKE '1%'limit 15 ";
            //echo "eeeeeeeeeeeeeeeeeeeeeee";
        }
        elseif($_POST["call_no"]=="2" ){
            @$sql .= "SELECT * FROM `cir2` WHERE `call_no` LIKE '2%'limit 15 ";
            //echo "dddddddddddddd";
        }
        elseif($_POST["call_no"]=="3" ){
            @$sql .= "SELECT * FROM `cir2` WHERE `call_no` LIKE '3%'limit 10 ";
            
        }
        elseif($_POST["call_no"]=="4" ){
            @$sql .= "SELECT * FROM `cir2` WHERE `call_no` LIKE '4%'limit 10 ";
            
        }
        elseif($_POST["call_no"]=="5" ){
            @$sql .= "SELECT * FROM `cir2` WHERE `call_no` LIKE '6%'limit 10 ";
            //echo "gggggggggggg";
        }
        elseif($_POST["call_no"]=="7" ){
            @$sql .= "SELECT * FROM `cir2` WHERE `call_no` LIKE '7%'limit 10 ";
            //echo "gggggggggggg";
        }
        elseif($_POST["call_no"]=="8" ){
            @$sql .= "SELECT * FROM `cir2` WHERE `call_no` LIKE '8%'limit 10 ";
            //echo "gggggggggggg";
        }
        elseif($_POST["call_no"]=="9" ){
            @$sql .= "SELECT * FROM `cir2` WHERE `call_no` LIKE '9%'limit 10 ";
            //echo "gggggggggggg";
        }
        elseif($_POST["call_no"]=="น" ){
            @$sql .= "SELECT * FROM `cir2` WHERE `call_no` LIKE 'น%'limit 10 ";
            //echo "gggggggggggg";
        }
        elseif($_POST["call_no"]=="กข" ){
            @$sql .= "SELECT * FROM `cir2` WHERE `call_no` LIKE 'ก%'OR `call_no` 
                    LIKE 'ข%'OR `call_no`LIKE 'ฃ%'OR `call_no`LIKE 'ค%'OR `call_no`
                    LIKE 'ฆ%'OR `call_no`LIKE 'จ%'OR `call_no`LIKE 'ฉ%'OR `call_no`
                    LIKE 'ช%'OR `call_no`LIKE 'ซ%'OR `call_no`LIKE 'ฌ%'OR `call_no`
                    LIKE 'ฑ%'OR `call_no`LIKE 'ด%'OR `call_no`LIKE 'ณ%'OR `call_no`
                    LIKE 'ป%'OR `call_no`LIKE 'บ%'OR `call_no`LIKE 'ล%'OR `call_no`
                    LIKE 'ว%'OR `call_no`LIKE 'ศ%'OR `call_no`LIKE 'ส%'OR `call_no`
                    LIKE 'ภ%'OR `call_no`LIKE 'ย%'OR `call_no`LIKE 'ฮ%'OR `call_no`
    
                                                            limit 10 ";
            //echo "gggggggggggg";
        }
        elseif($_POST["call_no"]=="CD" ){
            @$sql .= "SELECT * FROM `cir2` WHERE `call_no` LIKE 'CD%' OR 
            `call_no` LIKE 'DVD%'limit 10 ";
            //echo "gggggggggggg";
        }
        else{
            //@$sql = "SELECT * FROM `cir2` WHERE `call_no` LIKE '2%'limit 10 ";
            @$sql .= "SELECT * FROM `cir2` WHERE `call_no` LIKE '0%'limit 10 ";
            
        //echo "rrrrrrrrrrrrrrrrrrrrrrrrrrrrrr";
        }
/////////////////////////////////// fac_name
if (isset($_POST["faculty_name"]) =="07") {
	@$sql .=  " SELECT DISTINCT cir3.date1, cir3.staff, cir3.patron_name, cir3.patron_barcode
				 cir3.call_no, cir3.patron_type, cir3.item_title, stu_fac.faculty_name_thai 
				 FROM cir3 INNER JOIN( SELECT DISTINCT student_alist.stud_id, student_alist.stu_name,
				  faculty.faculty_id,faculty.faculty_name_thai FROM student_alist INNER JOIN( 
				  SELECT DISTINCT alist_faculty.faculty_id, alist_faculty.faculty_name_thai 
			  from alist_faculty where alist_faculty.faculty_id = '07' ) as faculty on 
		  faculty.faculty_id = student_alist.fac_id ) as stu_fac on stu_fac.stud_id = cir3.patron_barcodelimit 10";
	echo "wwwwwwwwwwwwwwwwwwwwwww";
   }

*/



$result = mysqli_query($conn, $sql);


	
	
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


/*
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
  </tr>";*/
  
//while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
   /* @$row = mysqli_fetch_array(@$result,MYSQLI_ASSOC);{
 
	echo "nnnnnnn" ;
	//results are empty, do something here 
	$num = mysqli_num_rows($result) ;
	echo $num ;
	
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
*/
?>

	
	

</center>




</body>

</html>