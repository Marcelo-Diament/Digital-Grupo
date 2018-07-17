use ecommerce;
select * from cidades;

alter table historico change produtos_id produtos_id_fk int(11);

alter table usuarios 
add foreign key (historico_fk) references historico (id);

insert into cidades (nome, DDD, UFs) values ('Palmas', 63, 27);

update ufs set nome = 'Rondônia' where nome = 'rondonia';

alter table ufs add sigla varchar(20); 

SET SQL_SAFE_UPDATES = 0;


