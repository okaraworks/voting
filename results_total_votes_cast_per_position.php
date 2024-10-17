
<?php

require 'core.php';
require 'dbconnect.php';

function chairperson_total_votes () {
	$query = "SELECT vote_id, candidate_id, reg_no, id_no, first_name, sur_name FROM voted_chairperson ORDER BY reg_no ASC";
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    echo "<p>".$result." votes cast";
}

function vice_chairperson () {
	$query = "SELECT vote_id, candidate_id, reg_no, id_no, first_name, sur_name FROM voted_vice_chairperson ORDER BY reg_no ASC";
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    echo "<p>".$result." votes cast";
}

function secretary_general () {
	$query = "SELECT vote_id, candidate_id, reg_no, id_no, first_name, sur_name FROM voted_secretary_general ORDER BY reg_no ASC";
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    echo "<p>".$result." votes cast";
}

function deputy_secretary_general () {
	$query = "SELECT vote_id, candidate_id, reg_no, id_no, first_name, sur_name FROM voted_deputy_secretary_general ORDER BY reg_no ASC";
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    echo "<p>".$result." votes cast";
}

function finance_director () {
	$query = "SELECT vote_id, candidate_id, reg_no, id_no, first_name, sur_name FROM voted_finance_director ORDER BY reg_no ASC";
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    echo "<p>".$result." votes cast";
}

function academics_director () {
	$query = "SELECT vote_id, candidate_id, reg_no, id_no, first_name, sur_name FROM voted_academics_director ORDER BY reg_no ASC";
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    echo "<p>".$result." votes cast";
}

function accommodation_director_resident () {
	$query = "SELECT vote_id, candidate_id, reg_no, id_no, first_name, sur_name FROM voted_accommodation_director_resident ORDER BY reg_no ASC";
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    echo "<p>".$result." votes cast";
}

function accommodation_director_nonresident () {
	$query = "SELECT vote_id, candidate_id, reg_no, id_no, first_name, sur_name FROM voted_accommodation_director_nonresident ORDER BY reg_no ASC";
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    echo "<p>".$result." votes cast";
}


function catering_director () {
	$query = "SELECT vote_id, candidate_id, reg_no, id_no, first_name, sur_name FROM voted_catering_director ORDER BY reg_no ASC";
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    echo "<p>".$result." votes cast";
}


function entertainment_director () {
	$query = "SELECT vote_id, candidate_id, reg_no, id_no, first_name, sur_name FROM voted_entertainment_director ORDER BY reg_no ASC";
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    echo "<p>".$result." votes cast";
}



?>


