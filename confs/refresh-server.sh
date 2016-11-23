#!/bin/bash

echo "Install ambient system for Certifico-te"
echo "To update the server repository in github, use git pull in the certifico-te folder."

cp ../validar_certificado.php /var/www/html/index.php
cp ../cadastrar_certificado.php /var/www/html/cadastrar/index.php
cp ../crud_curso.php /var/www/html/cadastrar/crud_curso.php
cp ../crud_pessoa.php /var/www/html/cadastrar/crud_pessoa.php

sudo service apache2 restart
