#!/bin/bash

export DEBIAN_FRONTEND=noninteractive

set -e;
set -x;

apt-add-repository ppa:ondrej/php5;
aptitude update -y;
aptitude install -y -q mysql-server php5 php5-json php5-mysql;

cd /vagrant; # Let's go to the app itself
app/console doctrine:database:create
app/console doctrine:schema:update --force
app/console doctrine:fixtures:load
app/console server:run 0.0.0.0:8000 &