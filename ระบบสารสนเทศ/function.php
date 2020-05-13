<?php
function convert_date($dateconv)
{
	echo $dateconv;
	//echo '12345' ;
//$month_array = array('01'=>"มกราคม", '02'=>"กุมภาพันธ์", '03'=>"มีนาคม", '04'=>"เมษายน", '05'=>"พฤศภาคม", '06'=>"มิถุนายน", '07'=>"กรกฏาคม", '08'=>"สิงหาคม",'09'=>"กันยายน",'10'=>"ตุลาคม");
$month_array = array("01"=>"มกราคม", "02"=>"กุมภาพันธ์", "03"=>"มีนาคม", "04"=>"เมษายน", "05"=>"พฤศภาคม", "06"=>"มิถุนายน", "07"=>"กรกฏาคม", "08"=>"สิงหาคม","09"=>"กันยายน","10"=>"ตุลาคม","11"=>"พฤศจิกายน","12"=>"ธันวาคม");
$year_array = array("2010"=>"2553", "2011"=>"2554", "2012"=>"2555", "2013"=>"2556", "2014"=>"2557", "2015"=>"2558", "2016"=>"2559", "2017"=>"2560", "2018"=>"2561", "2019"=>"2562");	

	//2015 11 12
	$year = substr($dateconv,0,4);
		
 	$month = substr($dateconv,4,2);
	$day = substr($dateconv,6,2);
// echo $day;
// echo $month;
// echo $year;

	//$str = $day."/".$month."/".$year;
	$str = $day."/".$month_array[$month]."/".$year_array[$year];
	//$str = $day."/".$month_array[$month]."/".$year_array[$year];
	//$str = $month_array[$month];
	return $str;
}

/*function convert_cell_no($call_no)
{
	//$cell_no_array = array("01"=>"นักศึกษาปริญญาตรี", "02"=>"นักศึกษาบัณฑิตศึกษา","03"=>"อาจารย์","04"=>"บุคคลากร","05"=>"บุคคลากรภายนอก");
	$cell = substr($call_no,0,3);
	
	
	//$str = $cell_no_array[$cell];
	return $str;
}*/

/*
function convert_type($patron_type)
{
	$type_array = array("01"=>"นักศึกษาปริญญาตรี", "02"=>"นักศึกษาบัณฑิตศึกษา","03"=>"อาจารย์","04"=>"บุคคลากร","05"=>"บุคคลากรภายนอก","06"=>"","07"=>"" );
	$type = substr($patron_type,0,3);
	
	
	$str = $type_array[$type];
	return $str;
}*/

?>