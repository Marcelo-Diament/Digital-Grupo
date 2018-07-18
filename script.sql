use ecommerce;
select * from pagamentos;

alter table historico change produtos_id produtos_id_fk int(11);

alter table usuarios 
add foreign key (historico_fk) references historico (id);

insert into cidades (nome, DDD, UFs) values ('Palmas', 63, 27);

update ufs set nome = 'Rondônia' where nome = 'rondonia';

alter table pagamentos modify status_fk int not null;

SET SQL_SAFE_UPDATES = 0;

create table meios (
id int primary key auto_increment,
nome varchar(50),
taxa_transacao decimal(6,2),
taxa_parcela int(3),
taxa_outras int(3)
);

create table status_tabela (
id int primary key auto_increment,
nome varchar(50) 
);

alter table pagamentos add 
constraint `ligacao_pagamentos_meios` foreign key (`id_meio_fk`) references `meios` (`id`);

