#!/bin/bash

echo "install ambient system for Certifico-te"

apt update
apt install apache2 -y

chmod -R 755 /var/www

git push https://github.com/oriportinho/certifico-te

cp /root/certifico-te/certifico-te/cadastrar_certificado.html /var/www/html/index.html
mkdir /var/www/html/cadastrar
cp /root/certifico-te/certifico-te/validar_certificado.html /var/www/html/cadastrar/index.html

sudo service apache2 restart





