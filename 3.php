<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $_SESSION["nama"] = $_POST["nama"];
  header("Location: halaman_berikutnya.php");
  exit;
}
?>
<form method="post">
  <label for="nama">Nama:</label>
  <input type="text" name="nama" id="nama">
  <input type="submit" value="Submit">
</form>
