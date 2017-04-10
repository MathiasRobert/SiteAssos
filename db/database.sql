create database if not exists assos_ensc character set utf8 collate utf8_general_ci;
use assos_ensc;

grant all privileges on assos_ensc.* to 'assos_ensc_user'@'localhost' identified by 'secret';
