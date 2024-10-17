
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

		  echo 'Results for position of Secretary General'.'<br>'.'<br>';

		  echo 'Total number of votes cast : '.voted_secretary_general_total ().'<br>'.'<br>';
		  
		  echo 'Cynthia Chelagat : '.voted_secretary_general_Cynthia_Chelagat ().'<br>';
		  echo 'Chelangat Vicky : '.voted_secretary_general_Chelangat_Vicky ().'<br>';
		  echo 'Koitaba Naomi : '.voted_secretary_general_Koitaba_Naomi ().'<br>';
	   	  echo 'Winny Chelangat : '.voted_secretary_general_Winny_Chelangat ().'<br>';

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


