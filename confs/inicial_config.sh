#!/bin/bash

echo "install ambient system for Certifico-te"

cp /root/certifico-te/cadastrar_certificado.php /var/www/html/index.php
cp /root/certifico-te/validar_certificado.php /var/www/html/cadastrar/index.php
cp /root/certifico-te/crud_crusos.php /var/www/html/crud_crusos.php

sudo service apache2 restart
