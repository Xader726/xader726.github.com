<?php

$name = $_FILES["myfile"]["name"];
$type = $_FILES["myfile"]["type"];
$size = $_FILES["myfile"]["size"];
$temp = $_FILES["myfile"]["tmp_name"];
$error = $_FILES["myfile"]["error"];

if($size > 1000000)
{
	die("The file is too big!");
}
else	
move_uploaded_file($temp,"uploads/".$name);

header("location: uploadcomplete.html");

?>
