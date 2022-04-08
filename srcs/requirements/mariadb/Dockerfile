FROM alpine:3.14

RUN		apk update		\
	&&	apk upgrade

WORKDIR	/tmp/mariadb/

COPY 	conf/ .

RUN		chmod a+x ./setdata.sh
RUN		set -a; source .env; sh ./setdata.sh
RUN		chmod a+x ./setup.sql
RUN		rm ./setdata.sh

RUN		apk add --no-cache mariadb mariadb-client

RUN		mkdir -p /run/mysqld && mkdir -p /var/lib/mysql
RUN 	cp ./setup.sql /var/lib/mysql
RUN		cat /var/lib/mysql/setup.sql
RUN		chown -R mysql:mysql /run/mysqld && chown mysql:mysql /var/lib/mysql
RUN		mariadb-install-db --user=mysql --datadir='/var/lib/mysql'

USER	mysql

EXPOSE 3306

CMD 	["mariadbd"]