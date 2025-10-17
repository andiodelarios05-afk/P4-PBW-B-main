# PRAKTIKUM PBW Pertemuan 4
Nama : Raziy Ibrahim - 4523210138

## Langkah - Langkah Praktikum

Mari kita instal dan konfigurasikan Breeze ke dalam proyek "LaraPress".
1. Buka Terminal: Masuk ke direktori proyek LaraPress Anda.
2. Instalasi Breeze via Composer: Perintah ini akan mengunduh paket Breeze dan
dependensinya.
composer require laravel/breeze --dev
3. Jalankan Perintah Instalasi Breeze: Perintah ini akan mempublikasikan semua file
yang dibutuhkan (Controllers, Views, Routes) ke dalam aplikasi Anda.
php artisan breeze:install
○ Anda akan diberi beberapa pilihan. Pilih 0 untuk Blade with Alpine. Tekan Enter.
○ Pilih no untuk Dark mode support. Tekan Enter.
○ Pilih testing framework pilihan Anda (pilih 0 untuk Pest jika ragu). Tekan Enter.
4. Instalasi Dependensi Frontend: Breeze menggunakan Tailwind CSS. Perintah ini akan
menginstal dependensi JavaScript dari file package.json.
npm install
5. Kompilasi Aset: Perintah ini akan meng-compile file CSS dan JS agar bisa digunakan
oleh browser.
npm run dev
6. Jalankan Migrasi: Breeze perlu menambahkan kolom remember_token ke tabel users
dan membuat tabel password_reset_tokens.
php artisan migrate
7. Uji Coba: Jalankan server Anda (php artisan serve). Buka aplikasi di browser. Anda
sekarang akan melihat link "Log in" dan "Register" di pojok kanan atas. Coba buat
akun baru dan login!

## Screenshoot Hasil Command & Hasil

### Command
<img width="1432" height="576" alt="image" src="https://github.com/user-attachments/assets/3d09660f-771c-4032-b2c4-e01427b3cac0" />

<img width="1269" height="652" alt="image" src="https://github.com/user-attachments/assets/d4cdc7ec-895c-469f-9522-b1d2738a9a17" />

<img width="501" height="442" alt="image" src="https://github.com/user-attachments/assets/0a08d7ed-97f5-4945-97ae-ad14d28808d6" />


### Hasil Praktikum
<img width="1920" height="996" alt="image" src="https://github.com/user-attachments/assets/ce7fc535-d848-4b63-9852-ba0142a3d553" />


## Kesimpulan

Pada pertemuan ini, kita telah berhasil menambahkan sistem autentikasi yang lengkap dan
aman ke dalam aplikasi "LaraPress". Kita tidak hanya belajar cara menginstal Laravel Breeze,
tetapi juga memahami konsep fundamental di baliknya. Kini aplikasi kita siap untuk fitur
selanjutnya: Otorisasi, di mana kita akan mengatur hak akses spesifik untuk setiap pengguna.

