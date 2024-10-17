
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

		  echo 'Results for position of Deputy Secretary General'.'<br>'.'<br>';

		  echo 'Total number of votes cast : '.voted_deputy_secretary_general_total ().'<br>'.'<br>';
		  
		  echo 'Emmaculate Otina : '.voted_deputy_secretary_general_Emmaculate_Otina ().'<br>';
		  echo 'Gloria Osano : '.voted_deputy_secretary_general_Gloria_Osano ().'<br>';
		  echo 'Stella Nabulindo : '.voted_deputy_secretary_general_Stella_Nabulindo ().'<br>';
	   	  echo 'Euginiah Mwaniki : '.voted_deputy_secretary_general_Euginiah_Mwaniki ().'<br>';

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


