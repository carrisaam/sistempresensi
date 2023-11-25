## Cara Menjalankan Proyek (Local)

- Clone repositori ini ke lokal Anda.
- Jalankan composer install untuk menginstal semua dependensi.
- Buat file .env dengan cara copy paste file .env.example yang sudah ada dan sesuaikan pengaturan yang dibutuhkan seperti nama, username, password, port database.
- Jalankan php artisan migrate untuk membuat tabel pada database.
- Jalankan php artisan db:seed untuk memasukkan data awal ke dalam tabel.
- Jalankan php artisan jwt:secret untuk generate jwt secret key.
- Jalankan php artisan serve untuk menjalankan aplikasi.

