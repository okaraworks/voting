
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
<table width="90%" border="0">
<tr>
<td width="3%"></td>
<td width="80%">
<strong><font size="5">

<?php
echo '<br>';
?>
<?php

	
		echo 'Total number of candidates : '.candidates_total ().'<br>'.'<br>';
		
		echo 'Chairperson candidates : '.candidates_total_chairperson ().'<br>';
		echo 'Vice Chairperson candidates : '.candidates_total_vice_chairperson ().'<br>';
		echo 'Secretary General candidates : '.candidates_total_secretary_general ().'<br>';
		echo 'Deputy Secretary General candidates : '.candidates_total_deputy_secretary_general ().'<br>';
		echo 'Finance Director candidates : '.candidates_total_finance_director ().'<br>';
		echo 'Academics Director candidates : '.candidates_total_academics_director ().'<br>';
		echo 'Accommodation Director(Resident) candidates : '.candidates_total_accommodation_director_resident ().'<br>';
		echo 'Accommodation Director(Non-Resident) candidates : '.candidates_total_accommodation_director_nonresident ().'<br>';
		echo 'Catering Director candidates : '.candidates_total_catering_director ().'<br>';
		echo 'Entertainment Director candidates : '.candidates_total_entertainment_director ().'<br>';
		
		echo 'Congress-Faculty of Science candidates : '.candidates_total_congress_faculty_of_science ().'<br>';
		echo 'Congress-Faculty of Engineering candidates : '.candidates_total_congress_faculty_of_engineering ().'<br>';
		echo 'Congress-FESS : '.candidates_total_congress_faculty_of_education_and_social_sciences ().'<br>';
		echo 'Congress-CDMHA candidates : '.candidates_total_congress_cdmha ().'<br>';
		echo 'Congress-Hall 1 candidates : '.candidates_total_congress_hall_1 ().'<br>';
		echo 'Congress-Hall 2 candidates : '.candidates_total_congress_hall_2 ().'<br>';
		echo 'Congress-Hall 3 candidates : '.candidates_total_congress_hall_3 ().'<br>';
		echo 'Congress-Milimani candidates : '.candidates_total_congress_milimani ().'<br>';
		echo 'Congress-Kotecha candidates : '.candidates_total_congress_kotecha ().'<br>';
	

?>

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


		 