# Arsitektur EduTour

## Ringkasan

EduTour saat ini adalah aplikasi Laravel server-rendered. Route Laravel memilih view Blade, view menyusun data lokal menjadi HTML, lalu browser memuat stylesheet dan JavaScript dari folder `public`.

Arsitektur ini sengaja sederhana untuk tahap implementasi UI dari Figma. Data katalog masih berada di view sehingga struktur visual dapat diverifikasi lebih dulu sebelum dipindahkan ke controller, model, atau database.

Database aplikasi menggunakan MySQL untuk development lokal dan deployment VPS. PHPUnit tetap menggunakan SQLite in-memory melalui `phpunit.xml` agar test berjalan terisolasi dan tidak mengubah database development.

## Alur request

```text
Browser
  ├─ GET /           -> routes/web.php -> resources/views/welcome.blade.php
  └─ GET /destinasi  -> routes/web.php -> resources/views/destinations/index.blade.php
                                  ├─ public/css/landing.css
                                  ├─ public/css/destinations.css
                                  ├─ public/js/landing.js
                                  └─ public/images/figma/*
```

### Route

`routes/web.php` hanya menjadi pemetaan URL ke view:

- `home` menunjuk ke `/` dan merender `welcome`.
- `destinations.index` menunjuk ke `/destinasi` dan merender `destinations.index`.

Nama route adalah kontrak antar-view. Link navigasi dan footer menggunakan `route(...)`, jadi ubah URL hanya jika seluruh pemanggilnya ikut diperbarui.

## Struktur direktori aplikasi

| Lokasi | Tanggung jawab |
| --- | --- |
| `routes/web.php` | Pemetaan URL dan nama route halaman web. |
| `resources/views/welcome.blade.php` | Markup dan data tampilan halaman beranda. |
| `resources/views/destinations/index.blade.php` | Markup dan data tampilan katalog/filter destinasi. |
| `public/css/landing.css` | Token visual, shell, header, footer, komponen beranda, dan breakpoint bersama. |
| `public/css/destinations.css` | Layout filter, hasil katalog, kartu destinasi, pagination, dan breakpoint khusus katalog. |
| `public/js/landing.js` | Interaksi navigasi mobile yang digunakan oleh kedua halaman. |
| `public/images/figma` | Logo, ikon, ilustrasi, dan gambar destinasi hasil export/download dari Figma. |
| `docs` | Catatan arsitektur dan panduan perubahan manual. |

## Struktur view Blade

Kedua view halaman memiliki pola yang sama:

1. Blok `@php` menyiapkan array data tampilan.
2. `head` memuat font dan stylesheet.
3. Header memakai struktur navigasi bersama.
4. `main` berisi konten khusus halaman.
5. Footer memakai class `.site-footer` dari `landing.css`.
6. `landing.js` dimuat dengan `defer` setelah markup selesai.

Pada halaman destinasi, data utama memiliki kontrak berikut:

| Data | Dipakai oleh |
| --- | --- |
| `$subjects` | Loop checkbox mata pelajaran pada filter. |
| `$destinations` | Loop kartu hasil katalog. |
| `$footerColumns` | Loop kolom link footer. |

Satu item `$destinations` menghasilkan satu `.catalog-card`. Jika hanya teks, harga, tag, lokasi, atau gambar yang berubah, edit array data sebelum mengubah markup kartu.

## Lapisan CSS

Urutan stylesheet pada halaman destinasi bersifat penting:

```text
landing.css       -> aturan bersama dan komponen dasar
destinations.css  -> aturan khusus katalog dan override halaman
```

`landing.css` dimuat lebih dulu agar footer, shell, header, dan token visual menjadi sumber bersama. `destinations.css` hanya mengatur area katalog. Jangan menambahkan ulang aturan footer di `destinations.css`; halaman destinasi harus mengikuti footer beranda.

Class `.destination-body` adalah class isi kartu pada beranda. Elemen `<body>` halaman katalog menggunakan `.destinations-page` agar padding kartu tidak bocor ke seluruh halaman.

## Kontrak aset

Semua aset publik dirujuk melalui helper Blade `asset(...)`, bukan path filesystem lokal. Untuk gambar kartu katalog, nilai `image` pada `$destinations` harus sama dengan nama file di `public/images/figma`.

```php
'image' => 'filter-sd-kampung-jamur.png',
```

Jika aset baru berasal dari Figma, letakkan file hasil export di `public/images/figma`, lalu ubah mapping data. Markup kartu tidak perlu diubah selama kontrak key `image` tetap sama.

## Strategi responsive

- Lebar desktop memakai `.shell` sebagai batas horizontal bersama.
- Di bawah `900px`, grid katalog dan footer mengurangi kepadatan kolom.
- Di bawah `720px`, filter katalog masuk ke alur dokumen dan navigasi berubah menjadi menu mobile.
- Di bawah `480px`, kartu katalog menjadi satu kolom dan legal footer dapat membungkus link.

Saat mengubah spacing, uji `/` dan `/destinasi` pada desktop serta lebar mobile. Perubahan di `landing.css` dapat memengaruhi kedua halaman.

## Arah evolusi backend

Saat katalog siap memakai database, pindahkan array `$destinations` dan `$subjects` ke controller atau view model tanpa mengubah kontrak yang dipakai view. Bentuk minimal data destinasi yang dipertahankan:

```php
[
    'image', 'title', 'location', 'rating',
    'price', 'description', 'tags',
]
```

Perubahan ini menjaga pekerjaan UI tetap terpisah dari sumber data. Filter yang sekarang berupa markup statis dapat dihubungkan ke query setelah parameter filter dan pagination memiliki endpoint yang jelas.

## Konvensi komentar kode

Komentar dalam Blade, PHP, dan CSS hanya dipakai untuk menjelaskan hal yang tidak terlihat langsung dari kode:

- alasan arsitektur atau batas tanggung jawab file;
- kontrak nama route, key data, atau nama aset;
- workaround untuk mencegah benturan selector;
- batasan responsive atau perilaku yang mudah rusak.

Hindari komentar yang hanya mengulang nama class, nama loop, atau isi baris berikutnya. Satu komentar singkat cukup untuk satu blok logis.

## Verifikasi perubahan

Jalankan dari root proyek setelah mengubah view atau route:

```powershell
php artisan view:cache
php artisan test --compact
vendor/bin/pint --test routes/web.php
```

Untuk perubahan visual, buka `/` dan `/destinasi`, lalu periksa footer bersama, gambar kartu, navigasi mobile, dan tidak adanya horizontal overflow.
