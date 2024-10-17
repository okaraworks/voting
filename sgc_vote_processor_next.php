
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

	if(isset($_SESSION['chairperson']) && isset($_SESSION['vice_chairperson']) && isset($_SESSION['secretary_general']) && isset(    $_SESSION['deputy_secretary_general']) && isset($_SESSION['finance_director']) && isset($_SESSION['academics_director']) &&    isset($_SESSION['accommodation_director_resident']) && isset($_SESSION['accommodation_director_nonresident']) && isset(      
	$_SESSION['catering_director']) && isset($_SESSION['entertainment_director'])) {

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
		
		if(!empty($chairperson) && !empty($vice_chairperson) && !empty($secretary_general) && !empty($deputy_secretary_general) &&        !empty($finance_director) && !empty($academics_director) && !empty($accommodation_director_resident) && !empty(         
		$accommodation_director_nonresident) && !empty($catering_director) && !empty($entertainment_director)) {
	
			$query1 = "SELECT username FROM successful_voters WHERE reg_no = '".$reg_no."' OR id_no = '".$id_no."' OR username = '"            .$username."' ";			
			
			$query1_run = mysql_query($query1);	

            if(mysql_num_rows($query1_run) == 1){
			?>	
			
			<html>
			<head>
			<title>Untitled Document</title>
			</head>
			<body onLoad="confirmation()">
			
			<script type="text/javascript">
			<!--
			function confirmation() {
			var answer = alert("Sorry, you have already voted....")
			
			window.location = "logged_in_voter.php";
			 }
			 //-->
			 </script> 
			</body>
			</html>		
			
			
			<?php
			} else if(mysql_num_rows($query1_run) == 0){			

			$query1 = "INSERT INTO successful_voters
			(user_id, reg_no, first_name, sur_name, gender, id_no, phone_no, email_address, graduate_level, category, campus,    
			academic_division, year_of_study, residence_area, residence_hall, username, password) 
			VALUES(NULL, '".mysql_real_escape_string($reg_no)."', '".mysql_real_escape_string($first_name)."', '".
			mysql_real_escape_string($sur_name)."', '".mysql_real_escape_string($gender)."', '".mysql_real_escape_string($id_no)."', 
			'".mysql_real_escape_string($phone_no)."', '".mysql_real_escape_string($email_address)."', '".mysql_real_escape_string(
			$graduate_level)."', '".mysql_real_escape_string($category)."', '".mysql_real_escape_string($campus)."', '".
			mysql_real_escape_string($academic_division)."', '".mysql_real_escape_string($year_of_study)."', '".
			mysql_real_escape_string($residence_area)."', '".mysql_real_escape_string($residence_hall)."', '".mysql_real_escape_string
			($username)."', '".mysql_real_escape_string($password)."')";
			
			
			$query1_run = mysql_query($query1);

               if($query1_run){
			   
				   if($academic_division == 'Faculty of Science' AND $residence_hall == 'Non-Resident') {
				    individual_position_table_faculty_of_science_non_resident();
				   }
 
				   else if($academic_division == 'Faculty of Science' AND $residence_hall == 'Hall 1') {
				    individual_position_table_faculty_of_science_hall_1();
				   }
				   
				   else if($academic_division == 'Faculty of Science' AND $residence_hall == 'Hall 2') {
				    individual_position_table_faculty_of_science_hall_2();
				   }
				   
				   else if($academic_division == 'Faculty of Science' AND $residence_hall == 'Hall 3') {
				    individual_position_table_faculty_of_science_hall_3();
				   }
				   				   
				   else if($academic_division == 'Faculty of Science' AND $residence_hall == 'Kotecha') {
				    individual_position_table_faculty_of_science_kotecha();
				   }
				   
				   else if($academic_division == 'Faculty of Science' AND $residence_hall == 'Milimani') {
				    individual_position_table_faculty_of_science_milimani();
				   }
				   
				   
				   
				   else if($academic_division == 'Faculty of Engineering' AND $residence_hall == 'Non-Resident') {
				    individual_position_table_faculty_of_engineering_non_resident();
				   }
				   
				   else if($academic_division == 'Faculty of Engineering' AND $residence_hall == 'Hall 1') {
				    individual_position_table_faculty_of_engineering_hall_1();
				   }
				   
				   else if($academic_division == 'Faculty of Engineering' AND $residence_hall == 'Hall 2') {
				    individual_position_table_faculty_of_engineering_hall_2();
				   }
				   
				   else if($academic_division == 'Faculty of Engineering' AND $residence_hall == 'Hall 3') {
				    individual_position_table_faculty_of_engineering_hall_3();
				   }
				   				   
				   else if($academic_division == 'Faculty of Engineering' AND $residence_hall == 'Kotecha') {
				    individual_position_table_faculty_of_engineering_kotecha();
				   }
				   
				   else if($academic_division == 'Faculty of Engineering' AND $residence_hall == 'Milimani') {
				    individual_position_table_faculty_of_engineering_milimani();
				   }
				   


				   else if($academic_division == 'Faculty of Education and Social Sciences' AND $residence_hall == 'Non-Resident') {
				    individual_position_table_faculty_of_education_and_social_sciences_non_resident();
				   }

				   else if($academic_division == 'Faculty of Education and Social Sciences' AND $residence_hall == 'Hall 1') {
				    individual_position_table_faculty_of_education_and_social_sciences_hall_1();
				   }
				   
				   else if($academic_division == 'Faculty of Education and Social Sciences' AND $residence_hall == 'Hall 2') {
				    individual_position_table_faculty_of_education_and_social_sciences_hall_2();
				   }
				   
				   else if($academic_division == 'Faculty of Education and Social Sciences' AND $residence_hall == 'Hall 3') {
				    individual_position_table_faculty_of_education_and_social_sciences_hall_3();
				   }
				   				   
				   else if($academic_division == 'Faculty of Education and Social Sciences' AND $residence_hall == 'Kotecha') {
				    individual_position_table_faculty_of_education_and_social_sciences_kotecha();
				   }
				   
				   else if($academic_division == 'Faculty of Education and Social Sciences' AND $residence_hall == 'Milimani') {
				    individual_position_table_faculty_of_education_and_social_sciences_milimani();
				   }


				   else if($academic_division == 'CDMHA' AND $residence_hall == 'Non-Resident') {
				    individual_position_table_cdmha_non_resident();
				   }

				   else if($academic_division == 'CDMHA' AND $residence_hall == 'Hall 1') {
				    individual_position_table_cdmha_hall_1();
				   }
				   
				   else if($academic_division == 'CDMHA' AND $residence_hall == 'Hall 2') {
				    individual_position_table_cdmha_hall_2();
				   }
				   
				   else if($academic_division == 'CDMHA' AND $residence_hall == 'Hall 3') {
				    individual_position_table_cdmha_hall_1();
				   }
				   				   
				   else if($academic_division == 'CDMHA' AND $residence_hall == 'Kotecha') {
				    individual_position_table_cdmha_kotecha();
				   }
				   
				   else if($academic_division == 'CDMHA' AND $residence_hall == 'Milimani') {
				    individual_position_table_cdmha_milimani();
				   }	 
				   
			?>			

			<html>
			<head>
			<title>Untitled Document</title>
			</head>
			<body onLoad="confirmation()">
			
			<script type="text/javascript">
			<!--
			function confirmation() {
			var answer = alert("Your voting was successful. Thank you for exercising your democratic right")
			
			window.location = "logged_in_voter.php";
			 }
			 //-->
			 </script> 
			</body>
			</html>		

		<?php
			} else {
		?>	
			
			<html>
			<head>
			<title>Untitled Document</title>
			</head>
			<body onLoad="confirmation()">
			
			<script type="text/javascript">
			<!--
			function confirmation() {
			var answer = alert("Sorry, your voting was unsuccessful. Please try again.")
			
			window.location = "chairperson.php";
			 }
			 //-->
			 </script> 
			</body>
			</html>		
			
			<?php
			}			
		}					
			  	
	} else{	
	echo 'All fields are required!';	
	}	
  }

} else if(!loggedin()){
echo 'Sorry, you have to log in first for you to vote';
}

?>
