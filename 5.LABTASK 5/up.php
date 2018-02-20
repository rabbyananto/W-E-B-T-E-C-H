<?php

	error_reporting(0);
	
	$filename = $_FILES['myfile']['name'];
	
	$fileUploadPath = "uploads/".$filename;
	$imageFileType=$_FILES['myfile']['type'];
	
	if($imageFileType != "image/jpg" && $imageFileType != "image/png" && $imageFileType != "image/jpeg" ) {
    echo "Sorry, only JPG, JPEG, PNG files are allowed.";
    }

	
	if ($_FILES["myfile"]["size"] > 400000) {
    echo "Sorry, your file is too large.";
    
}
	
	
?>