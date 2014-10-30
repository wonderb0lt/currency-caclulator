# Simple Currency Conversion Tool

A simple tool for converting currencies. Nothing to use in production, just a simple Symfony2 demo app.

## Running the server

The easiest way to get this working is using Vagrant. Run `vagrant up`, wait for completion and go to [10.0.20.10:8000](10.0.20.10:8000).

Or, if you want to run this on your local machine:

1. Configure the database settings in your config_dev.yml
2. Run `app/console doctrine:schema:update --force` in project directory
3. Run `app/console doctrine:fixtures:load`
4. Run `app/console server:run`.
5. Go to localhost:8000

## Prerequisites

If you want to run this on your machine:

* PHP 5.3.3 or higher with JSON and ctype support, correctly configured (see [Doctrine docs](http://symfony.com/doc/current/reference/requirements.html#required))
* A MySQL database on your localhost with an empty PW for root (or edit [the settings](https://github.com/wonderb0lt/currency-caclulator/blob/master/app/config/parameters.yml) accordingly)
* A browser capable of HTML 5 and JavaScript. :)
