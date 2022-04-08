FROM alpine:3.14

RUN		apk update		\
	&&	apk upgrade		\
	&&	apk add --no-cache php-fpm wget

WORKDIR	/var/www/wordpress

RUN		 wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

EXPOSE 9000

CMD ["php-fpm7", "-F"]