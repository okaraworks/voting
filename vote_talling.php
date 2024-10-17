<?php

require 'dbconnect.php';


function individual_position_table_cdmha_non_resident() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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
		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');		
				
						
				$congress_cdmha_vote_id = getvotedcongresscdmhadetails('vote_id');
				$congress_cdmha_id = getvotedcongresscdmhadetails('candidate_id');
				$congress_cdmha_reg_no = getvotedcongresscdmhadetails('reg_no');
				$congress_cdmha_id_no = getvotedcongresscdmhadetails('id_no');
				$congress_cdmha_first_name = getvotedcongresscdmhadetails('first_name');
				$congress_cdmha_sur_name = getvotedcongresscdmhadetails('sur_name');
				$congress_cdmha_position = getvotedcongresscdmhadetails('position');
				

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
				
		$congress_cdmha = $_SESSION['congress_cdmha'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
            if(isset($congress_cdmha)){
			$query_congress_cdmha = "INSERT INTO voted_congress_cdmha
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_cdmha_id)."', '".mysql_real_escape_string($congress_cdmha_reg_no)."', '".
			mysql_real_escape_string($congress_cdmha_id_no)."', '".mysql_real_escape_string($congress_cdmha_first_name)."', '".mysql_real_escape_string($congress_cdmha_sur_name)."')";			
			mysql_query($query_congress_cdmha);   
									
		     
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}





function individual_position_table_cdmha_hall_1() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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
		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');		
				
						
				$congress_hall_1_vote_id = getvotedcongresshall1details('vote_id');
				$congress_hall_1_id = getvotedcongresshall1details('candidate_id');
				$congress_hall_1_reg_no = getvotedcongresshall1details('reg_no');
				$congress_hall_1_id_no = getvotedcongresshall1details('id_no');
				$congress_hall_1_first_name = getvotedcongresshall1details('first_name');
				$congress_hall_1_sur_name = getvotedcongresshall1details('sur_name');
				$congress_hall_1_position = getvotedcongresshall1details('position');
									
				$congress_cdmha_vote_id = getvotedcongresscdmhadetails('vote_id');
				$congress_cdmha_id = getvotedcongresscdmhadetails('candidate_id');
				$congress_cdmha_reg_no = getvotedcongresscdmhadetails('reg_no');
				$congress_cdmha_id_no = getvotedcongresscdmhadetails('id_no');
				$congress_cdmha_first_name = getvotedcongresscdmhadetails('first_name');
				$congress_cdmha_sur_name = getvotedcongresscdmhadetails('sur_name');
				$congress_cdmha_position = getvotedcongresscdmhadetails('position');
				

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
				
		$congress_hall_1 = $_SESSION['congress_hall_1'];
		$congress_cdmha = $_SESSION['congress_cdmha'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
            if(isset($congress_hall_1)){
			$query_congress_hall_1 = "INSERT INTO voted_congress_hall_1
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_hall_1_id)."', '".mysql_real_escape_string($congress_hall_1_reg_no)."', '".
			mysql_real_escape_string($congress_hall_1_id_no)."', '".mysql_real_escape_string($congress_hall_1_first_name)."', '".mysql_real_escape_string($congress_hall_1_sur_name)."')";			
			mysql_query($query_congress_hall_1);   
						
			
            if(isset($congress_cdmha)){
			$query_congress_cdmha = "INSERT INTO voted_congress_cdmha
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_cdmha_id)."', '".mysql_real_escape_string($congress_cdmha_reg_no)."', '".
			mysql_real_escape_string($congress_cdmha_id_no)."', '".mysql_real_escape_string($congress_cdmha_first_name)."', '".mysql_real_escape_string($congress_cdmha_sur_name)."')";			
			mysql_query($query_congress_cdmha);   
									
		     
		                 }
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}




function individual_position_table_cdmha_hall_2() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
						
				$congress_hall_2_vote_id = getvotedcongresshall2details('vote_id');
				$congress_hall_2_id = getvotedcongresshall2details('candidate_id');
				$congress_hall_2_reg_no = getvotedcongresshall2details('reg_no');
				$congress_hall_2_id_no = getvotedcongresshall2details('id_no');
				$congress_hall_2_first_name = getvotedcongresshall2details('first_name');
				$congress_hall_2_sur_name = getvotedcongresshall2details('sur_name');
				$congress_hall_2_position = getvotedcongresshall2details('position');
						
						
									
				$congress_cdmha_vote_id = getvotedcongresscdmhadetails('vote_id');
				$congress_cdmha_id = getvotedcongresscdmhadetails('candidate_id');
				$congress_cdmha_reg_no = getvotedcongresscdmhadetails('reg_no');
				$congress_cdmha_id_no = getvotedcongresscdmhadetails('id_no');
				$congress_cdmha_first_name = getvotedcongresscdmhadetails('first_name');
				$congress_cdmha_sur_name = getvotedcongresscdmhadetails('sur_name');
				$congress_cdmha_position = getvotedcongresscdmhadetails('position');
				

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
				
		$congress_hall_2 = $_SESSION['congress_hall_2'];
		$congress_cdmha = $_SESSION['congress_cdmha'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 

			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
            if(isset($congress_hall_2)){
			$query_congress_hall_2 = "INSERT INTO voted_congress_hall_2
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_hall_2_id)."', '".mysql_real_escape_string($congress_hall_2_reg_no)."', '".
			mysql_real_escape_string($congress_hall_2_id_no)."', '".mysql_real_escape_string($congress_hall_2_first_name)."', '".mysql_real_escape_string($congress_hall_2_sur_name)."')";			
			mysql_query($query_congress_hall_2);   
						
			
            if(isset($congress_cdmha)){
			$query_congress_cdmha = "INSERT INTO voted_congress_cdmha
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_cdmha_id)."', '".mysql_real_escape_string($congress_cdmha_reg_no)."', '".
			mysql_real_escape_string($congress_cdmha_id_no)."', '".mysql_real_escape_string($congress_cdmha_first_name)."', '".mysql_real_escape_string($congress_cdmha_sur_name)."')";			
			mysql_query($query_congress_cdmha);   
									
		     
		                 }
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}




function individual_position_table_cdmha_hall_3() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');

		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
		
				
						
				$congress_hall_3_vote_id = getvotedcongresshall3details('vote_id');
				$congress_hall_3_id = getvotedcongresshall3details('candidate_id');
				$congress_hall_3_reg_no = getvotedcongresshall3details('reg_no');
				$congress_hall_3_id_no = getvotedcongresshall3details('id_no');
				$congress_hall_3_first_name = getvotedcongresshall3details('first_name');
				$congress_hall_3_sur_name = getvotedcongresshall3details('sur_name');
				$congress_hall_3_position = getvotedcongresshall3details('position');
						
						
									
				$congress_cdmha_vote_id = getvotedcongresscdmhadetails('vote_id');
				$congress_cdmha_id = getvotedcongresscdmhadetails('candidate_id');
				$congress_cdmha_reg_no = getvotedcongresscdmhadetails('reg_no');
				$congress_cdmha_id_no = getvotedcongresscdmhadetails('id_no');
				$congress_cdmha_first_name = getvotedcongresscdmhadetails('first_name');
				$congress_cdmha_sur_name = getvotedcongresscdmhadetails('sur_name');
				$congress_cdmha_position = getvotedcongresscdmhadetails('position');
				

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
				
		$congress_hall_3 = $_SESSION['congress_hall_3'];
		$congress_cdmha = $_SESSION['congress_cdmha'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 

			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
            if(isset($congress_hall_3)){
			$query_congress_hall_3 = "INSERT INTO voted_congress_hall_3
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_hall_3_id)."', '".mysql_real_escape_string($congress_hall_3_reg_no)."', '".
			mysql_real_escape_string($congress_hall_3_id_no)."', '".mysql_real_escape_string($congress_hall_3_first_name)."', '".mysql_real_escape_string($congress_hall_3_sur_name)."')";			
			mysql_query($query_congress_hall_3);   
						
			
            if(isset($congress_cdmha)){
			$query_congress_cdmha = "INSERT INTO voted_congress_cdmha
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_cdmha_id)."', '".mysql_real_escape_string($congress_cdmha_reg_no)."', '".
			mysql_real_escape_string($congress_cdmha_id_no)."', '".mysql_real_escape_string($congress_cdmha_first_name)."', '".mysql_real_escape_string($congress_cdmha_sur_name)."')";			
			mysql_query($query_congress_cdmha);   
									
		     
		                 }
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}




