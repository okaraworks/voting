

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

if(isset($_POST['congress_hall_1'])) {
	$congress_hall_1 = $_POST['congress_hall_1'];
	
	if(!empty($congress_hall_1)) {
	 $query = "SELECT username FROM voter_roll WHERE username = '" .$username. "' ";
	 $query_run = mysql_query($query);	
	
		 if(mysql_num_rows($query_run) == 1){
	     $_SESSION['congress_hall_1'] = $congress_hall_1;

			       if($academic_division == 'Faculty of Science' AND $residence_hall == 'Hall 1') {
				    header('Location: vote_processor_science_hall1.php');
				   }
				   
				   else if($academic_division == 'Faculty of Science' AND $residence_hall == 'Hall 2') {
				    header('Location: vote_processor_science_hall2.php');
				   }
				   
				   else if($academic_division == 'Faculty of Science' AND $residence_hall == 'Hall 3') {
				    header('Location: vote_processor_science_hall3.php');
				   }
				   				   
				   else if($academic_division == 'Faculty of Science' AND $residence_hall == 'Kotecha') {
				    header('Location: vote_processor_science_kotecha.php');
				   }
				   
				   else if($academic_division == 'Faculty of Science' AND $residence_hall == 'Milimani') {
				    header('Location: vote_processor_science_milimani.php');
				   }
				   
				   
				   else if($academic_division == 'Faculty of Engineering' AND $residence_hall == 'Hall 1') {
				    header('Location: vote_processor_engineering_hall1.php');
				   }
				   
				   else if($academic_division == 'Faculty of Engineering' AND $residence_hall == 'Hall 2') {
				    header('Location: vote_processor_engineering_hall2.php');
				   }
				   
				   else if($academic_division == 'Faculty of Engineering' AND $residence_hall == 'Hall 3') {
				    header('Location: vote_processor_engineering_hall3.php');
				   }
				   				   
				   else if($academic_division == 'Faculty of Engineering' AND $residence_hall == 'Kotecha') {
				    header('Location: vote_processor_engineering_kotecha.php');
				   }
				   
				   else if($academic_division == 'Faculty of Engineering' AND $residence_hall == 'Milimani') {
				    header('Location: vote_processor_engineering_milimani.php');
				   }
				   

				   else if($academic_division == 'Faculty of Education and Social Sciences' AND $residence_hall == 'Hall 1') {
				    header('Location: vote_processor_fess_hall1.php');
				   }
				   
				   else if($academic_division == 'Faculty of Education and Social Sciences' AND $residence_hall == 'Hall 2') {
				    header('Location: vote_processor_fess_hall2.php');
				   }
				   
				   else if($academic_division == 'Faculty of Education and Social Sciences' AND $residence_hall == 'Hall 3') {
				    header('Location: vote_processor_fess_hall3.php');
				   }
				   				   
				   else if($academic_division == 'Faculty of Education and Social Sciences' AND $residence_hall == 'Kotecha') {
				    header('Location: vote_processor_fess_kotecha.php');
				   }
				   
				   else if($academic_division == 'Faculty of Education and Social Sciences' AND $residence_hall == 'Milimani') {
				    header('Location: vote_processor_fess_milimani.php');
				   }


				   else if($academic_division == 'CDMHA' AND $residence_hall == 'Hall 1') {
				    header('Location: vote_processor_cdmha_hall1.php');
				   }
				   
				   else if($academic_division == 'CDMHA' AND $residence_hall == 'Hall 2') {
				    header('Location: vote_processor_cdmha_hall2.php');
				   }
				   
				   else if($academic_division == 'CDMHA' AND $residence_hall == 'Hall 3') {
				    header('Location: vote_processor_cdmha_hall3.php');
				   }
				   				   
				   else if($academic_division == 'CDMHA' AND $residence_hall == 'Kotecha') {
				    header('Location: vote_processor_cdmha_kotecha.php');
				   }
				   
				   else if($academic_division == 'CDMHA' AND $residence_hall == 'Milimani') {
				    header('Location: vote_processor_cdmha_milimani.php');
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

<form action="congress_hall_1.php" method="post">


</br><h1><div id="post">CONGRESS - HALL 1</div></h1>
<h2>
<div id="tick">
<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/tick.jpg" height="70px" width="70px" alt="mugz photo"/></div>
<p>  <img src="candidates_photos/102415851.jpg" height="70px" width="70px" alt="mugz photo"/>	 Chepkirui Vivian &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="congress_hall_1" value="58">
</br>
<p>   <img src="candidates_photos/images7.jpg" height="70px" width="70px" alt="mugz photo"/> Judith Wambua &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="congress_hall_1" value="68">
</br>
 <p>  <img src="candidates_photos/IMG_0025.jpg" height="70px" width="70px" alt="mugz photo"/>	 Peris Wanjiku &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="congress_hall_1" value="77">
</br>
 <p>  <img src="candidates_photos/mugz.jpg" height="70px" width="70px" alt="mugz photo"/>	 Diana Cherono &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="congress_hall_1" value="78">
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

