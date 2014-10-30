# Simple Currency Conversion Tool

A simple tool for converting currencies. Nothing to use in production, just a simple Symfony2 demo app.

## Prerequisites

* PHP 5.3.3 or higher with JSON and ctype support, correctly configured (see [Doctrine docs](http://symfony.com/doc/current/reference/requirements.html#required))
* A MySQL database on your localhost with an empty PW for root (or edit [the settings](https://github.com/wonderb0lt/currency-caclulator/blob/master/app/config/config_dev.yml) accordingly)
* A browser capable of HTML 5 and JavaScript. :)

## Setup

1. Configure the database settings in your config_dev.yml
2. Run "app/console doctrine:schema:update --force" in project directory

## Running the server

Since this is just a demonstration app, Symfony2's built-in web server must suffice.

1. Run "app/console server:run".
2. Go to localhost:8000