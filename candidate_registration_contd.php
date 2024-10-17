<?php

require 'core.php';
require 'dbconnect.php';

	if(isset($_POST['gender']) && isset($_POST['campus']) && isset($_POST['year_of_study']) && isset($_POST
	['position']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again'])) {
		 

		$reg_no = $_SESSION['reg_no'];
		$first_name = $_SESSION['first_name'];
		$sur_name = $_SESSION['sur_name'];
		$id_no = $_SESSION['id_no'];
		$phone_no = $_SESSION['phone_no'];
		$email_address = $_SESSION['email_address'];

		$gender = $_POST['gender'];
		$campus = $_POST['campus'];
		$year_of_study = $_POST['year_of_study'];
		$position = $_POST['position'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password_again = $_POST['password_again'];
		
		$password_hash = md5($password);
		
		if(!empty($reg_no) && !empty($first_name) && !empty($sur_name) && !empty($gender) && !empty($id_no) && !empty($phone_no) && !empty($email_address) && !empty($campus) && !empty($year_of_study) && !empty($position) &&	!empty($username) && !empty($password) && !empty($password_again)) {		
			
			if(strlen($reg_no)>15 && strlen($first_name)>30 && strlen($sur_name)>30 && strlen($gender)>10 && strlen($id_no)>8 && strlen($phone_no)>13 && strlen($email_address)>40 && strlen($campus)>30 && strlen($year_of_study)>10 && strlen($position)>50 && strlen($username)>40 && strlen($password)>40 && strlen($password_again)>40) {	
			
			?>		
				<html>
				<head>
				<title>Untitled Document</title>
				</head>
				<body onLoad="confirmation()">
				
				<script type="text/javascript">
				<!--
				function confirmation() {
				var answer = alert("Please adhere to the maximum length of fields!")
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php		
			
			} else{
						
				if($password!=$password_again) {
				
			?>		
				<html>
				<head>
				<title>Untitled Document</title>
				</head>
				<body onLoad="confirmation()">
				
				<script type="text/javascript">
				<!--
				function confirmation() {
				var answer = alert("passwords do not match!!")
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php		
				
				} else {
				    $query = "SELECT username FROM candidates WHERE username = '" .$username. "' && position = '" .$position. "' ";
				    $query_run = mysql_query($query);	

        			if(mysql_num_rows($query_run) == 1){
					
			?>		
				<html>
				<head>
				<title>Untitled Document</title>
				</head>
				<body onLoad="confirmation()">
				
				<script type="text/javascript">
				<!--
				function confirmation() {
				var answer = alert("The candidate '.$username.' is already registered!")
				window.location="candidate_registration.php";
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php						
					
					} else {
																    					
     				$query = "INSERT INTO candidates (candidate_id, reg_no, first_name, sur_name, gender, id_no, phone_no, email_address, 
					campus, year_of_study, position, username, password) 
					VALUES(NULL, '".mysql_real_escape_string($reg_no)."', '".mysql_real_escape_string($first_name)."', '".
					mysql_real_escape_string($sur_name)."', '".mysql_real_escape_string($gender)."', '".mysql_real_escape_string($id_no)."', '".mysql_real_escape_string(
					$phone_no)."', '".mysql_real_escape_string($email_address)."', '".mysql_real_escape_string($campus)."', '".
					mysql_real_escape_string($year_of_study)."', '".mysql_real_escape_string($position)."', '".
					mysql_real_escape_string($username)."', '".mysql_real_escape_string($password_hash)."')";					
                       
					$query_run = mysql_query($query);   
		
					if($query_run){


			?>		
				<html>
				<head>
				<title>Untitled Document</title>
				</head>
				<body onLoad="confirmation()">
				
				<script type="text/javascript">
				<!--
				function confirmation() {
				var answer = alert("candidate successfully registered...")
				window.location="candidate_registration_contd.php";
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php						

					} else {
					
			?>		
				<html>
				<head>
				<title>Untitled Document</title>
				</head>
				<body onLoad="confirmation()">
				
				<script type="text/javascript">
				<!--
				function confirmation() {
				var answer = alert("Sorry, candidate could not be registered at this time. Please try again.")
				window.location="candidate_registration.php";
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php						
					
					}
					
				}
					
			  }
			
		   }
	
	} else{	
	
			?>		
				<html>
				<head>
				<title>Untitled Document</title>
				</head>
				<body onLoad="confirmation()">
				
				<script type="text/javascript">
				<!--
				function confirmation() {
				var answer = alert("All fields are required!")
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php						
	
	
	}	
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

<div id="divLine"></div>
<div id="divWrap">
<div id="content">
<div id="divLine"></div>
<div id="divTable">

<table width="90%" border="0">
<tr>
<td width="90%">

<?php
include 'header_reg.php';
echo '<br>';
?>

<form action = "candidate_registration_contd.php" method = "POST">

<center><h1>CANDIDATE REGISTRATION FORM</h1>
<h4>

<table width="90%" border="0">

<tr>
<td width="90%">Gender:  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="gender" >
                        <option>Male</option>
                        <option>Female</option>
               </select>
</td>
</tr>

<tr>
<td width="90%">Campus: 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="campus">
						<option>Main Campus</option>
						<option>Bungoma Campus</option>
						<option>Songalo Campus</option>
						<option>Ebunangwe Campus</option>
              </select>
</td>
</tr>

<tr>
<td width="90%">Year of Study: 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="year_of_study">
							<option>First</option>
							<option>Second</option>
							<option>Third</option>
							<option>Fourth</option>
							<option>Fifth</option>
                    </select>
</td>
</tr>

<tr>
<td width="90%">Position: 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="position">
							<option>chairperson</option>
							<option>vice_chairperson</option>
							<option>secretary_general</option>
							<option>deputy_secretary_general</option>
							<option>finance_director</option>
							<option>academics_director</option>
							<option>accommodation_director_resident</option>
							<option>accommodation_director_nonresident</option>
							<option>catering_director</option>
							<option>entertainment_director</option>
							<option>congress_CDMHA</option>
							<option>congress_faculty_of_education_and_social_sciences</option>
							<option>congress_faculty_of_engineering</option>
							<option>congress_faculty_of_science</option>
							<option>congress_hall_1</option>
							<option>congress_hall_2</option>
							<option>congress_hall_3</option>
							<option>congress_kotecha</option>
							<option>congress_milimani</option>
                    </select>
</td>
</tr>

<tr>
<td width="90%">Username: 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="username" maxlength="40" value="<?php if(isset($username)) { $username; } ?>" required></td>
</tr>

<tr>
<td width="90%">Password: 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="password" maxlength="40" value="<?php if(isset($username)) { $username; } ?>" required></td>
</tr>

<tr>
<td width="90%">Re-enter Password: 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="password_again" maxlength="40" value="<?php if(isset($password_again)) { $password_again; } ?>" required></td>
</tr>

</table>


<br><br><input type = "submit" value="Register">

</form>

</div>
<div id="divLine"></div>
</td>
</tr>
</table>
</div>
</div>
</body>
</html>


