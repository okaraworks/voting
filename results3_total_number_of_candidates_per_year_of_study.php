
<html>
<head>
<title>MMUSO ELECTIONS 2014</title>
<link href="webstyle.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div id="divLine"></div>
<?php

require 'dbconnect.php';
require 'statistics_candidates.php';

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

		echo 'Total number of candidates : '.candidates_total ().'<br>'.'<br>';
		
		echo 'First year candidates : '.candidates_per_year_of_study_is_First ().'<br>';
		echo 'Second year candidates : '.candidates_per_year_of_study_is_Second ().'<br>';
		echo 'Third year candidates : '.candidates_per_year_of_study_is_Third ().'<br>';
		echo 'Fourth year candidates : '.candidates_per_year_of_study_is_Fourth ().'<br>';
		echo 'Fifth year candidates : '.candidates_per_year_of_study_is_Fifth ().'<br>';

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



