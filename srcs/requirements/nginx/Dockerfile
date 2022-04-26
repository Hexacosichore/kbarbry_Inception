FROM alpine:3.14

RUN		apk update		\
	&&	apk upgrade		\
	&&	apk add --no-cache nginx openssl

WORKDIR	/etc/nginx/

COPY 	conf/ .

RUN		mkdir -p sites-enabled						\
	&&	cp default.conf /etc/nginx/sites-enabled/	\
	&&	rm ./default.conf

RUN		openssl req -x509 -nodes -newkey rsa:4096 -keyout cle.key -out cert.pem -days 365 -subj "/C=FR/CN=42Lyon" \
	&&	openssl x509 -outform pem -in cert.pem -out cert.crt

CMD ["nginx", "-g", "daemon off;"]