<?php
if(isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text']))  {

$reg_no=$_POST['reg_no'];
$phone_no=$_POST['phone_no'];

//$contact_name=$_POST['contact_name'];
$contact_email=$_POST['contact_email'];
$contact_text=$_POST['contact_text'];

     //isset() checks if the form data has been submitted or not
	 
  if(!empty($contact_name) && !empty($contact_email) &&!empty($contact_text)){
      
	  //empty() checks if the submitted variables are empty or not
	  
	  if(strlen($contact_name)>25 ||strlen($contact_email)>50 ||strlen($contact_text)>1000){
	  
	      //checks if the submited data exceeds their permisible length
		
	  echo 'Sorry, maximum length for some field has been exceeded.';
	  }
		  else {
		  $to = 'momugz@ymail.com';
		  $subject = 'Contact form submitted';
		  $body = $contact_name."\n".$contact_text;
		  $headers = 'From: '.$contact_email;

			if(@mail($to, $subject, $body, $headers)) {
			
			     //@ sign before mail() helps prevent displaying errors to users in case they occur
			   
			echo 'Thanks for contacting us. We will be in touch soon.';
			}  
				else{
				echo 'Sorry, an error occured, please try again later';
				}
	          }
       }
        else{
		  echo 'All fields are required.';
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

<div id="divWrapcomplain">

<div id="content">
<div id="divLine"></div>
<div id="divTable">
<table width="100%" border="0">
<tr>
<td width="100%">


<?php
include 'headerregisteredvoterslistuser.php';
echo '<br>';
?>


   <br> <br><form action="complains.php" method="POST">
   Registration Number:     &nbsp;&nbsp;&nbsp;
   <input type="text" name="reg_no" maxlength="25"><br><br>
   Phone No.:  
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input type="email" name="phone_no" maxlength="50" style="margin-left:45px;"><br><br>
   Email address:  
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input type="text" name="contact_email" maxlength="50" style="margin-left:45px;"><br><br>
   Message:  
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <textarea name="contact_text" rows="7" cols="60" maxlength="1000" style="margin-left:45px;"> </textarea> <br><br>
   
     <!-- maxlength indicates the maximum number of characters that can be input-->
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
   <input type="submit" value="Send" style="margin-left:45px;"><br> <br>
</form>

</td>
</tr>
</table>
</div>

</div>
</body>
</html>

   