

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

		  echo 'Results for position of Vice Chairperson'.'<br>'.'<br>';

		  echo 'Total number of votes cast : '.voted_vice_chairperson_total ().'<br>'.'<br>';
		  
		  echo 'Cheboiwo Felistus : '.voted_vice_chairperson_Cheboiwo_Felistus ().'<br>';
		  echo 'Lucent Kasera : '.voted_vice_chairperson_Lucent_Kasera ().'<br>';
		  echo 'George Miriam : '.voted_vice_chairperson_George_Miriam ().'<br>';
	   	  echo 'Ruth Jumba : '.voted_vice_chairperson_Ruth_Jumba ().'<br>';

	  
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


