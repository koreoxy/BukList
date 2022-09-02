<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# BukList (Website List-list Buku)
BukList adalah website informasi untuk memberitahukan list-list buku dengan berbagai category.

## Page Home
![screencapture-127-0-0-1-8000-2022-09-02-22_16_53](https://user-images.githubusercontent.com/73381115/188191143-822ebf11-811f-4281-9a84-daa47e2dabf1.png)

## Page List Buku
![screencapture-127-0-0-1-8000-posts-2022-09-02-22_48_30](https://user-images.githubusercontent.com/73381115/188191545-9bb8daa0-2715-4555-bb2a-a1f83341a20d.png)

## Page Category
![screencapture-127-0-0-1-8000-categories-2022-09-02-22_19_57](https://user-images.githubusercontent.com/73381115/188191370-68d8a595-3678-4a3f-af70-41421df29a65.png)

## Page Login
![screencapture-127-0-0-1-8000-login-2022-09-02-22_20_20](https://user-images.githubusercontent.com/73381115/188191644-b4609611-6f2b-4d19-8bad-83b39cb2f06e.png)

## Page Register
![screencapture-127-0-0-1-8000-register-2022-09-02-22_20_32](https://user-images.githubusercontent.com/73381115/188191749-6cad3444-cf92-4997-9e27-4d7856613625.png)



## Requirements :
1. Pertama install composer 
   Link : https://getcomposer.org/download/

2. install install githbash 
   Link : https://git-scm.com/downloads
   

## How to run in localhost
Project ini menggunakan Framework Laravel
jadi untuk menjalankan project ini anda harus mengikuti langkah berikut :

1. install laravel di githbash menggunakan perintah.
    > composer global require laravel/installer

2. kemudian buka folder projectnya, buka menggunakan gitbash.
   > cd Project-Listbuku

3. jalankan project laravelnya, ketik di terminal githbash nya.
   > php artisan serve

4. buka control panel XAMPP dan jalankan Apache dan Mysql

5. buka local database atau localhost/phpmyadmin/

6. buat database baru dengan nama listbuku

7. migrasi data yang ada di laravel ke database, ketik perintah di gitbashnya
   > php artisan migrate:fresh --seed

8. buka link local domain dari project laravelnya http://127.0.0.1:8000

