FROM debian:buster

RUN apt-get update && apt-get upgrade -y 
RUN apt-get install -y mariadb-server

EXPOSE 3306

# COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./conf/setupdb.sql /home/setupdb.sql

RUN service mysql start && mysql < /home/setupdb.sql

CMD ["mysqld"]

