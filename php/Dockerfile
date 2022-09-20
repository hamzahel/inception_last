FROM debian:buster

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install php7.3 php7.3-fpm php7.3-cli php-mysqli wget curl -y


EXPOSE 9000

#php setup
RUN sed -i "s/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/" "/etc/php/7.3/fpm/pool.d/www.conf"
RUN mkdir -p /run/php
RUN touch /run/php/php7.3-fpm.pid

#/etc/php/7.3/fpm/pool.d

#wordpress setup
RUN mkdir -p /var/www/html
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp
WORKDIR /var/www/html
RUN wp core download --allow-root
COPY ./conf/wp-config.php /var/www/html/wp-config.php
RUN wp core install --allow-root --url=${WP_URL} --title=${WP_TITLE} --admin_user="alfrido" --admin_password="123qwe" --admin_email=${ADMIN_EMAIL}
RUN wp user create --allow-root ${USER_NAME} ${USER_EMAIL} --user_pass=${USER_PASS}


CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]
