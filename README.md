# PA 2 - Laravel Auth Project

Project autentikasi Laravel dengan role-based access (`admin`, `journalist`, `user`).

## Tech Stack

- PHP `^8.2`
- Laravel `^12`
- MySQL/MariaDB
- Node.js + Vite
- Bootstrap 5

## 1. Prasyarat

Pastikan sudah terpasang:

- PHP 8.2+
- Composer
- Node.js 18+ dan npm
- MySQL/MariaDB (Laragon/XAMPP juga bisa)
- Git

## 2. Clone Repository

```bash
git clone https://github.com/Panjiiiiiii/PA2-Laravel-Auth-Project.git
cd PA2-Laravel-Auth-Project
```

## 3. Install Dependency

```bash
composer install
npm install
```

## 4. Setup File Environment

Copy file `.env`:

```bash
cp .env.example .env
```

Untuk Windows PowerShell jika `cp` tidak tersedia:

```powershell
Copy-Item .env.example .env
```

Generate app key:

```bash
php artisan key:generate
```

## 5. Konfigurasi Database

Buka file `.env`, lalu sesuaikan bagian database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pa2_auth
DB_USERNAME=root
DB_PASSWORD=
```

Lalu buat database kosong sesuai nama di atas (`pa2_auth`).

## 6. Migrasi Database

```bash
php artisan migrate
```

## 7. Menjalankan Seeder Akun Demo

Untuk membuat akun demo (`admin`, `jurnalis`, `user`):

```bash
php artisan db:seed --class=UserSeeder
```

Data login default dari seeder:

- Admin: `admin@portal.com` / `password123`
- Journalist: `jurnalis@portal.com` / `password123`
- User: `user@portal.com` / `password123`

## 8. Jalankan Project

Jalankan backend Laravel:

```bash
php artisan serve
```

Jalankan Vite (frontend assets) di terminal lain:

```bash
npm run dev
```

Buka browser:

- `http://127.0.0.1:8000`

## 9. Alur Penggunaan

1. Buka halaman login.
2. Login menggunakan salah satu akun demo.
3. Sistem akan redirect sesuai role:
	 - `admin` -> dashboard admin
	 - `journalist` -> dashboard journalist
	 - `user` -> halaman home

## 10. Perintah Ringkas (Sekali Jalan)

Jika ingin setup cepat setelah clone:

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed --class=UserSeeder
npm install
```

Lalu jalankan:

```bash
php artisan serve
npm run dev
```

## 11. Troubleshooting

- Error koneksi database:
	pastikan `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` di `.env` benar.
- Perubahan `.env` tidak terbaca:
	jalankan `php artisan config:clear`.
- Asset CSS/JS tidak muncul:
	pastikan `npm run dev` aktif.
- Port 8000 terpakai:
	jalankan `php artisan serve --port=8080`.

## 12. Menjalankan Test

```bash
php artisan test
```

## Author

- Panjiiiiiii
