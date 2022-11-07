-- criar banco projeto_cadmo_sa
CREATE DATABASE `projeto_cadmo_sa`;





-- selecionar o banco de dados
USE `projeto_cadmo_sa`;





-- criar tabelas
CREATE TABLE `paciente` (
    cod_paciente INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(15)
);





CREATE TABLE `dentista` (
    crm INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    espec VARCHAR(100) NOT NULL
);



CREATE TABLE `administrador` (
    cod_adm INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
	senha VARCHAR(32) NOT NULL
);



CREATE TABLE `consulta` (
    cod INT PRIMARY KEY AUTO_INCREMENT,
    crm INT,
    cod_paciente INT,
    dia DATE,
    hora TIME NOT NULL,
    valor FLOAT(9) NOT NULL,
    
    FOREIGN KEY (crm)
        REFERENCES dentista (crm),
    FOREIGN KEY (cod_paciente)
        REFERENCES paciente (cod_paciente)
);    
