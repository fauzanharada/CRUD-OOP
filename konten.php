<?php
switch (@$_GET['p']) {
  case 'tambah':
    require_once("view/tambah.php");
  break;
  case 'hapus':
    if($OOP->hapusData($_GET['id'])){
      echo "<script>alert('Berhasil di Hapus')</script>";
      echo "<script>document.location='?p=table'</script>";
    }else{
      echo mysqli_error($OOP->con);
    }
  break;
  case 'edit':
    require_once("view/edit.php");
  break;
  case 'cari':
    require_once("view/cari.php");
  break;
  default:
    require_once("view/table.php");
  break;
}
?>
