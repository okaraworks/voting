
<?php

require 'core.php';
require 'dbconnect.php';

  if(loggedin()){


// retrieve information
	$query = "SELECT user_id, reg_no, first_name, sur_name, gender, id_no, phone_no, email_address, graduate_level, category,  
	campus, academic_division, year_of_study, residence_area, residence_hall, username, password FROM voter_roll ORDER BY
	 academic_division ASC";
	$query_run = mysql_query($query);	
	
	// determine number of rows returned
	$result = mysql_num_rows($query_run);

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

<div id="divWrapregisteredvoterslistuser">

<div id="content">
<div id="divTable">
<table width="80%" border="0">
<tr>
<td width="80%">

<?php
include 'headerregisteredvoterslistuser.php';
echo '<br>';
?>

<div style="text-align: center;">
<h2><center>LIST OF REGISTERED VOTERS(<?php echo $result; ?>)</center></h2>
<table border="1" cellpadding="2" cellspacing="2"
style="width: 70%; margin-left: auto; margin-right: auto;">
<tr>
<th>Registration Number</th>
<th>Academic Division</th>
<th>Year of Study</th>
<th>Residence Hall</th>
</tr>


<?php
// loop through the results
while ($row = mysql_fetch_assoc($query_run)) {
extract($row);
echo '<tr>';
echo '<td>' . $reg_no . '</td>';
echo '<td>' . $academic_division . '</td>';
echo '<td>' . $year_of_study . '</td>';
echo '<td>' . $residence_hall .'</td>';
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

