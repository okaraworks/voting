
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

		  echo 'Results for position of Chairperson'.'<br>'.'<br>';

		  echo 'Total number of votes cast : '.voted_chairperson_total ().'<br>'.'<br>';
		  
		  echo 'Kaylee Fridah : '.voted_chairperson_Kaylee_Fridah ().'<br>';
		  echo 'Catherine Wavinya : '.voted_chairperson_Catherine_Wavinya ().'<br>';
		  echo 'Maurine Obuya : '.voted_chairperson_Maurine_Obuya ().'<br>';
	   	  echo 'Olivia Muthoni : '.voted_chairperson_Olivia_Muthoni ().'<br>';

	  
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


