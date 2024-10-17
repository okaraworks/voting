
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
		
		echo 'Main Campus candidates : '.candidates_per_campus_is_Main_Campus ().'<br>';
		echo 'Bungoma Campus candidates : '.candidates_per_campus_is_Bungoma_Campus ().'<br>';
        echo 'Songalo Campus candidates : '.candidates_per_campus_is_Songalo_Campus ().'<br>';
        echo 'Ebunangwe Campus candidates : '.candidates_per_campus_is_Ebunangwe_Campus ().'<br>';

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


		 