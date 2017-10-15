/*
mysqladmin --version
mysql -u root -p
create databese qihao;
mysql -u root -p < /home/qihao/html/mysql/qihao.sql;
foreign key (position) references wage(position),
show tables;
desc allowance;
// backup
mysqldump -uroot -p0 --default-character-set=utf8 qihao  > /home/qihao/html/backup/qihao.sql

*/

use qihao;

drop table if exists water;
drop table if exists info;



create table info (
    id_type varchar(16) not null,
    id varchar(32) not null,
    pass varchar(32) not null,
    area varchar(128) not null,
    build varchar(128) not null,
    dorm varchar(128) not null,

    primary key(id),
    check(id_type in ('email', 'qq'))
)character set = utf8;

insert into info values("email", "qihao", "199612", "东区", "沁苑东十一舍", "526");

create table water (
    id varchar(32) not null,
    _time datetime,
    num int not null,
    pay_type varchar(32) not null,
    pay float,
    confirm int not null,
    
    primary key (id, _time),
    foreign key (id) references info(id)
    on delete cascade
    on update cascade,
    check(pay_type in ('online', 'cash'))
)character set = utf8;

