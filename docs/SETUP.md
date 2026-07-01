# Setup Pengembangan — AIK 4 Kelompok 2

Aplikasi web "Tuntunan Tata Cara Sholat" (HPT Muhammadiyah).

## Stack

- Laravel 13 (PHP 8.4) + Inertia 2
- React 19 + TypeScript + Tailwind 4 + shadcn/ui
- MariaDB / MySQL

## Setup lokal

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
```

Buat database MySQL/MariaDB:

```sql
CREATE DATABASE aik4_sholat CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'aik4'@'localhost' IDENTIFIED BY 'password_kamu';
GRANT ALL PRIVILEGES ON aik4_sholat.* TO 'aik4'@'localhost';
FLUSH PRIVILEGES;
```

Isi `DB_*` di `.env`, lalu:

```bash
php artisan migrate --seed
composer run dev      # jalankan server + vite bersamaan
```

## Identitas commit per jobdesk

Repo dikelola dari satu laptop. Commit diatribusikan sesuai peran memakai
`scripts/dev-as`:

```bash
./scripts/dev-as backend     # commit sebagai Duta (Back-End)
./scripts/dev-as frontend    # commit sebagai Bagas (Front-End)
./scripts/dev-as             # lihat identitas aktif
```

Script menyetel `user.name`, `user.email`, dan `core.sshCommand` (SSH key)
sesuai peran. Kredit commit di GitHub mengikuti **email author**.

Sebelum pakai `frontend`: isi `BAGAS_EMAIL` di `scripts/dev-as`, dan Bagas
menambahkan public key (`~/.ssh/id_ed25519_bagas.pub`) ke akun GitHub-nya
(*Settings → SSH and GPG keys*).
