# UTS Back-End Web Development

#### Nama  : I Gede Diva Ari Yuda
#### NIM   : 220040126
#### Kelas : UG224
#### Mata Kuliah : Back-end Web Development

## 1. Konfigurasi Sistem

### Struktur Direktori

#### **Direktori `public`**:
 - `index.php`
   Merupakan titik masuk utama (entry point) pada website. Ketika pengguna mengakses website, file `index.php` akan menjadi file yang pertama kali dieksekusi. Tugas utamanya adalah menerima permintaan HTTP dari pengguna, memeriksa jenis permintaan (GET, POST, PUT, DELETE), dan mengarahkannya ke Controller yang sesuai untuk memproses permintaan tersebut. Namun, Saat ini, file `index.php` hanya berisi header yang menampilkan pesan "XYZ Sales API End Point".

#### **Direktori `src`**:
##### **Subdirektori `Controller`**:
   - `CustomerController.php`
     File ini bertanggung jawab menangani semua permintaan yang berkaitan dengan data pelanggan (customers). Tugasnya meliputi menampilkan daftar pelanggan, menambahkan pelanggan baru, memperbarui data pelanggan, dan menghapus data pelanggan. Controller ini akan berinteraksi dengan Model `Customers.php` untuk mengambil atau memanipulasi data pelanggan di database.

   - `SalesController.php`
     File ini bertanggung jawab menangani semua permintaan yang berkaitan dengan data penjualan (sales). Tugasnya meliputi menampilkan daftar penjualan, menambahkan data penjualan baru, memperbarui data penjualan, dan menghapus data penjualan. Controller ini akan berinteraksi dengan Model `Sales.php` untuk mengambil atau memanipulasi data penjualan di database.

   - `PurchaseController.php`
     File ini bertanggung jawab menangani semua permintaan yang berkaitan dengan data pembelian (purchases). Tugasnya meliputi menampilkan daftar pembelian, menambahkan data pembelian baru, memperbarui data pembelian, dan menghapus data pembelian. Controller ini akan berinteraksi dengan Model `Purchases.php` untuk mengambil atau memanipulasi data pembelian di database.

##### **Subdirektori `Model`**:
   - `Customers.php`
     Bertanggung jawab untuk berinteraksi dengan tabel `customers` di database. Model ini berisi fungsi-fungsi untuk melakukan operasi CRUD (Create, Read, Update, Delete) pada data pelanggan, seperti:
     - Mengambil daftar semua pelanggan
     - Mengambil data pelanggan berdasarkan ID
     - Menambahkan data pelanggan baru
     - Memperbarui data pelanggan
     - Menghapus data pelanggan

   - `Sales.php`
     Bertanggung jawab untuk berinteraksi dengan tabel `sales` di database. Model ini berisi fungsi-fungsi untuk melakukan operasi CRUD pada data penjualan, seperti:
     - Mengambil daftar semua penjualan
     - Mengambil data penjualan berdasarkan ID
     - Menambahkan data penjualan baru
     - Memperbarui data penjualan
     - Menghapus data penjualan

   - `Purchases.php`
     Bertanggung jawab untuk berinteraksi dengan tabel `purchases` di database. Model ini berisi fungsi-fungsi untuk melakukan operasi CRUD pada data pembelian, seperti:
     - Mengambil daftar semua pembelian
     - Mengambil data pembelian berdasarkan ID
     - Menambahkan data pembelian baru
     - Memperbarui data pembelian
     - Menghapus data pembelian

#### **Direktori `config`**:
   Didalamnya terdapat file `database.php` yang berisi konfigurasi untuk koneksi database. Ini mencakup informasi seperti host, nama pengguna, kata sandi, dan nama basis data (database) yang diperlukan untuk membuat koneksi ke server database. File ini digunakan oleh Model untuk membuat koneksi ke database dan melakukan operasi CRUD. Contohnya adalah sebagai berikut:

   ```php
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'db_xyz');
   define('DB_USER', 'admintugas');
   define('DB_PASS', 'ug224');
   ```

   Keterangan:
   - `DB_HOST`: Alamat host database (misalnya, `localhost`).
   - `DB_NAME`: Nama database yang akan digunakan (misalnya, `db_xyz`).
   - `DB_USER`: Nama pengguna untuk mengakses database.
   - `DB_PASS`: Kata sandi pengguna untuk mengakses database.

### Alur Kerja Sistem

