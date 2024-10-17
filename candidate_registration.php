<?php

require 'core.php';
require 'dbconnect.php';

	if(isset($_POST['reg_no']) && isset($_POST['first_name']) && isset($_POST['sur_name']) && isset($_POST['id_no']) && isset( 
	$_POST['phone_no']) && isset($_POST['email_address'])) {
	
		$_SESSION['reg_no'] = $_POST['reg_no'];
		$_SESSION['first_name'] = $_POST['first_name'];
		$_SESSION['sur_name'] = $_POST['sur_name'];
		$_SESSION['id_no'] = $_POST['id_no'];
		$_SESSION['phone_no'] = $_POST['phone_no'];
		$_SESSION['email_address'] = $_POST['email_address'];

		if(!empty($_SESSION['reg_no']) && !empty($_SESSION['first_name']) && !empty($_SESSION['sur_name']) && !empty($_SESSION['id_no']) && !empty($_SESSION['phone_no']) && !empty($_SESSION['email_address'])) {		
			
			if(strlen($_SESSION['reg_no'])>15 && strlen($_SESSION['first_name'])>30 && strlen($_SESSION['sur_name'])>30 && strlen($_SESSION['id_no'])>8 && strlen($_SESSION['phone_no'])>13 && strlen($_SESSION['email_address'])>40) {			

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
			}
			header('Location: candidate_registration_contd.php');

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

<form action = "candidate_registration.php" method = "POST">

<center><h1>CANDIDATE REGISTRATION FORM</h1>
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


