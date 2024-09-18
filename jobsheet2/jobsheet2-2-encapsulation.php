<?php //Membuka dokumen PHP
class Mahasiswa1 {
    //2A. Properti Atribut menjadi Private (Encapsulation)
    private $nama; //Menentukan properti dengan private
    private $nim; //Menentukan properti dengan private
    private $jurusan; //Menentukan properti dengan private

    //Menambahkan Constructor
    public function __construct($nama, $nim, $jurusan) 
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //2B. Membuat atribut nama menggunakan metode getter
    public function getNama() //Metode getNama untuk mendapatkan data nama
    { 
        return $this->nama;
        //Return untuk mengembalikan nilai
    }

    //2B. Membuat atribut nama menggunakan metode setter
    public function setNama($nama) //Metode setNama untuk menetapkan atau mengubah nilai nama
    {
        $this->nama = $nama;
    }

    //2B. Membuat atribut nim menggunakan metode getter
    public function getNim() //Metode getNim untuk mendapatkan data nim
    {
        return $this->nim;
        //Return untuk mengembalikan nilai
    }

    //2B. Membuat atribut nim menggunakan metode setter
    public function setNim($nim) //Metode setNim untuk menetapkan atau mengubah nilai nim
    {
        $this->nim = $nim;
    }

    //2B. Membuat atribut jurusan menggunakan metode getter
    public function getJurusan() //Metode getJurusan untuk mendapatkan data jurusan
    {
        return $this->jurusan;
        //Return untuk mengembalikan nilai
    }

    //2B. Membuat atribut nama menggunakan metode setter
    public function setJurusan($jurusan) //Metode setJurusan untuk menetapkan atau mengubah nilai jurusan
    {
        $this->jurusan = $jurusan;
    }

    //Metode untuk menampilkan data mahasiswa
    public function tampilkanData() 
    {
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan.";
        //Return untuk mengembalikan nilai
    }
}

//Demonstrasi penggunaan getter dan setter
$mahasiswa1 = new Mahasiswa1("Anggie", "230202074", "JKB");
echo $mahasiswa1->tampilkanData();
echo "<br>";

//Mengubah data menggunakan setter
$mahasiswa1->setNama("Anggie Nurul Aprilia");
$mahasiswa1->setJurusan("Komputer dan Bisnis");

echo $mahasiswa1->tampilkanData();
echo "<br>";

//Menutup dokumen PHP
?>