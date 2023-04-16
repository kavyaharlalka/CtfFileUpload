<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["uploaded_file"]["name"]);

// Check if file already exists
if (file_exists($target_file)) {
	echo "Sorry, file already exists.";
	exit;
}

// Check file size
if ($_FILES["uploaded_file"]["size"] > 500000) {
	echo "Sorry, your file is too large.";
	exit;
}

// Move the file to the upload directory
if (move_uploaded_file($_FILES["uploaded_file"]["tmp_name"], $target_file)) {
	echo "The file ". htmlspecialchars( basename( $_FILES["uploaded_file"]["name"])). " has been uploaded.";
} else {
	echo "Sorry, there was an error uploading your file.";
}
?>
