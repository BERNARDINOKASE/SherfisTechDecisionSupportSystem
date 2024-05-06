# Panduan Penggunaan untuk Proyek Sistem Pendukung Keputusan

Selamat datang di proyek Laravel kami! Dokumen ini akan membantu Anda memulai dengan proyek ini.

## Persyaratan

Sebelum memulai, pastikan sistem Anda memenuhi persyaratan berikut:
- PHP (8.2)
- Composer
- Node.js & NPM
- MySQL atau database MariaDB

## Langkah-langkah untuk Menggunakan Proyek

1. **Clone Repository**

    ```bash
    git clone https://github.com/BERNARDINOKASE/SherfisTechDecisionSupportSystem.git
    ```

2. **Instal Dependencies**

    Masuk ke direktori proyek dan jalankan perintah berikut:

    ```bash
    cd SherfisTechDecisionSupportSystem
    composer install
    npm install && npm run dev
    cp .env.example .env
    ```

3. **Konfigurasi Lingkungan**

    Duplikat file `.env.example` dan ganti namanya menjadi `.env`. Kemudian sesuaikan pengaturan database dan konfigurasi lainnya sesuai kebutuhan Anda.

    ```bash
    APP_DEBUG=true
    DB_DATABASE=decisionsupportsystem
    DB_USERNAME=your-username
    DB_PASSWORD=your-password
    ```

4. **Migrasi Database**

    Setelah mengonfigurasi file `.env`, jalankan migrasi database untuk membuat tabel-tabel yang diperlukan:

    ```bash
    php artisan migrate
    ```

    jalankan migrasi database untuk membuat tabel-tabel dan memasukan data awal untuk tabel kriteria laptop ke dalam database
   
   ```bash
    php artisan migrate --seed
    ```
   perintah ini akan mengisi secara otomatis tabel kriteria laptop

6. **Generate Kunci Aplikasi**

    Laravel membutuhkan kunci aplikasi unik. Jalankan perintah berikut untuk menghasilkan kunci aplikasi:

    ```bash
    php artisan key:generate
    ```

7. **Jalankan Server Lokal**

    Terakhir, jalankan server lokal untuk melihat proyek Anda di browser:

    ```bash
    php artisan serve
    ```

    Kemudian buka browser dan kunjungi `http://localhost:8000`.

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan buat *pull request* melalui GitHub.
