FROM debian:buster

RUN		apt-get update -y	\
	&&	apt-get upgrade -y	\
	&&	apt-get install -y mariadb-server

WORKDIR	/tmp/mariadb/

COPY 	conf/ .

RUN		sh ./setdata.sh		\
	&&	cat setup.sql

RUN		chmod 755 ./setup.sql	\
	&&	rm ./setdata.sh

RUN		mkdir -p /etc/mysql/mariadb.conf.d
RUN		cp ./50-server.cnf /etc/mysql/mariadb.conf.d

RUN		mkdir -p /run/mysqld && mkdir -p /var/lib/mysql
RUN 	cp ./setup.sql /var/lib/mysql

RUN		service mysql start && mysql << /var/lib/mysql/setup.sql

EXPOSE	3306

CMD		mysqld_safe