
<?php

require 'core.php';
require 'dbconnect.php';

  if(loggedin()){


	$query = "SELECT candidate_id, reg_no, first_name, sur_name, gender, id_no, phone_no, email_address, campus, year_of_study, position, username, password FROM candidates ORDER BY position ASC";
	$query_run = mysql_query($query);	
	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
	
 } else if(!loggedin()){

?>

	<html>
	<head>
	<title>Untitled Document</title>
	</head>
	<body onLoad="confirmation()">
	
	<script type="text/javascript">
	<!--
	function confirmation() {
	var answer = alert("Sorry, you have to log in first")
	window.location = "index.php";
	 }
	 //-->
	 </script> 
	</body>
	</html>		


<?php

}
	
?>

<html>
<head>
<title>MMUSO ELECTIONS 2014</title>
<link href="webstyle.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div id="divWrapcandidatelistuser">

<div id="content">
<div id="divTable">
<table width="80%" border="0">
<tr>
<td width="80%">

<?php
include 'headercandidatelistuser.php';
echo '<br>';
?>

<div style="text-align: center;">
<h2><center>LIST OF CANDIDATES(<?php echo $result; ?>)</center></h2>
<table border="1" cellpadding="2" cellspacing="2"
style="width: 70%; margin-left: auto; margin-right: auto;">
<tr>
<th>First Name</th>
<th>Surname</th>
<th>Position</th>
</tr>


<?php
// loop through the results
while ($row = mysql_fetch_assoc($query_run)) {
extract($row);
echo '<tr>';
echo '<td>' . $first_name . '</td>';
echo '<td>' . $sur_name . '</td>';
echo '<td>' . $position .'</td>';
echo '</tr>';
}
?>

</td>
</tr>
</table>
<br>
</div>
</div>
<div id="divLine"></div>
</div>
</div>
</body>
</html>


