
<?php

require 'core.php';
require 'dbconnect.php';

	$query = "SELECT candidate_id, reg_no, first_name, sur_name, gender, id_no, phone_no, email_address, campus, year_of_study, position, username, password FROM candidates ORDER BY position ASC";
	$query_run = mysql_query($query);	
	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
?>
<html>
<head>
<title>MMUSO ELECTIONS 2014</title>
<link href="webstyle.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div id="divWrapcandidatelistadmin">

<div id="content">
<div id="divTable">
<table width="80%" border="0">
<tr>
<td width="80%">

<?php
include 'headercandidatelistadmin.php';
echo '<br>';
?>

<div style="text-align: center;">
<h2><center>LIST OF CANDIDATES(<?php echo $result; ?>)</center></h2>
<table border="1" cellpadding="2" cellspacing="2"
style="width: 70%; margin-left: auto; margin-right: auto;">
<tr>
<th>Registration Number</th>
<th>First Name</th>
<th>Surname</th>
<th>Gender</th>
<th>ID Number</th>
<th>Phone Number</th>
<th>Email Address</th>
<th>Campus</th>
<th>Year of Study</th>
<th>Position</th>
</tr>


<?php
// loop through the results
while ($row = mysql_fetch_assoc($query_run)) {
extract($row);
echo '<tr>';
echo '<td>' . $reg_no . '</td>';
echo '<td>' . $first_name . '</td>';
echo '<td>' . $sur_name . '</td>';
echo '<td>' . $gender . '</td>';
echo '<td>' . $id_no . '</td>';
echo '<td>' . $phone_no . '</td>';
echo '<td>' . $email_address .'</td>';
echo '<td>' . $campus . '</td>';
echo '<td>' . $year_of_study . '</td>';
echo '<td>' . $position .'</td>';
echo '</tr>';
}
?>

</td>
</tr>
</table>
</div>
</div>
<div id="divLine"></div>
</div>
</div>
</body>
</html>
