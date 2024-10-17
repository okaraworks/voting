
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

		  echo 'Results for position of Finance Director'.'<br>'.'<br>';
		  
		  echo 'Total number of votes cast : '.voted_finance_director_total ().'<br>'.'<br>';
		  
		  echo 'Juliet Njoka : '.voted_finance_director_Juliet_Njoka ().'<br>';
		  echo 'Joy Cherotich : '.voted_finance_director_Joy_Cherotich ().'<br>';
		  echo 'Lilian Machira : '.voted_finance_director_Lilian_Machira ().'<br>';
	   	  echo 'Edith Njoki : '.voted_finance_director_Edith_Njoki ().'<br>';

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


