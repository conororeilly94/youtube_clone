<?php 
require_once("includes/header.php");

if(!isset($_POST["uploadButton"])) {
    echo "No file sent to page.";
    exit();
}

// 1 Create file upload data
$videoUploadData = new VideoUploadData($_POST["fileInput"], $_POST["titleInput"], $_POST["descriptionInput"], $_POST["privacyInput"], $_POST["categoryInput"], "REPLACETHIS");

// 2 Process video data (upload)

// 3 Check if upload was successful
?>