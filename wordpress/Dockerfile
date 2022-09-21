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

COPY ./tools/wp.sh /tmp/wp.sh
COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d
COPY ./conf/wp-config.php /tmp/wp-config.php
RUN chmod +x /tmp/wp.sh
RUN bash /tmp/wp.sh
#ENTRYPOINT ["bash", "/tmp/wp.sh"]
CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]
