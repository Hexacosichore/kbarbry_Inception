# !/bin/bash

wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp

wp core download --allow-root
wp core install --url=${DOMAIN} --title=${WP_TITLE} --admin_user=${USER_NAME_SQL} --admin_password=${USER_PSSWD_SQL} --admin_email=${WP_MAIL} --allow-root
cp www.conf /etc/php7/php-fpm.d/
php-fpm7 -F
sleep infinity