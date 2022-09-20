FROM debian:buster

RUN apt-get update
RUN apt-get install nginx openssl -y

COPY ./default /etc/nginx/sites-enabled/default

CMD ["nginx", "-g" ,"daemon off;"]

