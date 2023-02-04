<?php
session_start();

if (!isset($_SESSION["logged_in"]) || !$_SESSION["logged_in"]) {
  header("Location: login.php");
  exit;
}
?>
<h1>Halaman yang hanya dapat diakses oleh pengguna yang login</h1>
