<?php

require 'core.php';
require 'dbconnect.php';

  if(loggedin()){

	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again'])) {
	
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password_again = $_POST['password_again'];
		
		$password_hash = md5($password);
		
		if(!empty($username) && !empty($password) && !empty($password_again)) {
		
			if(strlen($username)>40 && strlen($password)>40 && strlen($password_again)>40) {
			
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

			} else if($password!=$password_again) {
				
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
				    $query = "SELECT username FROM users WHERE username = '" .$username. "' ";
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
					
     				$query = "INSERT INTO users (user_id, username, password) 
					VALUES(NULL, '".mysql_real_escape_string($username)."', '".mysql_real_escape_string($password_hash)."')";					
                       
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
				var answer = alert("User successfully created...")
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
				var answer = alert("Sorry, user could not be created at this time. Please try again.")
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php						
		   
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
				var answer = alert("All fields are required!")
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php						
	}
  }
  } else if(!loggedin()){

?>

	<html>
	<head>
	<title>Untitled Document</title>
	</head>
	<body onLoad="confirmation()">
	
	<script type="text/javascript">
	<!--
	function confirmation() {
	var answer = alert("Sorry, you have to log in first")
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

<form action = "add_users.php" method = "POST">
<br><center><h1> CREATE USER</h1><br>
<h4>

<table width="90%" border="0">

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

<p><br><br><input type = "submit" value="Create">
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






