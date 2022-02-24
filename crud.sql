-- creation de la bdd crud
create database crud;
-- utilisation de la bdd crud
use crud;
-- creation de la table utilisateur
create table utilisateur(
id_util int auto_increment primary key not null,
name_util varchar(50),
first_name_util varchar(50),
mail_util varchar(50),
password_util varchar(100)
);
-- creation de la table article
create table article(
id_article int auto_increment primary key not null,
name_article varchar(50),
content_article text,
date_article date,
id_util int
);
-- Ajout de la foreign key utilisateur (table article)
alter table article
add constraint fk_rediger_utilisateur
foreign key(id_util)
references utilisateur(id_util);
