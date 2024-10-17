
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

		  echo 'Results for position of Congress-Hall 3'.'<br>'.'<br>';

		  echo 'Total number of votes cast : '.voted_congress_hall_3_total ().'<br>'.'<br>';
		  
		  echo 'Yvonne Mangoli : '.voted_congress_hall_3_Yvonne_Mangoli ().'<br>';
		  echo 'Maryanne Wambui : '.voted_congress_hall_3_Maryanne_Wambui ().'<br>';
		  echo 'Charity Manglara : '.voted_congress_hall_3_Charity_Manglara ().'<br>';
	   	  echo 'Mercy Manyasi : '.voted_congress_hall_3_Mercy_Manyasi ().'<br>';

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


