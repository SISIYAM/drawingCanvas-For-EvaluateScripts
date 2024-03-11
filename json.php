<?php
if(isset($_POST['submitBtn'])){
$upload_dir = "image/";
$img = $_POST['saveImage'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = $upload_dir . time() . ".png";
$success = file_put_contents($file, $data);
print $success ? $file : 'Unable to save the file.';
}
?>