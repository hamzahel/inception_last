CREATE DATABASE IF NOT EXISTS wordpress;
CREATE USER 'alfrido'@'localhost' identified by '123qwe';
GRANT ALL PRIVILEGES ON wordpress.* TO 'alfrido'@'localhost'; --- or '%'
FLUSH PRIVILEGES
