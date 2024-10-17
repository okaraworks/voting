
<?php

$name = $_FILES['photo']['name'];
$type = $_FILES['photo']['type'];
$size = $_FILES['photo']['size'];
$tmp_name = $_FILES['photo']['tmp_name'];

$max_size = 2097152;

$extension = strtolower(substr($name, strpos($name, '.')+1));

if(isset($name)) {

    if(!empty($name)) {

         if($extension == 'jpg' || $extension == 'jpeg' && $type == 'image/jpeg' && $size <= $max_size) {
         $location = 'candidates_photos/';
		 
		      if(move_uploaded_file($tmp_name, $location.$name)){
			  echo 'Photo uploaded.';
			  } else {
			  echo 'There was an error uploading the photo.';
			  }
         } else {
		 echo 'File must be a photo ie. jpg/jpeg and not exceed 2 MBs in size.';
		 }
    } else {
	echo 'You have not chosen a photo to upload!';
	}
}

?>

<form action = "candidates_photos.php" method="POST" enctype="multipart/form-data">
<input type="file" name="photo"><br><br>
<input type="submit" value="Upload">
</form>


