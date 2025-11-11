# 🃏 Pokémon Card Database

## Janji

Saya Nur Abdillah dengan NIM 2408515 mengerjakan Tugas Praktikum 7 dalam mata kuliah Desain Pemrograman Berorientasi Objek untuk keberkahan-Nya maka saya tidak akan melakukan kecurangan seperti yang telah di spesifikasikan

## 📖 Deskripsi Program

Program ini adalah aplikasi web berbasis PHP Native yang menerapkan pola MVC sederhana (Model-View-Controller) untuk mengelola data kartu Pokémon, termasuk:

- Type (jenis kartu, seperti Energy, Pokémon, Supporter, dll),
- Series (seri rilis Pokémon, seperti Base Set, Jungle, Scarlet & Violet, dll),
- Card (data kartu unik dengan kode, nama, type, dan series).

Aplikasi ini memanfaatkan database MySQL (db_card) yang berisi relasi antar entitas, serta mendukung fitur CRUD lengkap:

- Create → menambahkan data baru
- Read → menampilkan daftar data
- Update → mengubah data yang sudah ada
- Delete → menghapus data

Program ini dibangun tanpa framework, menggunakan PHP murni, HTML, dan CSS sederhana.

## 🧩 Struktur Direktori

Struktur folder proyek ini dirancang menyerupai arsitektur MVC sederhana agar rapi dan mudah dikelola:

TP7DPBO2425C1/

│

├─ class/               # Folder Model (akses database)

│  ├─ Type.php

│  ├─ Series.php

│  └─ Card.php

│

├─ config/              # Konfigurasi sistem

│  └─ db.php            # File koneksi database (PDO)

│

├─ view/                # Folder View (tampilan halaman)

│  ├─ header.php

│  ├─ footer.php

│  ├─ type/

│  │   ├─ index.php

│  │   ├─ form.php

│  ├─ series/

│  │   ├─ index.php

│  │   ├─ form.php

│  └─ card/

│      ├─ index.php

│      ├─ form.php

│

├─ database/

│  └─ db_card.sql       # File SQL untuk membuat database dan tabel

│

├─ style.css            # Desain tampilan halaman

└─ index.php            # Entry point / Router utama

## ⚙️ Alur Program

1. Router (index.php)

File utama index.php berperan sebagai router sederhana.

- Membaca parameter entity dan action dari URL.
- Menentukan tampilan mana yang harus dimuat.
- Contoh URL:

  - ?entity=type → tampilkan daftar type.
  - ?entity=series&action=create → tampilkan form tambah series.

?entity=type
?entity=series&action=edit&id=2
?entity=card&action=create

2. Model (Folder class/)

Folder class berisi file PHP yang menangani operasi database untuk setiap entitas:

- Type.php
- Series.php
- Card.php

Setiap file class memanggil koneksi dari config/db.php dan menyediakan fungsi:

- getAll() – ambil semua data
- getById() – ambil data berdasarkan ID
- create() – tambah data
- update() – ubah data
- delete() – hapus data

Contoh dari Type.php:

public function create($name) {
    $stmt = $this->conn->prepare("INSERT INTO type (name) VALUES (?)");
    return $stmt->execute([$name]);
}

3. View (Folder view/)

Folder view menyimpan seluruh tampilan (HTML + PHP).
Setiap entitas memiliki dua tampilan utama:

- index.php → menampilkan daftar data & tombol aksi.
- form.php → menampilkan form tambah/edit data.

4. Database (db_card.sql)

File ini membuat tiga tabel utama:

- type(id, name)
- series(id, series, release_date)
- card(code, name, type_id, series_id)

Tabel card memiliki foreign key ke type dan series.
