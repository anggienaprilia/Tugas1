<H3><b><u>Pemrograman Berorientasi Objek (OOP)</u></b></H3>

<p>Object-Oriented Programming (OOP) adalah paradigma pemrograman yang berfokus pada konsep objek. Penggunaan kelas dan objek adalah inti dari pemrograman berorientasi objek (OOP).</p>

<p> Dalam PHP, kelas digunakan untuk mendefinisikan struktur dan perilaku objek, sedangkan objek adalah instansiasi dari kelas tersebut.</p>

<p>Prinsip prinsip dasar OOP termasuk Encapsulation, Inheritance, Polymorphism, dan Abstraction yang memungkinkan kode lebih modular, terstruktur, dan mudah dipelihara.</p>

<b>Konsep dasar OOP</b>
<br>1. Kelas <i>(Class)</i></br>
Class adalah <u><i>blueprint</i> atau template yang digunakan untuk membuat objek</u>. Class mendefinisikan atribut <i>(properties)</i> dan metode <i>(methods)</i> yang dimiliki oleh objek yang dibuat dari class tersebut.
![image](https://github.com/user-attachments/assets/73016302-b8f6-4ea8-8bf6-e66de7ae0baa)
</p>
2. Objek <i>(Object)</i>
<br>Objek adalah <u>instansi dari sebuah class</u>.</br>
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

<p><b>Prinsip OOP</b>
<br>1. <i>Encapsulation</i> (Enkapsulasi): </br>
Prinsip ini bertujuan untuk <u>membungkus data (atribut) dan metode (fungsi) yang memanipulasi data tersebut</u> dalam satu unit yang disebut class, serta mengontrol akses ke data tersebut. Enkapsulasi memungkinkan pengguna untuk membatasi akses langsung ke atribut dari luar class, dengan menyediakan mekanisme yang aman dan terkontrol untuk mengakses dan mengubah nilai atribut.<br>
<br>Tujuan Utama Enkapsulasi</br>
a) Menyembunyikan detail implementasi.<br>
b) Mencegah manipulasi data yang tidak diinginkan.<br>
c) Keamanan dan integritas data.<br>
<br>Tingkat akses dalam Enkapsulasi</br>
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
b) Metode Overloading.
<p>

<p>
4. <i>Abstraction</i> (Abstraksi):
<br> Prinsip yang bertujuan untuk <u>menyembunyikan detail implementasi yang tidak diperlukan</u> dan hanya menampilkan aspek-aspek penting atau antarmuka kepada pengguna.</br>

<br>Tujuan Abstraksi</br>
- Menyederhanakan kompleksitas. <br>
- Memisahkan antarmuka dari implementasi. <br>
- Mengurangi duplikasi kode.

<p>Kelas abstrak harus diturunkan agar dapat digunakan, karena kelas abstrak tidak bisa diinstansiasi secara langsung. Dengan kata lain, objek tidak dapat dibuat dari kelas abstrak itu sendiri. Kelas abstrak hanya berfungsi sebagai kerangka atau template bagi kelas turunan <i>(subclass)</i>.</p>
</p>
