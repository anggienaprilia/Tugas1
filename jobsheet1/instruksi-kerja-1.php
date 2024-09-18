<?php //Membuka dokumen PHP
//1A. Membuat Class dan Object
class Mahasiswa{ //Class Mahasiswa
    public $nama; //Atribut 1 (Nama)
    public $nim; //Atribut 2 (NIM)
    public $jurusan; //Atribut 3 (Jurusan)

    //2A-B. Menambahkan Constructor
    public function __construct($nama, $nim, $jurusan)
    { /*Constructor digunakan untuk mengatur nilai awal 
        dari atribut saat objek dibuat*/
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //1B. Metode menampilkan data Mahasiswa
    public function tampilkanData() 
    {
        return "Mahasiswa: $this->nama NIM $this->nim dari Jurusan $this->jurusan.";
        //Return digunakan untuk mengembalikan nilai
    }

    //3A. Metode untuk mengupdate Jurusan
    public function updateJurusan($jurusanBaru) //Metode untuk mengubah jurusan
    {
        $this->jurusan = $jurusanBaru;
    }

    //4A. Metode setter untuk mengubah NIM
    public function setNim($nimBaru) 
    {
        $this->nim = $nimBaru;
    }
}

//1C. Instansiasi objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa("Anggie Nurul Aprilia", "230202071", "Teknik Informatika");

//1C. Tampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
echo "<br>";

//3B. Ubah jurusan menggunakan metode updateJurusan
$mahasiswa1->updateJurusan("D3-Teknik Informatika");
echo "<b>Setelah jurusan diubah:</b><br>"; 
echo $mahasiswa1->tampilkanData();
echo "<br>";

//4B. Ubah nilai NIM menggunakan metode setNim
$mahasiswa1->setNim("230202074");
echo "<b>Setelah NIM diubah:</b><br>";
echo $mahasiswa1->tampilkanData();

//Menutup dokumen PHP
?>
