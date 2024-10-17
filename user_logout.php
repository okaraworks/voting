<?php

require 'core.php';

session_unset($_SESSION['user_id']);
session_unset($_SESSION['RO']);
session_unset($_SESSION['admin']);

session_unset($_SESSION['reg_no']);
session_unset($_SESSION['first_name']);
session_unset($_SESSION['sur_name']);
session_unset($_SESSION['gender']);
session_unset($_SESSION['id_no']);
session_unset($_SESSION['phone_no']);
session_unset($_SESSION['email_address']);
session_unset($_SESSION['graduate_level']);

session_unset($_SESSION['chairperson']);
session_unset($_SESSION['vice_chairperson']);
session_unset($_SESSION['secretary_general']);
session_unset($_SESSION['deputy_secretary_general']);
session_unset($_SESSION['finance_director']);
session_unset($_SESSION['academics_director']);
session_unset($_SESSION['accommodation_director_resident']);
session_unset($_SESSION['accommodation_director_nonresident']);
session_unset($_SESSION['catering_director']);
session_unset($_SESSION['entertainment_director']);

session_unset($_SESSION['congress_milimani']);
session_unset($_SESSION['congress_kotecha']);
session_unset($_SESSION['congress_hall_1']);
session_unset($_SESSION['congress_hall_2']);
session_unset($_SESSION['congress_hall_3']);
session_unset($_SESSION['congress_faculty_of_education_and_social_sciences']);
session_unset($_SESSION['congress_faculty_of_engineering']);
session_unset($_SESSION['congress_faculty_of_science']);
session_unset($_SESSION['congress_cdmha']);

session_destroy();    // ends all started sessions

header('Location: index.php');
//header('Location: '.$http_referer);

?>