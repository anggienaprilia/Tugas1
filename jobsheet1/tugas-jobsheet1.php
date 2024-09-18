<?php //Membuka dokumen PHP 
class Dosen{ //1. Membuat Class dan Atribut
    public $nama; //Atribut 1 (nama)
    public $nip; //Atribut 2 (nip)
    public $mataKuliah; //Atribut 3 (mata kuliah)

    //Menambahkan Constructor
    public function __construct($nama, $nip, $mataKuliah)
    {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    //2. Membuat metode tampilkanDosen()
    public function tampilkanDosen()
    {
        return "Dosen: $this->nama, NIP: $this->nip mengajar Mata Kuliah: $this->mataKuliah.";
        //Return digunakan untuk mengembalikan nilai
    }
}

//3. Instansiasi objek dari class Dosen
$dosen1 = new Dosen("Prih Diantono Abda'u, S.Kom., M.Kom.","199008082019031017", "Praktikum PWeb2");
echo $dosen1->tampilkanDosen();

//Menutup dokumen PHP
?>
