FROM debian:buster

RUN		apt-get update -y	\
	&&	apt-get upgrade -y	\
	&&	apt-get install -y nginx openssl

WORKDIR	/etc/nginx/

COPY 	conf/ .

ENTRYPOINT sh ./start.sh