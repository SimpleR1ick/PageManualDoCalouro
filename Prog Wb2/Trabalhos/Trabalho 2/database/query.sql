/* PW2_manual_do_calouro */

/* DEVE SER EXECUTADO ANTES DE CRIAR A TABELA */
-- CREATE DATABASE PW2_manual_do_calouro;

CREATE TABLE Usuarios (
    id_user INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(250) NOT NULL
);