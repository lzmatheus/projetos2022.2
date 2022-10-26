create database Sport_Max;

use Sport_Max;

create table fornecedor(
    codforn int primary key auto_increment,
    nomeforn varchar(50)
);

create table produto(
    codprod int primary key auto_increment,
    fotoproduto varchar(300),
    nomeprod varchar(1500),
    valor varchar(10),
    quantidade varchar(10),
    codforn int,
    foreign key(codforn) references fornecedor(codforn)
);

create table cliente(
codcliente int primary key auto_increment,
nomecli varchar(1500),
    email varchar(35),
    cpf char(11),
    datnasc char(11),
    senha char(11),
    cargo varchar(6)
    
);

insert into cliente values(null,'eduardo','edu@gmail.com','12345678911','2000-05-02','12345','adm') ;

insert into fornecedor values(null,'Adidas'); 
insert into fornecedor values(null,'Nike');
insert into fornecedor values(null,'Puma'); 
insert into fornecedor values(null,'Kappa'); 
insert into fornecedor values(null,'Umbro'); 

insert into produto values(null,"img/flamengo.png",
'camisa 3 cr flamengo 22/23','299.90','20','1');

insert into produto values(null,"img/cruzeiro.png",
'camisa do cruzeiro I adidas - masculina','299.99','50','3');

insert into produto values(null,"img/vasco.png",
'camisa vasco kappa III - masculina','299.90','40','5');

insert into produto values(null,"img/fluminense.png",
'camisa fluminense III - masculina',' 269.91','20','2');

insert into produto values(null,"img/corinthians.png",
'camisa nike corinthians II',' 249.99','10','2');

insert into produto values(null,"img/chuteira1.png",
'chuteira future 3.4 campo','1.389.99','20','1');

insert into produto values(null,"img/chuteira2.png",
'chuteira cike mercurial vapor 14 elite campo','549.90','50','1');

insert into produto values(null,"img/chuteira3.png" ,
'chuteira nike phantom gt2 elite campo','2299.99','70','2');

insert into produto values(null,"img/chuteira4.png" ,
'chuteira x speedportal+','1999.99','5','1');

insert into produto values(null,"img/chuteira5.png",
'chuteira nike zoom mercurial  9 campo',' 2299.99','5','2');

insert into produto values(null,"img/short1.png",
'shorts nike sportswear flow masculino','239.99 ','5','2');

insert into produto values(null,"img/short2.png",
'shorts nike los angeles lakers masculino',' 279.99','5','2');

insert into produto values(null,"img/short3.png",
'shorts neymar jr football masculino','119.90 ','5','1');

insert into produto values(null,"img/short4.png",
'shorts de futebol plus size básico',' 37.10','5','3');

insert into produto values(null,"img/short5.png",
'shorts entrada 22','89.99','5','4');


create table itens_eduardo(
codprod int,
quantidade char(6),
foreign key(codprod) references produto(codprod)
);

create table compra (
codcompra int primary key auto_increment not null,
codprod int,
codcliente int,
numcart char(16),
quantidadedpr char(6),
valor_compra char(6),
foreign key(codprod) references produto(codprod),
foreign key(codcliente) references cliente(codcliente)

);





create view bancoconsulta as select 
f.codforn,
f.nomeforn,
p.codprod,
p.fotoproduto,
p.nomeprod,
p.valor,
p.quantidade,
c.codcliente
from cliente c, fornecedor f inner join produto p
on f.codforn=p.codforn;
