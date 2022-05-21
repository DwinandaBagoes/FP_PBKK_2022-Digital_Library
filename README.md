# FP_PBKK_2022-Digital_Library

Tim Belajar Laravel
1. FAISAL REZA M 05111940000009
2. DWINANDA BAGOES A 05111940000010
3. ALFARABI MUZLI 05111940000039

## Instalasi Sistem
Untuk melakukan instalasi sistem diharapkan telah menginstal github dan juga telah mengintall composer. Github diperlukan untuk mendownload _repository_ sistem ini sedangkan composer diperlukan untuk mendownload _framework **Laravel**_.

1.  Pastikan PHP 8.0.x sudah terinstall
2.  Buka cmd dengan menekan tombol **WIN+R** lalu inputkan **cmd** dan tekan enter, untuk linux tekan tombol **CTRL+ALT+T** untuk membuka **Terminal**.
3. Lakukan **CD** (_change directory_) ke dalam direktori src.
4. Jika sudah, ketikan "https://github.com/DwinandaBagoes/FP_PBKK_2022-Digital_Library.git".
5. Ketikkan **composer update** & **npm install** tunggu hingga proses instalasi selesai untuk setiap masing - masing perintah.
6. Jika sudah selesai, maka copy _file_ yang bernama **.env.example** pastekan di halaman yang sama lalu ubah namanya menjadi **.env**. Untuk linux hanya perlu mengetikkan perintah **cp .env.example .env**.
7. Selanjutnya ketikkan **php artisan key:generate**.
8. Jika sukses maka akan muncul tulisan **_successful generate key bla... bla..._**.
9. Lalu nyalakan **xampp** dan buat database namanya **laravel**, jika sudah ketikkan **php artisan migrate** .
10. Jika berhasil ketikkan perintah **php artisan serve** dan akan muncul _response_ _**htttp://localhost:8000/**_.
11. Selamat sistem telah berhasil **diinstal** :).
