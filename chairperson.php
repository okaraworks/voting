
<?php

require 'core.php';
require 'dbconnect.php';
require 'voting_date_time.php';
//require 'voting_date_time2.php';

  if(loggedin()){

if(date_current() < date_start()) {
		?>			

	<html>
	<head>
	<title>Untitled Document</title>
	</head>
	<body onLoad="confirmation()">
	
	<script type="text/javascript">
	<!--
	function confirmation() {
	var answer = alert("Sorry, the voting session is not officially started yet.")	
	window.location = "logged_in_voter.php";
	 }
	 //-->
	 </script> 
	</body>
	</html>		

   <?php
}

else if(date_current() > date_end()) {
	?>		

	<html>
	<head>
	<title>Untitled Document</title>
	</head>
	<body onLoad="confirmation()">
	
	<script type="text/javascript">
	<!--
	function confirmation() {
	var answer = alert("Sorry, the voting session is officially closed.")
	
	window.location = "logged_in_voter.php";
	 }
	 //-->
	 </script> 
	</body>
	</html>		
   <?php
}

else {

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



	$query2 = "SELECT username FROM blocked_users WHERE reg_no = '".$reg_no."' OR id_no = '".$id_no."' OR username = '"            .$username."' ";			

	$query2_run = mysql_query($query2);	
	
	
	if(@mysql_num_rows($query2_run) == 1){
	?>	
	
	<html>
	<head>
	<title>Untitled Document</title>
	</head>
	<body onLoad="confirmation()">
	
	<script type="text/javascript">
	<!--
	function confirmation() {
	var answer = alert("Sorry, you are blocked from voting.")
	window.location = "logged_in_voter.php";
	 }
	 //-->
	 </script> 
	</body>
	</html>		
	
	<?php
	} else if(@mysql_num_rows($query2_run) == 0){			

	$query1 = "SELECT username FROM successful_voters WHERE reg_no = '".$reg_no."' OR id_no = '".$id_no."' OR username = '"            .$username."' ";			
	
	$query1_run = mysql_query($query1);	

	if(mysql_num_rows($query1_run) == 1){
					?>	
					
					<html>
					<head>
					<title>Untitled Document</title>
					</head>
					<body onLoad="confirmation()">
					
					<script type="text/javascript">
					<!--
					function confirmation() {
					var answer = alert("Sorry, you have already voted....")
					window.location = "logged_in_voter.php";
					 }
					 //-->
					 </script> 
					</body>
					</html>		
					
					<?php
	} else if(mysql_num_rows($query1_run) == 0){			

if(isset($_POST['chairperson'])) {
	$chairperson = $_POST['chairperson'];
	
	if(!empty($chairperson)) {
	 $query = "SELECT username FROM voter_roll WHERE username = '" .$username. "' ";
	 $query_run = mysql_query($query);	
	
		 if(mysql_num_rows($query_run) == 1){
	     $_SESSION['chairperson'] = $chairperson;
		 
		 header('Location: vice_chairperson.php');
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
							var answer = alert("Sorry, your voting was unsuccessful")
							 }
							 //-->
							 </script> 
							</body>
							</html>		
								 
						<?php		 
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
							var answer = alert("You must select a candidate!")
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
	var answer = alert("Sorry, you have to log in first for you to vote")
	
	window.location = "index.php";
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

<form action="chairperson.php" method="post">
</br><h1><div id="post">CHAIRPERSON</div></h1>
<h2>
<div id="tick">
<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/tick.jpg" height="70px" width="70px" alt="mugz photo"/></div>
<p>  <img src="candidates_photos/images7.jpg" height="70px" width="70px" alt="mugz photo"/>	 Kaylee Fridah &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="chairperson" value="7" >
</br>
<p>   <img src="candidates_photos/135930167.jpg" height="70px" width="70px" alt="mugz photo"/> Catherine Wavinya &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="chairperson" value="9">
</br>
 <p>  <img src="candidates_photos/102415851.jpg" height="70px" width="70px" alt="mugz photo"/>	 Maurine Obuya &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="chairperson" value="11">
</br>
 <p>  <img src="candidates_photos/IMG_0025.jpg" height="70px" width="70px" alt="mugz photo"/>	 Olivia Muthoni &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="chairperson" value="14">
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