function individual_position_table_cdmha_milimani() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');

		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
		
				
						
				$congress_milimani_vote_id = getvotedcongressmilimanidetails('vote_id');
				$congress_milimani_id = getvotedcongressmilimanidetails('candidate_id');
				$congress_milimani_reg_no = getvotedcongressmilimanidetails('reg_no');
				$congress_milimani_id_no = getvotedcongressmilimanidetails('id_no');
				$congress_milimani_first_name = getvotedcongressmilimanidetails('first_name');
				$congress_milimani_sur_name = getvotedcongressmilimanidetails('sur_name');
				$congress_milimani_position = getvotedcongressmilimanidetails('position');
						
						
									
				$congress_cdmha_vote_id = getvotedcongresscdmhadetails('vote_id');
				$congress_cdmha_id = getvotedcongresscdmhadetails('candidate_id');
				$congress_cdmha_reg_no = getvotedcongresscdmhadetails('reg_no');
				$congress_cdmha_id_no = getvotedcongresscdmhadetails('id_no');
				$congress_cdmha_first_name = getvotedcongresscdmhadetails('first_name');
				$congress_cdmha_sur_name = getvotedcongresscdmhadetails('sur_name');
				$congress_cdmha_position = getvotedcongresscdmhadetails('position');
				

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
				
		$congress_milimani = $_SESSION['congress_milimani'];
		$congress_cdmha = $_SESSION['congress_cdmha'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 

			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
            if(isset($congress_milimani)){
			$query_congress_milimani = "INSERT INTO voted_congress_milimani
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_milimani_id)."', '".mysql_real_escape_string($congress_milimani_reg_no)."', '".
			mysql_real_escape_string($congress_milimani_id_no)."', '".mysql_real_escape_string($congress_milimani_first_name)."', '".mysql_real_escape_string($congress_milimani_sur_name)."')";			
			mysql_query($query_congress_milimani);   
						
			
            if(isset($congress_cdmha)){
			$query_congress_cdmha = "INSERT INTO voted_congress_cdmha
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_cdmha_id)."', '".mysql_real_escape_string($congress_cdmha_reg_no)."', '".
			mysql_real_escape_string($congress_cdmha_id_no)."', '".mysql_real_escape_string($congress_cdmha_first_name)."', '".mysql_real_escape_string($congress_cdmha_sur_name)."')";			
			mysql_query($query_congress_cdmha);   
									
		     
		                 }
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}




function individual_position_table_cdmha_kotecha() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');

		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
		
				
						
				$congress_kotecha_vote_id = getvotedcongresskotechadetails('vote_id');
				$congress_kotecha_id = getvotedcongresskotechadetails('candidate_id');
				$congress_kotecha_reg_no = getvotedcongresskotechadetails('reg_no');
				$congress_kotecha_id_no = getvotedcongresskotechadetails('id_no');
				$congress_kotecha_first_name = getvotedcongresskotechadetails('first_name');
				$congress_kotecha_sur_name = getvotedcongresskotechadetails('sur_name');
				$congress_kotecha_position = getvotedcongresskotechadetails('position');
						
						
									
				$congress_cdmha_vote_id = getvotedcongresscdmhadetails('vote_id');
				$congress_cdmha_id = getvotedcongresscdmhadetails('candidate_id');
				$congress_cdmha_reg_no = getvotedcongresscdmhadetails('reg_no');
				$congress_cdmha_id_no = getvotedcongresscdmhadetails('id_no');
				$congress_cdmha_first_name = getvotedcongresscdmhadetails('first_name');
				$congress_cdmha_sur_name = getvotedcongresscdmhadetails('sur_name');
				$congress_cdmha_position = getvotedcongresscdmhadetails('position');
				

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
				
		$congress_kotecha = $_SESSION['congress_kotecha'];
		$congress_cdmha = $_SESSION['congress_cdmha'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 

			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
            if(isset($congress_kotecha)){
			$query_congress_kotecha = "INSERT INTO voted_congress_kotecha
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_kotecha_id)."', '".mysql_real_escape_string($congress_kotecha_reg_no)."', '".
			mysql_real_escape_string($congress_kotecha_id_no)."', '".mysql_real_escape_string($congress_kotecha_first_name)."', '".mysql_real_escape_string($congress_kotecha_sur_name)."')";			
			mysql_query($query_congress_kotecha);   
						
			
            if(isset($congress_cdmha)){
			$query_congress_cdmha = "INSERT INTO voted_congress_cdmha
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_cdmha_id)."', '".mysql_real_escape_string($congress_cdmha_reg_no)."', '".
			mysql_real_escape_string($congress_cdmha_id_no)."', '".mysql_real_escape_string($congress_cdmha_first_name)."', '".mysql_real_escape_string($congress_cdmha_sur_name)."')";			
			mysql_query($query_congress_cdmha);   
									
		     
		                 }
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}





function individual_position_table_faculty_of_science_non_resident() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');

		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
		
				
									
				$congress_faculty_of_science_vote_id = getvotedcongressfacultyofsciencedetails('vote_id');
				$congress_faculty_of_science_id = getvotedcongressfacultyofsciencedetails('candidate_id');
				$congress_faculty_of_science_reg_no = getvotedcongressfacultyofsciencedetails('reg_no');
				$congress_faculty_of_science_id_no = getvotedcongressfacultyofsciencedetails('id_no');
				$congress_faculty_of_science_first_name = getvotedcongressfacultyofsciencedetails('first_name');
				$congress_faculty_of_science_sur_name = getvotedcongressfacultyofsciencedetails('sur_name');
				$congress_faculty_of_science_position = getvotedcongressfacultyofsciencedetails('position');
				

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
				
		$congress_faculty_of_science = $_SESSION['congress_faculty_of_science'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 

			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
			
            if(isset($congress_faculty_of_science)){
			$query_congress_faculty_of_science = "INSERT INTO voted_congress_faculty_of_science
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_faculty_of_science_id)."', '".mysql_real_escape_string($congress_faculty_of_science_reg_no)."', '".
			mysql_real_escape_string($congress_faculty_of_science_id_no)."', '".mysql_real_escape_string($congress_faculty_of_science_first_name)."', '".mysql_real_escape_string($congress_faculty_of_science_sur_name)."')";			
			mysql_query($query_congress_faculty_of_science);   
									
		     
		                 }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}




function individual_position_table_faculty_of_science_hall_1() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');

		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
		
				
						
				$congress_hall_1_vote_id = getvotedcongresshall1details('vote_id');
				$congress_hall_1_id = getvotedcongresshall1details('candidate_id');
				$congress_hall_1_reg_no = getvotedcongresshall1details('reg_no');
				$congress_hall_1_id_no = getvotedcongresshall1details('id_no');
				$congress_hall_1_first_name = getvotedcongresshall1details('first_name');
				$congress_hall_1_sur_name = getvotedcongresshall1details('sur_name');
				$congress_hall_1_position = getvotedcongresshall1details('position');
						
						
									
				$congress_faculty_of_science_vote_id = getvotedcongressfacultyofsciencedetails('vote_id');
				$congress_faculty_of_science_id = getvotedcongressfacultyofsciencedetails('candidate_id');
				$congress_faculty_of_science_reg_no = getvotedcongressfacultyofsciencedetails('reg_no');
				$congress_faculty_of_science_id_no = getvotedcongressfacultyofsciencedetails('id_no');
				$congress_faculty_of_science_first_name = getvotedcongressfacultyofsciencedetails('first_name');
				$congress_faculty_of_science_sur_name = getvotedcongressfacultyofsciencedetails('sur_name');
				$congress_faculty_of_science_position = getvotedcongressfacultyofsciencedetails('position');
				

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
				
		$congress_hall_1 = $_SESSION['congress_hall_1'];
		$congress_faculty_of_science = $_SESSION['congress_faculty_of_science'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 

			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
            if(isset($congress_hall_1)){
			$query_congress_hall_1 = "INSERT INTO voted_congress_hall_1
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_hall_1_id)."', '".mysql_real_escape_string($congress_hall_1_reg_no)."', '".
			mysql_real_escape_string($congress_hall_1_id_no)."', '".mysql_real_escape_string($congress_hall_1_first_name)."', '".mysql_real_escape_string($congress_hall_1_sur_name)."')";			
			mysql_query($query_congress_hall_1);   
						
			
            if(isset($congress_faculty_of_science)){
			$query_congress_faculty_of_science = "INSERT INTO voted_congress_faculty_of_science
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_faculty_of_science_id)."', '".mysql_real_escape_string($congress_faculty_of_science_reg_no)."', '".
			mysql_real_escape_string($congress_faculty_of_science_id_no)."', '".mysql_real_escape_string($congress_faculty_of_science_first_name)."', '".mysql_real_escape_string($congress_faculty_of_science_sur_name)."')";			
			mysql_query($query_congress_faculty_of_science);   
									
		     
		                 }
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}




