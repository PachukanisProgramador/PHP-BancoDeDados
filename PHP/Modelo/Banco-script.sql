create database banco;
use banco;

create table Pessoa(
codigo int not null primary key auto_increment,
nome varchar(150) not null,
telefone bigint(11) not null
)Engine = InnoDB;

select * from pessoa;