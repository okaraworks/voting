<?php

require 'core.php';
require 'dbconnect.php';

if(loggedin()){

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('sur_name');
$gender = getuserfield('gender');
$id_no = getuserfield('id_no');
$phone_no = getuserfield('phone_no');
$email_address = getuserfield('email_address');
$graduate_level = getuserfield('graduate_level');
$category = getuserfield('category');
$campus = getuserfield('campus');
$academic_division = getuserfield('academic_division');
$year_of_study = getuserfield('year_of_study');
$residence_area = getuserfield('residence_area');
$residence_hall = getuserfield('residence_hall');
$username = getuserfield('username');
$password = getuserfield('password');


if (isset($user_id) && isset($reg_no) && isset($first_name) && isset($sur_name) && isset($gender) && isset($id_no) && isset($phone_no)&& isset($email_address) && isset($graduate_level) && isset($category) && isset($campus) && isset($academic_division) && isset($year_of_study) && isset($residence_area) && isset($residence_hall) && isset($username) && isset($password)) {
  
   if(!empty($user_id) && !empty($reg_no) && !empty($first_name) && !empty($sur_name) && !empty($gender) && !empty($id_no) && !empty(   $phone_no) && !empty   ($email_address) && !empty($graduate_level) && !empty($category) && !empty($campus) && !empty(  
   $academic_division) && !empty($year_of_study) && !empty($residence_area) && !empty($residence_hall) && !empty($username) && !empty(   $password)){   
  
  /*// retrieve information
	$query = "SELECT user_id, reg_no, first_name, sur_name, gender, id_no, phone_no, email_address, graduate_level, category,  
	campus, academic_division, year_of_study, residence_area, residence_hall, username, password FROM successful_voters ORDER BY
	 academic_division ASC";
	$query_run = mysql_query($query);	
	
	// determine number of rows returned
	$result = mysql_num_rows($query_run);

	// loop through the results
	while ($row = mysql_fetch_assoc($query_run)) {
	extract($row);   
  */ 
  
  $filename = 'registered_voters.txt';    
  $handle=fopen($filename, 'a');        
  fwrite($handle, $reg_no."\n");    
  fclose($handle);   //closes an open file
  
  echo 'Current names in file: ';
  
  $count = 1;
  $readin = file('names.txt');   //file() is used to read the contents of an open file
  $readin_count = count($readin);    //
  
  foreach($readin as $fname)  {
     echo trim($fname);
	 
	 if($count<$readin_count){
	   echo ', ';
	 }
	 $count++;
  }
 } else {
     echo 'Empty values.';
    }
}
} else if(!loggedin()){
echo 'Sorry, you have to log in first for you to vote';
}
?>
