# Panduan Membaca Kode EduTour

Arsitektur utama proyek dijelaskan di [architecture.md](architecture.md). Dokumen ini menjadi panduan singkat saat melakukan perubahan manual.

Dokumen ini menjelaskan lokasi blok kode utama agar perubahan manual tetap konsisten dengan implementasi halaman dan aset Figma yang sudah dipakai.

## Peta halaman

- `routes/web.php` mendaftarkan route bernama `home` untuk `/` dan `destinations.index` untuk `/destinasi`.
- `resources/views/welcome.blade.php` adalah halaman beranda dan acuan struktur footer bersama.
- `resources/views/destinations/index.blade.php` adalah halaman katalog/filter destinasi.
- `public/css/landing.css` berisi token visual, header, footer, shell, dan komponen yang dipakai bersama.
- `public/css/destinations.css` hanya berisi layout serta komponen katalog destinasi.
- `public/js/landing.js` menangani interaksi navigasi yang dipakai oleh kedua halaman.

## Cara membaca view destinasi

Blok `@php` di bagian atas view menyimpan data tampilan lokal. Data ini sengaja dipisahkan dari markup supaya penggantian judul, lokasi, harga, tag, atau deskripsi tidak mengharuskan perubahan struktur kartu.

- `$subjects` menjadi sumber label checkbox mata pelajaran.
- `$destinations` menjadi sumber satu kartu per destinasi.
- `$footerColumns` menjadi sumber kolom tautan pada footer.

Untuk mengganti isi kartu, ubah `$destinations` terlebih dahulu. Markup di dalam `@foreach ($destinations as $destination)` hanya mengatur cara satu item dirender.

## Kontrak aset gambar

File gambar kartu disimpan di `public/images/figma`. Nilai `image` pada `$destinations` harus sama persis dengan nama file di folder tersebut. Contoh:

```php
'image' => 'filter-sd-kampung-jamur.png',
```

Referensi gambar di Blade menggunakan `asset('images/figma/' . $destination['image'])`, sehingga jangan menulis path filesystem Windows di dalam view. Untuk logo, ikon, dan gambar lain, gunakan nama file dari folder aset Figma yang sama.

## Pembagian tanggung jawab CSS

Gunakan `landing.css` ketika perubahan berlaku untuk beranda dan destinasi, misalnya jarak shell, navigasi, footer, warna token, atau breakpoint footer. Gunakan `destinations.css` ketika perubahan hanya berkaitan dengan filter, kartu katalog, pagination, atau jarak konten destinasi.

`site-footer` sengaja tidak memiliki override khusus di `destinations.css`. Dengan begitu, footer destinasi mengikuti footer beranda. Jangan memakai class `destination-body` pada elemen `<body>` halaman katalog karena class tersebut sudah dipakai `landing.css` sebagai padding isi kartu beranda; halaman katalog menggunakan `destinations-page`.

## Urutan perubahan yang aman

1. Ubah data lokal terlebih dahulu jika yang berubah hanya teks, harga, tag, atau aset.
2. Ubah markup Blade jika struktur HTML memang berubah.
3. Ubah CSS pada file yang sesuai dengan tanggung jawabnya.
4. Muat ulang `/` dan `/destinasi` untuk memastikan komponen bersama tetap konsisten.
5. Jalankan pemeriksaan berikut dari root proyek:

```powershell
php artisan view:cache
php artisan test --compact
```

Komentar di dalam kode dipakai untuk menjelaskan alasan, kontrak, atau batasan yang tidak terlihat langsung dari sintaks. Hindari komentar yang hanya mengulang nama class, nama loop, atau langkah yang sudah jelas dari kode.
