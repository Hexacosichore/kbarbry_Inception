FROM debian:buster

RUN		apt-get update -y	\
	&&	apt-get upgrade -y	\
	&&	apt-get install -y php-fpm php-mysqlnd wget

WORKDIR	/

COPY	conf/ .

RUN		set -a			\
	&&	source .env		\
	&&	sh ./setdata.sh	\
	&&	cat wp-config.php

RUN		chmod 755 ./wp-config.php	\
	&&	chmod 777 ./start.sh		\
	&&	rm ./setdata.sh

EXPOSE 9000

ENTRYPOINT sh ./start.sh