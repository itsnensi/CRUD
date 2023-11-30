<?php
require 'functions.php';

if (isset($_POST ['tambah'])){
  if(tambah_supplier($_POST) > 0){
    echo "<script>
    alert('data berhasil di tambahkan');
    document.location.href='data_supplier.php';
    </script>";
  } else {
    echo "<script>
    alert('data gagal di tambahkan');
    document.location.href='data_supplier.php';
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>halaman tambah supplier</title>
</head>
<body>
  <h1>tambah data supplier</h1>
  <form action="" method="post">
    <div>
      <label for="nama">nama supplier:</label>
      <input type="text" name="nama" id="nama" required>
    </div>
    <div>
      <label for="no_telp">nomor telpon:</label>
      <input type="number" name="no_telp" id="no_telp" required>
    </div>
    <div>
      <label for="alamat">alamat:</label>
      <input type="text" name="alamat" id="alamat" required>
    </div>
    <button type="submit" name="tambah">tambah data</button>
  </form>
</body>
</html>