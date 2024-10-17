
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


	if(!empty($user_id) && !empty($reg_no) && !empty($first_name) && !empty($sur_name) && !empty($gender) && !empty($id_no) && !empty($phone_no) && !empty($email_address) && !empty($graduate_level) && !empty($category) && !empty($campus) && !empty($academic_division) && !empty($year_of_study) && !empty($residence_area) && !empty($residence_hall) && !empty($username) && !empty($password)) {
						
		 	 $query = "SELECT username FROM voter_roll WHERE username = '" .$username. "' ";
			 $query_run = mysql_query($query);	
			 
			  if(mysql_num_rows($query_run) == 1){
			  
?>

<html>
<head>
<title>MMUSO ELECTIONS 2014</title>
<link href="webstyle.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div id="divWrap2">

<div id="content">
<div id="divLine"></div>

<?php

include 'header_vote_processor.php';
echo '<br>';			  
			 
	  echo "<font size=\"5\" color=\"black\">";
	  echo "Your details as at registration are : "."<br/>"."<br/>";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "First Name : "."<font size=\"5\" color=\"blue\">".ucwords(strtolower($first_name))."</font>"."<br/>";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "Surname : "."<font size=\"5\" color=\"blue\">".ucwords(strtolower($sur_name))."</font>"."<br/>";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "Registration Number : "."<font size=\"5\" color=\"blue\">".$reg_no."</font>"."<br/>";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "Gender : "."<font size=\"5\" color=\"blue\">".$gender."</font>"."<br/>";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "ID Number :  "."<font size=\"5\" color=\"blue\">".$id_no."</font>"."<br/>"; 
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "Phone Number :  "."<font size=\"5\" color=\"blue\">".$phone_no."</font>"."<br/>"; 
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "E-mail Address :  "."<font size=\"5\" color=\"blue\">".$email_address."</font>"."<br/>";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";     
	  echo "Graduate Level :  "."<font size=\"5\" color=\"blue\">".$graduate_level."</font>"."<br/>";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
	  echo "Category :  "."<font size=\"5\" color=\"blue\">".$category."</font>"."<br/>"; 
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "Campus :  "."<font size=\"5\" color=\"blue\">".$campus."</font>"."<br/>";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "Academic Division : "."<font size=\"5\" color=\"blue\">".$academic_division."</font>"."<br/>";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "Year of Study : "."<font size=\"5\" color=\"blue\">".$year_of_study."</font>"."<br/>";
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "Residence Area :  "."<font size=\"5\" color=\"blue\">".$residence_area."</font>"."<br/>"; 
	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	  echo "Residence Hall :  "."<font size=\"5\" color=\"blue\">".$residence_hall."</font>"; 
	  echo "</font>";
			 
?>

<div id="user_prof_options">
<font size="5" color = "black"><center><h1><a href="logged_in_voter.php">Back</a>
<a href="edit_user_profile.php">Edit Profile</a>
</h1></center></font></div>
</center></font>
</div>
<div id="divLine"></div>
</div>
</body>
</html>



<?php
		} else{		
		echo 'All fields are required!';		
		}		
	}

} else if(!loggedin()){
echo 'Sorry, you have to log in first'.'<br>';
include 'user_login.php';
}

?>
	



