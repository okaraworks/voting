<?php

require 'core.php';
require 'dbconnect.php';

function chairperson_get_individual_candidate_total_votes () {
	$query ='SELECT vote_id, candidate_id, reg_no, id_no, first_name, sur_name FROM voted_chairperson WHERE candidate_id = "7" AND reg_no = ""';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function vice_chairperson_get_individual_candidate_total_votes () {
	$query ='SELECT vote_id, candidate_id, reg_no, id_no, first_name, sur_name FROM voted_vice_chairperson WHERE candidate_id = "7" AND reg_no = ""';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function secretary_general_get_individual_candidate_total_votes () {
	$query ='SELECT vote_id, candidate_id, reg_no, id_no, first_name, sur_name FROM voted_secretary_general WHERE candidate_id = "7" AND reg_no = ""';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function deputy_secretary_general_get_individual_candidate_total_votes () {
	$query ='SELECT vote_id, candidate_id, reg_no, id_no, first_name, sur_name FROM voted_deputy_secretary_general WHERE candidate_id = "7" AND reg_no = ""';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function finance_director_get_individual_candidate_total_votes () {
	$query ='SELECT vote_id, candidate_id, reg_no, id_no, first_name, sur_name FROM voted_finance_director WHERE candidate_id = "7" AND reg_no = ""';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function academics_director_get_individual_candidate_total_votes () {
	$query ='SELECT vote_id, candidate_id, reg_no, id_no, first_name, sur_name FROM voted_academics_director WHERE candidate_id = "7" AND reg_no = ""';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function accommodation_director_resident_get_individual_candidate_total_votes () {
	$query ='SELECT vote_id, candidate_id, reg_no, id_no, first_name, sur_name FROM voted_accommodation_director_resident WHERE candidate_id = "7" AND reg_no = ""';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function accommodation_director_nonresident_get_individual_candidate_total_votes () {
	$query ='SELECT vote_id, candidate_id, reg_no, id_no, first_name, sur_name FROM voted_accommodation_director_nonresident WHERE candidate_id = "7" AND reg_no = ""';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function catering_director_get_individual_candidate_total_votes () {
	$query ='SELECT vote_id, candidate_id, reg_no, id_no, first_name, sur_name FROM voted_catering_director WHERE candidate_id = "7" AND reg_no = ""';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


function entertainment_director_get_individual_candidate_total_votes () {
	$query ='SELECT vote_id, candidate_id, reg_no, id_no, first_name, sur_name FROM voted_entertainment_director WHERE candidate_id = "7" AND reg_no = ""';
	$query_run = mysql_query($query);	
	$result = mysql_num_rows($query_run);  // determine number of rows returned
    return $result;
}


?>