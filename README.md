## Program download links


For phpMyAdmin implementation

Xampp:
https://www.apachefriends.org/es/download.html

Laravel:
- Composer
https://getcomposer.org/download/

- Laravel Documentation:
https://laravel.com/docs/9.x/installation#installation-via-composer

NOTE: Install the environment variable

Node.js:
https://nodejs.org/es/

Git:
https://git-scm.com/download/win

## Configuration for the project

Install laravel:
```bash
composer global require laravel/installer
```
Project creation:
```bash
laravel new Metasoft
```
Install the library to use bootstrap:
```bash
composer require laravel/ui
```

Run server:
```bash
php artisan serve
```
Create a file to migrate to MySql:
```bash
php artisan make:migration Nombre_tabla
```
To run the created migrations:
```bash
php artisan migrate
```
Create a controller:
```bash
php artisan make:controller HomeController
```

VSCODE HARD RESET:
```bash
%userprofile%\AppData\Roaming\Code
NOTA: borrar todo
```
VSCODE EXTENSIONS:
```bash
%userprofile%\.vscode
```
Clear database:
```bash
DROP DATABASE IF EXISTS Metasoft;
```
```bash
php artisan make:migration create_users_roles_table
php artisan make:migration create_objects_states_table
php artisan make:migration create_transactions_states_table
php artisan make:migration create_actions_table
php artisan make:migration create_users_table
php artisan make:migration create_objects_users_table
php artisan make:migration create_transactions_table
php artisan migrate
php artisan migrate:rollback
```
For data update:
```bash
php artisan make:model Users_role
php artisan make:model Objects_state
php artisan make:model Transactions_state
php artisan make:model Action
php artisan make:model User
php artisan make:model Objects_user
php artisan make:model Transaction

php artisan make:seeder Users_role_Seeder
php artisan make:seeder Objects_state_Seeder
php artisan make:seeder Transactions_state_Seeder
php artisan make:seeder Action_Seeder

php artisan make:seeder User_Seeder

php artisan db:seed
```
Delete all, create the tables and add the seeds:
```bash
php artisan migrate:fresh --seed

php artisan make:factory UserFactory --model=User
php artisan make:factory Objects_userFactory --model=Objects_user
php artisan make:factory TransactionFactory --model=Transaction
```
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
