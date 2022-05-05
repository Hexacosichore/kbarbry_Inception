service nginx start

cp ./default ./sites-enabled/default
openssl req -x509 -nodes -newkey rsa:4096 -keyout cle.key -out cert.pem -days 365 -subj "/C=FR/CN=42Lyon"
openssl x509 -outform pem -in cert.pem -out cert.crt

service nginx restart