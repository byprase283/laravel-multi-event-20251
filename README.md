# Laravel Multi Event 2025

Repository ini berisi source code aplikasi Multi Event berbasis Laravel 12.

## 📋 Prasyarat (Requirements)

Pastikan komputer Anda sudah terinstall:
- **PHP** >= 8.2
- **Composer**
- **Git**

## 🚀 Panduan Instalasi (Installation Guide)

Ikuti langkah-langkah berikut untuk menjalankan project ini di komputer lokal (Localhost).

### 1. Clone Repository
Download source code dari GitHub. Buka terminal (CMD/Git Bash) dan jalankan:

```bash
git clone [https://github.com/byprase283/laravel-multi-event-20251.git](https://github.com/byprase283/laravel-multi-event-20251.git)
cd laravel-multi-event-20251
```
### 2. Install Dependencies
Download library yang dibutuhkan oleh Laravel (karena folder vendor tidak ikut di-upload).
```bash
composer install
````
### 3. Konfigurasi Environment (.env)
Salin file konfigurasi contoh menjadi file .env aktif.
```bash
copy .env.example .env
```
### 4. Generate Key
Buat kunci enkripsi aplikasi.
```bash
php artisan key:generate
```
### 5. Setup Database (SQLite)
Aplikasi ini menggunakan SQLite sebagai default. Anda perlu membuat file database kosong.

1. Masuk ke folder database.
2. Buat file kosong baru dengan nama database.sqlite.

```bash
type nul > database/database.sqlite
```

```bash
php artisan storage:link
```

```bash
php artisan migrate
```

```bash
php artisan serve
```

