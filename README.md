# Starterkit Laravel dengan Tailwind, Alpine.js, Livewire, Laravel Folio, dan Luvi UI

Proyek ini adalah starterkit Laravel yang menggunakan kombinasi teknologi modern untuk pengembangan web yang cepat dan efisien.

## Stack Teknologi

-   **Laravel**: Framework PHP yang kuat dan ekspresif untuk pengembangan web.
-   **Tailwind CSS**: Framework CSS utility-first untuk desain yang cepat dan fleksibel.
-   **Alpine.js**: Framework JavaScript ringan untuk menambahkan interaktivitas pada komponen.
-   **Livewire**: Framework full-stack untuk Laravel yang membuat pembuatan antarmuka dinamis menjadi mudah.
-   **Laravel Folio**: Sistem routing berbasis file untuk Laravel, mempermudah organisasi dan pengelolaan rute.
-   **Luvi UI**: Kumpulan komponen UI yang dibangun dengan Tailwind CSS untuk mempercepat pengembangan.

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan proyek ini:

1. Clone repositori:

    ```
    git clone https://github.com/username/nama-repo.git
    ```

2. Masuk ke direktori proyek:

    ```
    cd nama-repo
    ```

3. Instal dependensi PHP:

    ```
    composer install
    ```

4. Salin file .env.example menjadi .env:

    ```
    cp .env.example .env
    ```

5. Generate kunci aplikasi:

    ```
    php artisan key:generate
    ```

6. Instal dependensi JavaScript:

    ```
    npm install
    ```

7. Kompilasi aset:

    ```
    npm run dev
    ```

8. Jalankan migrasi database (pastikan Anda telah mengkonfigurasi database di file .env):

    ```
    php artisan migrate
    ```

9. Jalankan server development:
    ```
    php artisan serve
    ```

Sekarang Anda dapat mengakses aplikasi di `http://localhost:8000`.

## Penggunaan

### Membuat Halaman Baru

Gunakan command artisan khusus untuk menghasilkan file blade dengan cepat:

```
    php artisan make:page {nama-file}
```

contoh :

```
    php artisan make:page about
```

Menghasilkan file di resources/views/pages/about.blade.php

Untuk membuat halaman dalam subfolder:

```
    php artisan make:page admin/dashboard
```

Menghasilkan file di resources/views/pages/admin/dashboard.blade.php

## Kontribusi

Kontribusi selalu diterima. Silakan buat pull request atau laporkan masalah jika Anda menemukan bug atau memiliki saran perbaikan.
