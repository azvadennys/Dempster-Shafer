# SISTEM PAKAR DEMPSTER SHAFER

## Requirement
| Library    | Version    |
|------------|------------|
| PHP | <code>^8.0</code> | 
| XAMPP | <code>^8.0</code> |
| Composser | <code>NEW</code> |

## Installation / Instalasi
Direkomendasikan menggunakan php > 8.0. Pastikan repo ini telah diclone, kemudian buka CLI dan posisikan direktori aktif ke repo ini.
Silakan pilih salah satu dari dua cara di bawah ini.

### Cara Clone Repository
Buka git Bash dan Jalankan perintah berikut untuk cloning
```
$ git clone https://github.com/azvadennys/Dempster-Shafer.git
```
Setelah clone berhasil masuk ke folder repository
```
cd Dempster-Shafer-master
```

### Setup
Jalankan perintah berikut untuk menginstal dependensi php
```
composer install
```
Jalankan perintah berikut untuk mengatur _environment variable_
```
cp .env.example .env
```
Pastikan Anda telah membuat database baru di MySQL dan silakan sesuaikan di file `.env` dengan nama database yang anda buat.
Jalankan perintah berikut untuk membuat _key_ untuk web app Anda
```
php artisan key:generate
```
Jalankan perintah berikut untuk membuat skema database dan seeder
```
php artisan migrate:fresh --seed
```
Terakhir, jalankan perintah berikut untuk menyalakan web server bawaan laravel 
```
php artisan serve
```
Setelah perintah di atas dijalankan, web app Anda bisa sudah bisa diakses

## Login
Untuk login aplikasi silakan masukkan email dan kata sandi berikut


| Email    | Password    |  Role |
|------------|------------|------------|
| admin@gmail.com | 123 | Administrator | 
| user@gmail.com | 123 | User| 
