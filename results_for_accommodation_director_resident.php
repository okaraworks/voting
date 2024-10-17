
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
		  echo 'Results for position of Accommodation Director(Resident)'.'<br>'.'<br>';

		  echo 'Total number of votes cast : '.voted_accommodation_director_resident_total ().'<br>'.'<br>';
		  
		  echo 'Faraday Chimoi : '.voted_accommodation_director_resident_Faraday_Chimoi ().'<br>';
		  echo 'Elsebah Elsebah : '.voted_accommodation_director_resident_Elsebah_Elsebah ().'<br>';
		  echo 'Ruth Wangari : '.voted_accommodation_director_resident_Ruth_Wangari ().'<br>';
	   	  echo 'Carolyne Nancy : '.voted_accommodation_director_resident_Carolyne_Nancy ().'<br>';

	  
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


