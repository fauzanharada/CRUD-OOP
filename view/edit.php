<?php
  $data = $OOP->ambilData($_GET['id']);

  if (@$_POST['submit']) {
    $OOP->setNama($_POST['nama']);
    $OOP->setJenkel($_POST['jenkel']);
    $OOP->setAlamat($_POST['alamat']);

    $ubah = $OOP->ubahData($_GET['id']);
    if ($ubah == "Sukses") {
      echo "<script>alert('Berhasil di Ubah')</script>";
      echo "<script>document.location='?p=table'</script>";
    }else {
      echo $ubah;
    }
  }
 ?>
<h1 align='center'>Tambah Data</h1>
<form action="" method="post">
  <table width="100%">
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><input type="text" name="nama" class="form-control" value="<?php echo $data['namaLengkap']; ?>"></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td>
        <select class="form-control" name="jenkel">
          <option value="L" <?php if($data['jenkel']=="L"){echo"selected";} ?>>Laki-Laki</option>
          <option value="P" <?php if($data['jenkel']=="P"){echo"selected";} ?>>Perempuan</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><textarea name="alamat" class="form-control"><?php echo $data['alamat']; ?></textarea> </td>
    </tr>
    <td align='right' colspan="3">
      <input type="submit" class="btn btn-primary" name="submit" value="Ubah">
      &nbsp;
      <input type="reset" class="btn btn-danger" name="cancel" value="Batal">
    </td>
  </table>

</form>
