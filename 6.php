<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    echo "File " . basename($_FILES["file"]["name"]) . " berhasil diupload.";
  } else {
    echo "Maaf, terjadi kesalahan saat mengupload file.";
  }
}
?>
<form action="" method="post" enctype="multipart/form-data">
  <input type="file" name="file">
  <input type="submit" value="Upload">
</form>
