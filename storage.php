<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tosharu Studios Storage</title>
</head>
<body>
	<form action="upload.php" method="post" enctype="multipart/form-data">
 	 	<h2 style="color:blueviolet;">Select image to upload:
  		<input type="file" name="fileToUpload" id="fileToUpload">
	</form>
<?php
file_uploads = On
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
</h2>
</form>
</body>
</html>