function individual_position_table_faculty_of_science_hall_2() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');

		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
		
				
						
				$congress_hall_2_vote_id = getvotedcongresshall2details('vote_id');
				$congress_hall_2_id = getvotedcongresshall2details('candidate_id');
				$congress_hall_2_reg_no = getvotedcongresshall2details('reg_no');
				$congress_hall_2_id_no = getvotedcongresshall2details('id_no');
				$congress_hall_2_first_name = getvotedcongresshall2details('first_name');
				$congress_hall_2_sur_name = getvotedcongresshall2details('sur_name');
				$congress_hall_2_position = getvotedcongresshall2details('position');
						
						
									
				$congress_faculty_of_science_vote_id = getvotedcongressfacultyofsciencedetails('vote_id');
				$congress_faculty_of_science_id = getvotedcongressfacultyofsciencedetails('candidate_id');
				$congress_faculty_of_science_reg_no = getvotedcongressfacultyofsciencedetails('reg_no');
				$congress_faculty_of_science_id_no = getvotedcongressfacultyofsciencedetails('id_no');
				$congress_faculty_of_science_first_name = getvotedcongressfacultyofsciencedetails('first_name');
				$congress_faculty_of_science_sur_name = getvotedcongressfacultyofsciencedetails('sur_name');
				$congress_faculty_of_science_position = getvotedcongressfacultyofsciencedetails('position');
				

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
				
		$congress_hall_2 = $_SESSION['congress_hall_2'];
		$congress_faculty_of_science = $_SESSION['congress_faculty_of_science'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 

			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
            if(isset($congress_hall_2)){
			$query_congress_hall_2 = "INSERT INTO voted_congress_hall_2
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_hall_2_id)."', '".mysql_real_escape_string($congress_hall_2_reg_no)."', '".
			mysql_real_escape_string($congress_hall_2_id_no)."', '".mysql_real_escape_string($congress_hall_2_first_name)."', '".mysql_real_escape_string($congress_hall_2_sur_name)."')";			
			mysql_query($query_congress_hall_2);   
						
			
            if(isset($congress_faculty_of_science)){
			$query_congress_faculty_of_science = "INSERT INTO voted_congress_faculty_of_science
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_faculty_of_science_id)."', '".mysql_real_escape_string($congress_faculty_of_science_reg_no)."', '".
			mysql_real_escape_string($congress_faculty_of_science_id_no)."', '".mysql_real_escape_string($congress_faculty_of_science_first_name)."', '".mysql_real_escape_string($congress_faculty_of_science_sur_name)."')";			
			mysql_query($query_congress_faculty_of_science);   
									
		     
		                 }
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}





function individual_position_table_faculty_of_science_hall_3() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');

		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
		
				
						
				$congress_hall_3_vote_id = getvotedcongresshall3details('vote_id');
				$congress_hall_3_id = getvotedcongresshall3details('candidate_id');
				$congress_hall_3_reg_no = getvotedcongresshall3details('reg_no');
				$congress_hall_3_id_no = getvotedcongresshall3details('id_no');
				$congress_hall_3_first_name = getvotedcongresshall3details('first_name');
				$congress_hall_3_sur_name = getvotedcongresshall3details('sur_name');
				$congress_hall_3_position = getvotedcongresshall3details('position');
						
						
									
				$congress_faculty_of_science_vote_id = getvotedcongressfacultyofsciencedetails('vote_id');
				$congress_faculty_of_science_id = getvotedcongressfacultyofsciencedetails('candidate_id');
				$congress_faculty_of_science_reg_no = getvotedcongressfacultyofsciencedetails('reg_no');
				$congress_faculty_of_science_id_no = getvotedcongressfacultyofsciencedetails('id_no');
				$congress_faculty_of_science_first_name = getvotedcongressfacultyofsciencedetails('first_name');
				$congress_faculty_of_science_sur_name = getvotedcongressfacultyofsciencedetails('sur_name');
				$congress_faculty_of_science_position = getvotedcongressfacultyofsciencedetails('position');
				

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
				
		$congress_hall_3 = $_SESSION['congress_hall_3'];
		$congress_faculty_of_science = $_SESSION['congress_faculty_of_science'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 

			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
            if(isset($congress_hall_3)){
			$query_congress_hall_3 = "INSERT INTO voted_congress_hall_3
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_hall_3_id)."', '".mysql_real_escape_string($congress_hall_3_reg_no)."', '".
			mysql_real_escape_string($congress_hall_3_id_no)."', '".mysql_real_escape_string($congress_hall_3_first_name)."', '".mysql_real_escape_string($congress_hall_3_sur_name)."')";			
			mysql_query($query_congress_hall_3);   
						
			
            if(isset($congress_faculty_of_science)){
			$query_congress_faculty_of_science = "INSERT INTO voted_congress_faculty_of_science
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_faculty_of_science_id)."', '".mysql_real_escape_string($congress_faculty_of_science_reg_no)."', '".
			mysql_real_escape_string($congress_faculty_of_science_id_no)."', '".mysql_real_escape_string($congress_faculty_of_science_first_name)."', '".mysql_real_escape_string($congress_faculty_of_science_sur_name)."')";			
			mysql_query($query_congress_faculty_of_science);   
									
		     
		                 }
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}




function individual_position_table_faculty_of_science_milimani() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');

		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
		
				
						
				$congress_milimani_vote_id = getvotedcongressmilimanidetails('vote_id');
				$congress_milimani_id = getvotedcongressmilimanidetails('candidate_id');
				$congress_milimani_reg_no = getvotedcongressmilimanidetails('reg_no');
				$congress_milimani_id_no = getvotedcongressmilimanidetails('id_no');
				$congress_milimani_first_name = getvotedcongressmilimanidetails('first_name');
				$congress_milimani_sur_name = getvotedcongressmilimanidetails('sur_name');
				$congress_milimani_position = getvotedcongressmilimanidetails('position');
						
						
									
				$congress_faculty_of_science_vote_id = getvotedcongressfacultyofsciencedetails('vote_id');
				$congress_faculty_of_science_id = getvotedcongressfacultyofsciencedetails('candidate_id');
				$congress_faculty_of_science_reg_no = getvotedcongressfacultyofsciencedetails('reg_no');
				$congress_faculty_of_science_id_no = getvotedcongressfacultyofsciencedetails('id_no');
				$congress_faculty_of_science_first_name = getvotedcongressfacultyofsciencedetails('first_name');
				$congress_faculty_of_science_sur_name = getvotedcongressfacultyofsciencedetails('sur_name');
				$congress_faculty_of_science_position = getvotedcongressfacultyofsciencedetails('position');
				

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
				
		$congress_milimani = $_SESSION['congress_milimani'];
		$congress_faculty_of_science = $_SESSION['congress_faculty_of_science'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 

			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
            if(isset($congress_milimani)){
			$query_congress_milimani = "INSERT INTO voted_congress_milimani
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_milimani_id)."', '".mysql_real_escape_string($congress_milimani_reg_no)."', '".
			mysql_real_escape_string($congress_milimani_id_no)."', '".mysql_real_escape_string($congress_milimani_first_name)."', '".mysql_real_escape_string($congress_milimani_sur_name)."')";			
			mysql_query($query_congress_milimani);   
						
			
            if(isset($congress_faculty_of_science)){
			$query_congress_faculty_of_science = "INSERT INTO voted_congress_faculty_of_science
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_faculty_of_science_id)."', '".mysql_real_escape_string($congress_faculty_of_science_reg_no)."', '".
			mysql_real_escape_string($congress_faculty_of_science_id_no)."', '".mysql_real_escape_string($congress_faculty_of_science_first_name)."', '".mysql_real_escape_string($congress_faculty_of_science_sur_name)."')";			
			mysql_query($query_congress_faculty_of_science);   
									
		     
		                 }
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}




