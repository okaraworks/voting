
<?php

require 'core.php';
require 'dbconnect.php';

function chairperson_total_votes_table () {
	$query = "SELECT reg_no, first_name, sur_name FROM voted_chairperson";
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
?>	

<div style=”text-align: center;”>
<h2><center>LIST OF VOTES CAST FOR THE CHAIRMAN POSITION</center></h2>
<table border=”1” cellpadding=”2” cellspacing=”2”
style=”width: 70%; margin-left: auto; margin-right: auto;”>
<tr>
<th>Registration Number</th>
<th>First Name</th>
<th>Surname</th>
</tr>

<?php
// loop through the results
while ($row = mysql_fetch_assoc($query_run)) {
extract($row);
echo '<tr>';
echo '<td>' . $reg_no . '</td>';
echo '<td>' . $first_name . '</td>';
echo '<td>' . $sur_name . '</td>';
echo '</tr>';
}
?>
</table>
</div> 
<?php	
	echo "<p>".$result." votes cast"; 
}


function vice_chairperson_total_votes_table () {
	$query = "SELECT reg_no, first_name, sur_name FROM voted_vice_chairperson";
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
?>	

<div style=”text-align: center;”>
<h2><center>LIST OF VOTES CAST FOR THE CHAIRMAN POSITION</center></h2>
<table border=”1” cellpadding=”2” cellspacing=”2”
style=”width: 70%; margin-left: auto; margin-right: auto;”>
<tr>
<th>Registration Number</th>
<th>First Name</th>
<th>Surname</th>
</tr>

<?php
// loop through the results
while ($row = mysql_fetch_assoc($query_run)) {
extract($row);
echo '<tr>';
echo '<td>' . $reg_no . '</td>';
echo '<td>' . $first_name . '</td>';
echo '<td>' . $sur_name . '</td>';
echo '</tr>';
}
?>
</table>
</div>

<?php	
	echo "<p>".$result." votes cast"; 
}


function secretary_general_total_votes_table () {
	$query = "SELECT reg_no, first_name, sur_name FROM voted_secretary_general";
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
?>	

<div style=”text-align: center;”>
<h2><center>LIST OF VOTES CAST FOR THE CHAIRMAN POSITION</center></h2>
<table border=”1” cellpadding=”2” cellspacing=”2”
style=”width: 70%; margin-left: auto; margin-right: auto;”>
<tr>
<th>Registration Number</th>
<th>First Name</th>
<th>Surname</th>
</tr>

<?php
// loop through the results
while ($row = mysql_fetch_assoc($query_run)) {
extract($row);
echo '<tr>';
echo '<td>' . $reg_no . '</td>';
echo '<td>' . $first_name . '</td>';
echo '<td>' . $sur_name . '</td>';
echo '</tr>';
}
?>
</table>
</div>

<?php	
	echo "<p>".$result." votes cast"; 
}


function deputy_secretary_general_total_votes_table () {
	$query = "SELECT reg_no, first_name, sur_name FROM voted_deputy_secretary_general";
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
?>	

<div style=”text-align: center;”>
<h2><center>LIST OF VOTES CAST FOR THE CHAIRMAN POSITION</center></h2>
<table border=”1” cellpadding=”2” cellspacing=”2”
style=”width: 70%; margin-left: auto; margin-right: auto;”>
<tr>
<th>Registration Number</th>
<th>First Name</th>
<th>Surname</th>
</tr>

<?php
// loop through the results
while ($row = mysql_fetch_assoc($query_run)) {
extract($row);
echo '<tr>';
echo '<td>' . $reg_no . '</td>';
echo '<td>' . $first_name . '</td>';
echo '<td>' . $sur_name . '</td>';
echo '</tr>';
}
?>
</table>
</div>

<?php	
	echo "<p>".$result." votes cast"; 
}


function finance_director_total_votes_table () {
	$query = "SELECT reg_no, first_name, sur_name FROM voted_finance_director";
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
?>	

<div style=”text-align: center;”>
<h2><center>LIST OF VOTES CAST FOR THE CHAIRMAN POSITION</center></h2>
<table border=”1” cellpadding=”2” cellspacing=”2”
style=”width: 70%; margin-left: auto; margin-right: auto;”>
<tr>
<th>Registration Number</th>
<th>First Name</th>
<th>Surname</th>
</tr>

<?php
// loop through the results
while ($row = mysql_fetch_assoc($query_run)) {
extract($row);
echo '<tr>';
echo '<td>' . $reg_no . '</td>';
echo '<td>' . $first_name . '</td>';
echo '<td>' . $sur_name . '</td>';
echo '</tr>';
}
?>
</table>
</div>

<?php	
	echo "<p>".$result." votes cast"; 
}


