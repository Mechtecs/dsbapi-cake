#!/usr/bin/env bash

echo "Preinstall configuration"

export DEBIAN_FRONTEND=noninteractive

echo "Installing dependencies"

apt-get -y -q update > /dev/null
apt-get -y -q install --no-install-recommends apache2 libapache2-mod-php5 php5 php5-intl php5-mysql php5-cli > /dev/null
a2enmod rewrite

echo "Configuring services"

cp /vagrant/virtualhost.conf /etc/apache2/sites-available/000-default.conf

# symlink sources into apache dir
rm -rf /var/www/html
ln -s /vagrant/webroot /var/www/html

service apache2 restart

echo "Install done"
