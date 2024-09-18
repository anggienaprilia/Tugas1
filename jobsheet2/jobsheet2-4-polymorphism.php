<?php
//Class Pengguna dengan metode aksesFitur()
class Pengguna1 {
    public function aksesFitur() 
    {
        return "Pengguna bisa mengakses fitur umum.";
        //Return untuk mengembalikan nilai
    }
}

//Subclass Mahasiswa
class Mahasiswa2 extends Pengguna1 {
    public function aksesFitur() 
    {
        return "Mahasiswa bisa mengakses fitur perkuliahan.";
        //Return untuk mengembalikan nilai        
    }
}

//Subclass Dosen
class Dosen2 extends Pengguna1 {
    public function aksesFitur() 
    {
        return "Dosen bisa mengakses fitur pengajaran.";
    }
}

// Instansiasi objek dan panggil metode aksesFitur()
$mahasiswa2 = new Mahasiswa2();
$dosen1 = new Dosen2();

echo $mahasiswa2->aksesFitur(); //Output: Mahasiswa bisa mengakses fitur perkuliahan.
echo "<br>";
echo $dosen2->aksesFitur();//Output: Dosen bisa mengakses fitur pengajaran.
echo "<br>";

//Menutup dokumen PHP
?>