<?php

require 'core.php';
require 'dbconnect.php';

function registered_voters_total () {
	$query ='SELECT first_name, sur_name FROM voter_roll';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_gender_is_male () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE gender = "Male" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_gender_is_female () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE gender = "Female" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_graduate_level_is_undergraduate () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE graduate_level = "undergraduate" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_graduate_level_is_postgraduate () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE graduate_level = "postgraduate" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_category_is_government_sponsored () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE category = "government sponsored" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_category_is_privately_sponsored () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE category = "privately sponsored" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_campus_is_Main_Campus () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE campus = "Main Campus" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_campus_is_Bungoma_Campus () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE campus = "Bungoma Campus" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_campus_is_Songalo_Campus () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE campus = "Songalo Campus" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_campus_is_Ebunangwe_Campus () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE campus = "Ebunangwe Campus" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_academic_division_is_Faculty_of_Science () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE academic_division = "Faculty of Science" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_academic_division_is_Faculty_of_Engineering () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE academic_division = "Faculty of Engineering" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_academic_division_is_Faculty_of_Education_and_Social_Sciences () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE academic_division = "Faculty of Education and Social Sciences" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_academic_division_is_cdmha () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE academic_division = "CDMHA" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_year_of_study_is_First () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE year_of_study = "First" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_year_of_study_is_Second () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE year_of_study = "Second" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_year_of_study_is_Third () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE year_of_study = "Third" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_year_of_study_is_Fourth () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE year_of_study = "Fourth" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_year_of_study_is_Fifth () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE year_of_study = "Fifth" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_residence_area_is_Resident () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE residence_area = "Resident" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_residence_area_is_Non_Resident () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE residence_area = "Non-Resident" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_residence_hall_is_Non_Resident () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE residence_hall = "Non-Resident" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_residence_hall_is_Hall_1 () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE residence_hall = "Hall 1" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_residence_hall_is_Hall_2 () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE residence_hall = "Hall 2" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_residence_hall_is_Hall_3 () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE residence_hall = "Hall 3" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_residence_hall_is_Kotecha () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE residence_hall = "Kotecha" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function registered_voters_per_residence_hall_is_Milimani () {
	$query ='SELECT first_name, sur_name FROM voter_roll WHERE residence_hall = "Milimani" ';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}



  if(loggedin()){

			  
if(isset($_POST['view_category'])) {

$view_category = $_POST['view_category'];


	if($view_category != 'select a view category') {
	
	      if($view_category == "Total registered voters"){	
		  	header('Location: results2_total_registered_voters.php');
		  }
		  
		  else if($view_category == "Total registered voters per gender"){		  
             header('Location: results2_total_registered_voters_per_gender.php');
		  }
		  
          else if($view_category == "Total registered voters per graduate level"){
		     header('Location: results2_total_registered_voters_per_graduate_level.php');
		  }
		  
  		  else if($view_category == "Total registered voters per category"){
		     header('Location: results2_total_registered_voters_per_category.php');
		  }

		  else if($view_category=="Total registered voters per campus"){
		     header('Location: results2_total_registered_voters_per_campus.php');
		  }

		  else if($view_category == "Total registered voters per academic division"){
		     header('Location: results2_total_registered_voters_per_academic_division.php');
		  }
		  
		  else if($view_category == "Total registered voters per year of study"){
		     header('Location: results2_total_registered_voters_per_year_of_study.php');
		  }
		  
		  else if($view_category=="Total registered voters per area of residence"){
		     header('Location: results2_total_registered_voters_per_area_of_residence.php');
		  }
		  
		  else if($view_category == "Total registered voters per hall of residence"){
		     header('Location: results2_total_registered_voters_per_hall_of_residence.php');
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
	var answer = alert("Select a category from which to view statistics on registered voters.")	
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
&nbsp;&nbsp;&nbsp;&nbsp;
View statistics on registered voters based on : &nbsp;&nbsp; <select name="view_category">
                        <option>select a view category</option>
						<option>Total registered voters</option>
						<option>Total registered voters per gender</option>
						<option>Total registered voters per graduate level</option>
						<option>Total registered voters per category</option>
						<option>Total registered voters per campus</option>
						<option>Total registered voters per academic division</option>
						<option>Total registered voters per year of study</option>
						<option>Total registered voters per area of residence</option>
						<option>Total registered voters per hall of residence</option>
              </select>
			  
&nbsp;&nbsp;&nbsp;
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

