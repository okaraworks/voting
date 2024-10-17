<?php

ob_start();
session_start();

$current_file = $_SERVER['SCRIPT_NAME'];

if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
$http_referer = $_SERVER['HTTP_REFERER'];
}



function loggedin(){
		if((isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) || (isset($_SESSION['RO']) && !empty($_SESSION['RO'])) || (isset($_SESSION['admin']) && !empty($_SESSION['admin']))) {
		return true;
		} else {
		   return false;
		   }
 }


function getuserfield($field) {
	$query = "SELECT $field FROM voter_roll WHERE user_id = '".$_SESSION['user_id']."'";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
	 }
	
}

    
 function getvotedcongressmilimanidetails($field) {	
	$query = "SELECT $field FROM candidates WHERE candidate_id = '".$_SESSION['congress_milimani']."' ";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
		 }
	}	


 function getvotedcongresskotechadetails($field) {	
	$query = "SELECT $field FROM candidates WHERE candidate_id = '".$_SESSION['congress_kotecha']."' ";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
		 }
	}	


 function getvotedcongresshall1details($field) {	
	$query = "SELECT $field FROM candidates WHERE candidate_id = '".$_SESSION['congress_hall_1']."' ";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
		 }
	}	


 function getvotedcongresshall2details($field) {	
	$query = "SELECT $field FROM candidates WHERE candidate_id = '".$_SESSION['congress_hall_2']."' ";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
		 }
	}	


 function getvotedcongresshall3details($field) {	
	$query = "SELECT $field FROM candidates WHERE candidate_id = '".$_SESSION['congress_hall_3']."' ";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
		 }
	}	

 
 function getvotedcongressfacultyofeducationandsocialsciencesdetails($field) {	
	$query = "SELECT $field FROM candidates WHERE candidate_id = '".$_SESSION['congress_faculty_of_education_and_social_sciences']."' ";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
		 }
	}	


 function getvotedcongressfacultyofengineeringdetails($field) {	
	$query = "SELECT $field FROM candidates WHERE candidate_id = '".$_SESSION['congress_faculty_of_engineering']."' ";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
		 }
	}	


 function getvotedcongressfacultyofsciencedetails($field) {	
	$query = "SELECT $field FROM candidates WHERE candidate_id = '".$_SESSION['congress_faculty_of_science']."' ";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
		 }
	}	


 function getvotedcongresscdmhadetails($field) {	
	$query = "SELECT $field FROM candidates WHERE candidate_id = '".$_SESSION['congress_cdmha']."' ";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
		 }
	}	


 function getvotedchairpersondetails($field) {	
	$query = "SELECT $field FROM candidates WHERE candidate_id = '".$_SESSION['chairperson']."' ";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
		 }
	}	
	
 function getvotedvice_chairpersondetails($field) {	
	$query = "SELECT $field FROM candidates WHERE candidate_id = '".$_SESSION['vice_chairperson']."' ";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
		 }
	}
	
 function getvotedsecretary_generaldetails($field) {	
	$query = "SELECT $field FROM candidates WHERE candidate_id = '".$_SESSION['secretary_general']."' ";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
		 }
	}
	
 function getvoteddeputy_secretary_generaldetails($field) {	
	$query = "SELECT $field FROM candidates WHERE candidate_id = '".$_SESSION['deputy_secretary_general']."' ";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
		 }
	}
	
 function getvotedfinance_directordetails($field) {	
	$query = "SELECT $field FROM candidates WHERE candidate_id = '".$_SESSION['finance_director']."' ";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
		 }
	}
	
 function getvotedacademics_directordetails($field) {	
	$query = "SELECT $field FROM candidates WHERE candidate_id = '".$_SESSION['academics_director']."' ";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
		 }
	}
	
 function getvotedaccommodation_director_residentdetails($field) {	
	$query = "SELECT $field FROM candidates WHERE candidate_id = '".$_SESSION['accommodation_director_resident']."' ";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
		 }
	}
	
 function getvotedaccommodation_director_nonresidentdetails($field) {	
	$query = "SELECT $field FROM candidates WHERE candidate_id = '".$_SESSION['accommodation_director_nonresident']."' ";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
		 }
	}
	
 function getvotedcatering_directordetails($field) {	
	$query = "SELECT $field FROM candidates WHERE candidate_id = '".$_SESSION['catering_director']."' ";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
		 }
	}
	
 function getvotedentertainment_directordetails($field) {	
	$query = "SELECT $field FROM candidates WHERE candidate_id = '".$_SESSION['entertainment_director']."' ";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
		 }
	}
	

  
 function write_voter_to_file ($field) { 
  $filename = 'voted_voters.txt';
      
  $handle=fopen($filename, 'a');        
  fwrite($handle, $field." | ");
  fclose($handle); 
        
 }
 
/*
function getvotertoblockfield($field) {
	if($_SESSION['user_level'] == 'Administrator') {
	$entered_reg_no = $_POST['entered_reg_no'];
	$query = "SELECT $field FROM voter_roll WHERE reg_no = $entered_reg_no ";
		if($query_run = mysql_query($query)){
		    if($query_result = mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
		 }
	 }

}
*/  
  
  
function successful_voters_voted_sgc_candidates() {

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

		 $chairperson = $_SESSION['chairperson'];
		 $vice_chairperson = $_SESSION['vice_chairperson'];
		 $secretary_general = $_SESSION['secretary_general'];
		 $deputy_secretary_general = $_SESSION['deputy_secretary_general'];
		 $finance_director = $_SESSION['finance_director'];
		 $academics_director = $_SESSION['academics_director'];
		 $accommodation_director_resident = $_SESSION['accommodation_director_resident'];
		 $accommodation_director_nonresident = $_SESSION['accommodation_director_nonresident'];
		 $catering_director = $_SESSION['catering_director'];
		 $entertainment_director = $_SESSION['entertainment_director'];


           	$query = "SELECT username FROM successful_voters_voted_sgc_candidates WHERE reg_no = '".$reg_no."' OR id_no = '".$id_no."' OR voter_id = '".$user_id."' ";
			$query_run = mysql_query($query);	

			if(mysql_num_rows($query_run) == 1){
			echo 'Sorry, you have already voted....';
			} else if(mysql_num_rows($query_run) == 0){
			
			$query = "INSERT INTO successful_voters_voted_sgc_candidates
			(vote_id, voter_id, reg_no, id_no, first_name, sur_name, chairperson, vice_chairperson, secretary_general, deputy_secretary_general, finance_director, academics_director,    
			accommodation_director_resident, accommodation_director_nonresident, catering_director, entertainment_director) 
			VALUES(NULL, '".mysql_real_escape_string($user_id)."', '".mysql_real_escape_string($reg_no)."', '".
			mysql_real_escape_string($id_no)."', '".mysql_real_escape_string($first_name)."', '".mysql_real_escape_string($sur_name)."', 
			'".mysql_real_escape_string($chairperson)."', '".mysql_real_escape_string($vice_chairperson)."', '".mysql_real_escape_string(
			$secretary_general)."', '".mysql_real_escape_string($deputy_secretary_general)."', '".mysql_real_escape_string($finance_director)."', '".
			mysql_real_escape_string($academics_director)."', '".mysql_real_escape_string($accommodation_director_resident)."', '".
			mysql_real_escape_string($accommodation_director_nonresident)."', '".mysql_real_escape_string($catering_director)."', '".mysql_real_escape_string
			($entertainment_director)."')";
			
			$query_run = mysql_query($query); 

}

}
 
?>
 