function academics_director_total_votes_table () {
	$query = "SELECT reg_no, first_name, sur_name FROM voted_academics_director";
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
?>	

<div style=”text-align: center;”>
<h2><center>LIST OF VOTES CAST FOR THE CHAIRMAN POSITION</center></h2>
<table border=”1” cellpadding=”2” cellspacing=”2”
style=”width: 70%; margin-left: auto; margin-right: auto;”>
<tr>
<th>Registration Number</th>
<th>First Name</th>
<th>Surname</th>
</tr>

<?php
// loop through the results
while ($row = mysql_fetch_assoc($query_run)) {
extract($row);
echo '<tr>';
echo '<td>' . $reg_no . '</td>';
echo '<td>' . $first_name . '</td>';
echo '<td>' . $sur_name . '</td>';
echo '</tr>';
}
?>
</table>
</div>

<?php	
	echo "<p>".$result." votes cast"; 
}


function accommodation_director_resident_total_votes_table () {
	$query = "SELECT reg_no, first_name, sur_name FROM voted_accommodation_director_resident";
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
?>	

<div style=”text-align: center;”>
<h2><center>LIST OF VOTES CAST FOR THE CHAIRMAN POSITION</center></h2>
<table border=”1” cellpadding=”2” cellspacing=”2”
style=”width: 70%; margin-left: auto; margin-right: auto;”>
<tr>
<th>Registration Number</th>
<th>First Name</th>
<th>Surname</th>
</tr>

<?php
// loop through the results
while ($row = mysql_fetch_assoc($query_run)) {
extract($row);
echo '<tr>';
echo '<td>' . $reg_no . '</td>';
echo '<td>' . $first_name . '</td>';
echo '<td>' . $sur_name . '</td>';
echo '</tr>';
}
?>
</table>
</div>

<?php	
	echo "<p>".$result." votes cast"; 
}


function accommodation_director_nonresident_total_votes_table () {
	$query = "SELECT reg_no, first_name, sur_name FROM voted_accommodation_director_nonresident";
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
?>	

<div style=”text-align: center;”>
<h2><center>LIST OF VOTES CAST FOR THE CHAIRMAN POSITION</center></h2>
<table border=”1” cellpadding=”2” cellspacing=”2”
style=”width: 70%; margin-left: auto; margin-right: auto;”>
<tr>
<th>Registration Number</th>
<th>First Name</th>
<th>Surname</th>
</tr>

<?php
// loop through the results
while ($row = mysql_fetch_assoc($query_run)) {
extract($row);
echo '<tr>';
echo '<td>' . $reg_no . '</td>';
echo '<td>' . $first_name . '</td>';
echo '<td>' . $sur_name . '</td>';
echo '</tr>';
}
?>
</table>
</div>

<?php	
	echo "<p>".$result." votes cast"; 
}


function catering_director_total_votes_table () {
	$query = "SELECT reg_no, first_name, sur_name FROM voted_catering_director";
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
?>	

<div style=”text-align: center;”>
<h2><center>LIST OF VOTES CAST FOR THE CHAIRMAN POSITION</center></h2>
<table border=”1” cellpadding=”2” cellspacing=”2”
style=”width: 70%; margin-left: auto; margin-right: auto;”>
<tr>
<th>Registration Number</th>
<th>First Name</th>
<th>Surname</th>
</tr>

<?php
// loop through the results
while ($row = mysql_fetch_assoc($query_run)) {
extract($row);
echo '<tr>';
echo '<td>' . $reg_no . '</td>';
echo '<td>' . $first_name . '</td>';
echo '<td>' . $sur_name . '</td>';
echo '</tr>';
}
?>
</table>
</div>

<?php	
	echo "<p>".$result." votes cast"; 
}


function entertainment_director_total_votes_table () {
	$query = "SELECT reg_no, first_name, sur_name FROM voted_entertainment_director";
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
?>	

<div style=”text-align: center;”>
<h2><center>LIST OF VOTES CAST FOR THE CHAIRMAN POSITION</center></h2>
<table border=”1” cellpadding=”2” cellspacing=”2”
style=”width: 70%; margin-left: auto; margin-right: auto;”>
<tr>
<th>Registration Number</th>
<th>First Name</th>
<th>Surname</th>
</tr>

<?php
// loop through the results
while ($row = mysql_fetch_assoc($query_run)) {
extract($row);
echo '<tr>';
echo '<td>' . $reg_no . '</td>';
echo '<td>' . $first_name . '</td>';
echo '<td>' . $sur_name . '</td>';
echo '</tr>';
}
?>
</table>
</div>

<?php	
	echo "<p>".$result." votes cast"; 
}

?>


