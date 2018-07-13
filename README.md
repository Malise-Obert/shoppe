# Shoppe

Shoppe is a trivial online shopping system exercise.

When finished the App will have the following and more...
  - authentication of users (both Admin and shoppers)
  - Authorization using Gates and Policies
  - Shopper user account management
  - Admin Product management
  - etc
  
*** Shoppe will be developed in Laravel

### Installation

Laravel Shoppe App setup requires for easy of setup, if you do not already have it, get it her [Composer](https://getcomposer.org/).

clone the Shoppe Repositor from Github (https://github.com/Malise-Obert/shoppe) to your desired folder if familiar with git or github otherwise use following instructions:

```
$ git clone https://github.com/Malise-Obert/shoppe.git
cd shoope
php artisan make:auth 
composer install
```

Next setup your database variables in the .env file on the root of the project. You could go with mysql if you have installed on your environment.

Copy ``.env.example`` to ``.env`` and adjust the following section to your desired varibales:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=shopping
DB_USERNAME=root
DB_PASSWORD=
```

** You may need to create the DB either on mysql command line or DB Admin of your choice before running migrations.
```
php artisan migrate 
```

I have created created a seeder for the Users table for testing purposes. You will find it the database/seeds folder. You may seed either using `php artisan tinker` and then use the factory if you will with a bit of setup in the UserFactory or the follwoing:

```
php artisan migrate:refresh --seed
```

Done then you can test run:

```
php artisan serve
```

Follow the link and use the set auth users

