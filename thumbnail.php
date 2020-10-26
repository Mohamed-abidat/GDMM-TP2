<?php
	error_reporting(-1);
	ini_set('display_errors', 'On');
	$width =200;
	$height=200;
	$type ="JPEG";



	$image = exif_thumbnail('images/user3.jpg', $width, $height, $type);

	if ($image!==false) {
	    header('Content-type: ' .image_type_to_mime_type($type));
	    echo $image;
	    exit;
	} else {
	    // no thumbnail available, handle the error here
	    echo 'No thumbnail available';
}

?>
