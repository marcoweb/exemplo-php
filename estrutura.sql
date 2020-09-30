CREATE DATABASE projeto;

USE projeto;

CREATE TABLE artigos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    conteudo TEXT NOT NULL
);