
<html>
<head>
<title>MMUSO ELECTIONS 2014</title>
<link href="webstyle.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div id="divLine"></div>
<?php

require 'dbconnect.php';
require 'statistics_candidates.php';

?>

<div id="content">
<div id="divLine"></div>
<div id="divTable">
<table width="90%" border="0">
<tr>
<td width="90%">

<div id="divTable2">
<table width="100%" border="0">
<tr>
<td width="3%"></td>
<td width="95%">
<strong><font size="5">

<?php
echo '<br>';
?>
<?php

		echo 'Total number of candidates : '.candidates_total ().'<br>'.'<br>';
		echo 'Total number of male candidates : '.candidates_per_gender_is_male ().'<br>';
		echo 'Total number of female candidates : '.candidates_per_gender_is_female ().'<br>'.'<br>';

		echo 'Chairperson &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.' male : '.chairpersons_per_gender_is_male ().' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    female : '.chairpersons_per_gender_is_female ().'<br>';
		echo 'Vice Chairperson &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.' male : '.vice_chairpersons_per_gender_is_male ().' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   female : '.vice_chairpersons_per_gender_is_female ().'<br>';
		echo 'Secretary General &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.' male : '.secretary_generals_per_gender_is_male ().' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   female : '.secretary_generals_per_gender_is_female ().'<br>';
		echo 'Deputy Secretary General &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.' male : '.deputy_secretary_generals_per_gender_is_male ().' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   female : '.deputy_secretary_generals_per_gender_is_female ().'<br>';
		echo 'Finance Director &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.' male : '.finance_directors_per_gender_is_male ().' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   female : '.finance_directors_per_gender_is_female ().'<br>';
		echo 'Academics Director &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.' male : '.academics_directors_per_gender_is_male ().' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   female : '.academics_directors_per_gender_is_female ().'<br>';
		echo 'Accommodation Director(Resident) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.' male : '.accommodation_director_residents_per_gender_is_male ().' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   female : '.accommodation_director_residents_per_gender_is_female ().'<br>';
		echo 'Accommodation Director(Non-Resident) &nbsp;&nbsp;&nbsp;&nbsp; '.' male : '.accommodation_director_nonresidents_per_gender_is_male ().' &nbsp;&nbsp;&nbsp;&nbsp;  female : '.accommodation_director_nonresidents_per_gender_is_female ().'<br>';
		echo 'Catering Director &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.' male : '.catering_directors_per_gender_is_male ().' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   female : '.catering_directors_per_gender_is_female ().'<br>';
		echo 'Entertainment Director &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.' male : '.entertainment_directors_per_gender_is_male ().' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    female : '.entertainment_directors_per_gender_is_female ().'<br>';
		
		
		echo 'Congress-Faculty of Science &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.' male : '.congress_faculty_of_science_per_gender_is_male ().' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   female : '.congress_faculty_of_science_per_gender_is_female ().'<br>';
		echo 'Congress-Faculty of Engineering &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.' male : '.congress_faculty_of_engineering_per_gender_is_male ().' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   female : '.congress_faculty_of_engineering_per_gender_is_female ().'<br>';
		echo 'Congress-FESS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.' male : '.congress_faculty_of_education_and_social_sciences_per_gender_is_male ().' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   female : '.congress_faculty_of_education_and_social_sciences_per_gender_is_female ().'<br>';
		echo 'Congress-CDMHA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.' male : '.congress_cdmha_per_gender_is_male ().' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   female : '.congress_cdmha_per_gender_is_female ().'<br>';
?>

</div>

</font></strong>

<br><br><br>

</div>
<div id="divLine"></div>
</td>
</tr>
</table>



</div>
<div id="divLine"></div>
</td>
</tr>
</table>
</div>
</body>
</html>


		 