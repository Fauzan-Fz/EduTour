# Deployment EduTour ke VPS

## Prasyarat server

Pastikan VPS menyediakan:

- PHP 8.3 atau versi yang kompatibel dengan `composer.lock`;
- Composer;
- MySQL 8 atau MariaDB yang kompatibel;
- ekstensi PHP `pdo_mysql`;
- web server seperti Nginx atau Apache;
- Node.js hanya jika asset frontend perlu dibuild di server.

## Buat database dan user MySQL

Gunakan user aplikasi khusus, bukan `root`. Jalankan SQL berikut di MySQL setelah mengganti password placeholder:

```sql
CREATE DATABASE edutour CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'edutour'@'localhost' IDENTIFIED BY 'ganti-password-kuat';
GRANT ALL PRIVILEGES ON edutour.* TO 'edutour'@'localhost';
FLUSH PRIVILEGES;
```

Jika database atau user sudah dibuat oleh panel VPS, cukup gunakan nama yang diberikan panel tersebut di `.env`.

## Siapkan aplikasi

Jalankan dari root proyek:

```bash
composer install --no-dev --optimize-autoloader
cp .env.example .env
php artisan key:generate --force
```

Edit `.env` di server. Nilai minimum database:

```dotenv
APP_ENV=production
APP_DEBUG=false
APP_URL=https://domain-anda.example

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=edutour
DB_USERNAME=edutour
DB_PASSWORD=password-database-server
```

`.env` tidak boleh di-commit. Simpan password database hanya di environment server atau secret manager VPS.

## Migrasi dan cache konfigurasi

Setelah `.env` benar, jalankan:

```bash
php artisan migrate --force
php artisan storage:link
php artisan optimize
```

`migrate --force` membuat tabel berdasarkan migration yang ada. `optimize` akan menyiapkan cache konfigurasi, route, dan view untuk production. Jalankan `php artisan config:clear` jika perlu mengganti nilai `.env` saat troubleshooting.

## Web server

Arahkan document root web server ke folder `public`, bukan ke root proyek. Pastikan proses PHP-FPM dapat membaca seluruh proyek dan menulis ke:

- `storage/framework`;
- `storage/logs`;
- `bootstrap/cache`.

Jangan memberikan permission write ke seluruh root proyek hanya agar aplikasi berjalan.

## Checklist setelah deploy

1. `php artisan about` menunjukkan environment production dan koneksi MySQL.
2. `php artisan migrate:status` menunjukkan migration berhasil.
3. Halaman `/` dan `/destinasi` dapat dibuka.
4. Log tidak berisi error koneksi MySQL.
5. `APP_DEBUG=false` aktif.
6. HTTPS, session cookie, dan domain aplikasi sudah sesuai konfigurasi VPS.
