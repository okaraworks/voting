

<?php

require 'core.php';
require 'dbconnect.php';

if(loggedin()){

$user_id = getuserfield('user_id');
$reg_no = getuserfield('reg_no');
$first_name = getuserfield('first_name');
$sur_name = getuserfield('sur_name');
$gender = getuserfield('gender');
$id_no = getuserfield('id_no');
$phone_no = getuserfield('phone_no');
$email_address = getuserfield('email_address');
$graduate_level = getuserfield('graduate_level');
$category = getuserfield('category');
$campus = getuserfield('campus');
$academic_division = getuserfield('academic_division');
$year_of_study = getuserfield('year_of_study');
$residence_area = getuserfield('residence_area');
$residence_hall = getuserfield('residence_hall');
$username = getuserfield('username');
$password = getuserfield('password');

if(isset($_POST['congress_faculty_of_science'])) {
	$congress_faculty_of_science = $_POST['congress_faculty_of_science'];
	
	if(!empty($congress_faculty_of_science)) {
	 $query = "SELECT username FROM voter_roll WHERE username = '" .$username. "' ";
	 $query_run = mysql_query($query);	
	
		 if(mysql_num_rows($query_run) == 1){
	     $_SESSION['congress_faculty_of_science'] = $congress_faculty_of_science;
		 
		     if($residence_area == 'Non-Resident') {
			    	header('Location: vote_processor_science_non_resident.php');
			 } else if($residence_area == 'Resident') {
			 
			       if($residence_area == 'Resident' AND $residence_hall == 'Non-Resident') {
				    header('Location: congress_vote_processor.php');
				   }
				   
				   else if($residence_area == 'Resident' AND $residence_hall == 'Hall 1') {
				    header('Location: congress_hall_1.php');
				   }
				   
				   else if($residence_area == 'Resident' AND $residence_hall == 'Hall 2') {
				    header('Location: congress_hall_2.php');
				   }
				   
				   else if($residence_area == 'Resident' AND $residence_hall == 'Hall 3') {
				    header('Location: congress_hall_3.php');
				   }
				   
				   else if($residence_area == 'Resident' AND $residence_hall == 'Kotecha') {
				    header('Location: congress_kotecha.php');
				   }
				   
				   else if($residence_area == 'Resident' AND $residence_hall == 'Milimani') {
				    header('Location: congress_milimani.php');
				   }
				   
				}
			 
			 } else {
			echo 'Sorry, you are not a registered voter hence you cannot partake in this exercise....';	
		  }
			   		
		} else{		
		echo 'You must select a candidate!';		
		}		
	}

} else if(!loggedin()){
echo 'Sorry, you have to log in first for you to vote'.'<br>';
include 'user_login.php';
}

?>


<html>
<head>
<title>MMUSO ELECTIONS 2014-chairperson</title>
<link href="webstyle.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
</head>
<body>


<div id="divWrap10">
<div id="content">
<div id="divLine"></div>
<div id="divTable">
<table width="100%" border="0">
<tr>
<td width="10%">
<td width="80%">

<?php include 'header_position.php'; ?>

<form action="congress_faculty_of_science.php" method="post">

</br><h1><div id="post">CONGRESS - FACULTY OF SCIENCE</div></h1>
<h2>
<div id="tick">
<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/tick.jpg" height="70px" width="70px" alt="mugz photo"/></div>
<p>  <img src="candidates_photos/102415851.jpg" height="70px" width="70px" alt="mugz photo"/>	 Mutua Judith &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="congress_faculty_of_science" value="57">
</br>
<p>   <img src="candidates_photos/images7.jpg" height="70px" width="70px" alt="mugz photo"/> Naomi Mwangi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="congress_faculty_of_science" value="66">
</br>
 <p>  <img src="candidates_photos/IMG_0025.jpg" height="70px" width="70px" alt="mugz photo"/>	 Elvin Ashibaka &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="congress_faculty_of_science" value="79">
</br>
 <p>  <img src="candidates_photos/images.jpg" height="70px" width="70px" alt="mugz photo"/>	 Langat Aron &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="congress_faculty_of_science" value="80">
</br>
</h2>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="NEXT"><br><br>

</form>
<div id="divLine"></div>

</td>
<td width="10%"></td>
</tr>
</table>
</div>

</div>
</body>
</html>

