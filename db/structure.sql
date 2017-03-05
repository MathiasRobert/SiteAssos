drop table if exists utilisateur;
drop table if exists association;
drop table if exists evenement;
drop table if exists article;
drop table if exists commentaire;
drop table if exists equipe;

create table utilisateur (
    util_id integer not null primary key auto_increment,
    util_id_google integer not null,
    util_nom varchar(50) not null,
    util_prenom varchar(50) not null,
    util_promotion varchar(50) not null,
    util_mail varchar(50) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table association (
    asso_id integer not null primary key auto_increment,
    asso_nom varchar(100) not null,
    asso_diminutif varchar(8) not null,
    asso_mail varchar(100) not null,
    asso_couleur varchar(10) not null,
    asso_description_court varchar(500) not null,
    asso_description_long varchar(2000) not null,
    asso_logo varchar(150)
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table equipe (
    equi_id integer not null primary key auto_increment,
    equi_nom varchar(50) not null,
    equi_prenom varchar(50) not null,
    equi_poste varchar(50) not null,
    equi_groupe varchar(50) not null,
    equi_photo varchar(150)
) engine=innodb character set utf8 collate utf8_unicode_ci;
