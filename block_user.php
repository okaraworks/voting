
<?php

require 'core.php';
require 'dbconnect.php';
require 'vote_talling.php';

function getvotertoblockfield($field) {
         global $entered_reg_no; 
	if($_SESSION['admin']) {
	$query = "SELECT $field FROM voter_roll WHERE `reg_no` = '" .$entered_reg_no. "' ";
		if($query_run = @mysql_query($query)){
		    if($query_result = @mysql_result($query_run, 0, $field)){
			  return $query_result;
			 }
		 }
	 }
}


if($_SESSION['admin']){

	if(isset($_POST['entered_reg_no']) && isset($_POST['reason']) && isset($_POST['petitioner'])) {
	
    	$entered_reg_no = $_POST['entered_reg_no'];
        $reason = $_POST['reason'];
        $petitioner = $_POST['petitioner'];

	
		if(!empty($entered_reg_no) && !empty($reason) && !empty($petitioner)) {
		
$reg_no = getvotertoblockfield('reg_no');
$first_name = getvotertoblockfield('first_name');
$sur_name = getvotertoblockfield('sur_name');
$gender = getvotertoblockfield('gender');
$id_no = getvotertoblockfield('id_no');
$phone_no = getvotertoblockfield('phone_no');
$email_address = getvotertoblockfield('email_address');
$graduate_level = getvotertoblockfield('graduate_level');
$category = getvotertoblockfield('category');
$campus = getvotertoblockfield('campus');
$academic_division = getvotertoblockfield('academic_division');
$year_of_study = getvotertoblockfield('year_of_study');
$residence_area = getvotertoblockfield('residence_area');
$residence_hall = getvotertoblockfield('residence_hall');
$username = getvotertoblockfield('username');


/*
if(isset($reg_no) && isset($first_name) && isset($sur_name) && isset($gender) && isset($id_no) && isset($phone_no) && isset($email_address) && isset($graduate_level) && isset($category) && isset($campus) && isset($academic_division) && isset($year_of_study) && isset($residence_area) && isset($residence_hall) && isset($username) && isset($entered_reg_no) && isset($reason) && isset($petitioner)) {


if(!empty($entered_reg_no) && !empty($reg_no) && !empty($first_name) && !empty($sur_name) && !empty($gender) && !empty($id_no) && !empty($phone_no) && !empty($email_address) && !empty($graduate_level) && !empty($category) && !empty($campus) && !empty($academic_division) && !empty($year_of_study) && !empty($residence_area) && !empty($residence_hall) && !empty($username) && !empty($reason) && !empty($petitioner)) {
		
*/

		
		
		
	
       $query1 = "SELECT reg_no FROM voter_roll WHERE `reg_no` = '" .$entered_reg_no. "' ";

			$query1_run = mysql_query($query1);	

            if(mysql_num_rows($query1_run) == 0){
?>		
	<html>
	<head>
	<title>Untitled Document</title>
	</head>
	<body onLoad="confirmation()">
	
	<script type="text/javascript">
	<!--
	function confirmation() {
	var answer = alert("Sorry, no user with Registration Number <?php echo $entered_reg_no; ?> exists in the voter roll.")
	 }
	 //-->
	 </script> 
	</body>
	</html>		
		
<?php		

			} else if(mysql_num_rows($query1_run) == 1){			

    		$query1 = "INSERT INTO blocked_users
			(user_id, reg_no, first_name, sur_name, id_no, phone_no, email_address, graduate_level, category, campus,    
			academic_division, year_of_study, residence_area, residence_hall, reason, petitioner) 
			VALUES(NULL, '".mysql_real_escape_string($reg_no)."', '".mysql_real_escape_string($first_name)."', '".
			mysql_real_escape_string($sur_name)."', '".mysql_real_escape_string($id_no)."', 
			'".mysql_real_escape_string($phone_no)."', '".mysql_real_escape_string($email_address)."', '".mysql_real_escape_string(
			$graduate_level)."', '".mysql_real_escape_string($category)."', '".mysql_real_escape_string($campus)."', '".
			mysql_real_escape_string($academic_division)."', '".mysql_real_escape_string($year_of_study)."', '".
			mysql_real_escape_string($residence_area)."', '".mysql_real_escape_string($residence_hall)."', '".mysql_real_escape_string($reason)."', '".mysql_real_escape_string($petitioner)."')";
			
			
			$query1_run = mysql_query($query1);

               if($query1_run){			

			?>		
				<html>
				<head>
				<title>Untitled Document</title>
				</head>
				<body onLoad="confirmation()">
				
				<script type="text/javascript">
				<!--
				function confirmation() {
				var answer = alert("User <?php echo $reg_no.'-'.$first_name.' '.$sur_name; ?> successfully blocked from voting...")
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
				var answer = alert("Sorry, user <?php echo $reg_no.'-'.$first_name.' '.$sur_name; ?> was not successfully blocked from voting. Please try again.")
				 }
				 //-->
				 </script> 
				</body>
				</html>		
					
			<?php		

				}			
        	}
 //     }
 //	}					
			  	

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

} else if(!$_SESSION['admin']){

			?>		
				<html>
				<head>
				<title>Untitled Document</title>
				</head>
				<body onLoad="confirmation()">
				
				<script type="text/javascript">
				<!--
				function confirmation() {
				var answer = alert("Sorry, you must have adminstrator privileges for you to udertake this action")
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

<div id="divWrap">

<div id="content">
<div id="divLine"></div>
<div id="divTable">
<table width="100%" border="0">
<tr>
<td width="100%">

<?php include 'header_statistics.php'; ?>

<form action = "block_user.php" method = "POST">
<p><br>
<p> Registration number of user to be blocked: <input type="text" name="entered_reg_no" maxlength="15" value="<?php if(isset($entered_reg_no)) { $entered_reg_no; } ?>" >


<p> Registration number of petitioner: <input type="text" name="petitioner" maxlength="15" value="<?php if(isset($petitioner)) { $petitioner; } ?>" >
						
<p> Reason for blocking : <select name="reason">
												<option value="1">Expelled</option>
												<option value="2">Deaseced</option>
												<option value="3">Completed</option>
											</select>

<p><br><br><input type = "submit" value="Block User" style="margin-left:500px;">

</form>


</td>
</tr>
</table>
</div>

</div>
</body>
</html>
