<?php
require 'core.php';
require 'dbconnect.php';

  if(loggedin()){
  
?>

<html>
<head>
<title>MMUSO ELECTIONS 2014</title>
<link href="webstyle.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div id="divWrapAdmin">

<div id="content">
<div id="divLine"></div>
<div id="divTable">
<table width="100%" border="0">
<tr>
<td width="100%">

<?php
//require 'core.php';
//require 'dbconnect.php';

include 'header_admin.php';
echo '<br>';

echo 'Welcome ADMIN, ';

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


<div id="log_out">
	   <a href="user_logout.php"><img src="images/logout2.jpg" alt="Hover to reveal the location on the map" /></a>
</div>




&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div id="divImageoutAdmin">


<!--
<img src="r6.jpg" alt="Hover to reveal the location on the map"
      onmouseover="this.src='r2.jpg';"
      onmouseout="this.src='r6.jpg';"/>	  

-->


<a href="user_registration_admin.php"> <div id="divImageAdmin"> <img src="images/register_voter.jpg" alt="Hover to reveal the location on the map" /> </div> </a>

<a href="candidate_registration.php"> <div id="divImageAdmin"> <img src="images/register_candidate.jpg" alt="Hover to reveal the location on the map"/> </div> </a>

<a href="registered_voters_list.php"> <div id="divImageAdmin"> <img src="images/registered_voters_list.jpg" alt="Hover to reveal the location on the map"/> </div> </a>

<a href="candidates_list.php"> <div id="divImageAdmin"> <img src="images/list_of_candidates.jpg" alt="Hover to reveal the location on the map"/> </div> </a>

<a href="successful_voters_list.php"> <div id="divImageAdmin"> <img src="images/voted_voters_list.jpg" alt="Hover to reveal the location on the map"/> </div> </a>

<a href="statistics_voted_individual_position_and_candidate.php"> <div id="divImageAdmin"> <img src="images/results.jpg" alt="Hover to reveal the location on the map"/> </div> </a>

<a href="statistics_candidates.php"> <div id="divImageAdmin"> <img src="images/statistics.jpg" alt="Hover to reveal the location on the map" /> </div> </a>

<a href="blocked_voters_list.php"> <div id="divImageAdmin"> <img src="images/blocked_voters_list.jpg" alt="Hover to reveal the location on the map"/> </div> </a>

<a href="block_user.php"> <div id="divImageAdmin"> <img src="images/block_user.jpg" alt="Hover to reveal the location on the map"/> </div> </a>

<a href="complains_list.php"> <div id="divImageAdmin"> <img src="images/complains_table.jpg" alt="Hover to reveal the location on the map"/> </div> </a>

<a href="add_users.php"> <div id="divImageAdmin"> <img src="images/create_user.jpg" alt="Hover to reveal the location on the map"/> </div> </a>


<a href="http://127.0.0.1/phpmyadmin/index.php?db=election&token=4c6dbadb036f02dbc1b895fe808c4740"> <div id="divImageAdmin"> <img src="images/update_database.jpg" alt="Hover to reveal the location on the map"/> </div> </a>

<!--<a href="user_logout.php"> <div id="divImageAdmin"> <img src="images/logout.jpg" alt="Hover to reveal the location on the map"/> </div> </a>
-->
   </div>

</div>
<div id="divLine"></div>

</td>
<td width="10%"></td>
</tr>
</table>
</div>

</div>
</body>
</html>


