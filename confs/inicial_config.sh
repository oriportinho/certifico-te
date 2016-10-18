#!/bin/bash

echo "install ambient system for Certifico-te"

cp /root/certifico-te/certifico-te/cadastrar_certificado.php /var/www/html/index.php
cp /root/certifico-te/certifico-te/validar_certificado.php /var/www/html/cadastrar/index.php

sudo service apache2 restart





