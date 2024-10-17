
<?php

require 'core.php';
require 'dbconnect.php';

	$query = "SELECT reg_no, phone_no, email_address, message, status FROM complains ORDER BY status ASC";
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
<th>Registration Number</th>
<th>Phone Number</th>
<th>Email Address</th>
<th>Message</th>
<th>Status</th>
</tr>


<?php
// loop through the results
while ($row = mysql_fetch_assoc($query_run)) {
extract($row);
echo '<tr>';
echo '<td>' . $reg_no . '</td>';
echo '<td>' . $phone_no . '</td>';
echo '<td>' . $email_address .'</td>';
echo '<td>' . $message . '</td>';
echo '<td>' . $status . '</td>';
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
