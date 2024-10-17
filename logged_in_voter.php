
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

<div id="divWrapvoter">

<div id="content">
<div id="divLine"></div>
<div id="divTable">
<table width="100%" border="0">
<tr>
<td width="80%">

<?php
//require 'core.php';
//require 'dbconnect.php';
  
include 'header_voter.php';
echo '<br>';

$first_name = ucwords(strtolower(getuserfield('first_name')));
$sur_name = ucwords(strtolower(getuserfield('sur_name')));

//echo 'Welcome '.$first_name.' '.$sur_name.',';

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

<div id="user_names">
 <?php echo $first_name.' '.$sur_name; ?>
</div>

<div id="user_profile">
  <img src="images/prof_pic3.jpg" alt="Hover to reveal the location on the map" />	  

    <div id="user_options">
	
<ul>
      <li><a href="user_profile.php"><span>View Profile</span></a></li>
	  <li><a href="edit_user_profile.php"><span>Edit Profile</span></a></li>
       <li><a href="user_logout.php"><span>Logout</span></a></li>
</ul>
</div>
</div>

<!--


 <select name="User Profile">
						<option><h7>User Profile</h7></option>
						<option><h7><a href="user_profile.php"><span>View Profile</span></a></h7></option>
						<option><h7><a href="edit_user_profile.php"><span>Edit Profile</span></a></h7></option>
						<option><h7><a href="user_logout.php"><span>Logout</span></a></h7></option>
                    </select>


-->

<!--<h7><a href="user_logout.php"><span>logout</span></a></h7>-->

<br><br>

<div id="divImageoutvoter">

<a href="chairperson.php"> <div id="divImagevoter"> <img src="images/vote2.jpg" alt="Hover to reveal the location on the map" /> </div> </a>

<a href="statistics_candidates.php"> <div id="divImagevoter"> <img src="images/statistics.jpg" alt="Hover to reveal the location on the map" /> </div> </a>

<a href="statistics_voted_individual_position_and_candidate.php"> <div id="divImagevoter"> <img src="images/results.jpg" alt="Hover to reveal the location on the map"/> </div> </a>

<a href="candidates_list_user.php"> <div id="divImagevoter"> <img src="images/list_of_candidates.jpg" alt="Hover to reveal the location on the map"/> </div> </a>

<a href="registered_voters_list_user.php"> <div id="divImagevoter"> <img src="images/registered_voters_list.jpg" alt="Hover to reveal the location on the map"/> </div> </a>

<a href="complains.php"> <div id="divImagevoter"> <img src="images/complains.jpg" alt="Hover to reveal the location on the map"/> </div> </a>

   </div>

</div>
<div id="divLine"></div>

</td>
</tr>
</table>
<br>
</div>

</div>
</body>
</html>


