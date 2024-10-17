

<?php

function date_current() {
$date_current = strtotime("now");

return $date_current;
}

function date_start() {

$date_start = strtotime("12 April 2013 06:00:00");

return $date_start;
}


function date_end() {

$date_end = strtotime("30 May 2013 16:00:00");

return $date_end;
}



//require 'core.php';

/*
require 'dbconnect.php';


function date_current() {
$date_current = strtotime("now");

return $date_current;
}

function date_start() {

$date_start = strtotime('$start_day $start_month $start_year $start_hour:$start_minute:$start_second');

return $date_start;
}


function date_end() {

$date_end = strtotime('$end_day $end_month $end_year $end_hour:$end_minute:$end_second');

return $date_end;
}


function getvotingdateandtime($field) {
	$query = "SELECT $field FROM voting_date_and_time ";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
	 }
	
}




$start_day = getvotingdateandtime('start_day');
$start_month = getvotingdateandtime('start_month');
$start_year = getvotingdateandtime('start_year');
$start_hour = getvotingdateandtime('start_hour');
$start_minute = getvotingdateandtime('start_minute');
$start_second = getvotingdateandtime('start_second');
$end_day = getvotingdateandtime('end_day');
$end_month = getvotingdateandtime('end_month');
$end_year = getvotingdateandtime('end_year');
$end_hour = getvotingdateandtime('end_hour');
$end_minute = getvotingdateandtime('end_minute');
$end_second = getvotingdateandtime('end_second');

*//*

echo 'current date and time is '.date_current().'<br>';

echo 'starting time is '.date_start().'<br>';

echo 'ending time is '.date_end().'<br>';
*/

?> 


