<?php

require 'core.php';
require 'dbconnect.php';
//include("statistics_pages.php");


function candidates_total () {
	$query ='SELECT first_name, sur_name FROM candidates';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


	function candidates_total_chairperson () {
		$query ='SELECT first_name, sur_name FROM candidates WHERE position = "chairperson" ';
		$query_run = mysql_query($query);	
		$result = mysql_num_rows($query_run);  // determine number of rows returned
		return $result;
	}
	
	
	function candidates_total_vice_chairperson () {
		$query ='SELECT first_name, sur_name FROM candidates WHERE position = "vice_chairperson" ';
		$query_run = mysql_query($query);	
		$result = mysql_num_rows($query_run);  // determine number of rows returned
		return $result;
	}
	
	
	function candidates_total_secretary_general () {
		$query ='SELECT first_name, sur_name FROM candidates WHERE position = "secretary_general" ';
		$query_run = mysql_query($query);	
		$result = mysql_num_rows($query_run);  // determine number of rows returned
		return $result;
	}
	
	
	function candidates_total_deputy_secretary_general () {
		$query ='SELECT first_name, sur_name FROM candidates WHERE position = "deputy_secretary_general" ';
		$query_run = mysql_query($query);	
		$result = mysql_num_rows($query_run);  // determine number of rows returned
		return $result;
	}
	
	
	function candidates_total_finance_director () {
		$query ='SELECT first_name, sur_name FROM candidates WHERE position = "finance_director" ';
		$query_run = mysql_query($query);	
		$result = mysql_num_rows($query_run);  // determine number of rows returned
		return $result;
	}
	
	
	function candidates_total_academics_director () {
		$query ='SELECT first_name, sur_name FROM candidates WHERE position = "academics_director" ';
		$query_run = mysql_query($query);	
		$result = mysql_num_rows($query_run);  // determine number of rows returned
		return $result;
	}
	
	
	function candidates_total_accommodation_director_resident () {
		$query ='SELECT first_name, sur_name FROM candidates WHERE position = "accommodation_director_resident" ';
		$query_run = mysql_query($query);	
		$result = mysql_num_rows($query_run);  // determine number of rows returned
		return $result;
	}
	
	
	function candidates_total_accommodation_director_nonresident () {
		$query ='SELECT first_name, sur_name FROM candidates WHERE position = "accommodation_director_nonresident" ';
		$query_run = mysql_query($query);	
		$result = mysql_num_rows($query_run);  // determine number of rows returned
		return $result;
	}
	
	
	function candidates_total_catering_director () {
		$query ='SELECT first_name, sur_name FROM candidates WHERE position = "catering_director" ';
		$query_run = mysql_query($query);	
		$result = mysql_num_rows($query_run);  // determine number of rows returned
		return $result;
	}
	
	
	function candidates_total_entertainment_director () {
		$query ='SELECT first_name, sur_name FROM candidates WHERE position = "entertainment_director" ';
		$query_run = mysql_query($query);	
		$result = mysql_num_rows($query_run);  // determine number of rows returned
		return $result;
	}



	function candidates_total_congress_faculty_of_science () {
		$query ='SELECT first_name, sur_name FROM candidates WHERE position = "congress_faculty_of_science" ';
		$query_run = mysql_query($query);	
		$result = mysql_num_rows($query_run);  // determine number of rows returned
		return $result;
	}
	
	
	function candidates_total_congress_faculty_of_engineering () {
		$query ='SELECT first_name, sur_name FROM candidates WHERE position = "congress_faculty_of_engineering" ';
		$query_run = mysql_query($query);	
		$result = mysql_num_rows($query_run);  // determine number of rows returned
		return $result;
	}
	
	
	function candidates_total_congress_faculty_of_education_and_social_sciences () {
		$query ='SELECT first_name, sur_name FROM candidates WHERE position = "congress_faculty_of_education_and_social_sciences" ';
		$query_run = mysql_query($query);	
		$result = mysql_num_rows($query_run);  // determine number of rows returned
		return $result;
	}
	
	
	function candidates_total_congress_cdmha () {
		$query ='SELECT first_name, sur_name FROM candidates WHERE position = "congress_cdmha" ';
		$query_run = mysql_query($query);	
		$result = mysql_num_rows($query_run);  // determine number of rows returned
		return $result;
	}
	
	
	function candidates_total_congress_hall_1 () {
		$query ='SELECT first_name, sur_name FROM candidates WHERE position = "congress_hall_1" ';
		$query_run = mysql_query($query);	
		$result = mysql_num_rows($query_run);  // determine number of rows returned
		return $result;
	}
	
	
	function candidates_total_congress_hall_2 () {
		$query ='SELECT first_name, sur_name FROM candidates WHERE position = "congress_hall_2" ';
		$query_run = mysql_query($query);	
		$result = mysql_num_rows($query_run);  // determine number of rows returned
		return $result;
	}
	
	
	function candidates_total_congress_hall_3 () {
		$query ='SELECT first_name, sur_name FROM candidates WHERE position = "congress_hall_3" ';
		$query_run = mysql_query($query);	
		$result = mysql_num_rows($query_run);  // determine number of rows returned
		return $result;
	}
	
	
	function candidates_total_congress_milimani () {
		$query ='SELECT first_name, sur_name FROM candidates WHERE position = "congress_milimani" ';
		$query_run = mysql_query($query);	
		$result = mysql_num_rows($query_run);  // determine number of rows returned
		return $result;
	}
	
	
	function candidates_total_congress_kotecha () {
		$query ='SELECT first_name, sur_name FROM candidates WHERE position = "congress_kotecha" ';
		$query_run = mysql_query($query);	
		$result = mysql_num_rows($query_run);  // determine number of rows returned
		return $result;
	}
	
	
		function candidates_per_gender_is_male () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE gender = "Male" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		
		function candidates_per_gender_is_female () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE gender = "Female" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		
		function chairpersons_per_gender_is_male () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "chairperson" AND gender = "Male" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		function chairpersons_per_gender_is_female () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "chairperson" AND gender = "Female" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		
		function vice_chairpersons_per_gender_is_male () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "vice_chairperson" AND gender = "Male" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		function vice_chairpersons_per_gender_is_female () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "vice_chairperson" AND gender = "Female" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		
		function secretary_generals_per_gender_is_male () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "secretary_general" AND gender = "Male" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		function secretary_generals_per_gender_is_female () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "secretary_general" AND gender = "Female" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		
		function deputy_secretary_generals_per_gender_is_male () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "deputy_secretary_general" AND gender = "Male" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		function deputy_secretary_generals_per_gender_is_female () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "deputy_secretary_general" AND gender = "Female" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		
		function finance_directors_per_gender_is_male () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "finance_director" AND gender = "Male" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		function finance_directors_per_gender_is_female () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "finance_director" AND gender = "Female" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		
		function academics_directors_per_gender_is_male () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "academics_director" AND gender = "Male" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		function academics_directors_per_gender_is_female () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "academics_director" AND gender = "Female" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		
		function accommodation_director_residents_per_gender_is_male () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "accommodation_director_resident" AND gender = "Male" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		
		function accommodation_director_residents_per_gender_is_female () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "accommodation_director_resident" AND gender = "Female" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		
		function accommodation_director_nonresidents_per_gender_is_male () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "accommodation_director_nonresident" AND gender = "Male" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		function accommodation_director_nonresidents_per_gender_is_female () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "accommodation_director_nonresident" AND gender = "Female" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		
		function catering_directors_per_gender_is_male () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "catering_director" AND gender = "Male" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		function catering_directors_per_gender_is_female () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "catering_director" AND gender = "Female" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		
		function entertainment_directors_per_gender_is_male () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "entertainment_director" AND gender = "Male" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		function entertainment_directors_per_gender_is_female () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "entertainment_director" AND gender = "Female" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}


		
		function congress_faculty_of_science_per_gender_is_male () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "congress_faculty_of_science" AND gender = "Male" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		
		function congress_faculty_of_science_per_gender_is_female () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "congress_faculty_of_science" AND gender = "Female" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		
		function congress_faculty_of_engineering_per_gender_is_male () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "congress_faculty_of_engineering" AND gender = "Male" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		function congress_faculty_of_engineering_per_gender_is_female () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "congress_faculty_of_engineering" AND gender = "Female" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		
		function congress_faculty_of_education_and_social_sciences_per_gender_is_male () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "congress_faculty_of_education_and_social_sciences" AND gender = "Male" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		function congress_faculty_of_education_and_social_sciences_per_gender_is_female () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "congress_faculty_of_education_and_social_sciences" AND gender = "Female" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		
		function congress_cdmha_per_gender_is_male () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "congress_cdmha" AND gender = "Male" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}
		
		function congress_cdmha_per_gender_is_female () {
			$query ='SELECT first_name, sur_name FROM candidates WHERE position = "congress_cdmha" AND gender = "Female" ';
			$query_run = mysql_query($query);	
			$result = mysql_num_rows($query_run);  // determine number of rows returned
			return $result;
		}


			function candidates_per_campus_is_Main_Campus () {
				$query ='SELECT first_name, sur_name FROM candidates WHERE campus = "Main Campus" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}
			
			
			function candidates_per_campus_is_Bungoma_Campus () {
				$query ='SELECT first_name, sur_name FROM candidates WHERE campus = "Bungoma Campus" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}
			
			
			function candidates_per_campus_is_Songalo_Campus () {
				$query ='SELECT first_name, sur_name FROM candidates WHERE campus = "Songalo Campus" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}
			
			
			function candidates_per_campus_is_Ebunangwe_Campus () {
				$query ='SELECT first_name, sur_name FROM candidates WHERE campus = "Ebunangwe Campus" ';
				$query_run = mysql_query($query);	
				$result = mysql_num_rows($query_run);  // determine number of rows returned
				return $result;
			}


				
				function candidates_per_year_of_study_is_First () {
					$query ='SELECT first_name, sur_name FROM candidates WHERE year_of_study = "First" ';
					$query_run = mysql_query($query);	
					$result = mysql_num_rows($query_run);  // determine number of rows returned
					return $result;
				}
				
				
				function candidates_per_year_of_study_is_Second () {
					$query ='SELECT first_name, sur_name FROM candidates WHERE year_of_study = "Second" ';
					$query_run = mysql_query($query);	
					$result = mysql_num_rows($query_run);  // determine number of rows returned
					return $result;
				}
				
				
				function candidates_per_year_of_study_is_Third () {
					$query ='SELECT first_name, sur_name FROM candidates WHERE year_of_study = "Third" ';
					$query_run = mysql_query($query);	
					$result = mysql_num_rows($query_run);  // determine number of rows returned
					return $result;
				}
				
				
				function candidates_per_year_of_study_is_Fourth () {
					$query ='SELECT first_name, sur_name FROM candidates WHERE year_of_study = "Fourth" ';
					$query_run = mysql_query($query);	
					$result = mysql_num_rows($query_run);  // determine number of rows returned
					return $result;
				}
				
				
				function candidates_per_year_of_study_is_Fifth () {
					$query ='SELECT first_name, sur_name FROM candidates WHERE year_of_study = "Fifth" ';
					$query_run = mysql_query($query);	
					$result = mysql_num_rows($query_run);  // determine number of rows returned
					return $result;
				}


  if(loggedin()){

			  
if(isset($_POST['view_category'])) {

$view_category = $_POST['view_category'];


	if($view_category != 'select a view category') {
	
	      if($view_category == "Total number of candidates"){	
		  	header('Location: results3_total_number_of_candidates.php');
		  }
		  
		  else if($view_category == "Total number of candidates per campus"){
		     header('Location: results3_total_number_of_candidates_per_campus.php');
		  }
		  
  		  else if($view_category == "Total number of candidates per year of study"){
		     header('Location: results3_total_number_of_candidates_per_year_of_study.php');
		  }		  
		  
		  else if($view_category == "Total number of candidates per gender"){		  
             header('Location: results3_total_number_of_candidates_per_gender.php');
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
	var answer = alert("Select a category from which to view statistics on candidates.")	
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
View statistics on candidates based on : <select name="view_category" style="margin-left:30px;">
                        <option>select a view category</option>
						<option>Total number of candidates</option>
						<option>Total number of candidates per campus</option>
						<option>Total number of candidates per year of study</option>
						<option>Total number of candidates per gender</option>
												
              </select>

<input type="submit" value="VIEW" style="margin-left:40px;">
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


