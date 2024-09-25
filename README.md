# ERD
![Screenshot (25)](https://github.com/user-attachments/assets/ca8de652-0d4f-4fcf-b443-506367a491df)


# uml
![Uploading Untitled Diagram.drawio.png…]()(https://github.com/user-attachments/assets/1a1a1fc4-b61b-4774-83e6-eb12fa1d7312)




# 1. Prasyarat 
### Pastikan perangkat Anda telah memenuhi prasyarat berikut sebelum menginstal Repository ini:

- PHP: Versi 8.1 atau lebih baru.
- Composer: Dependency Manager untuk PHP.
- MySQL/SQLite: Untuk database.


# 2. Langkah Instalasi  

### Langkah 1: Clone Repository 
```
git clone https://github.com/projekgit/webjuss.git
```
### Langkah 2: Pindah ke Direktori Proyek 

```
cd web-juss
```
- Setelah Itu Masuk Ke dalam Visual Studio Code

```
code .
```
### Langkah 3: Instal Dependensi Backend
```
composer install
```
### Langkah 4: Copy atau Salin File Konfigurasi (.env)

##### Salin file .env.example menjadi .env untuk mengatur variabel lingkungan atau Mengunkan Code berikut:

```
cp .env.example .env

```
### Langkah 5: Atur Konfigurasi .env
```

 DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tugaspkl
DB_USERNAME=root
DB_PASSWORD=
```
### Langkah 6: Migrasi Database

- Buat sebuah Databases Di xampp Terlebih Dahulu

```
php artisan migrate

```


### Langkah 7: Generate Application Key

- Langkah ini sangat penting untuk setiap aplikasi Laravel, karena tanpa kunci ini, beberapa fitur tidak akan berjalan sebagaimana mestinya jadi harus di jalankan ya perintanya kalo mau menggunakan Source Code ini ya semoga berhasil :

```
php artisan key:generate
```

### Langkah 8: Jalankan Server Pengembang

```
php artisan serve

```

