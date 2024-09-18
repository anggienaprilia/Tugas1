<b>
Nama   : Anggie Nurul Aprilia <br>
Kelas  : TI 2D <br>
NPM    : 230202074
</b>

<h2><b><u>Pemrograman Berorientasi Objek (OOP)</u></b></h2>

<p>Object-Oriented Programming (OOP) adalah paradigma pemrograman yang berfokus pada konsep objek. Penggunaan kelas dan objek adalah inti dari pemrograman berorientasi objek (OOP).</p>

<p> Dalam PHP, kelas digunakan untuk mendefinisikan struktur dan perilaku objek, sedangkan objek adalah instansiasi dari kelas tersebut.</p>

<p>Prinsip prinsip dasar OOP termasuk Encapsulation, Inheritance, Polymorphism, dan Abstraction yang memungkinkan kode lebih modular, terstruktur, dan mudah dipelihara.</p>

<b>Konsep dasar OOP</b>
<br>1. Kelas <i>(Class)</i></br>
Class adalah <u><i>blueprint</i> atau template yang digunakan untuk membuat objek</u>. Class mendefinisikan atribut <i>(properties)</i> dan metode <i>(methods)</i> yang dimiliki oleh objek yang dibuat dari class tersebut.

![image](https://github.com/user-attachments/assets/73016302-b8f6-4ea8-8bf6-e66de7ae0baa)
</p>

<p>
2. Objek <i>(Object)</i>
<br>Objek adalah <u>instansi dari sebuah class</u>. Instansiasi objek adalah proses pembuatan objek berdasarkan cetakan atau blueprint yang disebut kelas (class) dalam pemrograman berorientasi objek (OOP). Ketika sebuah objek diinstansiasi, sebuah instance baru dari kelas tersebut dibuat di memori, dan properti serta metode kelas tersebut dapat diakses melalui objek tersebut.
</br>

![objek](https://github.com/user-attachments/assets/af0bcfb1-6c85-46c7-ac60-7d50e15a1a97)
</p>

<p>
3. Atribut <i>(Properti)</i>
<br>Atribut adalah variabel yang didefinisikan dalam sebuah <u>class dan keadaan dari objek</u> yang dibuat dari class tersebut.</br>

![image](https://github.com/user-attachments/assets/c2041d89-12ef-4ed5-bad6-9a1a2a57e058)
</p>

<p>
4. Metode <i>(Method)</i>
<br>Metode adalah <u>fungsi yang didefinisikan atau dilakukan di dalam sebuah class</u>.</br>

![image](https://github.com/user-attachments/assets/930ee3e9-0664-4e47-a0e2-e854b9ff81f6)
</p>
<hr>

<p><b>Prinsip OOP</b>
<br>1. <i>Encapsulation</i> (Enkapsulasi): </br>
Prinsip ini bertujuan untuk <u>membungkus data (atribut) dan metode (fungsi) yang memanipulasi data tersebut</u> dalam satu unit yang disebut class, serta mengontrol akses ke data tersebut. Enkapsulasi memungkinkan pengguna untuk membatasi akses langsung ke atribut dari luar class, dengan menyediakan mekanisme yang aman dan terkontrol untuk mengakses dan mengubah nilai atribut.</br>

![enkap-1](https://github.com/user-attachments/assets/c8e5143b-1d56-4166-a5aa-ec4840ea37cb) <br>
![enkap-2](https://github.com/user-attachments/assets/cfdb4947-41e5-4609-8c2c-1a362c7bacbd)

<br>Tujuan Utama Enkapsulasi<br>
a) Menyembunyikan detail implementasi.<br>
b) Mencegah manipulasi data yang tidak diinginkan.<br>
c) Keamanan dan integritas data.<br>

<br>Tingkat akses dalam Enkapsulasi<br>
- Public: Dapat diakses dari mana saja.<br>
- Private: Hanya dapat diakses dalam kelas itu sendiri.<br>
- Protected: Dapat diakses oleh kelas itu sendiri dan kelas turunannya.

</p>
2. <i>Inheritance</i> (Pewarisan):
<br>Prinsip dalam Object-Oriented Programming (OOP) yang memungkinkan <u>sebuah class untuk mewarisi properti (atribut) dan metode dari class lain.</u></br>

![inherit-1](https://github.com/user-attachments/assets/6f1a2ca2-a5ee-457f-9433-a8cff9bb3df7) <br>
![inherit-2](https://github.com/user-attachments/assets/59ca123a-ef12-46f8-b729-88032ac2bd8c)

<br>Konsep utama Inheritance</br>
- Single Inheritance. <br>
- Hierarchical Inheritance. <br>
- Multilevel Inheritance. <br>
- Metode Overriding.
</p>

<p>
3. <i>Polymorphism</i> (Polimorfisme):
<br>Prinsip dalam Object-Oriented Programming (OOP) memungkinkan <u>objek dari class yang berbeda untuk merespons metode yang sama dengan cara yang berbeda.</u></br>

<br>Jenis Polymorphism<br>
a) Metode Overriding.<br>
b) Metode Overloading.<br>

![poly-1](https://github.com/user-attachments/assets/f9bcac71-710c-49d5-b1c3-1d5b77e50284) <br>
![poly-2](https://github.com/user-attachments/assets/435e9324-3a66-4dad-bfb8-f90b63beb645) <br>
![poly-3](https://github.com/user-attachments/assets/8d4e5d4b-46be-405f-b0d6-c30d458eb496)
<p>

<p>
4. <i>Abstraction</i> (Abstraksi):
<br> Prinsip yang bertujuan untuk <u>menyembunyikan detail implementasi yang tidak diperlukan</u> dan hanya menampilkan aspek-aspek penting atau antarmuka kepada pengguna.</br>

![abstrak-1](https://github.com/user-attachments/assets/dfb163b6-3221-4e4b-aff5-c36cf222af49) <br>
![abstrak-2](https://github.com/user-attachments/assets/ca955f75-7e8b-4646-8525-dcb59bd90998)

<br>Tujuan Abstraksi</br>
- Menyederhanakan kompleksitas. <br>
- Memisahkan antarmuka dari implementasi. <br>
- Mengurangi duplikasi kode.

<p>Kelas abstrak harus diturunkan agar dapat digunakan, karena kelas abstrak tidak bisa diinstansiasi secara langsung. Dengan kata lain, objek tidak dapat dibuat dari kelas abstrak itu sendiri. Kelas abstrak hanya berfungsi sebagai kerangka atau template bagi kelas turunan <i>(subclass)</i>.</p>
</p>
<hr>

<b>Metode Getter dan Setter pada OOP</b>
<br>Dalam OOP, terlebih ketika menggunakan prinsip encapsulation (pembungkusan), dimana data dibungkus dengan modifier private agar tidak bisa diakses secara langsung dari luar class, biasanya terdapat sebuah metode yang sering digunakan. Metode tersebut adalah metode setter dan getter. 

<br> Metode yang tugasnya untuk mengambil dan mengisi data ke dalam objek, pada kenyataan metode setter dan getter memiliki fungsi yang berbeda. Metode setter memungkinkan untuk menetapkan atau mengubah nilai pada properti dengan aturan tertentu. Sedangkan, metode getter memungkinkan untuk membaca atau mendapatkan nilai dari properti dengan modifier private atau terproteksi sebuah kelas.

<br> Contoh penggunaan setter dan getter pada kelas Buku:
![image](https://github.com/user-attachments/assets/5d419d33-4dcc-4532-8629-f3bfa9383aa2)
<br>Pada coding diatas, metode getter (get) digunakan untuk mendapatkan data dari judul (properti/atribut) dalam kelas Buku, dan metode setter (set) digunakan untuk menetapkan atau mengubah nilai(value) dari properti judul. 

<br>Penjelasannya:
- $buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo"); => Menunjukkan bahwa terdapat penambahan objek bernama 'buku1' pada kelas 'Buku' dengan nilai (value) untuk properti judul berisi Pemrograman PHP, dan properti penulis berisi Andi Prasetyo.
- echo $buku->getJudul(); => Menunjukkan metode getJudul() dipanggil pada objek $buku1. Metode getJudul() ini akan mengembalikan judul buku, sehingga yang akan ditampilkan dari pemanggilan meotde ini adalah nilai judul buku yaitu Pemrograman PHP.
<br>
<hr>

# Jobsheet1
<b>Instruksi Kerja</b>
<br>![image](https://github.com/user-attachments/assets/231a043c-8a1d-499c-b35d-3fae0629a94e)

<br><b>Coding instruksi kerja</b>
<br>![image](https://github.com/user-attachments/assets/54b26bcf-150b-4969-8dac-6f563af30ce6)
<br>![image](https://github.com/user-attachments/assets/3b6b5f0d-5978-44ca-9d10-2050aa7db612)

<b>Output instruksi kerja</b>
<br>![image](https://github.com/user-attachments/assets/2a89074d-75b7-48b4-a456-6cb047f354a8)

<b>Tugas jobsheet 1</b>
<br>![image](https://github.com/user-attachments/assets/ad0cf76a-8c15-4e11-ac6e-cb7a8727a8af)

<b>Output tugas jobsheet 1</b>
<br>![image](https://github.com/user-attachments/assets/41729448-7d1e-4104-b799-a982633f61de)

# Jobsheet2
![image](https://github.com/user-attachments/assets/b27188ba-10f7-4867-9381-e2fc2eae9fb0)

<br><b>Coding No 1. Membuat Class dan Object</b>
<br>![image](https://github.com/user-attachments/assets/1bf79eb5-4417-4bf3-8e79-87c0f1ff4ecf)

<b>Output No. 1</b>
<br>![image](https://github.com/user-attachments/assets/1ca791be-663f-49aa-ab7d-c41be433e021)

<br><b>Coding No 2. Encapsulation</b>
<br>![image](https://github.com/user-attachments/assets/5e2c4b6e-98c5-48d5-a06f-5f7a3c208459)
<br>![image](https://github.com/user-attachments/assets/3d1de7f9-7b26-4542-8326-4e0c4d5ef88a)
<br>![image](https://github.com/user-attachments/assets/00e3c143-b6d9-4406-a7ea-ba638bf0e3b1)

<b>Output No. 2</b>
<br>![image](https://github.com/user-attachments/assets/9dd840fd-400a-42ad-8e4d-8dda36e2bc1d)

<br><b>Coding No 3. Inheritance</b>
<br>![image](https://github.com/user-attachments/assets/86a33fac-7555-46b2-860e-107da87276a0)
<br>![image](https://github.com/user-attachments/assets/b2286ebb-14ba-40a3-a938-96b2c1ad7bb3)

<b>Output No. 3</b>
<br>![image](https://github.com/user-attachments/assets/105b6421-179e-43eb-8612-6796f872857c)

<br><b>Coding No 4. Polymorphism</b>
<br>![image](https://github.com/user-attachments/assets/09925b78-47cc-4a96-a328-39c190714ef3)
<br>![image](https://github.com/user-attachments/assets/31d3b7cc-1ca9-41fe-8b8a-d947c38fd4f4)

<b>Output No. 4</b>
<br>![image](https://github.com/user-attachments/assets/56aee421-f93c-45a1-9d54-cb172744e011)

<br><b>Coding No 5. Abstraction</b>
<br>![image](https://github.com/user-attachments/assets/17560eb1-635e-4233-850a-2ea53726b355)
<br>![image](https://github.com/user-attachments/assets/66664dff-69ad-450f-bd7a-d1567422a8a7)

<b>Output No. 5</b>
<br>![image](https://github.com/user-attachments/assets/2ed909c3-fd21-4518-b268-cf875292cf3e)

# Jobsheet3
<br>![image](https://github.com/user-attachments/assets/edad03ac-9472-4100-b8c3-c3625a600f2a)
<br>![image](https://github.com/user-attachments/assets/99cbca72-4c49-4b18-8d33-2e786d40c132)

<b>Tugas jobsheet 3 - 1. Inheritance dan Polymorphism</b>
- <i>Class Person</i>
<br>![image](https://github.com/user-attachments/assets/7d58007d-1434-4c90-9479-0ceaef1dc9bd)
- <i>Class Student</i> mewarisi Class Person
<br>![image](https://github.com/user-attachments/assets/9d0e704d-3e30-44d6-85e4-0d01eb3a0309)
<br>![image](https://github.com/user-attachments/assets/92c6f4d0-6ba2-45e1-b1dc-6e7644182b77)
- <i>Class Teacher</i> mewarisi Class Person
<br>![image](https://github.com/user-attachments/assets/03b9b3de-a365-459b-b9f5-91417ee2bf73)
<br>![image](https://github.com/user-attachments/assets/a1123020-0e4e-4657-8f51-a93154c64ff5)

<b>Demonstrasi Inheritance dan Polymorphism </b>
<br>![image](https://github.com/user-attachments/assets/c8316769-56c0-485b-b03d-0bfc19df59e1)

<b>Output Inheritance dan Polymorphism </b>
<br>![image](https://github.com/user-attachments/assets/72f5b828-2a0e-4989-a77a-5607c9252f81)

<b>Tugas jobsheet 3 - 2. Abstraction</b>
- <i>Class Course</i>
<br>![image](https://github.com/user-attachments/assets/bf8b53d5-b5b7-4c56-b997-ee76ef7d3b8e)
- <i>Class OnlineCourse mewarisi Class Course</i>
<br>![image](https://github.com/user-attachments/assets/6b96909a-af2b-4386-9300-e46a8c8eccc3)
- <i>Class OfflineCourse mewarisi Class Course </i>
<br>![image](https://github.com/user-attachments/assets/4f265efc-7096-4406-9318-18abba029771)

<b>Demonstrasi Abstraction</b>
<br>![image](https://github.com/user-attachments/assets/d2a16faa-ca92-4c29-b87e-0a0be156f446)

<b>Output Abstraction</b>
<br>![image](https://github.com/user-attachments/assets/23331854-52a3-48a1-ae67-00038ac50ed7)

<b>Tugas jobsheet 3 - 3. Encapsulation dan Inheritance</b>
- <i>Class Dosen mewarisi Class Teacher</i>
<br>![image](https://github.com/user-attachments/assets/cf401ab1-b878-45d1-8421-d9e7537a06e0)

- <i>Class Mahasiswa mewarisi Class Student</i>
<br>![image](https://github.com/user-attachments/assets/49e92c6a-b6c4-4173-b130-8b58e610d56e)

<b>Demonstrasi Encapsulation</b>
<br>![image](https://github.com/user-attachments/assets/03ba8384-e7b7-4ac1-9635-820ca734ba13)

<b>Output Encapsulation</b>
<br>![image](https://github.com/user-attachments/assets/3f581a4b-26bf-4ade-975f-c26f342c6d0f)

<b>Tugas jobsheet 3 - 4. Abstraction jurnal</b>
- <i>Class abstrak Jurnal</i>
<br>![image](https://github.com/user-attachments/assets/d4c3a6ec-74c1-4a76-8ddb-93269daabeca)

- <i>Class JurnalDosen mewarisi Class Jurnal</i>
<br>![image](https://github.com/user-attachments/assets/9e0eb7db-f6cd-454b-9b8d-309287caa5aa)

- <i>Class JurnalMahasiswa mewarisi Class Jurnal</i>
<br>![image](https://github.com/user-attachments/assets/6fa2d701-d699-4722-aa9a-3266b9738d8c)

<b>Demonstrasi Abstraction jurnal</b>
<br>![image](https://github.com/user-attachments/assets/a70aa7e7-bc12-4b3b-970a-dda953963007)

<b>Output Abstraction jurnal</b>
<br>![image](https://github.com/user-attachments/assets/7e4612e0-22bd-44af-94c4-0f3f1f1351a6)
<hr>
