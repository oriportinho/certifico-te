apt update
apt install apache2 mysql-server php7.0 libapache2-mod-php7.0 php7.0-mysql -y

mkdir /var/www/html
mkdir /var/www/html/cadastrar
mkdir /var/www/html/cadastrar/uploads

chmod -R 755 /var/www

apt install phpmyadmin
