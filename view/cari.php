<form action="?p=cari" method="post">
  <a href="?p=tambah" class="btn btn-primary">Tambah Data</a>
  Cari : <input type="text" name="cariNama" size="30" placeholder="Cari Berdasarkan Nama"> <button type="submit" class="btn btn-success">Cari</button>
  <a href="index.php" class="btn btn-success">Lihat Semua Data</a>
</form>
<table class="table table-hover">
  <tr>
    <th>NO</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Alamat</th>
    <td colspan="2" align="center"><b>Action</b></td>
  </tr>
  <?php
  $OOP->setNama($_POST['cariNama']);
  $MyRow = $OOP->cariData();
  $no = 1;
  foreach ($MyRow as $r) {
    if($r['jenkel']=="L"){$jenkel = "Laki-Laki";}else{$jenkel = "Perempuan";}
    ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $r['namaLengkap']; ?></td>
      <td><?php echo $jenkel; ?></td>
      <td><?php echo $r['alamat']; ?></td>
      <td align="center"><a href="?p=edit&id=<?php echo $r['id']; ?>" class="btn btn-primary">Edit</a></td>
      <td align="center"><a href="?p=hapus&id=<?php echo $r['id']; ?>" class="btn btn-danger">Hapus</a></td>
    </tr>
    <?php
  } ?>

</table>
