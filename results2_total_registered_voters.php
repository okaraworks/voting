
<html>
<head>
<title>MMUSO ELECTIONS 2014</title>
<link href="webstyle.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div id="divLine"></div>
<?php

require 'dbconnect.php';
require 'statistics_registered_voters.php';

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
<td width="30%"></td>
<td width="80%">
<strong><font size="5">

<?php
echo '<br>';

		  echo 'Total number of registered voters : '.registered_voters_total ().'<br>';
	  
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

