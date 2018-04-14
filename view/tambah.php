<?php
  if (@$_POST['submit']) {
    $OOP->setNama($_POST['nama']);
    $OOP->setJenkel($_POST['jenkel']);
    $OOP->setAlamat($_POST['alamat']);

    $tambah = $OOP->tambahData();
    if ($tambah == "Sukses") {
      echo "<script>alert('Berhasil DiSimpan')</script>";
      echo "<script>document.location='?p=table'</script>";
    }else {
      echo $tambah;
    }
  }
 ?>
<h1 align='center'>Tambah Data</h1>
<form action="" method="post">
  <table width="100%">
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><input type="text" name="nama" class="form-control"> </td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td>
        <select class="form-control" name="jenkel">
          <option value="L">Laki-Laki</option>
          <option value="P">Perempuan</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><textarea name="alamat" class="form-control"></textarea> </td>
    </tr>
    <td align='right' colspan="3">
      <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
      &nbsp;
      <input type="reset" class="btn btn-danger" name="cancel" value="Batal">
    </td>
  </table>

</form>
