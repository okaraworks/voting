
<?php

require 'core.php';
require 'dbconnect.php';

if(loggedin()){
$first_name = getuserfield('first_name');
$sur_name = getuserfield('sur_name');
$username = getuserfield('username');


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
		

if(isset($_SESSION['chairperson']) && isset($_SESSION['vice_chairperson']) && isset($_SESSION['secretary_general']) && isset($_SESSION['deputy_secretary_general']) && isset($_SESSION['finance_director']) && isset($_SESSION['academics_director']) && isset($_SESSION['accommodation_director_resident']) && isset($_SESSION['accommodation_director_nonresident']) && isset($_SESSION['catering_director']) && isset($_SESSION['entertainment_director']) && isset($_SESSION['congress_faculty_of_engineering']) && isset($_SESSION['congress_hall_2'])) {
	
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
		$congress_hall_2 = $_SESSION['congress_hall_2'];	
		

	if(!empty($chairperson) && !empty($vice_chairperson) && !empty($secretary_general) && !empty($deputy_secretary_general) && !
	empty($finance_director) && !empty($academics_director) && !empty($accommodation_director_resident) && !empty(
	$accommodation_director_nonresident) && !empty($catering_director) && !empty($entertainment_director) && !empty($congress_faculty_of_engineering) && !empty($congress_hall_2)) {
						
		 	 $query = "SELECT username FROM voter_roll WHERE username = '" .$username. "' ";
			 $query_run = mysql_query($query);	
			 
			  if(mysql_num_rows($query_run) == 1){
			  
?>

<html>
<head>
<title>MMUSO ELECTIONS 2014</title>
<link href="webstyle.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div id="divWrap2">

<div id="content">
<div id="divLine"></div>

<?php

include 'header_vote_processor.php';
echo '<br>';			  
			 
	  echo "<font size=\"5\" color=\"black\">";
	  echo "Your candidates of choice were : "."<br/>"."<br/>";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "SGC"."<br/>";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "Chairperson : "."<font size=\"5\" color=\"blue\">".$chairperson_first_name." ".$chairperson_sur_name."</font>"."<br/>";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "Vice Chairperson : "."<font size=\"5\" color=\"blue\">".$vice_chairperson_first_name." ".$vice_chairperson_sur_name."</font>"."<br/>";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "Secretary General : "."<font size=\"5\" color=\"blue\">".$secretary_general_first_name." ".$secretary_general_sur_name."</font>"."<br/>";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "Deputy Secretary General : "."<font size=\"5\" color=\"blue\">".$deputy_secretary_general_first_name." ".$deputy_secretary_general_sur_name."</font>"."<br/>";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "Finance Director :  "."<font size=\"5\" color=\"blue\">".$finance_director_first_name." ".$finance_director_sur_name."</font>"."<br/>"; 
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "Academics Director :  "."<font size=\"5\" color=\"blue\">".$academics_director_first_name." ".$academics_director_sur_name."</font>"."<br/>"; 
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "Accommodation Director(Resident) :  "."<font size=\"5\" color=\"blue\">".$accommodation_director_resident_first_name." ".$accommodation_director_resident_sur_name."</font>"."<br/>";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";     
	  echo "Accommodation Director(Non-Resident) :  "."<font size=\"5\" color=\"blue\">".$accommodation_director_nonresident_first_name." ".$accommodation_director_nonresident_sur_name."</font>"."<br/>";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
	  echo "Catering Director :  "."<font size=\"5\" color=\"blue\">".$catering_director_first_name." ".$catering_director_sur_name."</font>"."<br/>"; 
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "Entertainment Director :  "."<font size=\"5\" color=\"blue\">".$entertainment_director_first_name." ".$entertainment_director_sur_name."</font>"."<br/>"."<br/>";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "CONGRESS"."<br/>";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "Congress-Faculty of Engineering : "."<font size=\"5\" color=\"blue\">".$congress_faculty_of_engineering_first_name." ".$congress_faculty_of_engineering_sur_name."</font>"."<br/>";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";     
	  echo "Congress-Hall 2 :  "."<font size=\"5\" color=\"blue\">".$congress_hall_2_first_name." ".$congress_hall_2_sur_name."</font>"."<br/>"."<br/>";
		  
	  echo "You can now submit your choices or edit them before submitting them.".".<br/>";
	  echo "</font>";
			 
?>
</br></br>
</font color = "black"><center><h2><p><a href="chairperson.php">edit choices</a>
<a href="sgc_vote_processor_next.php">submit vote</a></p>
</h2>
</center></font>
</div>
<div id="divLine"></div>
</div>
</body>
</html>

<?php
			 } else {
			echo 'Sorry, you are not a registered voter hence you cannot partake in this exercise....';	
		  }
			   		
		} else{		
		echo 'All fields are required!';		
		}		
	}

} else if(!loggedin()){
echo 'Sorry, you have to log in first for you to vote'.'<br>';
include 'user_login.php';
}

?>
	



