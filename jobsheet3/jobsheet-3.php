<?php //Membuka dokumen PHP
//1. Inheritance
//Class Person sebagai class induk untuk Dosen dan Mahasiswa
class Person {
    //Atribut name bersifat protected sehingga dapat diakses oleh class turunan
    protected $name;

    //Konstruktor untuk menginisialisasi atribut name
    public function __construct($name) 
    {
        $this->name = $name;
    }

    //Metode untuk mengembalikan nama person
    public function getName() 
    {
        return $this->name;
    }

    //Polymorphism: Metode getRole di-override di class turunan
    public function getRole() 
    {
        return "Person";
    }
}

//Class Student yang mewarisi class Person
class Student extends Person {
    //Atribut private, hanya bisa diakses melalui setter dan getter (Encapsulation)
    private $studentID;

    //Konstruktor yang menginisialisasi atribut name dan studentID
    public function __construct($name, $studentID) 
    {
        //Memanggil konstruktor dari class Person
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    //Override method getName untuk menampilkan format berbeda
    public function getName() 
    {
        return "Mahasiswa: " . $this->name;
    }

    //Getter untuk studentID
    public function getStudentID() 
    {
        return $this->studentID;
    }

    //Setter dan getter untuk Encapsulation
    public function setName($name) 
    {
        $this->name = $name;
    }

    public function setStudentID($studentID)
    {
        $this->studentID = $studentID;
    }

    //Override getRole untuk Polymorphism
    public function getRole() 
    {
        return "Mahasiswa";
    }
}

//Class Teacher yang juga mewarisi class Person
class Teacher extends Person {
    //Atribut private, hanya bisa diakses melalui setter dan getter (Encapsulation)
    private $teacherID;

    //Konstruktor yang menginisialisasi atribut name dan teacherID
    public function __construct($name, $teacherID) 
    {
        //Memanggil konstruktor dari class Person
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    //Override method getName untuk format berbeda
    public function getName() 
    {
        return "Dosen: " . $this->name;
    }

    //Getter untuk teacherID
    public function getTeacherID() 
    {
        return $this->teacherID;
    }

    //Override getRole untuk Polymorphism
    public function getRole() 
    {
        return "Dosen";
    }

    //Setter untuk teacherID
    public function setTeacherID($teacherID) {
        $this->teacherID = $teacherID;
    }
}

//2. Abstraction
//Class abstrak Course yang berfungsi sebagai kerangka dasar
abstract class Course {
    protected $courseName;

    //Konstruktor untuk inisialisasi nama kursus
    public function __construct($courseName) 
    {
        $this->courseName = $courseName;
    }

    //Metode abstrak yang harus diimplementasikan oleh class turunan
    abstract public function getCourseDetails();
}

//Class OnlineCourse yang mengimplementasikan class Course
class OnlineCourse extends Course {
    private $platform;

    //Konstruktor untuk inisialisasi nama kursus dan platform
    public function __construct($courseName, $platform) 
    {
        parent::__construct($courseName);
        $this->platform = $platform;
    }

    //Implementasi metode abstrak getCourseDetails
    public function getCourseDetails() 
    {
        return "Kursus: $this->courseName, Platform: $this->platform.";
    }
}

//Class OfflineCourse yang mengimplementasikan class Course
class OfflineCourse extends Course {
    private $location;

    //Konstruktor untuk inisialisasi nama kursus dan lokasi
    public function __construct($courseName, $location) 
    {
        parent::__construct($courseName);
        $this->location = $location;
    }

    //Implementasi metode abstrak getCourseDetails
    public function getCourseDetails() 
    {
        return "Kursus: $this->courseName, Lokasi: $this->location.";
    }
}

//3. Encapsulation dan Inheritance dalam Dosen dan Mahasiswa
//Class Dosen mewarisi dari Teacher dan menambahkan atribut NIDN
class Dosen extends Teacher {
    private $nidn; //Atribut private, dilindungi oleh Encapsulation

    //Konstruktor untuk inisialisasi atribut
    public function __construct($name, $teacherID, $nidn) 
    {
        parent::__construct($name, $teacherID);
        $this->nidn = $nidn;
    }

    //Setter untuk NIDN
    public function setNIDN($nidn) 
    {
        $this->nidn = $nidn;
    }

