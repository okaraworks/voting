
<html>
<head>
<title>MMUSO ELECTIONS 2014</title>
<link href="webstyle.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div id="divLine"></div>
<?php

require 'dbconnect.php';
require 'statistics_voted_individual_position_and_candidate.php';

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

		  echo 'Results for position of Congress-Faculty of Education and Social Sciences'.'<br>'.'<br>';

		  echo 'Total number of votes cast : '.voted_congress_faculty_of_education_and_social_sciences_total ().'<br>'.'<br>';
		  
		  echo 'Lydia Muthoki : '.voted_congress_faculty_of_education_and_social_sciences_Lydia_Muthoki ().'<br>';
		  echo 'Caroline Mokaya : '.voted_congress_faculty_of_education_and_social_sciences_Caroline_Mokaya ().'<br>';
		  echo 'Caroline Mbithi : '.voted_congress_faculty_of_education_and_social_sciences_Caroline_Mbithi ().'<br>';
	   	  echo 'Wanjau Terry : '.voted_congress_faculty_of_education_and_social_sciences_Wanjau_Terry ().'<br>';

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


