# !/bin/bash
export $(cat .env | egrep -v "(^#.*|^$)" | xargs)

sed -i "s/{DB_NAME}/${DB_NAME}/g" wp-config.php
sed -i "s/{USER_NAME_SQL}/${USER_NAME_SQL}/g" wp-config.php
sed -i "s/{USER_PSSWD_SQL}/${USER_PSSWD_SQL}/g" wp-config.php
sed -i -e "s/;daemonize = yes/daemonize = no/g" /etc/php/7.3/fpm/php-fpm.conf