
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

		  echo 'Total voters who voted : '.voted_voters_total ().'<br>'.'<br>';

		echo 'Non-Resident voters : '.voted_voters_per_residence_hall_is_Non_Resident ().'<br>';
		echo 'Hall 1 voters : '.voted_voters_per_residence_hall_is_Hall_1 ().'<br>';
		echo 'Hall 2 voters : '.voted_voters_per_residence_hall_is_Hall_2 ().'<br>';
		echo 'Hall 3 voters : '.voted_voters_per_residence_hall_is_Hall_3 ().'<br>';
		echo 'Kotecha voters : '.voted_voters_per_residence_hall_is_Kotecha ().'<br>';
		echo 'Milimani voters : '.voted_voters_per_residence_hall_is_Milimani ().'<br>';
	
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

		 