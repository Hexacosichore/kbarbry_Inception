cp default /etc/nginx/sites-enabled/default
cp ./nginx.conf /etc/nginx/nginx.conf

openssl genrsa -out server.key 4096
openssl req -new -key server.key -subj "/C=FR/ST=Lyon/O=42Lyon/OU=kbarbry" -out server.csr
openssl req -x509 -in server.csr -key server.key -out server.crt

mv server.crt /etc/ssl/certs/
mv server.csr /etc/ssl/private/

service nginx restart

nginx -g daemon off