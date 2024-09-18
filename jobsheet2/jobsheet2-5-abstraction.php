<?php
// Class abstrak Pengguna
abstract class Pengguna2 { 
    protected $nama; //Menentukan properti dengan protected

    //Menambahkan Constructor
    public function __construct($nama) 
    {
        $this->nama = $nama;
    }

    public function getNama() 
    {
        return $this->nama;
        //Return untuk mengembalikan nilai
    }

    // Metode abstrak
    abstract public function aksesFitur();
}

// Class Mahasiswa yang mengimplementasikan metode abstrak
class Mahasiswa3 extends Pengguna2 {
    public function aksesFitur() 
    {
        return $this->getNama() . " bisa mengakses fitur perkuliahan.";
        //Return untuk mengembalikan nilai
    }
}

// Class Dosen yang mengimplementasikan metode abstrak
class Dosen3 extends Pengguna2 {
    public function aksesFitur() 
    {
        return $this->getNama() . " bisa mengakses fitur pengajaran.";
        //Return untuk mengembalikan nilai
    }
}

// Instansiasi objek dan panggil metode aksesFitur()
$mahasiswa3 = new Mahasiswa3("Sehlla");
$dosen3 = new Dosen3("Prof. Damian");

echo $mahasiswa3->aksesFitur();  // Output: Sehlla bisa mengakses fitur perkuliahan.
echo "<br>";
echo $dosen3->aksesFitur();      // Output: Prof. Damian bisa mengakses fitur pengajaran.
echo "<br>";
?>
