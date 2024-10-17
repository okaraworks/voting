<?php

/*$rawemail = "momugz@ymail.com";
$emailchunks = explode("@", $rawemail);

echo 'Raw email = '.$rawemail.'<br>';
//echo 'First chunk = '.$emailchunks[0].'<br>';
echo 'Second chunk = '.$emailchunks[1].'<br>';

if(($emailchunks[1] != 'yahoo.com') && ($emailchunks[1] != 'ymail.com') && ($emailchunks[1] != 'gmail.com') && ($emailchunks[1] != 'rocketmail.com') && ($emailchunks[1] != 'hotmail.com')) {
 echo 'invalid email';
}

*/


$rawregno = "sddsdfds/0013/10";
$regnochunks = explode("/", $rawregno);

echo 'Raw email = '.$rawregno.'<br>';
echo 'First chunk = '.$regnochunks[0].'<br>';
echo 'Second chunk = '.$regnochunks[1].'<br>';
echo 'Third chunk = '.$regnochunks[2].'<br>';

if((strlen($rawregno) != 11) || is_numeric($regnochunks[0]) || !is_numeric($regnochunks[1]) || !is_numeric($regnochunks[2]) || (strlen($regnochunks[0]) != 3) || (strlen($regnochunks[1]) != 4) || (strlen($regnochunks[2]) != 2)) {
 echo 'invalid reg no';


}

?>
