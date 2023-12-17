create database dbBIKO;
use dbBiko;

set SQL_SAFE_UPDATES = 0;

create table tbBairro(
BairroId int primary key auto_Increment,
Bairro varchar (200) not null
);

create table tbCidade(
CidadeId int primary key auto_Increment,
Cidade varchar (200) not null
);

create table tbEstado(
UFId int primary key auto_Increment,
UF char (2) not null 
);

create table tbEndereco(
CEP decimal (8,0) primary key,
Logradouro varchar(200) not null,
IDBairro int,
IDCidade int,
UFId int,
foreign key (IDBairro) references tbBairro(BairroId),
foreign key (IDCidade) references tbCidade(CidadeId),
foreign key (UFId) references tbEstado(UFId)
);

create table tbPrestador(
Id int auto_increment primary key,
Nome varchar(200) not null,
Foto varchar(1000) not null,
Username varchar(40) not null,
Verified boolean,
MediaAvaliacao decimal(2,1) default(0.0),
TotalBIKOs int default(0),
Recomendado boolean not null default(false),
NumEnd decimal(6,0) not null,
Complemento varchar(50),
CepPrestador decimal(8,0),

foreign key (CepPrestador) references tbEndereco(CEP)
);

create table tbUsuarios(
Id int primary key auto_increment,
Username varchar(40) not null,
CPF char(11) not null unique,
RG char(8) not null,
RG_Dig char(1) not null,
Estado_RG varchar(50),
TelCli varchar(11),

RegDate datetime,
Email varchar(150) not null,
Senha varchar(100) not null,
PfP varchar(1000),
LastOnline datetime,

NumEnd decimal(6,0) not null,
Complemento varchar(50),
CepCli decimal(8,0),

foreign key (CepCli) references tbEndereco(CEP)
);

create table tbServico(
OrdemServico int primary key auto_increment,
IDPrestador int,
IDCliente int not null,
CategoriaServico varchar(100) not null,
DescricaoServico varchar(500),
ValorServico int,
IDPagamento int,
CEPCli decimal(8,0),
Bairro int not null,
Cidade int not null,
UF int not null,
NumeroEndereco int not null,
Complemento varchar(100),


foreign key (IDCliente) references tbUsuarios(Id),
foreign key (IDPrestador) references tbPrestador(Id)
);

create table tbPagamentoPix(
IdPgPix int primary key auto_increment,
Valor int,
Expires datetime,
Pago boolean
);

create table tbPagamentoCartaoCredito(
IdPgCredito int primary key auto_increment,
NumeroCartao varchar(16) not null,
NumeroParcelas decimal(2,0) not null,
NomeTitular varchar(200) not null,
CVV decimal(3,0) not null,
Valor int
);

create table tbPagamento(
IdPagamento int primary key auto_increment,
Valor int,
StatusPag varchar(50) default('Pendente'),
IDPagamentoCreditCard int,
IDPagamentoPIX int,

IDServico int,
foreign key (IDServico) references tbServico(OrdemServico),
foreign key (IdPagamentoCreditCard) references tbPagamentoCartaoCredito(IdPgCredito),
foreign key (IdPagamentoPIX) references tbPagamentoPIX(IdPgPix)
);

alter table tbServico add foreign key (IdPagamento) references tbPagamento(IdPagamento);

create table tbAvaliacao(
IdAvaliacao int primary key auto_increment,
OrdemServico int,
UsernamePrestador varchar(40),
Avaliacao decimal(2,1),
IdCliente int,
Horario timestamp
);

create table tbConversa(
Id int primary key auto_increment,
UsuárioUm int,
UserTwo int,
Lido boolean,
VistoUltimo timestamp
);

create table tbChats(
Id int primary key auto_increment,
UserEnvio int,
UserRecebe int,
Mensagem varchar(500),
Imagem varchar(1000),
Creation datetime
);

