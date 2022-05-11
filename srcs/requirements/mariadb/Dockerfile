FROM debian:buster

RUN		apt-get update -y	\
	&&	apt-get upgrade -y	\
	&&	apt-get install -y mariadb-server

WORKDIR	/tmp/mariadb/

COPY 	conf/ .

RUN		cp ./50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

EXPOSE	3306

ENTRYPOINT sh setdata.sh