<!DOCTYPE html>
<html>
<head>
    <title>mahasiswa</title>
</head>
<body>

<h2>Data Mahasiswa</h2>

<?php
class Mahasiswa {
    // Property
    public $nama;
    public $nim;
    public $jurusan;

    // Method
    public function tampilData() {
        echo "Nama    : " . $this->nama . "<br>";
        echo "NIM     : " . $this->nim . "<br>";
        echo "Jurusan : " . $this->jurusan . "<br>";
    }
}

// Membuat object
$mhs1 = new Mahasiswa();

// Mengisi data
$mhs1->nama = "Andi";
$mhs1->nim = "12345";
$mhs1->jurusan = "Teknik Informatika";

// Menampilkan data
$mhs1->tampilData();

?>
