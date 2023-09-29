# Getting started
To make it easy for you to get started with GitHub, here's a list of recommended next steps.

## Requirements

- Composer 2.5.4
- PHP 8.1.17
- MySQL 8.0.30

## Clone the repository
- git clone https://github.com/kalpana-devitpl/rabbitmq-admin.git

## Switch to the repo folder
- cd memcached

## Install all the dependencies using the composer
- composer install

## Copy the example env file and make the required configuration changes in the .env file
- cp .env.example .env

## Configure the rabbitMQ in the .env file
 - QUEUE_CONNECTION=rabbitmq

## Add the configuration for RabbitMQ in .env file
  RABBITMQ_HOST=
  RABBITMQ_PORT=5672
  RABBITMQ_USER=guest
  RABBITMQ_PASSWORD=guest
  RABBITMQ_VHOST=guest

## Generate a new application key
- php artisan key:generate

## Run the database migrations (Set the database connection in .env before migrating)
 - php artisan migrate
   
## Run the database seeders
 - php artisan db:seed
   
## Create these folders under storage/framework: (If you don't have a framework folder then create one first )
 - sessions
 - cache
 - views
   
## Clear the config cache
 - php artisan config:cache
 - php artisan config:clear
   
## Start the local development server
- php artisan serve --port=8082
You can now access the server at http://127.0.0.1:8082 and open the Postman to import the API collection from here

## Note: If you got the "Please provide a valid cache path" error then run the command on the terminal: rm -rf bootstrap/cache/config.php

