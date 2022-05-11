FROM debian:buster

RUN		apt-get update -y	\
	&&	apt-get upgrade -y	\
	&&	apt-get install -y wget php-fpm php-mysqlnd tar

COPY	conf/ .

RUN		mkdir -p /var/www/wordpress

RUN		wget https://wordpress.org/latest.tar.gz
RUN		tar xzvf latest.tar.gz
RUN		rm latest.tar.gz
RUN		mv -f wordpress /var/www/

RUN		chown -R www-data:www-data /var/www/wordpress/

RUN		rm -rf /var/www/wordpress/wp-config-sample.php	\
	&&	sh ./setdata.sh									\
	&&	cat wp-config.php								\
	&&	rm setdata.sh

EXPOSE 9000

ENTRYPOINT sh ./start.sh