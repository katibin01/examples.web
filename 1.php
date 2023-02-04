<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  echo "Halo, " . $nama;
}
?>
<form method="post">
  <label for="nama">Nama:</label>
  <input type="text" name="nama" id="nama">
  <input type="submit" value="Submit">
</form>
