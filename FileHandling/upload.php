<?php
$file = $_FILES['fn'];
$dir = 'myupload/';

$target = $dir.basename($file['name']);
$temp = $file['tmp_name'];

$upload_ = move_uploaded_file($temp, $target);
if($upload_)
{
	echo "file uploded successfully";
}
else{
	echo "Couldn't upload file";
}
?>