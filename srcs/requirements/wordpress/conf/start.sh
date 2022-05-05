# !/bin/bash
mkdir -p /var/www
mkdir -p /var/www/wordpress

wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp

mv wp-config.php /var/www/wordpress

cd /var/www/wordpress
wp core download --allow-root
wp core install --url=${DOMAIN} --title=${WP_TITLE} --admin_user=${USER_NAME_SQL} --admin_password=${USER_PSSWD_SQL} --admin_email=${WP_MAIL} --allow-root
cd -
cp www.conf /etc/php7/php-fpm.d/
service php-fpm7 start
service php-fpm7 stop
php-fpm7 -F -R
sleep infinity