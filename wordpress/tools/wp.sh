#!/bin/bash

if [ ! -f /var/www/html/wp-config.php ]
then
	mkdir -p /var/www/html;
	curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar;
	chmod +x wp-cli.phar;
	mv wp-cli.phar /usr/local/bin/wp;
	cd /var/www/html;
	wp core download --allow-root;
	wp core install --allow-root --url=${WP_URL} --title=${WP_TITLE} --admin_user=${ANIME_NAME} --admin_password=${AMINE_PASS} --admin_email=${ADMIN_EMAIL};
	wp user create --allow-root ${USER_NAME} ${USER_EMAIL} --user_pass=${USER_PASS};
	mv /tmp/wp-config.php /var/www/html/wp-config.php;
	rm /var/www/html/wp-config-sample.php > /dev/null;
fi