function individual_position_table_faculty_of_science_kotecha() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');

		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
		
				
						
				$congress_kotecha_vote_id = getvotedcongresskotechadetails('vote_id');
				$congress_kotecha_id = getvotedcongresskotechadetails('candidate_id');
				$congress_kotecha_reg_no = getvotedcongresskotechadetails('reg_no');
				$congress_kotecha_id_no = getvotedcongresskotechadetails('id_no');
				$congress_kotecha_first_name = getvotedcongresskotechadetails('first_name');
				$congress_kotecha_sur_name = getvotedcongresskotechadetails('sur_name');
				$congress_kotecha_position = getvotedcongresskotechadetails('position');
						
						
									
				$congress_faculty_of_science_vote_id = getvotedcongressfacultyofsciencedetails('vote_id');
				$congress_faculty_of_science_id = getvotedcongressfacultyofsciencedetails('candidate_id');
				$congress_faculty_of_science_reg_no = getvotedcongressfacultyofsciencedetails('reg_no');
				$congress_faculty_of_science_id_no = getvotedcongressfacultyofsciencedetails('id_no');
				$congress_faculty_of_science_first_name = getvotedcongressfacultyofsciencedetails('first_name');
				$congress_faculty_of_science_sur_name = getvotedcongressfacultyofsciencedetails('sur_name');
				$congress_faculty_of_science_position = getvotedcongressfacultyofsciencedetails('position');
				

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
				
		$congress_kotecha = $_SESSION['congress_kotecha'];
		$congress_faculty_of_science = $_SESSION['congress_faculty_of_science'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 

			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
            if(isset($congress_kotecha)){
			$query_congress_kotecha = "INSERT INTO voted_congress_kotecha
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_kotecha_id)."', '".mysql_real_escape_string($congress_kotecha_reg_no)."', '".
			mysql_real_escape_string($congress_kotecha_id_no)."', '".mysql_real_escape_string($congress_kotecha_first_name)."', '".mysql_real_escape_string($congress_kotecha_sur_name)."')";			
			mysql_query($query_congress_kotecha);   
						
			
            if(isset($congress_faculty_of_science)){
			$query_congress_faculty_of_science = "INSERT INTO voted_congress_faculty_of_science
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_faculty_of_science_id)."', '".mysql_real_escape_string($congress_faculty_of_science_reg_no)."', '".
			mysql_real_escape_string($congress_faculty_of_science_id_no)."', '".mysql_real_escape_string($congress_faculty_of_science_first_name)."', '".mysql_real_escape_string($congress_faculty_of_science_sur_name)."')";			
			mysql_query($query_congress_faculty_of_science);   
									
		     
		                 }
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}




function individual_position_table_faculty_of_engineering_non_resident() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');

		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
		
				
						
				$congress_faculty_of_engineering_vote_id = getvotedcongressfacultyofengineeringdetails('vote_id');
				$congress_faculty_of_engineering_id = getvotedcongressfacultyofengineeringdetails('candidate_id');
				$congress_faculty_of_engineering_reg_no = getvotedcongressfacultyofengineeringdetails('reg_no');
				$congress_faculty_of_engineering_id_no = getvotedcongressfacultyofengineeringdetails('id_no');
				$congress_faculty_of_engineering_first_name = getvotedcongressfacultyofengineeringdetails('first_name');
				$congress_faculty_of_engineering_sur_name = getvotedcongressfacultyofengineeringdetails('sur_name');
				$congress_faculty_of_engineering_position = getvotedcongressfacultyofengineeringdetails('position');
				

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
				
		$congress_faculty_of_engineering = $_SESSION['congress_faculty_of_engineering'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
						
			
            if(isset($congress_faculty_of_engineering)){
			$query_congress_faculty_of_engineering = "INSERT INTO voted_congress_faculty_of_engineering
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_faculty_of_engineering_id)."', '".mysql_real_escape_string($congress_faculty_of_engineering_reg_no)."', '".
			mysql_real_escape_string($congress_faculty_of_engineering_id_no)."', '".mysql_real_escape_string($congress_faculty_of_engineering_first_name)."', '".mysql_real_escape_string($congress_faculty_of_engineering_sur_name)."')";			
			mysql_query($query_congress_faculty_of_engineering);   
									
		     
		                 }
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }

}




function individual_position_table_faculty_of_engineering_hall_1() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');

		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
		
				
						
				$congress_hall_1_vote_id = getvotedcongresshall1details('vote_id');
				$congress_hall_1_id = getvotedcongresshall1details('candidate_id');
				$congress_hall_1_reg_no = getvotedcongresshall1details('reg_no');
				$congress_hall_1_id_no = getvotedcongresshall1details('id_no');
				$congress_hall_1_first_name = getvotedcongresshall1details('first_name');
				$congress_hall_1_sur_name = getvotedcongresshall1details('sur_name');
				$congress_hall_1_position = getvotedcongresshall1details('position');
						
						
									
				$congress_faculty_of_engineering_vote_id = getvotedcongressfacultyofengineeringdetails('vote_id');
				$congress_faculty_of_engineering_id = getvotedcongressfacultyofengineeringdetails('candidate_id');
				$congress_faculty_of_engineering_reg_no = getvotedcongressfacultyofengineeringdetails('reg_no');
				$congress_faculty_of_engineering_id_no = getvotedcongressfacultyofengineeringdetails('id_no');
				$congress_faculty_of_engineering_first_name = getvotedcongressfacultyofengineeringdetails('first_name');
				$congress_faculty_of_engineering_sur_name = getvotedcongressfacultyofengineeringdetails('sur_name');
				$congress_faculty_of_engineering_position = getvotedcongressfacultyofengineeringdetails('position');
				

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
				
		$congress_hall_1 = $_SESSION['congress_hall_1'];
		$congress_faculty_of_engineering = $_SESSION['congress_faculty_of_engineering'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
            if(isset($congress_hall_1)){
			$query_congress_hall_1 = "INSERT INTO voted_congress_hall_1
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_hall_1_id)."', '".mysql_real_escape_string($congress_hall_1_reg_no)."', '".
			mysql_real_escape_string($congress_hall_1_id_no)."', '".mysql_real_escape_string($congress_hall_1_first_name)."', '".mysql_real_escape_string($congress_hall_1_sur_name)."')";			
			mysql_query($query_congress_hall_1);   
						
			
            if(isset($congress_faculty_of_engineering)){
			$query_congress_faculty_of_engineering = "INSERT INTO voted_congress_faculty_of_engineering
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_faculty_of_engineering_id)."', '".mysql_real_escape_string($congress_faculty_of_engineering_reg_no)."', '".
			mysql_real_escape_string($congress_faculty_of_engineering_id_no)."', '".mysql_real_escape_string($congress_faculty_of_engineering_first_name)."', '".mysql_real_escape_string($congress_faculty_of_engineering_sur_name)."')";			
			mysql_query($query_congress_faculty_of_engineering);   
									
		     
		                 }
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}




function individual_position_table_faculty_of_engineering_hall_2() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');

		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
		
				
						
				$congress_hall_2_vote_id = getvotedcongresshall2details('vote_id');
				$congress_hall_2_id = getvotedcongresshall2details('candidate_id');
				$congress_hall_2_reg_no = getvotedcongresshall2details('reg_no');
				$congress_hall_2_id_no = getvotedcongresshall2details('id_no');
				$congress_hall_2_first_name = getvotedcongresshall2details('first_name');
				$congress_hall_2_sur_name = getvotedcongresshall2details('sur_name');
				$congress_hall_2_position = getvotedcongresshall2details('position');
						
						
									
				$congress_faculty_of_engineering_vote_id = getvotedcongressfacultyofengineeringdetails('vote_id');
				$congress_faculty_of_engineering_id = getvotedcongressfacultyofengineeringdetails('candidate_id');
				$congress_faculty_of_engineering_reg_no = getvotedcongressfacultyofengineeringdetails('reg_no');
				$congress_faculty_of_engineering_id_no = getvotedcongressfacultyofengineeringdetails('id_no');
				$congress_faculty_of_engineering_first_name = getvotedcongressfacultyofengineeringdetails('first_name');
				$congress_faculty_of_engineering_sur_name = getvotedcongressfacultyofengineeringdetails('sur_name');
				$congress_faculty_of_engineering_position = getvotedcongressfacultyofengineeringdetails('position');
				

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
				
		$congress_hall_2 = $_SESSION['congress_hall_2'];
		$congress_faculty_of_engineering = $_SESSION['congress_faculty_of_engineering'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 

			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
            if(isset($congress_hall_2)){
			$query_congress_hall_2 = "INSERT INTO voted_congress_hall_2
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_hall_2_id)."', '".mysql_real_escape_string($congress_hall_2_reg_no)."', '".
			mysql_real_escape_string($congress_hall_2_id_no)."', '".mysql_real_escape_string($congress_hall_2_first_name)."', '".mysql_real_escape_string($congress_hall_2_sur_name)."')";			
			mysql_query($query_congress_hall_2);   
						
			
            if(isset($congress_faculty_of_engineering)){
			$query_congress_faculty_of_engineering = "INSERT INTO voted_congress_faculty_of_engineering
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_faculty_of_engineering_id)."', '".mysql_real_escape_string($congress_faculty_of_engineering_reg_no)."', '".
			mysql_real_escape_string($congress_faculty_of_engineering_id_no)."', '".mysql_real_escape_string($congress_faculty_of_engineering_first_name)."', '".mysql_real_escape_string($congress_faculty_of_engineering_sur_name)."')";			
			mysql_query($query_congress_faculty_of_engineering);   
									
		     
		                 }
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}




