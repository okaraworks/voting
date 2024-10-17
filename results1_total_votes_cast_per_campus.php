
<html>
<head>
<title>MMUSO ELECTIONS 2014</title>
<link href="webstyle.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div id="divLine"></div>
<?php

require 'dbconnect.php';
require 'statistics_voted_voters.php';

?>

<div id="content">
<div id="divLine"></div>
<div id="divTable">
<table width="100%" border="0">
<tr>
<td width="100%">

<div id="divTable2">
<table width="100%" border="0">
<tr>
<td width="20%"></td>
<td width="80%">
<strong><font size="5">

<?php
echo '<br>';

		  echo 'Total voters who voted : '.voted_voters_total ().'<br>'.'<br>';

			echo 'Main Campus voters : '.voted_voters_per_campus_is_Main_Campus ().'<br>';
		    echo 'Bungoma Campus voters : '.voted_voters_per_campus_is_Bungoma_Campus ().'<br>';
			echo 'Songalo Campus voters : '.voted_voters_per_campus_is_Songalo_Campus ().'<br>';
			echo 'Ebunangwe Campus voters : '.voted_voters_per_campus_is_Ebunangwe_Campus ().'<br>';

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

