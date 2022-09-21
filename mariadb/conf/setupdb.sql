CREATE DATABASE IF NOT EXISTS wordpress;
CREATE USER 'alfrido'@'mariadb' identified by '123qwe';
GRANT ALL PRIVILEGES ON wordpress.* TO 'alfrido'@'mariadb';
FLUSH PRIVILEGES
