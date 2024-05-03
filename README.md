# UTS Back-End Web Development

## Nama  : I Gede Diva Ari Yuda
## NIM   : 220040126
## Kelas : UG224
## Matakuliah  : Back-end Web Development

### 1. Konfigurasi Sistem

#### Direktori `public`:

- `index.php`
  File ini berfungsi sebagai titik masuk utama (entry point) dari proyek UTS tersebut. Di dalamnya, terdapat file `index.php` yang bertugas menerima request HTTP dan melakukan pengarahan ke bagian Controller yang sesuai. Saat ini, file `index.php` hanya berisi header yang menampilkan pesan "XYZ Sales API End Point".

#### Direktori `src`:

##### Direktori `Controller`:

- `CustomerController.php`
  Controller ini bertanggung jawab untuk menangani segala sesuatu yang berkaitan dengan entitas pelanggan (customers). Ketika sebuah permintaan HTTP diterima, `CustomerController.php` akan memproses permintaan tersebut sesuai dengan tugasnya. Misalnya, jika permintaan adalah untuk menampilkan daftar semua pelanggan, `CustomerController.php` akan berinteraksi dengan Model `Customers.php` untuk mengambil data dari database dan kemudian mengembalikan respons yang sesuai kepada pengguna.

- `SalesController.php`
  Mirip dengan `CustomerController.php`, tetapi ditujukan untuk menangani permintaan terkait data penjualan. Ini mencakup operasi seperti menampilkan semua data penjualan, menampilkan data penjualan berdasarkan ID, menambah data penjualan baru, memperbarui data penjualan, atau menghapus data penjualan.

- `PurchaseController.php`
  Seperti `SalesController.php`, tetapi khusus untuk menangani permintaan terkait data pembelian. Controller ini akan menangani operasi seperti menampilkan semua data pembelian, menampilkan data pembelian berdasarkan ID, menambah data pembelian baru, memperbarui data pembelian, atau menghapus data pembelian.

##### Direktori `Model`:

- `Customers.php`
  Model ini bertanggung jawab untuk berinteraksi dengan data pelanggan di dalam basis data. Ini mencakup fungsi-fungsi untuk mengambil data pelanggan, menambahkan data pelanggan baru, memperbarui data pelanggan, menghapus data pelanggan, dan lain-lain. Ketika Controller membutuhkan akses ke data pelanggan, mereka akan berkomunikasi dengan Model ini untuk melakukan operasi-operasi tersebut.

- `Sales.php`
  Model untuk mengelola data penjualan. Seperti `Customers.php`, tetapi khusus untuk berinteraksi dengan data penjualan. Ini berisi fungsi-fungsi untuk operasi CRUD terhadap data penjualan, seperti mengambil data penjualan, menambah data penjualan, memperbarui data penjualan, dan menghapus data penjualan.

- `Purchases.php`
  Model untuk mengelola data pembelian. Sama seperti `Sales.php`, tetapi ditujukan untuk berinteraksi dengan data pembelian. Ini berisi fungsi-fungsi untuk mengambil data pembelian, menambah data pembelian, memperbarui data pembelian, dan menghapus data pembelian.

Dengan pemisahan yang jelas antara Direktori Controller dan Model, sistem menjadi lebih terstruktur dan lebih mudah untuk dimengerti dan dikelola. Controller bertanggung jawab untuk menangani logika sistem dan permintaan pengguna, sementara Model bertanggung jawab untuk berinteraksi dengan data di dalam basis data. Ini memungkinkan untuk melakukan perubahan pada logika sistem tanpa harus memodifikasi Model, maupun sebaliknya.

#### Direktori `config`:

- `database.php`
  File ini berisi konfigurasi untuk koneksi database. Ini mencakup informasi seperti host, nama pengguna, kata sandi, dan nama basis data yang diperlukan untuk membuat koneksi ke server database. File ini digunakan oleh Model untuk membuat koneksi ke database dan melakukan operasi CRUD.

Dengan struktur file seperti ini, sistem akan diorganisir dengan baik dan memungkinkan untuk memisahkan logika sistem dari presentasi dan konfigurasi. Ini memfasilitasi pengembangan yang lebih mudah, pemeliharaan yang lebih baik, dan pengujian unit yang efisien.

### 2. Refleksi Diri

Menghadapi proyek Ulangan Tengah Semester Back-End Web Development yang dikerjakan secara mandiri menjadi pengalaman yang sangat menantang. Berikut adalah refleksi diri terkait dengan proyek tersebut:

1. **Tantangan Teknis:**
   - Saya mengalami tantangan yang sangat besar dalam memahami konsep-konsep yang kompleks dalam proyek UTS Back-End ini, seperti pemrosesan data dari database, manajemen koneksi, atau penggunaan PDO.
   - **Cara Mengatasinya:** Perlu untuk memperdalam pemahaman terhadap konsep-konsep tersebut dengan membaca dokumentasi, menonton tutorial online dari platform Youtube, serta mencari sumber belajar lainnya.

2. **Manajemen Waktu:**
   - Kesulitan untuk mengatur waktu dengan efisien antara pekerjaan lain, tugas kuliah, dan proyek ini.
   - **Cara Mengatasinya:** Membuat jadwal yang jelas dan realistis, serta mengalokasikan waktu secara proporsional untuk setiap tugas. Prioritaskan tugas-tugas yang penting dan putuskan untuk menyelesaikan proyek ini secara bertahap agar tidak terlalu menumpuk di akhir.

3. **Belum Pernah Mendapatkan Proyek Serupa:**
   - Ini merupakan proyek back-end pertama Saya, tentunya Saya mengalami kesulitan untuk memahami konsep-konsep dasar dan mengimplementasikannya dalam proyek ini dengan benar.
   - **Cara Mengatasinya:** Mempelajari dasar-dasar pengembangan back-end, seperti bahasa pemrograman PHP, konsep database, dan operasi CRUD. Selanjutnya, mempraktekkan konsep-konsep tersebut dengan membuat proyek-proyek kecil atau mengikuti tutorial online. Dengan berlatih secara konsisten, tentunya akan membuat Kita semakin terampil dalam pengembangan back-end.

Dengan kesabaran, ketekunan, dan kemauan untuk terus belajar, Saya dapat mengatasi tantangan dan kesulitan yang Saya hadapi dalam proyek ini. Walaupun hasilnya masih belum sempurna, tapi ingatlah bahwa setiap kesalahan atau rintangan adalah kesempatan untuk belajar dan meningkatkan kemampuan Kita sebagai pengembang web.