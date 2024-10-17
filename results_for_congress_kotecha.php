
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

		  echo 'Results for position of Congress-Kotecha'.'<br>'.'<br>';

		  echo 'Total number of votes cast : '.voted_congress_kotecha_total ().'<br>'.'<br>';
		  
		  echo 'Anyoso Peruce : '.voted_congress_kotecha_Anyoso_Peruce ().'<br>';
		  echo 'Sally Gichana : '.voted_congress_kotecha_Sally_Gichana ().'<br>';
		  echo 'Cherono Mercy : '.voted_congress_kotecha_Cherono_Mercy ().'<br>';
	   	  echo 'Peter Mwangi : '.voted_congress_kotecha_Peter_Mwangi ().'<br>';

	  
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