    //Getter untuk NIDN
    public function getNIDN() 
    {
        return $this->nidn;
    }
}

//Class Mahasiswa mewarisi dari Student dan menambahkan atribut NIM
class Mahasiswa extends Student {
    private $nim; //Atribut private, dilindungi oleh Encapsulation

    //Konstruktor untuk inisialisasi atribut
    public function __construct($name, $studentID, $nim) 
    {
        parent::__construct($name, $studentID);
        $this->nim = $nim;
    }

    //Setter untuk NIM
    public function setNIM($nim) 
    {
        $this->nim = $nim;
    }

    //Getter untuk NIM
    public function getNIM() 
    {
        return $this->nim;
    }
}

//4. Abstraction untuk pengelolaan jurnal
//Class abstrak Jurnal sebagai kerangka dasar
abstract class Jurnal {
    protected $title;

    //Konstruktor untuk inisialisasi judul jurnal
    public function __construct($title) 
    {
        $this->title = $title;
    }

    //Metode abstrak untuk pengajuan jurnal
    abstract public function submitJurnal();
}

//Class JurnalDosen yang mengimplementasikan Jurnal
class JurnalDosen extends Jurnal {
    private $nidn;

    //Konstruktor untuk inisialisasi judul dan NIDN dosen
    public function __construct($title, $nidn) 
    {
        parent::__construct($title);
        $this->nidn = $nidn;
    }

    //Implementasi submitJurnal untuk Dosen
    public function submitJurnal() 
    {
        return "Dosen dengan NIDN $this->nidn telah mengajukan jurnal berjudul '$this->title'.";
    }
}

//Class JurnalMahasiswa yang mengimplementasikan Jurnal
class JurnalMahasiswa extends Jurnal {
    private $nim;

    //Konstruktor untuk inisialisasi judul dan NIM mahasiswa
    public function __construct($title, $nim) 
    {
        parent::__construct($title);
        $this->nim = $nim;
    }

    //Implementasi submitJurnal untuk Mahasiswa
    public function submitJurnal() 
    {
        return "Mahasiswa dengan NIM $this->nim telah mengajukan jurnal berjudul '$this->title'.";
    }
}

//Demonstrasi penggunaan inheritance, polymorphism, encapsulation, dan abstraction

echo "<b>Demonstrasi Inheritance dan Polymorphism: </b><br>";
$mahasiswa = new Mahasiswa("Gekara Akhiel", "12345", "1234567890");
$dosen = new Dosen("Prof. Damian", "5678970", "9876543210");

echo $mahasiswa->getName() . "<br>"; //Output: Mahasiswa: Gekara Akhiel
echo $mahasiswa->getRole() . "<br>"; //Output: Mahasiswa

echo $dosen->getName() . "<br>"; //Output: Dosen: Prof. Damian
echo $dosen->getRole() . "<br>"; //Output: Dosen

echo "<b>Demonstrasi Encapsulation: </b><br>";
$mahasiswa->setName("Janeya Medley");
$mahasiswa->setNIM("8765432109");
echo "Nama Mahasiswa: " . $mahasiswa->getName() . ", NIM: " . $mahasiswa->getNIM() . "<br>";  //Output setelah diubah

$dosen->setNIDN("76543210980");
echo "Nama Dosen: " . $dosen->getName() . ", NIDN: " . $dosen->getNIDN() . "<br>";  //Output setelah diubah

echo "<b>Demonstrasi Abstraction: </b><br>";
$onlineCourse = new OnlineCourse("Pemrograman PHP", "Udemy");
$offlineCourse = new OfflineCourse("Jaringan Komputer", "Kampus IT");

echo $onlineCourse->getCourseDetails() . "<br>"; //Output detail kursus online
echo $offlineCourse->getCourseDetails() . "<br>"; //Output detail kursus offline

echo "<b>Demonstrasi Jurnal (Abstraction): </b><br>";
$jurnalDosen = new JurnalDosen("Penelitian AI", "987654321");
$jurnalMahasiswa = new JurnalMahasiswa("Tugas Akhir", "87654321");

echo $jurnalDosen->submitJurnal() . "<br>"; //Output pengajuan jurnal dosen
echo $jurnalMahasiswa->submitJurnal() . "<br>"; //Output pengajuan jurnal mahasiswa

//Menutup dokumen PHP
?>
