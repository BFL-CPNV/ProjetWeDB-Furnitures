CREATE USER 'appliConnector'@'localhost' IDENTIFIED BY '123qweasD!';
GRANT SELECT, DELETE, DROP, INSERT, UPDATE  ON *.* TO 'appliConnector'@'localhost';
FLUSH PRIVILEGES;