function individual_position_table_faculty_of_engineering_hall_3() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');

		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
		
				
						
				$congress_hall_3_vote_id = getvotedcongresshall3details('vote_id');
				$congress_hall_3_id = getvotedcongresshall3details('candidate_id');
				$congress_hall_3_reg_no = getvotedcongresshall3details('reg_no');
				$congress_hall_3_id_no = getvotedcongresshall3details('id_no');
				$congress_hall_3_first_name = getvotedcongresshall3details('first_name');
				$congress_hall_3_sur_name = getvotedcongresshall3details('sur_name');
				$congress_hall_3_position = getvotedcongresshall3details('position');
						
						
									
				$congress_faculty_of_engineering_vote_id = getvotedcongressfacultyofengineeringdetails('vote_id');
				$congress_faculty_of_engineering_id = getvotedcongressfacultyofengineeringdetails('candidate_id');
				$congress_faculty_of_engineering_reg_no = getvotedcongressfacultyofengineeringdetails('reg_no');
				$congress_faculty_of_engineering_id_no = getvotedcongressfacultyofengineeringdetails('id_no');
				$congress_faculty_of_engineering_first_name = getvotedcongressfacultyofengineeringdetails('first_name');
				$congress_faculty_of_engineering_sur_name = getvotedcongressfacultyofengineeringdetails('sur_name');
				$congress_faculty_of_engineering_position = getvotedcongressfacultyofengineeringdetails('position');
				

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
				
		$congress_hall_3 = $_SESSION['congress_hall_3'];
		$congress_faculty_of_engineering = $_SESSION['congress_faculty_of_engineering'];

		
		
			$query = "SELECT candidate_id FROM candidates";			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 

			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
            if(isset($congress_hall_3)){
			$query_congress_hall_3 = "INSERT INTO voted_congress_hall_3
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_hall_3_id)."', '".mysql_real_escape_string($congress_hall_3_reg_no)."', '".
			mysql_real_escape_string($congress_hall_3_id_no)."', '".mysql_real_escape_string($congress_hall_3_first_name)."', '".mysql_real_escape_string($congress_hall_3_sur_name)."')";			
			mysql_query($query_congress_hall_3);   
						
			
            if(isset($congress_faculty_of_engineering)){
			$query_congress_faculty_of_engineering = "INSERT INTO voted_congress_faculty_of_engineering
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_faculty_of_engineering_id)."', '".mysql_real_escape_string($congress_faculty_of_engineering_reg_no)."', '".
			mysql_real_escape_string($congress_faculty_of_engineering_id_no)."', '".mysql_real_escape_string($congress_faculty_of_engineering_first_name)."', '".mysql_real_escape_string($congress_faculty_of_engineering_sur_name)."')";			
			mysql_query($query_congress_faculty_of_engineering);   
									
		     
		                 }
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}




function individual_position_table_faculty_of_engineering_kotecha() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');

		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
		
				
						
				$congress_kotecha_vote_id = getvotedcongresskotechadetails('vote_id');
				$congress_kotecha_id = getvotedcongresskotechadetails('candidate_id');
				$congress_kotecha_reg_no = getvotedcongresskotechadetails('reg_no');
				$congress_kotecha_id_no = getvotedcongresskotechadetails('id_no');
				$congress_kotecha_first_name = getvotedcongresskotechadetails('first_name');
				$congress_kotecha_sur_name = getvotedcongresskotechadetails('sur_name');
				$congress_kotecha_position = getvotedcongresskotechadetails('position');
						
						
									
				$congress_faculty_of_engineering_vote_id = getvotedcongressfacultyofengineeringdetails('vote_id');
				$congress_faculty_of_engineering_id = getvotedcongressfacultyofengineeringdetails('candidate_id');
				$congress_faculty_of_engineering_reg_no = getvotedcongressfacultyofengineeringdetails('reg_no');
				$congress_faculty_of_engineering_id_no = getvotedcongressfacultyofengineeringdetails('id_no');
				$congress_faculty_of_engineering_first_name = getvotedcongressfacultyofengineeringdetails('first_name');
				$congress_faculty_of_engineering_sur_name = getvotedcongressfacultyofengineeringdetails('sur_name');
				$congress_faculty_of_engineering_position = getvotedcongressfacultyofengineeringdetails('position');
				

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
				
		$congress_hall_1 = $_SESSION['congress_hall_1'];
		$congress_faculty_of_engineering = $_SESSION['congress_faculty_of_engineering'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 

			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
            if(isset($congress_kotecha)){
			$query_congress_kotecha = "INSERT INTO voted_congress_kotecha
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_kotecha_id)."', '".mysql_real_escape_string($congress_kotecha_reg_no)."', '".
			mysql_real_escape_string($congress_kotecha_id_no)."', '".mysql_real_escape_string($congress_kotecha_first_name)."', '".mysql_real_escape_string($congress_kotecha_sur_name)."')";			
			mysql_query($query_congress_kotecha);   
						
			
            if(isset($congress_faculty_of_engineering)){
			$query_congress_faculty_of_engineering = "INSERT INTO voted_congress_faculty_of_engineering
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_faculty_of_engineering_id)."', '".mysql_real_escape_string($congress_faculty_of_engineering_reg_no)."', '".
			mysql_real_escape_string($congress_faculty_of_engineering_id_no)."', '".mysql_real_escape_string($congress_faculty_of_engineering_first_name)."', '".mysql_real_escape_string($congress_faculty_of_engineering_sur_name)."')";			
			mysql_query($query_congress_faculty_of_engineering);   
									
		     
		                 }
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}




function individual_position_table_faculty_of_engineering_milimani() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');

		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
		
				
						
				$congress_milimani_vote_id = getvotedcongressmilimanidetails('vote_id');
				$congress_milimani_id = getvotedcongressmilimanidetails('candidate_id');
				$congress_milimani_reg_no = getvotedcongressmilimanidetails('reg_no');
				$congress_milimani_id_no = getvotedcongressmilimanidetails('id_no');
				$congress_milimani_first_name = getvotedcongressmilimanidetails('first_name');
				$congress_milimani_sur_name = getvotedcongressmilimanidetails('sur_name');
				$congress_milimani_position = getvotedcongressmilimanidetails('position');
						
						
									
				$congress_faculty_of_engineering_vote_id = getvotedcongressfacultyofengineeringdetails('vote_id');
				$congress_faculty_of_engineering_id = getvotedcongressfacultyofengineeringdetails('candidate_id');
				$congress_faculty_of_engineering_reg_no = getvotedcongressfacultyofengineeringdetails('reg_no');
				$congress_faculty_of_engineering_id_no = getvotedcongressfacultyofengineeringdetails('id_no');
				$congress_faculty_of_engineering_first_name = getvotedcongressfacultyofengineeringdetails('first_name');
				$congress_faculty_of_engineering_sur_name = getvotedcongressfacultyofengineeringdetails('sur_name');
				$congress_faculty_of_engineering_position = getvotedcongressfacultyofengineeringdetails('position');
				

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
				
		$congress_milimani = $_SESSION['congress_milimani'];
		$congress_faculty_of_engineering = $_SESSION['congress_faculty_of_engineering'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 

			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
            if(isset($congress_milimani)){
			$query_congress_milimani = "INSERT INTO voted_congress_milimani
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_milimani_id)."', '".mysql_real_escape_string($congress_milimani_reg_no)."', '".
			mysql_real_escape_string($congress_milimani_id_no)."', '".mysql_real_escape_string($congress_milimani_first_name)."', '".mysql_real_escape_string($congress_milimani_sur_name)."')";			
			mysql_query($query_congress_milimani);   
						
			
            if(isset($congress_faculty_of_engineering)){
			$query_congress_faculty_of_engineering = "INSERT INTO voted_congress_faculty_of_engineering
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_faculty_of_engineering_id)."', '".mysql_real_escape_string($congress_faculty_of_engineering_reg_no)."', '".
			mysql_real_escape_string($congress_faculty_of_engineering_id_no)."', '".mysql_real_escape_string($congress_faculty_of_engineering_first_name)."', '".mysql_real_escape_string($congress_faculty_of_engineering_sur_name)."')";			
			mysql_query($query_congress_faculty_of_engineering);   
									
		     
		                 }
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}



