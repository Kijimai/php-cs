<?php
  /* ----------- File upload ---------- */
  $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

  if(isset($_POST["submit"])) {

    if(!empty($_FILES['upload']["name"])) {
      $file_name = $_FILES["upload"]["name"];
      $file_size = $_FILES["upload"]["size"];
      $file_tmp_name = $_FILES["upload"]["tmp_name"];
      $target_dir = "../uploads/${file_name}";

      //get file ext
      $file_ext = explode('.', $file_name);
      $file_ext = strtolower(end($file_ext));

      // Validate file extensions
      if(in_array($file_ext, $allowed_ext)) {
        if($file_size <= 1000000) {
          $message = '<p>File successfully uploaded!</p>';
        move_uploaded_file($file_tmp_name, $target_dir);
        } else {
        $message = "<p>File is too large! It cannot exceed 1MB.</p>";
        }
      } else {
        $message = '<p style="color: red";>Invalid file type. Only .gif, .png. jpg/.jpeg allowed.</p>';
      }
    } else {
      $message = "<p style='color: red';>Please choose a file.</p>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'open sans';
    }
  </style>
  <title>File upload</title>
</head>
<body>
  <?php echo $message ?? null; ?>
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
    <h1>Select an image to upload: </h1>
    <input type="file" name="upload" />
    <input type="submit" value="submit" name="submit" />
  </form>
</body>
</html>