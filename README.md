# ![Laravel Example App](logo.png)

[![Build Status](https://img.shields.io/travis/gothinkster/laravel-realworld-example-app/master.svg)](https://travis-ci.org/gothinkster/laravel-realworld-example-app) [![Gitter](https://img.shields.io/gitter/room/realworld-dev/laravel.svg)](https://gitter.im/realworld-dev/laravel) [![GitHub stars](https://img.shields.io/github/stars/gothinkster/laravel-realworld-example-app.svg)](https://github.com/gothinkster/laravel-realworld-example-app/stargazers) [![GitHub license](https://img.shields.io/github/license/gothinkster/laravel-realworld-example-app.svg)](https://raw.githubusercontent.com/gothinkster/laravel-realworld-example-app/master/LICENSE)
# Getting started

## Installation

Clone the repository

    git clone git@github.com:gothinkster/laravel-realworld-example-app.git
    or dowload zip an extract in your www folder

Switch to the repo folder

    cd te-software

Install all the dependencies using composer and npm

    composer install
    npm install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=taller1
    DB_USERNAME=root
    DB_PASSWORD

Generate a new application key

    php artisan key:generate

Start mysql and create the database

    mysql -u root
    > CREATE DATABASE taller1; 

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

You ca start the local development server or go to you http://localhost/te-software/public/

    php artisan serve

You can now access the server at http://localhost:8000
    
**Make sure you set the correct database connection information before running the migrations**
