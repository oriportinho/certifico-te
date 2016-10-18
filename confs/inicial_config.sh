#!/bin/bash

echo "install ambient system for Certifico-te"

chmod -R 755 /var/www

cp /root/certifico-te/certifico-te/cadastrar_certificado.html /var/www/html/index.html
cp /root/certifico-te/certifico-te/validar_certificado.html /var/www/html/cadastrar/index.html

sudo service apache2 restart





