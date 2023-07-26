# Employees CRUD with Laravel

## Requirements

* Composer 
* Node.js
* Mysql/Mariadb

## Installation

Create a database in MariaDb/Mysql. Then create a file called `.env` in the root directory using as guide the `.env.example`, next update the following env variables in `.env` file.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=MY_DATABASE
DB_USERNAME=MY_USERNAME
DB_PASSWORD=MY_PASSWORD
```

Install php dependencies:
```
composer install
```

Create migrations:
```
php artisan migrate
```

Generate key application:
```
php artisan key:generate
```

Create a symbolic link between the application storage folder and the public folder:
```
php artisan storage:link
```

Fill the database with test data:
```
php artisan db:seed
```
