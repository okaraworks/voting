
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

		  echo 'Results for position of Congress-Milimani'.'<br>'.'<br>';

		  echo 'Total number of votes cast : '.voted_congress_milimani_total ().'<br>'.'<br>';
		  
		  echo 'Oyuga Lilian : '.voted_congress_milimani_Oyuga_Lilian ().'<br>';
		  echo 'Angoli Celestine : '.voted_congress_milimani_Angoli_Celestine ().'<br>';
		  echo 'Rotich Joyline : '.voted_congress_milimani_Rotich_Joyline ().'<br>';
	   	  echo 'Mary Barongo : '.voted_congress_milimani_Mary_Barongo ().'<br>';

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


