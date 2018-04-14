<?php
require_once("DataEntity.php");

/**
*
*/
class DataCRUD extends CRUD
{
  public function lihatData(){
    $string = "SELECT * FROM data_siswa";
    $query = mysqli_query($this->con, $string);
    return $query;
  }

  public function tambahData()
  {
    $string = "INSERT INTO data_siswa (namaLengkap,jenkel,alamat) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($this->con, $string);
    $stmt->bind_param('sss',$this->getNama(),$this->getJenkel(),$this->getAlamat());
    if($rsint = $stmt->execute()){
      return "Sukses";
    }else {
      return mysqli_error($this->con);
    }
  }

  public function hapusData($id){
    $string = "DELETE FROM data_siswa WHERE id = ".$id;
    $query = mysqli_query($this->con, $string);
    return $query;
  }

  public function cariData(){
    $string = "SELECT * FROM data_siswa WHERE namaLengkap LIKE '%".$this->getNama()."%'";
    $query = mysqli_query($this->con, $string);
    return $query;
  }

  public function ambilData($id){
    $string = "SELECT * FROM data_siswa WHERE id = ".$id;
    $query = mysqli_fetch_array(mysqli_query($this->con, $string));
    return $query;
  }

  public function ubahData($id){
    $string = "UPDATE data_siswa set namaLengkap = ?, jenkel = ?, alamat = ? WHERE id = ?";
    $stmt = mysqli_prepare($this->con, $string);
    $stmt->bind_param('ssss',$this->getNama(),$this->getJenkel(),$this->getAlamat(),$id);
    if($rsint = $stmt->execute()){
      return "Sukses";
    }else {
      return mysqli_error($this->con);
    }
  }
}
