
Pre-requisites
==============

- Node.js v7+
- MySQL server
- PHP v7.2+


Building
========

Inside the repo's folder.

Install Node.js dependencies, it will take some time.

```
$ npm i
```

Download [composer][composer-url].

```
$ php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
$ php composer-setup.php
```

Install [composer][composer-url]'s dependencies.

```
$ php composer.phar install
```

Copy and edit your own `.env` file out of `.env.example`, it is essential.

```
$ cp .env.example .env
```

Generate the new `APP_KEY` value on the `.env` file.

```
$ php artisan key:generate
```

You'll have to configure MySQL.

```
Log into your MySQL as root.

Say your .env file has the following confs

  DB_USERNAME=root
  DB_HOST=127.0.0.1
  DB_PASSWORD=
  DB_DATABASE=survey

Execute laravel's migrations.

```
$ php artisan migrate
```

Run webpack's tasks to generate JavaScript and CSS assets.

```
$ npm run dev
OR
$ npm run production # to generate minified files
```

Start up the server.

```
$ php artisan serve
```

> You will have to access `http://localhost:8000/`.


This survey system is made using laravel framework and node.js and bootstrap.

Look for every code thoroughly for your viva i have added comment on every line.

Everything is created using components from js library including graphs and answers.

GeoIp api and function is used for tracking the geo locations.
