
<?php

require 'core.php';
require 'dbconnect.php';

if(isset($_POST['field']) && isset($_POST['old_value']) && isset($_POST['new_value']) && isset($_POST['reentered_new_value'])) {
$field = $_POST['field'];
$old_value = $_POST['old_value'];
$new_value = $_POST['new_value'];
$reentered_new_value = $_POST['reentered_new_value'];

if($_POST['field'] == 'password') {
$old_value = md5($_POST['old_value']);
$new_value = md5($_POST['new_value']);
$reentered_new_value = md5($_POST['reentered_new_value']);

}

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
	
			 if($new_value!=$reentered_new_value) {
				
			?>		
				<html>
				<head>
				<title>Untitled Document</title>
				</head>
				<body onLoad="confirmation()">
				
				<script type="text/javascript">
				<!--
				function confirmation() {
				var answer = alert("The new values do not match!!")
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php		
				} else {

		 	 $query = "UPDATE voter_roll SET $field='$new_value' WHERE username = '" .$username. "' ";
			 $query_run = @mysql_query($query);	
			 
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
				var answer = alert("Profile successfully updated.")
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php	
			
			}
			
		  }	

		} else{		
		echo 'All fields are required!';		
		}		
	
	} else if(!loggedin()){
	echo 'Sorry, you have to log in first'.'<br>';
	include 'user_login.php';
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
<table width="100%" border="0">
<tr>
<td width="100%">

<?php include 'header_statistics.php'; ?>

<form action = "edit_user_profile.php" method = "POST">
<p><br>
<p> Select field to edit : <select name="field" style="margin-left:40px;">
						<option>first_name</option>
						<option>sur_name</option>
						<option>reg_no</option>
						<option>gender</option>
						<option>id_no</option>
						<option>phone_no</option>
						<option>email_address</option>
						<option>graduate_level</option>
						<option>category</option>
						<option>campus</option>
						<option>academic_division</option>
						<option>year_of_study</option>
						<option>residence_area</option>
						<option>residence_hall</option>
						<option>username</option>
						<option>password</option>
              </select>


<p> Enter old value: <input type="text" name="old_value" style="margin-left:66px; value="<?php if(isset($old_value)) { $old_value; } ?>" >
<p> Enter new value: <input type="text" name="new_value" style="margin-left:60px; value="<?php if(isset($new_value)) { $new_value; } ?>" >
<p> Re-enter new value: <input type="text" name="reentered_new_value" style="margin-left:35px; value="<?php if(isset($reentered_new_value)) { $reentered_new_value; } ?>" >

<p><br><br>

<div id="user_prof_edit_options">
<font size="5" color = "black"><center><h1><a href="logged_in_voter.php">Back</a>
</h1></center></font></div>
</font>
</div>



<input type = "submit" value="Update Profile" style="margin-left:500px;">
</center>
</form>


</td>
</tr>
</table>
</div>

</div>
</body>
</html>
