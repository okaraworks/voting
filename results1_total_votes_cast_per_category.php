
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

			echo 'JAB voters : '.voted_voters_per_category_is_government_sponsored ().'<br>';
		    echo 'PSSP voters : '.voted_voters_per_category_is_privately_sponsored ().'<br>';

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






		 