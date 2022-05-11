# !/bin/bash
export $(cat .env | egrep -v "(^#.*|^$)" | xargs)

cp wp-config.php /var/www/wordpress
cp www.conf /etc/php/7.3/fpm/pool.d/www.conf

service php7.3-fpm start
service php7.3-fpm stop
php-fpm7.3 -F -R