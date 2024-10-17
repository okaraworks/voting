
<?php

require 'core.php';
require 'dbconnect.php';
require 'vote_talling.php';

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


	if($academic_division == 'Faculty of Science') {
	header('Location: congress_faculty_of_science.php');
	}
	
	else if($academic_division == 'Faculty of Engineering') {
	header('Location: congress_faculty_of_engineering.php');
	}
	
	else if($academic_division == 'Faculty of Education and Social Sciences') {
	header('Location: congress_faculty_of_education_and_social_sciences.php');
	}
	
	else if($academic_division == 'CDMHA') {
	header('Location: congress_cdmha.php');
	}


} else if(!loggedin()){
echo 'Sorry, you have to log in first for you to vote';
}

?>
