
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>ระบบสารสนเทศ</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 

<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
    height: 40px;
}

/* tr:nth-child(even){background-color: #f3f3f3} */

th {
    background-color: #cacaca;
    color:  #1e1e1e;
}
#container {
  height: 400px;
}

.highcharts-figure, .highcharts-data-table table {
  min-width: 310px;
  max-width: 800px;
  margin: 1em auto;
}

#datatable {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #EBEBEB;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}
#datatable caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
#datatable th {
	font-weight: 600;
  padding: 0.5em;
}
#datatable td, #datatable th, #datatable caption {
  padding: 0.5em;
}
#datatable thead tr, #datatable tr:nth-child(even) {
  background: #f8f8f8;
}
#datatable tr:hover {
  background: #f1f7ff;
}
 
</style>

</head>


<?php
include 'menu.php';
?>

      

    </div>
  </div>
</nav>

</body>
</html>  

  <body>
  <center>
    <h2></h2> <br>   

        <!-- =================== การค้นหา =================== -->
        <form action='show.php' method='post'>
        <div class="row">
            <div class="col-sm-4"></div>

            <div class="col-sm-3">
            <div class='input-group'><span class='input-group-addon'>ปีการศึกษา</span>
            <select class='form-control' name='search' >
            <option value=''>- แสดงทั้งหมด -</option>
            <option value=''>ปีการศึกษา</option>
            <option value=''>ปี พ.ศ.</option>
            <option value=''>ปีงบประมาณ</option>
            </select></div>           
            </div>

            <div class='col-sm-1'>
            <input type='submit' name='searchbtn' class='btn btn-primary' value='ค้นหา'>
            </div>

            <div class="col-sm-4"></div>        
        </div><br><hr>     
        </form>
        <!-- =======================================================   -->

    <!-- *********ตารางแสดงจำนวนทั้งหมด************ -->
    <h2>ตารางแสดงการยืมทรัพยากรสารสนเทศของแต่ละคณะทั้ง 9 ปี</h2><br>
    <table class="w3-table-all w3-card-4" style = "width: 30%">
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
   
        <!-- ---------------ตารางส่วนที่ใช้สร้างกราฟ----------------     -->
        <div style="display:none">
        <table class="table" id="datatable"style = "width: 100%">
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
            <tr><td>2553</td><td>2413</td><td>3817</td><td>1324</td><td>31</td><td>377</td><td>311</td><td>1345</td><td>0</td><td>138</td></tr>
                <tr><td>2555</td><td>3817</td><td>2456</td><td>11356</td><td>356</td><td>122</td><td>178</td><td>1323</td><td>212</td><td>98</td></tr>
                <tr><td>2556</td><td>1324</td><td>2027</td><td>3998</td><td>2123</td><td>2379</td><td>2133</td><td>134</td><td>3223</td><td>923</td></tr>
                <tr><td>2557</td><td>3133</td><td>1245</td><td>3457</td><td>5125</td><td>4113</td><td>2134</td><td>133</td><td>2133</td><td>106</td></tr>
                <tr><td>2558</td><td>1377</td><td>2345</td><td>1746</td><td>3234</td><td>6136</td><td>3165</td><td>4271</td><td>2351</td><td>241</td></tr>
                <tr><td>2559</td><td>3567</td><td>1564</td><td>890</td><td>3300</td><td>3197</td><td>3126</td><td>1234</td><td>2234</td><td>134</td></tr>
                <tr><td>2560</td><td>2986</td><td>1054</td><td>1356</td><td>3679</td><td>2112</td><td>3102</td><td>1654</td><td>2111</td><td>234</td></tr>
                <tr><td>2561</td><td>3456</td><td>1176</td><td>1698</td><td>3268</td><td>5111</td><td>2401</td><td>900</td><td>2299</td><td>122</td></tr>
                <tr><td>2562</td><td>2531</td><td>2571</td><td>1456</td><td>3154</td><td>2101</td><td>4239</td><td>1200</td><td>35</td><td>234</td></tr>
                           
            </tbody>         
        </table>
    </div>
    <!-- --------------------------------------------------------- -->


    <!-- ====================การปุ่มแบ่งหลายหน้า================================= -->
 

    <!-- ********แสดงกราฟ ************ -->
    <br>
    <div class="row" >
            <div class="col-sm-7">
                <figure class="highcharts-figure">
                    <div id="barChat1"></div>
                    
                </figure>
            </div>
            
    
    </div><br><hr><br>            
    <!--******************************************-->

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
   
    <!-- ==========Bar Chat แยกตามสาขางาน============= -->
    <script>
         Highcharts.chart('barChat1', {
            data: {
                table: 'datatable'
            },
            chart: {
                type: 'column'
            },
            title: {
                text: 'ตารางแสดงการยืมทรัพยากรสารสนเทศของแต่ละคณะทั้ง 9 ปี'
            },
            yAxis: {
                allowDecimals: false,
                    title: {
                    text: 'จำนวน (คน)'
                    }
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
                }
            }
        }); 
        
    </script>


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
   
    
  </center>  
  </body> 
</html>