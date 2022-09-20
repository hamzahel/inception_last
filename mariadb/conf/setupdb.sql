CREATE DATABASE IF NOT EXISTS wordpress;
CREATE USER 'alfrido'@'%' identified by '123qwe';
GRANT ALL PRIVILEGES ON wordpress.* TO 'alfrido'@'%'; --- or '%'
FLUSH PRIVILEGES
