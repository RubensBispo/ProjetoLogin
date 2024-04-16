
create database dbDados;

use dbDados;

create table pessoa(
codigo int not null auto_increment,
nome varchar(30) not null,
sobrenome varchar(50) not null,
Eemail varchar(100),
cpf char(11),
sexo char(1),
usuário varchar(30),
senha varchar(50),
primary key(codigo)
);
