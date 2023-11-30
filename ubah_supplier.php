<?php
require 'functions.php';

if( isset($_POST["ubah"]) ) {
  if( ubah_supplier($_POST) > 0) {
  echo "<script>
  alert('data berhasil diubah!');
  document.location.href = 'data_supplier.php' ;
  </script>";
  } else {
    echo "<script>
    alert('data gagal diubah!');
    document.location.href = 'data_supplier.php';
    </script>";
  }

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ubah data supplier</title>
</head>
<body>
  <h1>ubah data supplier</h1>
  <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $supplier['id_supplier'];?>">
    <div>
      <label for="nama">nama supplier:</label>
      <input type="text" name="nama" id="nama"
      value="<?php echo $supplier["nama_supplier"];?>"
    </div>
    <div>
      <label for="no_telp">nomor telepon:</label>
      <input type="number" name="no_telp" id="no_telp" 
      value="<?php echo $supplier["no_telp"];?>" required>
    </div>
    <div>
      <label for="alamat">alamat:</label>
      <input type="text" name="alamat" id="alamat" 
      value="<?php echo $supplier["alamat"];?>"required>
    </div>
    <button type="submit" name="ubah">ubah data</button>
  </form>
</body>
</html>