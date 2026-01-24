Source: https://dev.to/mamondev193/laravel-12-api-integration-with-sanctum-step-by-step-guide-2hio

https://buildwithangga.com/tips/tutorial-laravel-12-model-migration-seeder-factory-auth-sanctum-api-postman

Membuat API tanpa Aunthentication
1. Install Laravel
    composer create-project laravel/laravel api-sactum

2. Install Sanctum
    php artisan install:api

3. Setup database
    Sesuai DB pada file .env

4. Membuat Model dan Migration
    php artisan make:model Category -m
    php artisan make:model Course -m
    php artisan make:model User -m

5. Membuat Factory
    php artisan make:factory CategoryFactory --model=Category
    php artisan make:factory CourseFactory --model=Course
    php artisan make:factory UserFactory --model=User

6. Membuat Seeder
    php artisan make:seeder CategorySeeder
    php artisan make:seeder CourseSeeder
    php artisan make:seeder UserSeeder

7. Menjalankan Seeder
    php artisan db:seed

8. Membuat Repository
9. Membuat Service
10. Membuat Controller

Membuat API dengan Authentication Sanctum
1. Instalasi laravel sanctum
    composer require laravel/sanctum

    - Publikasikan konfigurasi Sanctum
    php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"

    - Jalankan migrasi untuk tabel personal_access_tokens
    pap artisan migrate

    - Tambahkan middleware Sanctum di app/Http/Kernel.php

2. Membuat Controller AuthController

3. Membungkus Categories CRUD dalam Middleware Auth