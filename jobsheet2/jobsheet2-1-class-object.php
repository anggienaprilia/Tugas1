<?php //Membuka dokumen PHP
// 1A. Membuat Class Mahasiswa
class Mahasiswa {
    //Menambahkan Atribut
    public $nama;
    public $nim;
    public $jurusan;

    //Menambahkan Constructor
    public function __construct($nama, $nim, $jurusan) 
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //Metode untuk menampilkan data mahasiswa
    public function tampilkanData() 
    {
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan.";
        //Return untuk mengembalikan nilai    
    }
}

//1C. Instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa("Anggie Nurul Aprilia", "230202074", "Komputer dan Bisnis");

//Tampilkan data mahasiswa
echo $mahasiswa->tampilkanData();
echo "<br>";

//Menutup dokumen PHP
?>
