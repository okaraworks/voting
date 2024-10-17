
<?php

require 'core.php';
require 'dbconnect.php';

	if(isset($_POST['reg_no']) && isset($_POST['first_name']) && isset($_POST['sur_name']) && isset($_POST['id_no']) && isset($_POST['phone_no']) && isset($_POST['email_address']) && isset($_POST['academic_division']) && isset($_POST['year_of_study']) && isset($_POST['residence_hall'])) {
	
		$reg_no = strtoupper($_POST['reg_no']);
		$first_name = strtoupper($_POST['first_name']);
		$sur_name = strtoupper($_POST['sur_name']);
		$id_no = $_POST['id_no'];
		$phone_no = $_POST['phone_no'];
		$email_address = $_POST['email_address'];
		$academic_division = $_POST['academic_division'];
		$year_of_study = $_POST['year_of_study'];
		$residence_hall = $_POST['residence_hall'];
		
		if(!empty($reg_no) && !empty($first_name) && !empty($sur_name) && !empty($id_no) && !empty($phone_no) && !
		empty($email_address) && !empty($academic_division) && !empty($year_of_study) && !empty($residence_hall)) {
		
			if(strlen($reg_no)>15 && strlen($first_name)>30 && strlen($sur_name)>30 && strlen($id_no)>8 && 
			strlen($phone_no)>13 && strlen($email_address)>40 && strlen($academic_division)>0 && strlen($year_of_study)>10 && strlen(    
			$residence_hall)>15) {
			
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
				
				} else if(is_numeric($first_name) || is_numeric($sur_name)){
				
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
				
				} else {
				    $query = "SELECT username, password FROM voter_roll WHERE reg_no = '" .mysql_real_escape_string($reg_no). "' && first_name = '" .mysql_real_escape_string($first_name). "' && sur_name = '" .mysql_real_escape_string($sur_name). "' && id_no = '" .mysql_real_escape_string($id_no). "' && phone_no = '" .mysql_real_escape_string($phone_no). "' && email_address = '" .mysql_real_escape_string($email_address). "' && academic_division = '" .mysql_real_escape_string($academic_division). "' && year_of_study = '" .mysql_real_escape_string($year_of_study). "' && residence_hall = '" .mysql_real_escape_string($residence_hall). "' ";
				
					
				    $query_run = mysql_query($query);	

        			if(mysql_num_rows($query_run) == 1){					

					$username = mysql_result($query_run, 0, 'username');  
//					$password = mysql_result($query_run, 0, 'password'); 
					$password = rand(69999999,89999999); 
					$password_hash = md5($password);
					
					$query2 = "UPDATE voter_roll SET password = '" .mysql_real_escape_string($password_hash). "' WHERE reg_no = '" .mysql_real_escape_string($reg_no). "' && first_name = '" .mysql_real_escape_string($first_name). "' && sur_name = '" .mysql_real_escape_string($sur_name). "' && id_no = '" .mysql_real_escape_string($id_no). "' && phone_no = '" .mysql_real_escape_string($phone_no). "' && email_address = '" .mysql_real_escape_string($email_address). "' && academic_division = '" .mysql_real_escape_string($academic_division). "' && year_of_study = '" .mysql_real_escape_string($year_of_study). "' && residence_hall = '" .mysql_real_escape_string($residence_hall). "' ";
					
					$query2_run = mysql_query($query2);
					
					if($query2_run){

							?>		
								<html>
								<head>
								<title>Untitled Document</title>
								</head>
								<body onLoad="confirmation()">
								
								<script type="text/javascript">
								<!--
								function confirmation() {
								var answer = alert("Your username is <?php $username; ?> and your password is <?php $password; ?>")
								 }
								 //-->
								 </script> 
								</body>
								</html>		
							<?php						




					
					echo 'Your username is '.$username.' and your password is '.$password;
					
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
								var answer = alert("No such record exists.")
								 }
								 //-->
								 </script> 
								</body>
								</html>		
							<?php						
	
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

<div id="divWrap">

<div id="content">
<div id="divLine"></div>
<div id="divTable">
<table width="90%" border="0">
<tr>
<td width="90%">

<?php include 'header_reg.php'; ?>

<form action = "password_recovery.php" method = "POST">
<br><center><h1>PASSWORD RECOVERY</h1><br>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="phone_no" maxlength="13" value="<?php if(isset($phone_no)) { $phone_no; } ?>" required></td>
</tr>

<tr>
<td width="90%">Email Address: 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="email" name="email_address" maxlength="40" value="<?php if(isset($email_address)) { $email_address; } ?>" required>
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
</table>
</div>

<p><br><br><input type = "submit" value="Submit">
</h4>
</form>


</td>
</tr>
</table>
</div>

</div>
</body>
</html>
