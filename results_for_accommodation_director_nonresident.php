
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

		  echo 'Results for position of Accommodation Director(Non-Resident)'.'<br>'.'<br>';

		  echo 'Total number of votes cast : '.voted_accommodation_director_nonresident_total ().'<br>'.'<br>';
		  
		  echo 'Vivivan Musimbi : '.voted_accommodation_director_nonresident_Vivivan_Musimbi ().'<br>';
		  echo 'Lemarkat Ann : '.voted_accommodation_director_nonresident_Lemarkat_Ann ().'<br>';
		  echo 'Valentine Valentine : '.voted_accommodation_director_nonresident_Valentine_Valentine ().'<br>';
	   	  echo 'Lovine Mboya : '.voted_accommodation_director_nonresident_Lovine_Mboya ().'<br>';

	  
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


