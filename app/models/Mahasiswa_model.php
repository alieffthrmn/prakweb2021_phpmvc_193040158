<?php

class Mahasiswa_model
{
  //private $mhs = [
  // cara manual pake array
  //   [
  //     "nama" => "Alief Fathurrohman",
  //     "nrp" => "193040158",
  //     "email" => "fathurrohmanalief@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  //   [
  //     "nama" => "Rafi Muhammad Zahid",
  //     "nrp" => "193040166",
  //     "email" => "rafimz@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  //   [
  //     "nama" => "Raden Yusuf Raihan Setiawan ",
  //     "nrp" => "193040168",
  //     "email" => "ucup@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ]
  // ];

  private $dbh; //database handler
  private $stmt; //statement

  //koneksi database PDO
  public function __construct()
  {
    //data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    //cek koneksi database
    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function getAllMahasiswa()
  {
    //query
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
