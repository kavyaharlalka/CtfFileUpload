<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["uploaded_file"]["name"]);

// Limit the allowed file size 
if ($_FILES["uploaded_file"]["size"] > 500000) {
	echo "File is too large.";
	exit;
}

// Check if file already exists
if (file_exists($target_file)) {
	echo "File already exists.";
	exit;
}

// Move file to the uploads directory
if (move_uploaded_file($_FILES["uploaded_file"]["tmp_name"], $target_file)) {
	echo "The file ". htmlspecialchars( basename( $_FILES["uploaded_file"]["name"])). " has been successfully uploaded!";
} else {
	echo "Unexpected error uploading your file.";
}
?>
