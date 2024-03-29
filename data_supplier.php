<?php
//untuk akses fungsi di file function.php
 require 'functions.php';
 $supplier = query("SELECT * FROM supplier");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Supplier</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <h1>Data Supplier</h1>
  <button><a href="tambah_supplier.php">tambah data</a></button>
  <table class="table table-striped">
    <tr>
      <th>No</th>
      <th>ID Supplier</th>
      <th>Nama Supplier</th>
      <th>No Telp</th>
      <th>Alamat</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($supplier as $spp) { ?>
    <tr>
      <td><?= $i;?></td>
      <td><?= $spp['id_supplier'];?></td>
      <td><?= $spp['nama_supplier'];?></td>
      <td><?= $spp['no_telp'];?></td>
      <td><?= $spp['alamat'];?></td>
      <td>
        <button type="button" class="btn btn-outline-info"">
        <a href="ubah_supplier.php?id=<?php echo $spp['id_supplier'];?>">Ubah</a>
      </button>
        <button type="button" class="btn btn-outline-warning">
          <a href="hapus_supplier.php?id=<?php echo $spp['id_supplier'];?> ">Hapus</a>
        </button>
      </td>
    </tr>
    <?php $i++; ?>
    <?php } ?>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>