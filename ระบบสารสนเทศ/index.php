
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/lib/w3.css">


<style>
.mySlides {display:none;}
</style>

<body>
<?php
	include "menu.php";
?>

<center>
<a href="http://localhost/JK/%e0%b8%a3%e0%b8%b0%e0%b8%9a%e0%b8%9a%e0%b8%aa%e0%b8%b2%e0%b8%a3%e0%b8%aa%e0%b8%99%e0%b9%80%e0%b8%97%e0%b8%a8/index.php" ><h1 style="color:blue">ระบบสารสนเทศการยืมทรัพยากรสารสนเทศหอสมุดจอห์นเอฟ เคนเนดี้ วิทยบริการ มหาวิทยาลัยสงขลานครินทร์ วิยาเขตปัตตานี</h1></a>
<div class="w3-content w3-section" style="max-width:400px">
  <img class="mySlides" src="img\01.jpg" style="width:100%">
 
  <img class="mySlides" src="img\04.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<!-- *********ตารางแสดงจำนวนทั้งหมด************ -->
<h2>ตารางแสดงการยืมทรัพยากรสารสนเทศของแต่ละคณะทั้ง 9 ปี </h2><br>
    <table class="w3-table-all w3-card-4" style = "width: 50%">
            <thead>
                <tr>
                <th>ปีการศึกษา</th>
                    <th>ศึกษาศาสตร์(คน)</th>
                    <th>มนุษย์ศาสตร์และสังคมศาสตร์(คน)</th>
                    <th>วิทยาศาสตร์และเทคโนโลยี(คน)</th>
                    <th>บัณฑิตศึกษา(คน)</th>    
                    <th>วิทยาลัยอิสลาม(คน)</th> 
                    <th>วิทยาการสื่อสาร(คน)</th> 
                    <th>รัฐศาสตร์(คน)</th> 
                    <th>พยาบาลศาสตร์(คน)</th> 
                    <th>คณะศิลปกรรมศาสตร์ (คน)</th> 
                    
                    <th>รวม(คน)</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>2553</td><td>2413</td><td>3817</td><td>1324</td><td>31</td><td>377</td><td>311</td><td>1345</td><td>0</td><td>138</td><td><b>9756</td></tr>
                <tr><td>2555</td><td>3817</td><td>2456</td><td>11356</td><td>356</td><td>122</td><td>178</td><td>1323</td><td>212</td><td>98</td><td><b>9918</td></tr>
                <tr><td>2556</td><td>1324</td><td>2027</td><td>3998</td><td>2123</td><td>2379</td><td>2133</td><td>134</td><td>3223</td><td>923</td><td><b>18264</td></tr>
                <tr><td>2557</td><td>3133</td><td>1245</td><td>3457</td><td>5125</td><td>4113</td><td>2134</td><td>133</td><td>2133</td><td>106</td><td><b>21579</td></tr>
                <tr><td>2558</td><td>1377</td><td>2345</td><td>1746</td><td>3234</td><td>6136</td><td>3165</td><td>4271</td><td>2351</td><td>241</td><td><b>24867</td></tr>
                <tr><td>2559</td><td>3567</td><td>1564</td><td>890</td><td>3300</td><td>3197</td><td>3126</td><td>1234</td><td>2234</td><td>134</td><td><b>19246</td></tr>
                <tr><td>2560</td><td>2986</td><td>1054</td><td>1356</td><td>3679</td><td>2112</td><td>3102</td><td>1654</td><td>2111</td><td>234</td><td><b>18288</td></tr>
                <tr><td>2561</td><td>3456</td><td>1176</td><td>1698</td><td>3268</td><td>5111</td><td>2401</td><td>900</td><td>2299</td><td>122</td><td><b>20429</td></tr>
                <tr><td>2562</td><td>2531</td><td>2571</td><td>1456</td><td>3154</td><td>2101</td><td>4239</td><td>1200</td><td>35</td><td>234</td><td><b>17521</td></tr>
                            
            </tbody>     
        </table><br>  
    <!-- ************************************************************* -->
   
       
    <!-- --------------------------------------------------------- -->

    
       
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