function individual_position_table_faculty_of_education_and_social_sciences_non_resident() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');

		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
		
									
									
				$congress_faculty_of_education_and_social_sciences_vote_id = getvotedcongressfacultyofeducationandsocialsciencesdetails('vote_id');
				$congress_faculty_of_education_and_social_sciences_id = getvotedcongressfacultyofeducationandsocialsciencesdetails('candidate_id');
				$congress_faculty_of_education_and_social_sciences_reg_no = getvotedcongressfacultyofeducationandsocialsciencesdetails('reg_no');
				$congress_faculty_of_education_and_social_sciences_id_no = getvotedcongressfacultyofeducationandsocialsciencesdetails('id_no');
				$congress_faculty_of_education_and_social_sciences_first_name = getvotedcongressfacultyofeducationandsocialsciencesdetails('first_name');
				$congress_faculty_of_education_and_social_sciences_sur_name = getvotedcongressfacultyofeducationandsocialsciencesdetails('sur_name');
				$congress_faculty_of_education_and_social_sciences_position = getvotedcongressfacultyofeducationandsocialsciencesdetails('position');
				
				

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
				
		$congress_faculty_of_education_and_social_sciences = $_SESSION['congress_faculty_of_education_and_social_sciences'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 

			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
						
			
            if(isset($congress_faculty_of_education_and_social_sciences)){
			$query_congress_faculty_of_education_and_social_sciences = "INSERT INTO voted_congress_faculty_of_education_and_social_sciences
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_id)."', '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_reg_no)."', '".
			mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_id_no)."', '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_first_name)."', '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_sur_name)."')";			
			mysql_query($query_congress_faculty_of_education_and_social_sciences);   
									
		     
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}



function individual_position_table_faculty_of_education_and_social_sciences_hall_1() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');

		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
		
				
						
				$congress_hall_1_vote_id = getvotedcongresshall1details('vote_id');
				$congress_hall_1_id = getvotedcongresshall1details('candidate_id');
				$congress_hall_1_reg_no = getvotedcongresshall1details('reg_no');
				$congress_hall_1_id_no = getvotedcongresshall1details('id_no');
				$congress_hall_1_first_name = getvotedcongresshall1details('first_name');
				$congress_hall_1_sur_name = getvotedcongresshall1details('sur_name');
				$congress_hall_1_position = getvotedcongresshall1details('position');
						
						
									
									
				$congress_faculty_of_education_and_social_sciences_vote_id = getvotedcongressfacultyofeducationandsocialsciencesdetails('vote_id');
				$congress_faculty_of_education_and_social_sciences_id = getvotedcongressfacultyofeducationandsocialsciencesdetails('candidate_id');
				$congress_faculty_of_education_and_social_sciences_reg_no = getvotedcongressfacultyofeducationandsocialsciencesdetails('reg_no');
				$congress_faculty_of_education_and_social_sciences_id_no = getvotedcongressfacultyofeducationandsocialsciencesdetails('id_no');
				$congress_faculty_of_education_and_social_sciences_first_name = getvotedcongressfacultyofeducationandsocialsciencesdetails('first_name');
				$congress_faculty_of_education_and_social_sciences_sur_name = getvotedcongressfacultyofeducationandsocialsciencesdetails('sur_name');
				$congress_faculty_of_education_and_social_sciences_position = getvotedcongressfacultyofeducationandsocialsciencesdetails('position');
				
				

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
				
		$congress_hall_1 = $_SESSION['congress_hall_1'];
		$congress_faculty_of_education_and_social_sciences = $_SESSION['congress_faculty_of_education_and_social_sciences'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 

			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
            if(isset($congress_hall_1)){
			$query_congress_hall_1 = "INSERT INTO voted_congress_hall_1
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_hall_1_id)."', '".mysql_real_escape_string($congress_hall_1_reg_no)."', '".
			mysql_real_escape_string($congress_hall_1_id_no)."', '".mysql_real_escape_string($congress_hall_1_first_name)."', '".mysql_real_escape_string($congress_hall_1_sur_name)."')";			
			mysql_query($query_congress_hall_1);   
						
			
            if(isset($congress_faculty_of_education_and_social_sciences)){
			$query_congress_faculty_of_education_and_social_sciences = "INSERT INTO voted_congress_faculty_of_education_and_social_sciences
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_id)."', '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_reg_no)."', '".
			mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_id_no)."', '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_first_name)."', '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_sur_name)."')";			
			mysql_query($query_congress_faculty_of_education_and_social_sciences);   
									
		     
		                 }
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}




function individual_position_table_faculty_of_education_and_social_sciences_hall_2() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');

		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
		
				
						
				$congress_hall_2_vote_id = getvotedcongresshall2details('vote_id');
				$congress_hall_2_id = getvotedcongresshall2details('candidate_id');
				$congress_hall_2_reg_no = getvotedcongresshall2details('reg_no');
				$congress_hall_2_id_no = getvotedcongresshall2details('id_no');
				$congress_hall_2_first_name = getvotedcongresshall2details('first_name');
				$congress_hall_2_sur_name = getvotedcongresshall2details('sur_name');
				$congress_hall_2_position = getvotedcongresshall2details('position');
						
						
									
									
				$congress_faculty_of_education_and_social_sciences_vote_id = getvotedcongressfacultyofeducationandsocialsciencesdetails('vote_id');
				$congress_faculty_of_education_and_social_sciences_id = getvotedcongressfacultyofeducationandsocialsciencesdetails('candidate_id');
				$congress_faculty_of_education_and_social_sciences_reg_no = getvotedcongressfacultyofeducationandsocialsciencesdetails('reg_no');
				$congress_faculty_of_education_and_social_sciences_id_no = getvotedcongressfacultyofeducationandsocialsciencesdetails('id_no');
				$congress_faculty_of_education_and_social_sciences_first_name = getvotedcongressfacultyofeducationandsocialsciencesdetails('first_name');
				$congress_faculty_of_education_and_social_sciences_sur_name = getvotedcongressfacultyofeducationandsocialsciencesdetails('sur_name');
				$congress_faculty_of_education_and_social_sciences_position = getvotedcongressfacultyofeducationandsocialsciencesdetails('position');
				
				

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
				
		$congress_hall_2 = $_SESSION['congress_hall_2'];
		$congress_faculty_of_education_and_social_sciences = $_SESSION['congress_faculty_of_education_and_social_sciences'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 

			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
            if(isset($congress_hall_2)){
			$query_congress_hall_2 = "INSERT INTO voted_congress_hall_2
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_hall_2_id)."', '".mysql_real_escape_string($congress_hall_2_reg_no)."', '".
			mysql_real_escape_string($congress_hall_2_id_no)."', '".mysql_real_escape_string($congress_hall_2_first_name)."', '".mysql_real_escape_string($congress_hall_2_sur_name)."')";			
			mysql_query($query_congress_hall_2);   
						
			
            if(isset($congress_faculty_of_education_and_social_sciences)){
			$query_congress_faculty_of_education_and_social_sciences = "INSERT INTO voted_congress_faculty_of_education_and_social_sciences
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_id)."', '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_reg_no)."', '".
			mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_id_no)."', '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_first_name)."', '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_sur_name)."')";			
			mysql_query($query_congress_faculty_of_education_and_social_sciences);   
									
		     
		                 }
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}





function individual_position_table_faculty_of_education_and_social_sciences_hall_3() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');

		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
		
				
						
				$congress_hall_3_vote_id = getvotedcongresshall3details('vote_id');
				$congress_hall_3_id = getvotedcongresshall3details('candidate_id');
				$congress_hall_3_reg_no = getvotedcongresshall3details('reg_no');
				$congress_hall_3_id_no = getvotedcongresshall3details('id_no');
				$congress_hall_3_first_name = getvotedcongresshall3details('first_name');
				$congress_hall_3_sur_name = getvotedcongresshall3details('sur_name');
				$congress_hall_3_position = getvotedcongresshall3details('position');
						
						
									
									
				$congress_faculty_of_education_and_social_sciences_vote_id = getvotedcongressfacultyofeducationandsocialsciencesdetails('vote_id');
				$congress_faculty_of_education_and_social_sciences_id = getvotedcongressfacultyofeducationandsocialsciencesdetails('candidate_id');
				$congress_faculty_of_education_and_social_sciences_reg_no = getvotedcongressfacultyofeducationandsocialsciencesdetails('reg_no');
				$congress_faculty_of_education_and_social_sciences_id_no = getvotedcongressfacultyofeducationandsocialsciencesdetails('id_no');
				$congress_faculty_of_education_and_social_sciences_first_name = getvotedcongressfacultyofeducationandsocialsciencesdetails('first_name');
				$congress_faculty_of_education_and_social_sciences_sur_name = getvotedcongressfacultyofeducationandsocialsciencesdetails('sur_name');
				$congress_faculty_of_education_and_social_sciences_position = getvotedcongressfacultyofeducationandsocialsciencesdetails('position');
				
				

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
				
		$congress_hall_3 = $_SESSION['congress_hall_3'];
		$congress_faculty_of_education_and_social_sciences = $_SESSION['congress_faculty_of_education_and_social_sciences'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 

			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
            if(isset($congress_hall_3)){
			$query_congress_hall_3 = "INSERT INTO voted_congress_hall_3
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_hall_3_id)."', '".mysql_real_escape_string($congress_hall_3_reg_no)."', '".
			mysql_real_escape_string($congress_hall_3_id_no)."', '".mysql_real_escape_string($congress_hall_3_first_name)."', '".mysql_real_escape_string($congress_hall_3_sur_name)."')";			
			mysql_query($query_congress_hall_3);   
						
			
            if(isset($congress_faculty_of_education_and_social_sciences)){
			$query_congress_faculty_of_education_and_social_sciences = "INSERT INTO voted_congress_faculty_of_education_and_social_sciences
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_id)."', '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_reg_no)."', '".
			mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_id_no)."', '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_first_name)."', '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_sur_name)."')";			
			mysql_query($query_congress_faculty_of_education_and_social_sciences);   
									
		     
		                 }
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}