1. Ketika pengguna mengakses aplikasi melalui browser atau klien HTTP lainnya, permintaan HTTP akan diterima oleh `index.php` di direktori `public`.
2. `index.php` akan memeriksa jenis permintaan HTTP (GET, POST, PUT, DELETE) dan rute yang diminta (misalnya, `/customers`, `/sales`, `/purchases`).
3. Berdasarkan jenis permintaan dan rute yang diminta, `index.php` akan mengarahkan permintaan tersebut ke Controller yang sesuai, seperti:
   - Permintaan terkait pelanggan akan diarahkan ke `CustomerController.php`
   - Permintaan terkait penjualan akan diarahkan ke `SalesController.php`
   - Permintaan terkait pembelian akan diarahkan ke `PurchaseController.php`
4. Controller yang sesuai akan memproses permintaan tersebut, seperti:
   - Jika permintaan adalah untuk menampilkan daftar pelanggan, `CustomerController.php` akan memanggil fungsi yang sesuai di `Customers.php` (Model) untuk mengambil data pelanggan dari database.
   - Jika permintaan adalah untuk menambahkan data penjualan baru, `SalesController.php` akan memanggil fungsi yang sesuai di `Sales.php` (Model) untuk menyimpan data penjualan ke database.
   - Jika permintaan adalah untuk memperbarui data pembelian, `PurchaseController.php` akan memanggil fungsi yang sesuai di `Purchases.php` (Model) untuk mengupdate data pembelian di database.
5. Model (`Customers.php`, `Sales.php`, atau `Purchases.php`) akan membuat koneksi ke database menggunakan konfigurasi yang terdapat di `config/database.php`.
6. Setelah data diperoleh atau dimanipulasi di database, Controller akan mengembalikan respons yang sesuai kepada pengguna yang melakukan permintaan.

Dengan konfigurasi sistem yang terstruktur dengan baik, seperti penataan direktori dan file yang terorganisir dengan jelas, serta alur kerja yang mudah dipahami, Website ini diharapkan dapat memberikan layanan yang handal kepada pengguna. Sehingga, pengguna dapat dengan mudah berinteraksi dengan Website ini melalui browser atau perangkat lainnya, dan sistem akan merespons dengan cepat dan akurat terhadap setiap permintaan yang diterima. Selain itu, pengaturan yang terstruktur juga membantu menjaga keamanan serta keutuhan data saat proses CRUD dilakukan, sehingga pengguna dapat merasa aman dalam menggunakan Website ini untuk kebutuhan bisnis atau aktivitas lainnya. Dengan semua komponen yang terkoneksi dengan baik, Website ini siap untuk membantu mempermudah dan meningkatkan efisiensi dalam pengelolaan data pelanggan, penjualan, dan pembelian.

## 2. Refleksi Diri

Menghadapi proyek Ulangan Tengah Semester Back-end Web Development yang dikerjakan secara mandiri menjadi pengalaman yang sangat menantang untuk diri Saya. Berikut adalah refleksi diri terkait dengan proyek tersebut:

1. **Tantangan Teknis:**
   - Saya mengalami tantangan yang sangat besar dalam memahami konsep-konsep yang kompleks dalam proyek UTS Back-End ini, seperti pemrosesan data dari database, manajemen koneksi, atau penggunaan PDO.
   - **Cara Mengatasinya:** Perlu untuk memperdalam pemahaman terhadap konsep-konsep tersebut dengan membaca dokumentasi, menonton tutorial online dari platform Youtube, serta mencari sumber belajar lainnya.

2. **Manajemen Waktu:**
   - Kesulitan untuk mengatur waktu dengan efisien antara pekerjaan lain, tugas kuliah, dan proyek ini.
   - **Cara Mengatasinya:** Membuat jadwal yang jelas dan realistis, serta mengalokasikan waktu secara proporsional untuk setiap tugas. Prioritaskan tugas-tugas yang penting dan putuskan untuk menyelesaikan proyek ini secara bertahap agar tidak terlalu menumpuk di akhir.

3. **Belum Pernah Mendapatkan Proyek Serupa:**
   - Ini merupakan proyek back-end pertama Saya, tentunya Saya mengalami kesulitan untuk memahami konsep-konsep dasar dan mengimplementasikannya dalam proyek ini dengan benar.
   - **Cara Mengatasinya:** Mempelajari dasar-dasar pengembangan back-end, seperti bahasa pemrograman PHP, konsep database, dan operasi CRUD. Selanjutnya, mempraktekkan konsep-konsep tersebut dengan membuat proyek-proyek kecil atau mengikuti tutorial online. Dengan berlatih secara konsisten, tentunya akan membuat Kita semakin terampil dalam pengembangan back-end.

Dengan kesabaran, ketekunan, dan kemauan untuk terus belajar, Saya dapat mengatasi tantangan dan kesulitan yang Saya hadapi dalam proyek ini. Walaupun hasilnya masih belum sempurna, tapi ingatlah bahwa setiap kesalahan atau rintangan adalah kesempatan untuk belajar dan meningkatkan kemampuan Kita sebagai pengembang website.