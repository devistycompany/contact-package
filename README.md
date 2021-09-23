# Contact Us Package
[![stars](https://img.shields.io/github/stars/devistycompany/contact-package?style=flat-square)](https://github.com/devistycompany/contact-package/stargazers)[![Total Download](https://img.shields.io/packagist/dt/devisty/contact.svg?style=flat-square)](https://packagist.org/packages/devisty/contact)


## Package untuk kirim email ke admin dan menyimpan query ke database

## Requirement
- Laravel Version 8.x

## konfigurasikan Mail Server
buka .env kemudian tambahkan dengan Mail Server yang anda miliki
contoh :

```bash
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
```
## Install Via Composer
```bash
composer require devisty/contact
```

## Registrasi file config/app.php
Navigasikan ke config/app.php kemudian tambahkan di baris paling bawah di dalam array providers
```bash
Devisty\Contact\ContactServiceProvider::class,
```

## Jalankan Migrasi
```bash
php artisan migrate
```
## Jalankan Server
```bash
php artisan serve
```

## Tinggal Browse deh
```bash
http://localhost:8000/contact
```
