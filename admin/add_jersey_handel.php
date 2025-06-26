<?php 

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('Location: dashboard.php');
    exit();
}

$jersey_name = $_POST[' jersey_name'];
$jersey_image = $_FILES['jersey_image'] ?? null;
$image_path ="";
$size = $_POST['size'];
$price = $_POST['price']; 



if(isset($jersey_image) && $jersey_image['error'] == 0 ? $jersey_image == 0 : $jersey_image = null){
$upload_dir = 'uploads/';
$image_name = time() . '-' . basename($author_images['name']);
$target_path = $upload_dir . $image_name;

if(move_uploaded_file($jersey_image['tmp_name'], $target_path)){
$image_path = $target_path;
} 
}


include 'db-conn.php';

