
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

		  echo 'Results for position of Congress-Hall 2'.'<br>'.'<br>';

		  echo 'Total number of votes cast : '.voted_congress_hall_2_total ().'<br>'.'<br>';
		  
		  echo 'Lilian Kerubo : '.voted_congress_hall_2_Lilian_Kerubo ().'<br>';
		  echo 'Nasoro Steve : '.voted_congress_hall_2_Nasoro_Steve ().'<br>';
		  echo 'Portia Elsy : '.voted_congress_hall_2_Portia_Elsy ().'<br>';
	   	  echo 'Mueni Christine : '.voted_congress_hall_2_Mueni_Christine ().'<br>';

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


