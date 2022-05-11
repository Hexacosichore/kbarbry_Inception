# !/bin/bash
mysql -e "CREATE DATABASE {DB_NAME}";
mysql -e "CREATE USER '{USER_NAME_SQL}'@'%' IDENTIFIED BY '{USER_PSSWD_SQL}'";
mysql -e "GRANT ALL PRIVILEGES ON {DB_NAME}.* TO '{USER_NAME_SQL}'@'%'";
mysql -e "FLUSH PRIVILEGES";
mysql -e "ALTER USER 'root'@'localhost' IDENTIFiED BY 'ROOT_PSSWD_SQL'";

exec mysqld