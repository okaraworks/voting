
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

		  echo 'Results for position of Congress-Faculty of Engineering'.'<br>'.'<br>';

		  echo 'Total number of votes cast : '.voted_congress_faculty_of_engineering_total ().'<br>'.'<br>';
		  
		  echo 'Esther Wangari : '.voted_congress_faculty_of_engineering_Esther_Wangari ().'<br>';
		  echo 'Sandra Nyongesa : '.voted_congress_faculty_of_engineering_Sandra_Nyongesa ().'<br>';
		  echo 'Christocency Okumu : '.voted_congress_faculty_of_engineering_Christocency_Okumu ().'<br>';
	   	  echo 'Mildred Nauria : '.voted_congress_faculty_of_engineering_Mildred_Nauria ().'<br>';

	  
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