function individual_position_table_faculty_of_education_and_social_sciences_milimani() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');

		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
		
				
						
				$congress_milimani_vote_id = getvotedcongressmilimanidetails('vote_id');
				$congress_milimani_id = getvotedcongressmilimanidetails('candidate_id');
				$congress_milimani_reg_no = getvotedcongressmilimanidetails('reg_no');
				$congress_milimani_id_no = getvotedcongressmilimanidetails('id_no');
				$congress_milimani_first_name = getvotedcongressmilimanidetails('first_name');
				$congress_milimani_sur_name = getvotedcongressmilimanidetails('sur_name');
				$congress_milimani_position = getvotedcongressmilimanidetails('position');
						
						
									
									
				$congress_faculty_of_education_and_social_sciences_vote_id = getvotedcongressfacultyofeducationandsocialsciencesdetails('vote_id');
				$congress_faculty_of_education_and_social_sciences_id = getvotedcongressfacultyofeducationandsocialsciencesdetails('candidate_id');
				$congress_faculty_of_education_and_social_sciences_reg_no = getvotedcongressfacultyofeducationandsocialsciencesdetails('reg_no');
				$congress_faculty_of_education_and_social_sciences_id_no = getvotedcongressfacultyofeducationandsocialsciencesdetails('id_no');
				$congress_faculty_of_education_and_social_sciences_first_name = getvotedcongressfacultyofeducationandsocialsciencesdetails('first_name');
				$congress_faculty_of_education_and_social_sciences_sur_name = getvotedcongressfacultyofeducationandsocialsciencesdetails('sur_name');
				$congress_faculty_of_education_and_social_sciences_position = getvotedcongressfacultyofeducationandsocialsciencesdetails('position');
				
				

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
				
		$congress_milimani = $_SESSION['congress_milimani'];
		$congress_faculty_of_education_and_social_sciences = $_SESSION['congress_faculty_of_education_and_social_sciences'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 

			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
            if(isset($congress_milimani)){
			$query_congress_milimani = "INSERT INTO voted_congress_milimani
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_milimani_id)."', '".mysql_real_escape_string($congress_milimani_reg_no)."', '".
			mysql_real_escape_string($congress_milimani_id_no)."', '".mysql_real_escape_string($congress_milimani_first_name)."', '".mysql_real_escape_string($congress_milimani_sur_name)."')";			
			mysql_query($query_congress_milimani);   
						
			
            if(isset($congress_faculty_of_education_and_social_sciences)){
			$query_congress_faculty_of_education_and_social_sciences = "INSERT INTO voted_congress_faculty_of_education_and_social_sciences
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_id)."', '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_reg_no)."', '".
			mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_id_no)."', '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_first_name)."', '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_sur_name)."')";			
			mysql_query($query_congress_faculty_of_education_and_social_sciences);   
									
		     
		                 }
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}




