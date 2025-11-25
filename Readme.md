# NAMA: Nurul fadilah
# NIM: 312410689
# KELAS: TI.24.A.3

# PROJECT — Aplikasi PHP Modular
Aplikasi ini merupakan sistem berbasis PHP dengan arsitektur *Modular*, di mana setiap fitur dipisahkan ke dalam folder modul tersendiri.  
Struktur seperti ini membuat proyek lebih terorganisir, mudah dikelola, dan fleksibel untuk dikembangkan.


## Penjelasan Folder

##  assets/
Menyimpan file pendukung seperti:
- CSS (desain tampilan)
- Gambar produk
- File statis lainnya

##  config/
Berisi file konfigurasi:
- database.php → mengatur koneksi MySQL ke aplikasi
- session.php → mengecek apakah user sudah login atau belum

##  modules/
Folder utama yang menyimpan fitur-fitur aplikasi.

Contoh:
- modules/auth/ → fitur login & logout  
- modules/user/ → fitur CRUD user  

Setiap modul memiliki file terpisah agar lebih rapi.

##  views/
Berisi file tampilan umum yang dipakai banyak halaman, seperti:
- Header
- Footer
- Dashboard

##  index.php
Gerbang utama aplikasi yang meng-handle routing menggunakan $_GET['page'].

## Sistem Data Barang (Inventory Management System)
Sistem Data Barang adalah aplikasi web untuk mengelola inventory barang dengan fitur autentikasi pengguna dan manajemen data barang yang lengkap.

##  Fitur Utama

##  Sistem Autentikasi
*Login Page* 
<Img src="login.png">
- Form login dengan username dan password
- Validasi akses pengguna
- Tampilan profesional dengan header dan navigasi

##  Dashboard
*Dashboard* 
<Img src="<img width="1097" height="631" alt="Dashboard" src="https://github.com/user-attachments/assets/0aeafc44-1a83-47b1-8f63-daa52ba737f4" />
">
- Statistik ringkasan inventory
- Total Barang: 15 item
- Kategori: 3 kategori
- Stok Total: 125 unit
- Welcome message dengan nama pengguna
- Quick actions: Lihat Data Barang & Tambah Barang

##  Manajemen Data Barang
*Data Barang* 
<Img src="<img width="1108" height="644" alt="sistem data barang" src="https://github.com/user-attachments/assets/54f92986-f5a8-4702-ab3c-4c7909ea231a" />
">
- Tabel daftar barang dengan kolom lengkap:
- Nama Barang
- Kategori
- Harga Jual
- Harga Beli
- Stok
- Aksi (Edit & Hapus)
- Tombol "Tambah Barang" untuk navigasi cepat

##  Tambah Barang
*Form Tambah Barang* 
<Img src="<img width="1220" height="639" alt="tambah barang" src="https://github.com/user-attachments/assets/915c14c0-ee03-43a8-8634-6b3629a99390" />
">
- Input data barang baru:
- Nama Barang (text input)
- Kategori (dropdown/select)
- Harga Jual (numeric input)
- Harga Beli (numeric input)
- Stok (numeric input)
- Tombol aksi: Simpan Barang & Batal
