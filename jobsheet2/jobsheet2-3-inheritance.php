<?php //Membuka dokumen PHP
//3. Inheritance (Pewarisan)
class Pengguna { //3A. Membuat class Pengguna
    protected $nama; //Atribut nama dan properti protected

    //Menambahkan Constructor
    public function __construct($nama) 
    {
        $this->nama = $nama;
    }
    
    //3A. Membuat atribut nama menggunakan metode getter
    public function getNama() //Metode getNama untuk mendapatkan data nama
    {
        return $this->nama;
        //Return untuk mengembalikan nilai
    }
}

//3B. Class Dosen yang mewarisi class Pengguna
class Dosen1 extends Pengguna { //Membuat subclass menggunakan extends
    //Menambahkan atribut Mata Kuliah 
    private $mataKuliah; //Properti private artinya hanya dapat diakses dari dalam kelas Dosen saja

    //Menambahkan Constructor
    public function __construct($nama, $mataKuliah) 
        //Constructor kelas Dosen menerima dua argumen ($nama, $mataKuliah)
    {
        parent::__construct($nama); // Memanggil konstruktor dari parent class
        $this->mataKuliah = $mataKuliah;
    }

    //3C. Menambahkan metode menampilkan data Dosen
    public function tampilkanDataDosen() 
    {
        return "Nama Dosen: " . $this->getNama() . ", Mata Kuliah: " . $this->mataKuliah;
        //Return untuk mengembalikan nilai
    }
}

//Instansiasi objek dari class Dosen
$dosen1 = new Dosen1("Andi Prasetyo", "Pemrograman PHP");

//Tampilkan data dosen
echo $dosen1->tampilkanDataDosen();
echo "<br>";

//Menutup dokumen PHP
?>