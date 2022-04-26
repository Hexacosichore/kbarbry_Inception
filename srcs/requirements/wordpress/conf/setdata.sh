# !/bin/bash

sed -i "s/\${DB_NAME}/${DB_NAME}/g" wp-config.php
sed -i "s/\${USER_NAME_SQL}/${USER_NAME_SQL}/g" wp-config.php
sed -i "s/\${USER_PSSWD_SQL}/${USER_PSSWD_SQL}/g" wp-config.php