delimiter !!
create trigger trgAtualizarAvaliacao after insert on tbAvaliacao
for each row
begin
    declare AvaliacaoMedia int;
    if ((select count(*) from tbAvaliacao where UsernamePrestador = new.UsernamePrestador) >= 10) then
        set AvaliacaoMedia = (select SUM(Avaliacao) from tbAvaliacao where UsernamePrestador = new.UsernamePrestador);
		set AvaliacaoMedia = AvaliacaoMedia/(select count(*) from tbAvaliacao where UsernamePrestador = new.UsernamePrestador);
		update tbPrestador set MediaAvaliacao = CAST(AvaliacaoMedia as decimal(2,1)) where Username = new.UsernamePrestador;
	end if;
end; !!

delimiter %%
create procedure spCadastro(vNome varchar(200), vFoto varchar(1000), vUsername varchar(40), vVerificado boolean, vNumEnd decimal(6,0))
begin
if exists (select * from tbPrestador where Username = vUsername) then
select 'Já existe' as 'Resultado!';
else insert into tbPrestador(Nome, Foto, Username, Verified, NumEnd) values (vNome, vFoto, vUsername, vVerificado, vNumEnd);
end if;
end; %%

call spCadastro('Wanessa Wolf', 'https://s2-glamour.glbimg.com/m4cnE4wMULv1Iz9V8NzzE5196lM=/0x0:1440x1800/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_ba3db981e6d14e54bb84be31c923b00c/internal_photos/bs/2023/L/b/54fdMbSvGxhrDkMODbgg/wanessawolf-326420971-220749197003352-5458414583618358995-n.jpg', 'wanessawolf', false, 600);
call spCadastro('Juliette Freire', 'https://s2-glamour.glbimg.com/S50YW2GI2zgf5z4uclNBvtq5aVY=/0x0:1080x1350/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_ba3db981e6d14e54bb84be31c923b00c/internal_photos/bs/2023/B/E/npSBTcSmAX9pD9T5J5Tg/snapinsta.app-340688386-513225034352970-5045310119242492346-n-1080.jpg', 'Juliette', true, 2500);

call spCadastro('Virgínia Fonseca', 'https://s2-glamour.glbimg.com/DijXGRAH8rl89K7mthzNz58W7cw=/0x0:1078x594/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_ba3db981e6d14e54bb84be31c923b00c/internal_photos/bs/2023/u/d/IAz9JlRVSedwylYPGpbg/virginia-fonseca.jpg', 'virginia', false, 25000);
call spCadastro('Dua Lipa', 'https://s2-glamour.glbimg.com/ISJCExxzSh8bTCjnFlVbPZ13gXo=/0x0:1440x1800/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_ba3db981e6d14e54bb84be31c923b00c/internal_photos/bs/2023/J/M/3sTRdFSQuRvyAX7XuMyQ/349453765-3626948877630975-2178870451676971967-n.jpg', 'DUALIPA', true, 2540);
call spCadastro('Anitta', 'https://s2-glamour.glbimg.com/wXgLdsxyPDOmPMHoX2FHsbUiDBA=/0x0:2624x3936/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_ba3db981e6d14e54bb84be31c923b00c/internal_photos/bs/2023/T/k/umzId4RvSA8i1rc9Bh6g/anitta-grammy-latino-2023-4-.jpeg', 'Anitta', true, 25);
call spCadastro('Lady Gaga', 'https://s2-glamour.glbimg.com/Bi8tc1mBiEeyXNslbGApTGMC4yw=/0x0:1024x683/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_ba3db981e6d14e54bb84be31c923b00c/internal_photos/bs/2022/g/o/s2dtmAQYayk2w76sAQ8Q/gettyimages-1389379839.jpg', 'LadyGaga', true, 2009);
call spCadastro('Britney Spears', 'https://s2-glamour.glbimg.com/VAOJON0BOimzI0-KZR20ufKmumo=/0x0:1024x681/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_ba3db981e6d14e54bb84be31c923b00c/internal_photos/bs/2022/W/K/PxIgBlTyi5GnGq0C4E4w/britney-spears-unhas-ansiedade-nail-art.jpg', 'britneyspears', false, 2003);
call spCadastro('Katy Perry', 'https://s2-glamour.glbimg.com/ltl4zzEMwckfKpGYs2KGMUF4prs=/0x0:1300x853/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_ba3db981e6d14e54bb84be31c923b00c/internal_photos/bs/2023/S/x/jKMPHBQWCpKs3LtBdMLg/katy-perry.jpg', 'KatyPerry', false, 870);
call spCadastro('Marina Sena', 'https://s2-glamour.glbimg.com/SqrMYH8u2tLxv5PhbkyfBhYKPbk=/0x0:1280x960/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_ba3db981e6d14e54bb84be31c923b00c/internal_photos/bs/2023/M/A/GGWQrWTKCkptzam3qwbQ/whatsapp-image-2023-10-09-at-22.49.21.jpeg', 'marinasena', false, 13);
call spCadastro('Taylor Swift', 'https://s2-glamour.glbimg.com/idbDFro2H52vS6PFajEfvArFrTw=/0x0:1080x864/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_ba3db981e6d14e54bb84be31c923b00c/internal_photos/bs/2023/s/w/ySoc3CQmi2lAQ6tg0A4w/snapinsta.app-404914354-1027041155228837-6429262257398808050-n-1080.jpg', 'taylorswift13', true, 1989);
call spCadastro('Beyoncé Knowles', 'https://s2-glamour.glbimg.com/Nv5z5mXb3yfZX-gSyUzjwCg6Hw4=/0x0:1080x1350/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_ba3db981e6d14e54bb84be31c923b00c/internal_photos/bs/2023/q/j/pBL8AMTzaf18SpNDAfHA/snapinsta.app-404270214-1731525950680560-1232574187438782641-n-1080.jpg', 'Beyonce', true, 2023);

