create database fiap_db;

use fiap_db;

create table tb_events(
	id			int not null primary key auto_increment,
    title 		varchar(255),
    local_event	varchar(255),
    start_at	datetime,
    end_at		datetime,
    site		varchar(255)
);