function individual_position_table_faculty_of_education_and_social_sciences_kotecha() {

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('c');
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

		
		$chairperson_vote_id = getvotedchairpersondetails('vote_id');
		$chairperson_id = getvotedchairpersondetails('candidate_id');
		$chairperson_reg_no = getvotedchairpersondetails('reg_no');
		$chairperson_id_no = getvotedchairpersondetails('id_no');
		$chairperson_first_name = getvotedchairpersondetails('first_name');
		$chairperson_sur_name = getvotedchairpersondetails('sur_name');
		$chairperson_position = getvotedchairpersondetails('position');
		
		
		$vice_chairperson_vote_id = getvotedvice_chairpersondetails('vote_id');
		$vice_chairperson_id = getvotedvice_chairpersondetails('candidate_id');
		$vice_chairperson_reg_no = getvotedvice_chairpersondetails('reg_no');
		$vice_chairperson_id_no = getvotedvice_chairpersondetails('id_no');
		$vice_chairperson_first_name = getvotedvice_chairpersondetails('first_name');
		$vice_chairperson_sur_name = getvotedvice_chairpersondetails('sur_name');
		$vice_chairperson_position = getvotedvice_chairpersondetails('position');
		
		
		$secretary_general_vote_id = getvotedsecretary_generaldetails('vote_id');
		$secretary_general_id = getvotedsecretary_generaldetails('candidate_id');
		$secretary_general_reg_no = getvotedsecretary_generaldetails('reg_no');
		$secretary_general_id_no = getvotedsecretary_generaldetails('id_no');
		$secretary_general_first_name = getvotedsecretary_generaldetails('first_name');
		$secretary_general_sur_name = getvotedsecretary_generaldetails('sur_name');
		$secretary_general_position = getvotedsecretary_generaldetails('position');
		
		
		$deputy_secretary_general_vote_id = getvoteddeputy_secretary_generaldetails('vote_id');
		$deputy_secretary_general_id = getvoteddeputy_secretary_generaldetails('candidate_id');
		$deputy_secretary_general_reg_no = getvoteddeputy_secretary_generaldetails('reg_no');
		$deputy_secretary_general_id_no = getvoteddeputy_secretary_generaldetails('id_no');
		$deputy_secretary_general_first_name = getvoteddeputy_secretary_generaldetails('first_name');
		$deputy_secretary_general_sur_name = getvoteddeputy_secretary_generaldetails('sur_name');
		$deputy_secretary_general_position = getvoteddeputy_secretary_generaldetails('position');
		
		
		$finance_director_vote_id = getvotedfinance_directordetails('vote_id');
		$finance_director_id = getvotedfinance_directordetails('candidate_id');
		$finance_director_reg_no = getvotedfinance_directordetails('reg_no');
		$finance_director_id_no = getvotedfinance_directordetails('id_no');
		$finance_director_first_name = getvotedfinance_directordetails('first_name');
		$finance_director_sur_name = getvotedfinance_directordetails('sur_name');
		$finance_director_position = getvotedfinance_directordetails('position');
		
		
		$academics_director_vote_id = getvotedacademics_directordetails('vote_id');
		$academics_director_id = getvotedacademics_directordetails('candidate_id');
		$academics_director_reg_no = getvotedacademics_directordetails('reg_no');
		$academics_director_id_no = getvotedacademics_directordetails('id_no');
		$academics_director_first_name = getvotedacademics_directordetails('first_name');
		$academics_director_sur_name = getvotedacademics_directordetails('sur_name');
		$academics_director_position = getvotedacademics_directordetails('position');

		
		
		$accommodation_director_resident_vote_id = getvotedaccommodation_director_residentdetails('vote_id');
		$accommodation_director_resident_id = getvotedaccommodation_director_residentdetails('candidate_id');
		$accommodation_director_resident_reg_no = getvotedaccommodation_director_residentdetails('reg_no');
		$accommodation_director_resident_id_no = getvotedaccommodation_director_residentdetails('id_no');
		$accommodation_director_resident_first_name = getvotedaccommodation_director_residentdetails('first_name');
		$accommodation_director_resident_sur_name = getvotedaccommodation_director_residentdetails('sur_name');
		$accommodation_director_resident_position = getvotedaccommodation_director_residentdetails('position');
		
		
		$accommodation_director_nonresident_vote_id = getvotedaccommodation_director_nonresidentdetails('vote_id');
		$accommodation_director_nonresident_id = getvotedaccommodation_director_nonresidentdetails('candidate_id');
		$accommodation_director_nonresident_reg_no = getvotedaccommodation_director_nonresidentdetails('reg_no');
		$accommodation_director_nonresident_id_no = getvotedaccommodation_director_nonresidentdetails('id_no');
		$accommodation_director_nonresident_first_name = getvotedaccommodation_director_nonresidentdetails('first_name');
		$accommodation_director_nonresident_sur_name = getvotedaccommodation_director_nonresidentdetails('sur_name');
		$accommodation_director_nonresident_position = getvotedaccommodation_director_nonresidentdetails('position');
		
		
		$catering_director_vote_id = getvotedcatering_directordetails('vote_id');
		$catering_director_id = getvotedcatering_directordetails('candidate_id');
		$catering_director_reg_no = getvotedcatering_directordetails('reg_no');
		$catering_director_id_no = getvotedcatering_directordetails('id_no');
		$catering_director_first_name = getvotedcatering_directordetails('first_name');
		$catering_director_sur_name = getvotedcatering_directordetails('sur_name');
		$catering_director_position = getvotedcatering_directordetails('position');
		
		
		$entertainment_director_vote_id = getvotedentertainment_directordetails('vote_id');
		$entertainment_director_id = getvotedentertainment_directordetails('candidate_id');
		$entertainment_director_reg_no = getvotedentertainment_directordetails('reg_no');
		$entertainment_director_id_no = getvotedentertainment_directordetails('id_no');
		$entertainment_director_first_name = getvotedentertainment_directordetails('first_name');
		$entertainment_director_sur_name = getvotedentertainment_directordetails('sur_name');
		$entertainment_director_position = getvotedentertainment_directordetails('position');
		
		
				
						
				$congress_kotecha_vote_id = getvotedcongresskotechadetails('vote_id');
				$congress_kotecha_id = getvotedcongresskotechadetails('candidate_id');
				$congress_kotecha_reg_no = getvotedcongresskotechadetails('reg_no');
				$congress_kotecha_id_no = getvotedcongresskotechadetails('id_no');
				$congress_kotecha_first_name = getvotedcongresskotechadetails('first_name');
				$congress_kotecha_sur_name = getvotedcongresskotechadetails('sur_name');
				$congress_kotecha_position = getvotedcongresskotechadetails('position');
						
						
									
				$congress_faculty_of_education_and_social_sciences_vote_id = getvotedcongressfacultyofeducationandsocialsciencesdetails('vote_id');
				$congress_faculty_of_education_and_social_sciences_id = getvotedcongressfacultyofeducationandsocialsciencesdetails('candidate_id');
				$congress_faculty_of_education_and_social_sciences_reg_no = getvotedcongressfacultyofeducationandsocialsciencesdetails('reg_no');
				$congress_faculty_of_education_and_social_sciences_id_no = getvotedcongressfacultyofeducationandsocialsciencesdetails('id_no');
				$congress_faculty_of_education_and_social_sciences_first_name = getvotedcongressfacultyofeducationandsocialsciencesdetails('first_name');
				$congress_faculty_of_education_and_social_sciences_sur_name = getvotedcongressfacultyofeducationandsocialsciencesdetails('sur_name');
				$congress_faculty_of_education_and_social_sciences_position = getvotedcongressfacultyofeducationandsocialsciencesdetails('position');
				

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
				
		$congress_kotecha = $_SESSION['congress_kotecha'];
		$congress_faculty_of_education_and_social_sciences = $_SESSION['congress_faculty_of_education_and_social_sciences'];

		
		
			$query = "SELECT candidate_id FROM candidates";
			
			$query_result = @mysql_result($query, 0, 'candidate_id');
			
			if(isset($chairperson)){
			$query_chairperson = "INSERT INTO voted_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($chairperson_id)."', '".mysql_real_escape_string($chairperson_reg_no)."', '".
			mysql_real_escape_string($chairperson_id_no)."', '".mysql_real_escape_string($chairperson_first_name)."', '".mysql_real_escape_string($chairperson_sur_name)."')";			
			mysql_query($query_chairperson);   
						
			
            if(isset($vice_chairperson)){
			$query_vice_chairperson = "INSERT INTO voted_vice_chairperson
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($vice_chairperson_id)."', '".mysql_real_escape_string($vice_chairperson_reg_no)."', '".
			mysql_real_escape_string($vice_chairperson_id_no)."', '".mysql_real_escape_string($vice_chairperson_first_name)."', '".mysql_real_escape_string($vice_chairperson_sur_name)."')";			
			mysql_query($query_vice_chairperson);   
			
			
            if(isset($secretary_general)){
			$query_secretary_general = "INSERT INTO voted_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($secretary_general_id)."', '".mysql_real_escape_string($secretary_general_reg_no)."', '".
			mysql_real_escape_string($secretary_general_id_no)."', '".mysql_real_escape_string($secretary_general_first_name)."', '".mysql_real_escape_string($secretary_general_sur_name)."')";			
			mysql_query($query_secretary_general);   
			
								
            if(isset($deputy_secretary_general)){
			$query_deputy_secretary_general = "INSERT INTO voted_deputy_secretary_general
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($deputy_secretary_general_id)."', '".mysql_real_escape_string($deputy_secretary_general_reg_no)."', '".
			mysql_real_escape_string($deputy_secretary_general_id_no)."', '".mysql_real_escape_string($deputy_secretary_general_first_name)."', '".mysql_real_escape_string($deputy_secretary_general_sur_name)."')";			
			mysql_query($query_deputy_secretary_general);   			
			
			
            if(isset($finance_director)){
			$query_finance_director = "INSERT INTO voted_finance_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($finance_director_id)."', '".mysql_real_escape_string($finance_director_reg_no)."', '".
			mysql_real_escape_string($finance_director_id_no)."', '".mysql_real_escape_string($finance_director_first_name)."', '".mysql_real_escape_string($finance_director_sur_name)."')";			
			mysql_query($query_finance_director);   
			
			
            if(isset($academics_director)){
			$query_academics_director = "INSERT INTO voted_academics_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($academics_director_id)."', '".mysql_real_escape_string($academics_director_reg_no)."', '".
			mysql_real_escape_string($academics_director_id_no)."', '".mysql_real_escape_string($academics_director_first_name)."', '".mysql_real_escape_string($academics_director_sur_name)."')";			
			mysql_query($query_academics_director);   
			
			
            if(isset($accommodation_director_resident)){
			$query_accommodation_director_resident = "INSERT INTO voted_accommodation_director_resident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 

			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_resident_id)."', '".mysql_real_escape_string($accommodation_director_resident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_resident_id_no)."', '".mysql_real_escape_string($accommodation_director_resident_first_name)."', '".mysql_real_escape_string($accommodation_director_resident_sur_name)."')";			
			mysql_query($query_accommodation_director_resident);   
						
			
            if(isset($accommodation_director_nonresident)){
			$query_accommodation_director_nonresident = "INSERT INTO voted_accommodation_director_nonresident
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($accommodation_director_nonresident_id)."', '".mysql_real_escape_string($accommodation_director_nonresident_reg_no)."', '".
			mysql_real_escape_string($accommodation_director_nonresident_id_no)."', '".mysql_real_escape_string($accommodation_director_nonresident_first_name)."', '".mysql_real_escape_string($accommodation_director_nonresident_sur_name)."')";			
			mysql_query($query_accommodation_director_nonresident);   
						
			
            if(isset($catering_director)){
			$query_catering_director = "INSERT INTO voted_catering_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($catering_director_id)."', '".mysql_real_escape_string($catering_director_reg_no)."', '".
			mysql_real_escape_string($catering_director_id_no)."', '".mysql_real_escape_string($catering_director_first_name)."', '".mysql_real_escape_string($catering_director_sur_name)."')";			
			mysql_query($query_catering_director);   
									

            if(isset($entertainment_director)){
			$query_entertainment_director = "INSERT INTO voted_entertainment_director
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($entertainment_director_id)."', '".mysql_real_escape_string($entertainment_director_reg_no)."', '".
			mysql_real_escape_string($entertainment_director_id_no)."', '".mysql_real_escape_string($entertainment_director_first_name)."', '".mysql_real_escape_string($entertainment_director_sur_name)."')";			
			mysql_query($query_entertainment_director);   
			
			
			
            if(isset($congress_kotecha)){
			$query_congress_kotecha = "INSERT INTO voted_congress_kotecha
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_kotecha_id)."', '".mysql_real_escape_string($congress_kotecha_reg_no)."', '".
			mysql_real_escape_string($congress_kotecha_id_no)."', '".mysql_real_escape_string($congress_kotecha_first_name)."', '".mysql_real_escape_string($congress_kotecha_sur_name)."')";			
			mysql_query($query_congress_kotecha);   
						
			
            if(isset($congress_faculty_of_education_and_social_sciences)){
			$query_congress_faculty_of_education_and_social_sciences = "INSERT INTO voted_congress_faculty_of_education_and_social_sciences
			(vote_id, candidate_id, reg_no, id_no, first_name, sur_name) 
			VALUES(NULL, '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_id)."', '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_reg_no)."', '".
			mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_id_no)."', '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_first_name)."', '".mysql_real_escape_string($congress_faculty_of_education_and_social_sciences_sur_name)."')";			
			mysql_query($query_congress_faculty_of_education_and_social_sciences);   
									
		     
		                 }
		                }
    			      }
			       }
			    }
			   }
			  }
			 }
			}
		   }
		  }
		 }

}




?>
