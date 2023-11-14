-- Crear un nuevo usuario con todos los permisos
CREATE USER 'hidromap'@'localhost' IDENTIFIED BY 'hidromap';
GRANT ALL PRIVILEGES ON *.* TO 'hidromap'@'localhost' WITH GRANT OPTION;

CREATE DATABASE hidromap;
