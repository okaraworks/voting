<?php

require 'core.php';
require 'dbconnect.php';

  if(!loggedin()){

	if(isset($_POST['reg_no']) && isset($_POST['first_name']) && isset($_POST['sur_name']) && isset($_POST['gender']) && isset($_POST['id_no']) && isset( $_POST['phone_no']) && isset($_POST['email_address']) && isset($_POST['graduate_level'])) {


		$reg_no = $_POST['reg_no'];
		$first_name = $_POST['first_name'];
		$sur_name = $_POST['sur_name'];
		$gender = $_POST['gender'];
		$id_no = $_POST['id_no'];
		$phone_no = $_POST['phone_no'];
		$email_address = $_POST['email_address'];
		$graduate_level = $_POST['graduate_level'];
		
		$emailchunks = explode("@", $email_address);
		$regnochunks = explode("/", $reg_no);

	
		$_SESSION['reg_no'] = $_POST['reg_no'];
		$_SESSION['first_name'] = $_POST['first_name'];
		$_SESSION['sur_name'] = $_POST['sur_name'];
		$_SESSION['gender'] = $_POST['gender'];
		$_SESSION['id_no'] = $_POST['id_no'];
		$_SESSION['phone_no'] = $_POST['phone_no'];
		$_SESSION['email_address'] = $_POST['email_address'];
		$_SESSION['graduate_level'] = $_POST['graduate_level'];
		

		
		if(!empty($_SESSION['reg_no']) && !empty($_SESSION['first_name']) && !empty($_SESSION['sur_name']) && !empty($_SESSION['gender']) && !empty($_SESSION['id_no']) && !empty($_SESSION['phone_no']) && !empty($_SESSION['email_address']) && !empty($_SESSION['graduate_level'])) {
	
			if(strlen($_SESSION['reg_no'])>15 && strlen($_SESSION['first_name'])>30 && strlen($_SESSION['sur_name'])>30 && strlen($_SESSION['gender'])>30 && strlen($_SESSION['id_no'])>8 && strlen($_SESSION['phone_no'])>13 && strlen($_SESSION['email_address'])>40 && strlen($_SESSION['graduate_level'])>15) {
			
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

			} else if(!is_numeric($id_no) || strlen($id_no) < 7 || strlen($id_no) > 8) {

				
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
			
									
			header('Location: user_registration_contd.php');
			
       }
	   
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

<form action = "user_registration.php" method = "POST" name="regform">
<br><center><h1>VOTER REGISTRATION FORM</h1><br>
<h4>

<table width="90%" border="0">
<tr>
<td width="90%">First Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="first_name" maxlength="40" value="<?php if(isset($first_name)) { $first_name; } ?>" required></td>
</tr>

<tr>
<td width="90%">Surname: 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="sur_name" maxlength="40" value="<?php if(isset($sur_name)) { $sur_name; } ?>" required></td>
</tr>

<tr>
<td width="90%">Registration Number: 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="reg_no" style=" maxlength="15" value="<?php if(isset($reg_no)) { $reg_no; } ?>" required></td>
</tr>

<tr>
<td width="90%">ID Number: 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="number" name="id_no" maxlength="8" value="<?php if(isset($id_no)) { $id_no; } ?>" required></td>
</tr>

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
<td width="90%">Phone Number: 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="phone_no" maxlength="13" value="<?php if(isset($phone_no)) { $phone_no; } ?>" required></td>
</tr>
<tr>
<td width="90%">Email Address: 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="email" name="email_address" maxlength="40" value="<?php if(isset($email_address)) { $email_address; } ?>" required>
</td>
</tr>
<tr>
<td width="90%">Graduate Level: 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="graduate_level">
                        <option>undergraduate</option>
                        <option>postgraduate</option>
                     </select>
</td>
</tr>
</table>

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





