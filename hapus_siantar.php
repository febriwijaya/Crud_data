<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

$id = $_GET["id"];

if (hapus_siantar($id) > 0) {
  echo "
    <script>
      alert('data berhasil dihapus!');
      document.location.href= 'siantar';
    </script>
  ";
} else {
  echo "
    <script>
      alert('data gagal dihapus!');
      document.location.href = 'siantar';
    </script>
  ";
}
