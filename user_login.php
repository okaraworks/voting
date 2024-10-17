<?php

require 'dbconnect.php';

if(isset($_POST['username']) && isset($_POST['password'])) {

$username = $_POST['username'];
$password = $_POST['password'];

$password_hash = md5($password);

	if(!empty($username) && !empty($password)) {

          $query = "SELECT user_id FROM voter_roll WHERE  username = '".mysql_real_escape_string($username)."' AND password = '".
	      mysql_real_escape_string($password_hash)."'";		  
		  $query_run = mysql_query($query);	
		  $query_num_rows = mysql_num_rows($query_run);		
		  
		  
          $query1 = "SELECT user_id FROM users WHERE  username = '".mysql_real_escape_string($username)."' AND password = '".
	      mysql_real_escape_string($password_hash)."'";		  
		  $query1_run = mysql_query($query1);	
		  $query1_num_rows = mysql_num_rows($query1_run);		
		  
		  
		  
		  if(($query_num_rows == 0) && ($query1_num_rows == 0)) {
		  
  
		  
/*		  
		  if(($query_num_rows == 0) && !($username == "RO" && $password == "RO") && !($username == "ADMIN" && $password == "ADMIN")) {
		  
*/		  
			?>		
				<html>
				<head>
				<title>Untitled Document</title>
				</head>
				<body onLoad="confirmation()">
				
				<script type="text/javascript">
				<!--
				function confirmation() {
				var answer = alert("Invalid username/password combination!")
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php						

//				echo 'Invalid username/password combination';		


				} else if(($query_num_rows == 1) || ($query1_num_rows == 1)) {

/*				} else if(($query_num_rows == 1) || ($username == "RO" && $password == "RO") || ($username == "ADMIN" && $password == "ADMIN")) {
*/	
			if ($query_num_rows == 1) {			
					$user_id = mysql_result($query_run, 0, 'user_id');  
					$_SESSION['user_id'] = $user_id;
					header('Location: logged_in_voter.php');			
			        }	
					
					else if ($query1_num_rows == 1) {
					
				   if($username == "RO" && $password == "RO"){
         		 $_SESSION['RO'] = 'RO';
                 header('Location: logged_in_RO.php');	
	        	   }
				 else if($username == "ADMIN" && $password == "ADMIN"){
         		 $_SESSION['admin'] = 'admin';
                 header('Location: logged_in_admin.php');	
	        	   }
				   
				  }
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
				var answer = alert("Supply a username and a password to log in.")
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php						
	
//	echo 'Supply a username and a password to log in.';
	}
 }

?>

<form action="<?php $current_file = $_SERVER['SCRIPT_NAME']; echo $current_file; ?>" method="POST">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Username: <input type="text" name="username">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Password: <input type="password" name="password">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Login">

<!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<h7><a href="user_registration.php"><span>Register</span></a></h7>
-->

</form>

