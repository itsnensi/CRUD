<?php
require 'functions.php';

$id = $_GET['id'];
if(hapus_supplier($id) > 0){
  echo "<script>
  alert('data berhasil di hapus');
  document.location.href = 'data_supplier.php';
  </script>";
} else {
  echo"<script>
  alert('data gagal dihapus');
  </script>";
  
}
?>