<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Transitional//EN” “http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd”&gt;
<html xmlns=”http://www.w3.org/1999/xhtml”&gt;
<head>
<meta http-equiv=”Content-Type” content=”text/html; charset=windows-874″ />
<title>สร้าง Form สำหรับค้นหาข้อมูล</title>
</head>
<body bgcolor=”#999999″>
<form action=”search.php” method=”post” name=”search”>
search :: <input type=”text” size=”20″  name=”search” />
<input type=”submit” value=” search ” />
</form>
<hr />
<?php
//ถ้ามีการส่งค่าข้อมูล
$search = $_POST[search];
if(isset($search) ) {
echo “<font size=’-1′ color=’#FF0000′>ผลลัพธ์ของคำว่า [ $search ] </font><br />”;
?>
<table align=”left” width=”50%” border=”0″>
<tr bgcolor=”#FFFFFF”>
<td>ชื่อจริง</td>
<td>นามสกุล</td>
<td>อายุ</td>
<td>เพศ</td>
<td>แผนก</td>
<td>เงินเดือน</td>
</tr>
<?php
$link = mysql_connect(“localhost”,”root”,”root”);
mysql_select_db(“vdo”,$link);

$result = mysql_query(“SELECT * FROM mytable where fname like ‘%$search%'”);
$num = mysql_num_rows($result);
echo “<font size=’-1′ color=’green’>ค้นพบทั้งหมด :: [ $num ] </font><br />”;

$sql = “select * from mytable where fname like ‘%$search%’ “;
$view = mysql_query($sql);
while ($data = mysql_fetch_array($view) ) {
?>
<tr>
<td><?php echo “$data[fname]”; ?></td>
<td><?php echo “$data[lname]”; ?></td>
<td><?php echo “$data[age]”; ?></td>
<td><?php echo “$data[gender]”; ?></td>
<td><?php echo “$data[department]”; ?></td>
<td><?php echo “$data[salary]”; ?></td>
</tr>
<?php
} //End while loop

} else {
echo “กรุณากรอกคำค้นของคุณ”;
}
?>
</body>
</html>