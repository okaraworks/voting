<?php

require 'dbconnect.php';
require 'core.php';

			function voted_voters_total() {
				$query ='SELECT first_name, sur_name FROM successful_voters';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
				  }	
			  
			function voted_chairperson_total () {
				$query ='SELECT vote_id FROM voted_chairperson';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_vice_chairperson_total () {
				$query ='SELECT vote_id FROM voted_vice_chairperson';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}
						
			function voted_secretary_general_total () {
				$query ='SELECT vote_id FROM voted_secretary_general';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_deputy_secretary_general_total () {
				$query ='SELECT vote_id FROM voted_deputy_secretary_general';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_finance_director_total () {
				$query ='SELECT vote_id FROM voted_finance_director';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_academics_director_total () {
				$query ='SELECT vote_id FROM voted_academics_director';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_accommodation_director_resident_total () {
				$query ='SELECT vote_id FROM voted_accommodation_director_resident';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_accommodation_director_nonresident_total () {
				$query ='SELECT vote_id FROM voted_accommodation_director_nonresident';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_catering_director_total () {
				$query ='SELECT vote_id FROM voted_catering_director';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_entertainment_director_total () {
				$query ='SELECT vote_id FROM voted_entertainment_director';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}









			function voted_congress_faculty_of_science_total () {
				$query ='SELECT vote_id FROM voted_congress_faculty_of_science';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_congress_faculty_of_engineering_total () {
				$query ='SELECT vote_id FROM voted_congress_faculty_of_engineering';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}
						
			function voted_congress_faculty_of_education_and_social_sciences_total () {
				$query ='SELECT vote_id FROM voted_congress_faculty_of_education_and_social_sciences';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_congress_cdmha_general_total () {
				$query ='SELECT vote_id FROM voted_congress_cdmha';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_congress_hall_1_total () {
				$query ='SELECT vote_id FROM voted_congress_hall_1';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_congress_hall_2_total () {
				$query ='SELECT vote_id FROM voted_congress_hall_2';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_congress_hall_3_total () {
				$query ='SELECT vote_id FROM voted_congress_hall_3';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_congress_milimani_total () {
				$query ='SELECT vote_id FROM voted_congress_milimani';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_congress_kotecha_total () {
				$query ='SELECT vote_id FROM voted_congress_kotecha';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			









		  
		    function voted_voters_per_gender_is_male () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE gender = "Male" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}   
			
			function voted_voters_per_gender_is_female () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE gender = "Female" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}
			
		  
			function voted_voters_per_graduate_level_is_undergraduate () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE graduate_level = "undergraduate" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_voters_per_graduate_level_is_postgraduate () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE graduate_level = "postgraduate" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}
			
		  
			function voted_voters_per_category_is_government_sponsored () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE category = "government sponsored" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}
						
			function voted_voters_per_category_is_privately_sponsored () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE category = "privately sponsored" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}
			
					  
			function voted_voters_per_campus_is_Main_Campus () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE campus = "Main Campus" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_voters_per_campus_is_Bungoma_Campus () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE campus = "Bungoma Campus" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_voters_per_campus_is_Songalo_Campus () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE campus = "Songalo Campus" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_voters_per_campus_is_Ebunangwe_Campus () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE campus = "Ebunangwe Campus" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}
			
			
			function voted_voters_per_academic_division_is_Faculty_of_Science () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE academic_division = "Faculty of Science" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_voters_per_academic_division_is_Faculty_of_Engineering () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE academic_division = "Faculty of Engineering" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_voters_per_academic_division_is_Faculty_of_Education_and_Social_Sciences () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE academic_division = "Faculty of Education and Social Sciences" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}
			
			
			function voted_voters_per_academic_division_is_CDMHA () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE academic_division = "CDMHA" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
		  
			function voted_voters_per_year_of_study_is_First () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE year_of_study = "First" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_voters_per_year_of_study_is_Second () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE year_of_study = "Second" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_voters_per_year_of_study_is_Third () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE year_of_study = "Third" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_voters_per_year_of_study_is_Fourth () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE year_of_study = "Fourth" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_voters_per_year_of_study_is_Fifth () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE year_of_study = "Fifth" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}
			
		  
			function voted_voters_per_residence_area_is_Resident () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE residence_area = "Resident" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_voters_per_residence_area_is_Non_Resident () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE residence_area = "Non-Resident" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}
			
		  
			function voted_voters_per_residence_hall_is_Non_Resident () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE residence_hall = "Non-Resident" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_voters_per_residence_hall_is_Hall_1 () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE residence_hall = "Hall 1" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_voters_per_residence_hall_is_Hall_2 () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE residence_hall = "Hall 2" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_voters_per_residence_hall_is_Hall_3 () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE residence_hall = "Hall 3" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_voters_per_residence_hall_is_Kotecha () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE residence_hall = "Kotecha" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}			
			
			function voted_voters_per_residence_hall_is_Milimani () {
				$query ='SELECT first_name, sur_name FROM successful_voters WHERE residence_hall = "Milimani" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}
			

  if(loggedin()){

if(isset($_POST['view_category'])) {

$view_category = $_POST['view_category'];


	if($view_category != 'select a view category') {
	
	      if($view_category == "Total votes cast"){	
		  	header('Location: results1_total_votes_cast.php');
		  }
		  
		  else if($view_category == "Total votes cast per gender"){		  
             header('Location: results1_total_votes_cast_per_gender.php');
		  }
		  
          else if($view_category == "Total votes cast per graduate level"){
		     header('Location: results1_total_votes_cast_per_graduate_level.php');
		  }
		  
  		  else if($view_category == "Total votes cast per category"){
		     header('Location: results1_total_votes_cast_per_category.php');
		  }

		  else if($view_category=="Total votes cast per campus"){
		     header('Location: results1_total_votes_cast_per_campus.php');
		  }

		  else if($view_category == "Total votes cast per academic division"){
		     header('Location: results1_total_votes_cast_per_academic_division.php');
		  }
		  
		  else if($view_category == "Total votes cast per year of study"){
		     header('Location: results1_total_votes_cast_per_year_of_study.php');
		  }
		  
		  else if($view_category=="Total votes cast per area of residence"){
		     header('Location: results1_total_votes_cast_per_area_of_residence.php');
		  }
		  
		  else if($view_category == "Total votes cast per hall of residence"){
		     header('Location: results1_total_votes_cast_per_hall_of_residence.php');
		  }	  
		  

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
	var answer = alert("Select a category from which to view statistics on voted voters.")	
	 }
	 //-->
	 </script> 
	</body>
	</html>		

<?php	
}		
 }
  } else if(!loggedin()){

?>

	<html>
	<head>
	<title>Untitled Document</title>
	</head>
	<body onLoad="confirmation()">
	
	<script type="text/javascript">
	<!--
	function confirmation() {
	var answer = alert("Sorry, you have to log in first")
	window.location = "index.php";
	 }
	 //-->
	 </script> 
	</body>
	</html>		


<?php

}

?>

<html>
<head>
<title>MMUSO ELECTIONS 2014</title>
<link href="webstyle.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div id="divWrap3">

<div id="divLine"></div>

<div id="content">
<div id="divLine"></div>
<div id="divTable">
<table width="100%" border="0">
<tr>
<td width="80%">

<?php
//require 'core.php';
//require 'dbconnect.php';
include("statistics_pages.php");

echo '<br>';
?>

<form action="<?php $current_file = $_SERVER['SCRIPT_NAME']; echo $current_file; ?>" method="POST">
<p>
&nbsp;&nbsp;
View statistics on already voted voters based on : &nbsp;&nbsp; <select name="view_category">
                        <option>select a view category</option>
						<option>Total votes cast</option>
						<option>Total votes cast per gender</option>
						<option>Total votes cast per graduate level</option>
						<option>Total votes cast per category</option>
						<option>Total votes cast per campus</option>
						<option>Total votes cast per academic division</option>
						<option>Total votes cast per year of study</option>
						<option>Total votes cast per area of residence</option>
						<option>Total votes cast per hall of residence</option>
              </select>

&nbsp;&nbsp;
<input type="submit" value="VIEW">
<br><br><br><br><br><br>

</form>

</div>
</div>
<div id="divLine"></div>

</td>

</tr>
</table>
</div>
</body>
</html>
