
<html>
<head>
<title>MMUSO ELECTIONS 2014</title>
<link href="webstyle.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div id="divLine"></div>
<?php

require 'dbconnect.php';
require 'statistics_voted_voters.php';

?>

<div id="content">
<div id="divLine"></div>
<div id="divTable">
<table width="100%" border="0">
<tr>
<td width="100%">

<div id="divTable2">
<table width="100%" border="0">
<tr>
<td width="20%"></td>
<td width="80%">
<strong><font size="5">

<?php
echo '<br>';

		  echo 'Total registered voters who voted : '.voted_voters_total ().'<br>';
		  echo 'Chairperson position : '.voted_chairperson_total().'<br>';
		  echo 'Vice Chairperson position : '.voted_vice_chairperson_total().'<br>';
		  echo 'Secretary General position : '.voted_secretary_general_total().'<br>';
		  echo 'Deputy Secretary General position : '.voted_deputy_secretary_general_total().'<br>';
		  echo 'Finance Director position : '.voted_finance_director_total().'<br>';
		  echo 'Academics Director position : '.voted_academics_director_total().'<br>';
		  echo 'Accommodation Director(Resident) position : '.voted_accommodation_director_resident_total().'<br>';
		  echo 'Accommodation Director(Non-Resident) position : '.voted_accommodation_director_nonresident_total().'<br>';
		  echo 'Catering Director position : '.voted_catering_director_total().'<br>';
		  echo 'Entertainment Director position : '.voted_entertainment_director_total().'<br>';		  
		  
		  echo 'Congress-Faculty of Science position : '.voted_congress_faculty_of_science_total().'<br>';
		  echo 'Congress-Faculty of Engineering position : '.voted_congress_faculty_of_engineering_total().'<br>';
		  echo 'Congress-FESS position : '.voted_congress_faculty_of_education_and_social_sciences_total().'<br>';
		  echo 'Congress-CDMHA position : '.voted_congress_cdmha_general_total().'<br>';
		  echo 'Congress-Hall 1 position : '.voted_congress_hall_1_total().'<br>';
		  echo 'Congress-Hall 2 position : '.voted_congress_hall_2_total().'<br>';
		  echo 'Congress-Hall 3 position : '.voted_congress_hall_3_total().'<br>';
		  echo 'Congress-Milimani position : '.voted_congress_milimani_total().'<br>';
		  echo 'Congress-Kotecha position : '.voted_congress_kotecha_total().'<br>';
		  
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

