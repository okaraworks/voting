
<?php

require 'core.php';
require 'dbconnect.php';

// retrieve information
	$query = "SELECT user_id, reg_no, first_name, sur_name, id_no, phone_no, email_address, graduate_level, category,  
	campus, academic_division, year_of_study, residence_area, residence_hall, reason, petitioner FROM blocked_users ORDER BY
    reg_no ASC";
	$query_run = mysql_query($query);	
	
	// determine number of rows returned
	$result = mysql_num_rows($query_run);
?>

<html>
<head>
<title>MMUSO ELECTIONS 2014</title>
<link href="webstyle.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div id="divWrapregisteredvoterslistadmin">

<div id="content">
<div id="divTable">
<table width="80%" border="0">
<tr>
<td width="80%">

<?php
include 'headerregisteredvoterslistadmin.php';
echo '<br>';
?>

<div style="text-align: center;">
<h2><center>LIST OF REGISTERED VOTERS(<?php echo $result; ?>)</center></h2>
<table border="1" cellpadding="2" cellspacing="2"
style="width: 70%; margin-left: auto; margin-right: auto;">
<tr>
<th>Registration Number</th>
<th>First Name</th>
<th>Surname</th>
<th>ID Number</th>
<th>Phone Number</th>
<th>Email Address</th>
<th>Graduate Level</th>
<th>Category</th>
<th>Campus</th>
<th>Academic Division</th>
<th>Year of Study</th>
<th>Residence Area</th>
<th>Residence Hall</th>
<th>Reason</th>
<th>Petioner</th>
</tr>


<?php
// loop through the results
while ($row = mysql_fetch_assoc($query_run)) {
extract($row);
echo '<tr>';
echo '<td>' . $reg_no . '</td>';
echo '<td>' . $first_name . '</td>';
echo '<td>' . $sur_name . '</td>';
echo '<td>' . $id_no . '</td>';
echo '<td>' . $phone_no . '</td>';
echo '<td>' . $email_address .'</td>';
echo '<td>' . $graduate_level .'</td>';
echo '<td>' . $category . '</td>';
echo '<td>' . $campus . '</td>';
echo '<td>' . $academic_division . '</td>';
echo '<td>' . $year_of_study . '</td>';
echo '<td>' . $residence_area . '</td>';
echo '<td>' . $residence_hall .'</td>';
echo '<td>' . $reason . '</td>';
echo '<td>' . $petitioner . '</td>';
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
