FROM debian:buster

RUN		apt-get update -y	\
	&&	apt-get upgrade -y	\
	&&	apt-get install -y php-fpm php-mysql tar

COPY 	./conf/ .
COPY 	./tools/ .

ADD		https://wordpress.org/latest.tar.gz ./latest.tar.gz
RUN		mkdir -p /var/www					\
	&&	tar -xzvf latest.tar.gz				\
	&&	rm latest.tar.gz					\
	&&	mv -f ./wordpress /var/www/			\
	&&	mkdir -p /run/php/					\
	&&	chmod 755 -R /var/www/wordpress		\
	&&	chown -R www-data:www-data /var/www/wordpress

RUN 	rm -f /var/www/wordpress/wp-config-sample.php	\
	&&	mv ./wp-config.php /var/www/wordpress/			\
	&&	mv ./www.conf /etc/php/7.3/fpm/pool.d/www.conf	\
	&&	chmod +x ./setdata.sh

RUN 	sed -i "/listen =/d" /etc/php/7.3/fpm/pool.d/www.conf		\
	&&	echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf

EXPOSE	9000

ENTRYPOINT php-fpm7.3 -F -R