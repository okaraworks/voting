
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

		  echo 'Results for position of Catering Director'.'<br>'.'<br>';

		  echo 'Total number of votes cast : '.voted_catering_director_total ().'<br>'.'<br>';
		  
		  echo 'Beth Muthoni : '.voted_catering_director_Beth_Muthoni ().'<br>';
		  echo 'Miriam Kinyanjui : '.voted_catering_director_Miriam_Kinyanjui ().'<br>';
		  echo 'Bradley Igunzah : '.voted_catering_director_Bradley_Igunzah ().'<br>';
	   	  echo 'Elizabeth Ngigi : '.voted_catering_director_Elizabeth_Ngigi ().'<br>';

	  
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


