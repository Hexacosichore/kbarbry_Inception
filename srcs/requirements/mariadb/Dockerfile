FROM alpine:3.14

RUN		apk update		\
	&&	apk upgrade

WORKDIR	/tmp/mariadb/

COPY 	conf/ .

RUN		set -a			\
	&&	source .env		\
	&&	sh ./setdata.sh

RUN		chmod 755 ./setup.sql	\
	&&	rm ./setdata.sh

RUN		apk add --no-cache mariadb mariadb-client

RUN		mkdir -p /etc/mysql/mariadb.conf.d
RUN		cp 50-server.cnf /etc/mysql/mariadb.conf.d/

RUN		mkdir -p /run/mysqld && mkdir -p /var/lib/mysql
RUN 	cp ./setup.sql /var/lib/mysql
RUN		cat /var/lib/mysql/setup.sql
RUN		chown -R mysql:mysql /run/mysqld && chown mysql:mysql /var/lib/mysql
RUN		mariadb-install-db --user=mysql --datadir='/var/lib/mysql'

USER	mysql

EXPOSE	3306

CMD		["mariadbd"]