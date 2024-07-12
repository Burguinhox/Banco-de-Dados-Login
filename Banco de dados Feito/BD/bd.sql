create database bdcadastro;
use bdcadastro;

create table if not exists tbcadastro(
  cduser int primary key not null key AUTO_INCREMENT,  
  nome varchar(100) not null,  
  cpf varchar(100) not null,        
  email varchar(80) not null,  
  senha varchar(50) not null
);

select * from tbcadastro;