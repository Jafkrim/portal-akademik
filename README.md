| Nama | NRP |
| :--- | :--- |
| Ja'far Balyan Al Karim | 5025241040 |

# Portal Akademik Berbasis Laravel

## Panduan instalasi dan konfigurasi
Prasyarat: PHP 8.2 atau lebih baru, Composer, Node.js & NPM, Git

### Langkah Instalasi
Clone repositori:
```bash
git clone https://github.com/Jafkrim/portal-akademik.git
cd portal-akademik
```

Instal dependensi PHP:
```bash
composer install
```

Instal dependensi frontend:
```bash
npm install
```

Konfigurasi file lingkungan:
- Salin file .env.example menjadi .env:
  ```bash
  cp .env.example .env
  ```
- Generate app key:
  ```bash
  php artisan key:generate
  ```

Jalankan migrasi dan seeder database:
```bash
php artisan migrate:fresh --seed
```

Inisialisasi Role dan Permission (Spatie RBAC):
```bash
php artisan db:seed --class=RoleAndPermissionSeeder
```

Kompilasi aset frontend (Vite):
```bash
npm run build
```

Jalankan server lokal:
```bash
php artisan serve
```

Akses aplikasi melalui browser pada alamat: http://127.0.0.1:8000

## Kredensial Akun Uji Coba

- **Administrator (Akses Penuh):**
  - Email: dosenpbkk@its.ac.id
  - Password: password

- **Mahasiswa:**
  - Email: mahasiswapbkk@its.ac.id
  - Password: password