CREATE DATABASE login_db;
USE login_db;

CREATE TABLE users (
	`id` int auto_increment primary key,
    `username` varchar (255) not null,
    `password` varchar (255) not null,
    `nomeMae` varchar (255) not null
);

CREATE TABLE cliente (
	id int auto_increment primary key,
    nome varchar (255) not null,
    cnpj varchar (255) not null,
    endereco varchar (255) not null,
    email varchar(255) not null
);

INSERT INTO cliente 
(nome, cnpj, endereco, email)
VALUES 
('Teste Testes', '1234567890', 'Rua: Dos perdidos', 'teste@teste.com.br');

SELECT * FROM cliente;

CREATE TABLE empresa (
	id int auto_increment primary key,
    nome varchar (255) not null,
    cnpj varchar (255) not null,
    endereco varchar (255) not null,
    email varchar (255) not null
);

INSERT INTO empresa  
(nome, cnpj, endereco, email)
VALUES
('Teste Empresa','1234567890','Rua: sem chao','testeempresa@teste.vom.br');

SELECT * FROM empresa;

CREATE TABLE produto (
	id int auto_increment primary key,
    nome varchar (255) not null,
    marca varchar (255) not null,
    valor double not null
);

INSERT INTO produto 
(nome, marca, valor)
VALUES
('Fita Isolante','3M', 12.99);

SELECT * FROM produto;