<?php

require 'core.php';
require 'dbconnect.php';

  if(!loggedin()){

	if(isset($_POST['category']) && isset($_POST['campus'])     && isset($_POST['academic_division']) && isset($_POST['year_of_study']) && isset($_POST['residence_area']) && isset($_POST['residence_hall']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again'])) {
	
		$reg_no = strtoupper($_SESSION['reg_no']);
		$first_name = strtoupper($_SESSION['first_name']);
		$sur_name = strtoupper($_SESSION['sur_name']);
		$gender = $_SESSION['gender'];
		$id_no = $_SESSION['id_no'];
		$phone_no = $_SESSION['phone_no'];
		$email_address = $_SESSION['email_address'];
		$graduate_level = $_SESSION['graduate_level'];
		
		$category = $_POST['category'];
		$campus = $_POST['campus'];
		$academic_division = $_POST['academic_division'];
		$year_of_study = $_POST['year_of_study'];
		$residence_area = $_POST['residence_area'];
		$residence_hall = $_POST['residence_hall'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password_again = $_POST['password_again'];
		
		$password_hash = md5($password);
		$emailchunks = explode("@", $email_address);
		$regnochunks = explode("/", $reg_no);

		
		if(!empty($reg_no) && !empty($first_name) && !empty($sur_name) && !empty($gender) && !empty($id_no) && !empty($phone_no) && !
		empty($email_address) && !empty($graduate_level) && !empty($category) && !empty($campus) && !empty($academic_division) && !
		empty($year_of_study) && !empty($residence_area) && !empty($residence_hall) && !empty($username) && !empty($password) && !
		empty($password_again)) {
		
		if(($residence_area == 'Resident' && $residence_hall == 'Non-Resident') OR ($residence_area == 'Non-Resident' && $residence_hall != 'Non-Resident')) {

?>		
	<html>
	<head>
	<title>Untitled Document</title>
	</head>
	<body onLoad="confirmation()">
	
	<script type="text/javascript">
	<!--
	function confirmation() {
	var answer = alert("Enter your correct hall of residence and area of residence")
	 }
	 //-->
	 </script> 
	</body>
	</html>		
		
<?php		
		} else {
		
			if(strlen($reg_no)>15 && strlen($first_name)>30 && strlen($sur_name)>30 && strlen($gender)>30 && strlen($id_no)>8 && 
			strlen($phone_no)>13 && strlen($email_address)>40 && strlen($graduate_level)>15 && strlen($category)>20 && strlen($campus)
			>30 && strlen($academic_division)>0 && strlen($year_of_study)>10 && strlen($residence_area)>15 && strlen($residence_hall)
			>15 && strlen($username)>40 && strlen( 
			$password)>40 && strlen($password_again)>40) {
			
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
				} else if(!is_numeric($id_no) || strlen($id_no) < 7 || strlen($id_no) > 8){
				
			?>		
				<html>
				<head>
				<title>Untitled Document</title>
				</head>
				<body onLoad="confirmation()">
				
				<script type="text/javascript">
				<!--
				function confirmation() {
				var answer = alert("Please enter a valid ID number!")
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php		
				
				} else if(is_numeric($first_name) || is_numeric($sur_name) || !ctype_alpha($first_name) || !ctype_alpha($sur_name)){
				
			?>		
				<html>
				<head>
				<title>Untitled Document</title>
				</head>
				<body onLoad="confirmation()">
				
				<script type="text/javascript">
				<!--
				function confirmation() {
				var answer = alert("Please enter your correct names!")
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php		
			
				} else if(!is_numeric($phone_no)){
				
			?>		
				<html>
				<head>
				<title>Untitled Document</title>
				</head>
				<body onLoad="confirmation()">
				
				<script type="text/javascript">
				<!--
				function confirmation() {
				var answer = alert("Please enter your correct phone number!")
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php		

				} else if(($emailchunks[1] != 'yahoo.com') && ($emailchunks[1] != 'ymail.com') && ($emailchunks[1] != 'gmail.com') && ($emailchunks[1] != 'rocketmail.com') && ($emailchunks[1] != 'hotmail.com')){
				
			?>		
				<html>
				<head>
				<title>Untitled Document</title>
				</head>
				<body onLoad="confirmation()">
				
				<script type="text/javascript">
				<!--
				function confirmation() {
				var answer = alert("Please enter a valid email address!")
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php


          } else if((strlen($reg_no) != 11) || is_numeric($regnochunks[0]) || !is_numeric($regnochunks[1]) || !is_numeric($regnochunks[2]) || (strlen($regnochunks[0]) != 3) || (strlen($regnochunks[1]) != 4) || (strlen($regnochunks[2]) != 2)) {


			?>		
				<html>
				<head>
				<title>Untitled Document</title>
				</head>
				<body onLoad="confirmation()">
				
				<script type="text/javascript">
				<!--
				function confirmation() {
				var answer = alert("Please enter a valid registration number!")
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php

				} else {
				    $query = "SELECT username FROM voter_roll WHERE username = '" .$username. "' ";
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
				var answer = alert("The username '.$username.' already exists")
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php						
					
					} else {
					
     				$query = "INSERT INTO voter_roll
					(user_id, reg_no, first_name, sur_name, gender, id_no, phone_no, email_address, graduate_level, category, campus,    				academic_division, year_of_study, residence_area, residence_hall, username, password) 
					VALUES(NULL, '".mysql_real_escape_string($reg_no)."', '".mysql_real_escape_string($first_name)."', '".
					mysql_real_escape_string($sur_name)."', '".mysql_real_escape_string($gender)."', '".mysql_real_escape_string(
					$id_no)."', '".mysql_real_escape_string($phone_no)."', '".mysql_real_escape_string($email_address)."', '".
					mysql_real_escape_string($graduate_level)."', '".mysql_real_escape_string($category)."', '".
					mysql_real_escape_string($campus)."', '".mysql_real_escape_string($academic_division)."', '".
					mysql_real_escape_string($year_of_study)."', '".mysql_real_escape_string($residence_area)."', '".
					mysql_real_escape_string($residence_hall)."', '".mysql_real_escape_string($username)."', '".
					mysql_real_escape_string($password_hash)."')";					
                       
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
				var answer = alert("You have been successfully registered...")
				window.location="index.php";
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
				var answer = alert("Sorry, user could not be registered at this time. Please try again.")
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
  } else if(loggedin()){

?>

	<html>
	<head>
	<title>Untitled Document</title>
	</head>
	<body onLoad="confirmation()">
	
	<script type="text/javascript">
	<!--
	function confirmation() {
	var answer = alert("You are already registered and logged in")
				window.location="index.php";
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

<form action = "user_registration_contd.php" method = "POST">
<br><center><h1>VOTER REGISTRATION FORM</h1><br>
<h4>

<table width="90%" border="0">

<tr>
<td width="90%">Category:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <select name="category">
                        <option>government sponsored</option>
                        <option>privately sponsored</option>
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
<td width="90%">Academic Division: 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="academic_division">
							<option>Faculty of Science</option>
							<option>Faculty of Engineering</option>
							<option>Faculty of Education and Social Sciences</option>
							<option>CDMHA</option>
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
<td width="90%">Area of Residence: 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="residence_area">
							<option>Resident</option>
							<option>Non-Resident</option>
                        </select>
</td>
</tr>
<tr>
<td width="90%">Hall of Residence: 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="residence_hall">
												<option>Non-Resident</option>
												<option>Hall 1</option>
												<option>Hall 2</option>
												<option>Hall 3</option>
												<option>Kotecha</option>
												<option>Milimani</option>
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
</div>

<p><br><br><input type = "submit" value="Register">
</h4>
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