delimiter %%
create procedure spRecomenda(vUsername varchar(40))
begin
update tbPrestador set Recomendado = true where Username = vUsername;
end; %%

call spRecomenda('Beyonce');
call spRecomenda('MarinaSena');
call spRecomenda('LadyGaga');
call spRecomenda('Anitta');


delimiter $$
create procedure spAvaliacao(vUsername varchar(40), vAvaliacao decimal(2,1), vIdCliente int)
begin
declare vIdCliente int;
set vIdCliente = (select Id from tbUsuarios where Username = vUsername);

insert into tbAvaliacao (UsernamePrestador, Avaliacao, IdCliente) values (vUsername, vAvaliacao, vIdCliente);
end; $$

call spAvaliacao('DUALIPA', 4.5, 1);
call spAvaliacao('DUALIPA', 5.0, 2);
call spAvaliacao('DUALIPA', 5.0, 3);
call spAvaliacao('DUALIPA', 5.0, 1);
call spAvaliacao('DUALIPA', 1.0, 5);
call spAvaliacao('DUALIPA', 5.0, 8);
call spAvaliacao('DUALIPA', 3.5, 7);
call spAvaliacao('DUALIPA', 4.0, 9);
call spAvaliacao('DUALIPA', 5.0, 1);
call spAvaliacao('DUALIPA', 2.5, 6);
call spAvaliacao('wanessawolf', 2.0, 1);
call spAvaliacao('wanessawolf', 3.0, 2);
call spAvaliacao('wanessawolf', 5.0, 4);
call spAvaliacao('DUALIPA', 5.0, 10);
call spAvaliacao('DUALIPA', 5.0, 23);
call spAvaliacao('DUALIPA', 5.5, 1);
call spAvaliacao('DUALIPA', 4.5, 2);
call spAvaliacao('DUALIPA', 3.0, 3);
call spAvaliacao('DUALIPA', 2.5, 1);
call spAvaliacao('DUALIPA', 5.0, 24);
select * from tbPrestador;
select * from tbAvaliacao;

delimiter %%
create procedure spConsulta(vQuery varchar(100))
begin
if not exists (select * from tbPrestador where Username like vQuery) then
select 'Não existe' as 'Busca';
else select * from tbPrestador where Username like vQuery;
end if;
end; %%

call spConsulta('Beyonce');
select * from tbPrestador;