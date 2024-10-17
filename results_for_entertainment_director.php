
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

		  echo 'Results for position of Entertainment Director'.'<br>'.'<br>';

		  echo 'Total number of votes cast : '.voted_entertainment_director_total ().'<br>'.'<br>';
		  
		  echo 'Newton Ondori : '.voted_entertainment_director_Newton_Ondori ().'<br>';
		  echo 'Queen Irene : '.voted_entertainment_director_Queen_Irene ().'<br>';
		  echo 'Deborah Miroro : '.voted_entertainment_director_Deborah_Miroro ().'<br>';
	   	  echo 'Asnath Mosoti : '.voted_entertainment_director_Asnath_Mosoti ().'<br>';

	  
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


