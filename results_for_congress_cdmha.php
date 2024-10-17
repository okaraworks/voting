
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

		  echo 'Results for position of Congress-CDMHA'.'<br>'.'<br>';

		  echo 'Total number of votes cast : '.voted_congress_cdmha_total ().'<br>'.'<br>';
		  
		  echo 'Patrick Mutua : '.voted_congress_cdmha_Patrick_Mutua ().'<br>';
		  echo 'Kiprotich Brian : '.voted_congress_cdmha_Kiprotich_Brian ().'<br>';
		  echo 'Mercy Buigut : '.voted_congress_cdmha_Mercy_Buigut ().'<br>';
	   	  echo 'Gacheri Mwobobia : '.voted_congress_cdmha_Gacheri_Mwobobia ().'<br>';

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


