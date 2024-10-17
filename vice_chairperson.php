
<?php

require 'core.php';
require 'dbconnect.php';

if(loggedin()){

$username = getuserfield('username');

if(isset($_POST['vice_chairperson'])) {
	$vice_chairperson = $_POST['vice_chairperson'];
	
	if(!empty($vice_chairperson)) {
	 $query = "SELECT username FROM voter_roll WHERE username = '" .$username. "' ";
	 $query_run = mysql_query($query);	
	
		 if(mysql_num_rows($query_run) == 1){
	     $_SESSION['vice_chairperson'] = $vice_chairperson;
		 
		 header('Location: secretary_general.php');
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

<form action="vice_chairperson.php" method="post">

</br><h1><div id="post">VICE CHAIRPERSON</div></h1>
<h2>
<div id="tick">
<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/tick.jpg" height="70px" width="70px" alt="mugz photo"/></div>

<p>  <img src="candidates_photos/26274_377949413358_1290880_n.jpg" height="70px" width="70px" alt="mugz photo"/>	 Cheboiwo Felistus &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="vice_chairperson" value="8">
</br>
<p>   <img src="candidates_photos/IMG_0025.jpg" height="70px" width="70px" alt="mugz photo"/> Lucent Kasera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="vice_chairperson" value="10">
</br>
 <p>  <img src="candidates_photos/images7.jpg" height="70px" width="70px" alt="mugz photo"/>	 George Miriam &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="vice_chairperson" value="12">
</br>
 <p>  <img src="candidates_photos/1styearpersonalprofile.png" height="70px" width="70px" alt="mugz photo"/>	 Ruth Jumba &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="vice_chairperson" value="13">
</br>
</h2>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="NEXT"><br><br>

</form>
</td>
<td width="20%"></td>
</body>
</html>

