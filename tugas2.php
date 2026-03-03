<?php
// ==========================
// CLASS PARENT (User)
// ==========================
class User {
    protected $nama;
    protected $email;

    // Constructor
    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }

    // Getter & Setter (Encapsulation)
    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function tampil() {
        return "Nama: {$this->nama}, Email: {$this->email}<br>";
    }
}

// ==========================
// CLASS MAHASISWA
// ==========================
class Mahasiswa extends User {
    private $nim;

    public function __construct($nama, $email, $nim) {
        parent::__construct($nama, $email);
        $this->nim = $nim;
    }

    public function tampil() {
        return parent::tampil() . "NIM: {$this->nim}<br>";
    }
}

// ==========================
// CLASS DOSEN
// ==========================
class Dosen extends User {
    private $nidn;

    public function __construct($nama, $email, $nidn) {
        parent::__construct($nama, $email);
        $this->nidn = $nidn;
    }

    public function tampil() {
        return parent::tampil() . "NIDN: {$this->nidn}<br>";
    }
}

// ==========================
// CLASS ADMIN
// ==========================
class Admin extends User {
    private $role;

    public function __construct($nama, $email, $role) {
        parent::__construct($nama, $email);
        $this->role = $role;
    }

    public function tampil() {
        return parent::tampil() . "Role: {$this->role}<br>";
    }
}

// ==========================
// MEMBUAT OBJECT
// ==========================
$mhs = new Mahasiswa("Rifqi", "rifqi@gmail.com", "12345");
$dosen = new Dosen("Budi", "budi@gmail.com", "67890");
$admin = new Admin("Sari", "sari@gmail.com", "Super Admin");

// ==========================
// OUTPUT
// ==========================
echo "<h3>Data Mahasiswa</h3>";
echo $mhs->tampil();

echo "<h3>Data Dosen</h3>";
echo $dosen->tampil();

echo "<h3>Data Admin</h3>";
echo $admin->tampil();
?>