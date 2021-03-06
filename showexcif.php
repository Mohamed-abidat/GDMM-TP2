<?php
	error_reporting(-1);
	ini_set('display_errors', 'On');
	
	echo "<h1>Affichage</h1>";
	
	$exif = exif_read_data('images/user1.jpg', 0, true);
	echo "<h1>user1.jpg:</h1>";
	echo $exif==false ? "No header data found.<br />\n" : "Image contains headers<br />\n";
	
	foreach ($exif as $key => $section) 
	{
		foreach ($section as $name => $val) 
		{
			echo "$key.$name: $val<br />\n";
		}
	}
	
	$exif = exif_read_data('images/user2.jpg', 0, true);
	echo "<h1>user2.jpg:</h1>";
	foreach ($exif as $key => $section) 
	{
		foreach ($section as $name => $val) 
		{
			echo "$key.$name: $val<br />\n";
		}
	}
	echo "<h1>affichage du type de l'image user1 : </h1>";
	$image = "images/user1.jpg";
	$types = array(
	1 => "GIF",
	2 => "JPEG",
	3 => "PNG",
	4 => "SWF",
	5 => "PSD",
	6 => "BMP",
	7 => "TIFF",
	8 => "TIFF"
	);
	$imagetype = exif_imagetype($image);
	if (array_key_exists($imagetype, $types)) 
	{
		echo "Image type is: " . $types[$imagetype];
	}else 
	{
		echo "Not a valid image type";
	}
?>