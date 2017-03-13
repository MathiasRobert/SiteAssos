drop table if exists UTILISATEUR;
drop table if exists ASSOCIATION;
drop table if exists EVENEMENT;
drop table if exists ARTICLE;
drop table if exists CATEGORIE;
drop table if exists COMMENTAIRE;
drop table if exists EQUIPE;

create table UTILISATEUR (
    util_id integer not null primary key auto_increment,
    util_id_google int not null,
    util_nom varchar(50) not null,
    util_prenom varchar(50) not null,
    util_promotion varchar(50) not null,
    util_mail varchar(50) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table ASSOCIATION (
    asso_id integer not null primary key auto_increment,
    asso_nom varchar(100) not null,
    asso_diminutif varchar(8),
    asso_mail varchar(100) not null,
    asso_couleur varchar(10),
    asso_description_court varchar(500) not null,
    asso_description_long varchar(2000),
    asso_logo varchar(150)
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table EQUIPE (
    equi_id integer not null primary key auto_increment,
    asso_id integer not null,
    equi_nom varchar(50) not null,
    equi_prenom varchar(50) not null,
    equi_poste varchar(50) not null,
    equi_groupeTD varchar(50) not null,
    equi_mail varchar(50) not null,
    equi_photo varchar(150),
    foreign key (asso_id) references ASSOCIATION (asso_id)
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table EVENEMENT (
    even_id integer not null primary key auto_increment,
    asso_id integer not null,
    even_titre varchar(50) not null,
    even_lieu varchar(100) not null,
    even_theme varchar(50),
    even_date date not null,
    even_heure time,
    even_prix int not null,
    even_tarifs text,
    even_nbParticipantsMax int,
    even_photo varchar(150),
    foreign key (asso_id) references ASSOCIATION (asso_id)
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table ARTICLE (
    arti_id integer not null primary key auto_increment,
    asso_id integer not null,
    cate_id integer not null,
    arti_titre varchar(50) not null,
    arti_texte text,
    arti_dateHeure datetime not null,
    arti_photo varchar(150),
    foreign key (asso_id) references ASSOCIATION (asso_id),
    foreign key (cate_id) references CATEGORIE (cate_id),
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table CATEGORIE (
    cate_id integer not null primary key auto_increment,
    cate_nom varchar(50) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table COMMENTAIRE (
    comm_id integer not null primary key auto_increment,
    arti_id integer not null,
    comm_texte text,
    comm_dateHeure datetime not null,
    foreign key (arti_id) references ARTICLE (arti_id)
) engine=innodb character set utf8 collate utf8_unicode_ci;
