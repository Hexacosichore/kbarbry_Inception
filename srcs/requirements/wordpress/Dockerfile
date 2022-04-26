FROM alpine:3.14

RUN		apk update		\
	&&	apk upgrade		\
	&&	apk add --no-cache php-fpm php-mysqlnd wget php php-phar php-json

WORKDIR	/var/www/wordpress


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