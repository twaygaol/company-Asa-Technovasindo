# Asa Technovasindo Company

## About

Ini repositori project website Asa Technovasindo, dibuat sebagai media Sosial untuk kebutuhan internal dan promosi aktivitas dari perusahaan. 

## Feature

Beberapa fitur di project ini :

- Artikel (**DONE**).
- Produk (**DONE**).
- Slider (**DONE**). 
- Lisensi sertif (**DONE**). 
- Dokumentasi (**DONE**). 

## Technology

- PHP 8.0
  Bahasa pemrograman yang digunakan
- [Codeigniter v4](https://codeigniter.com/)
  Base framework yang digunakan untuk membangun projek ini.
- [TailwindCSS v3](https://tailwindcss.com/)
  Framework css yang digunakan untuk mendesain projek ini.

## How to Run

Step yang perlu dilakukan untuk dapat menjalankan projek ini.

### Manual Installation

Jalankan perintah ini di terminal

```bash
# copy env file
cp .env.example .env
composer install 
# install dependency js 
npm install
# jalankan migrasi dan seeder
php spark migrate --all```

dan pada terminal lain jalankan

```bash
php spark serve
```

## Access

Home page dapat diakses pada :

- Manual Installation : [http://localhost:8080](http://localhost:8080)

Admin panel dapat diakses pada : 

- Manual Installation : [http://localhost:8080/admin](http://localhost:8080/admin)

Gunakan akun ini untuk akses admin panel :

- email: `admin@gmail.com`
password `admin`

# Lisensi
MIT Licenci
