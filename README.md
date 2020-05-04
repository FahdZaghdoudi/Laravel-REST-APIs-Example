# Laravel-REST-APIs-Example
## Building backend API with Laravel


This API is created using Laravel API Resources. It has Users, listing cars and searching cars. Protected routes are also added. Protected routes are accessed via Passport access token.
Following are the Models

    User
    Car

## Usage

* Clone the project via git clone or download the zip file.
.env

* Copy contents of .env.example file to .env file. Create a database and connect your database in .env file.
Composer Install

* cd into the project directory via terminal and run the following command to install composer packages.
composer install
Generate Key

* then run the following command to generate fresh key.
php artisan key:generate
Run Migration

* then run the following command to create migrations in the databbase.
php artisan migrate
Passport Install

* run the following command to install passport
php artisan passport:install
Make Auth System

* then run the following command to generate the auth Scaffolding.
php artisan make:auth
