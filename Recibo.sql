create database recibo
default character set utf8
default collate utf8_general_ci;


CREATE TABLE cliente (
  
  CPF_CNPJ BIGINT NOT NULL,
  Nome varchar(50) DEFAULT NULL,
  CEP int(11) DEFAULT NULL,
  Endereço varchar(50) DEFAULT NULL,
  Número int(11) DEFAULT NULL,
  Complemento varchar(50) DEFAULT NULL,
  Cidade varchar(30) DEFAULT NULL,
  UF varchar(20) DEFAULT NULL,
  Telefone BIGINT DEFAULT NULL,
  E_mail varchar(50) DEFAULT NULL,
  Primary key (CPF_CNPJ)

) DEFAULT CHARSET=utf8;

create table dad_recib(

	Num_recibo BIGINT NOT NULL AUTO_INCREMENT,
    CPF_CNPJ BIGINT NOT NULL,
    Pagante varchar (50),
    Valor decimal ( 5,2),
    Referência mediumtext,
    Nota_fiscal varchar (30),
    Primary key (Num_recibo),
    constraint FK_client_recib 
    Foreign key (CPF_CNPJ) references cliente(CPF_CNPJ)

) DEFAULT CHARSET = UTF8;

create table login(

	Nome varchar (30),
    Senha varchar (40)

)DEFAULT CHARSET = UTF8;
