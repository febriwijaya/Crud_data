<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login");
  exit;
}
require 'functions.php';

$id = $_GET["id"];

if (hapus_tanjungbalai($id) > 0) {
  echo "
    <script>
      alert('data berhasil dihapus!');
      document.location.href= 'tanjungbalai';
    </script>
  ";
} else {
  echo "
    <script>
      alert('data gagal dihapus!');
      document.location.href = 'tanjungbalai';
    </script>
  ";
}
