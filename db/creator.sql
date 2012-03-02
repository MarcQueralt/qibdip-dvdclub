drop table if exists clients;
create table clients ( 
    id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname varchar(100) not null, 
    surname varchar(50) not null, 
    address varchar(100),
    personal_id varchar(20),
    birthday date default null,
    cp varchar(5),
    city varchar(50),
    phone varchar(9),
    mobile varchar(9),
    active boolean default true,
    comments varchar(250),
    created datetime default null, 
    modified datetime default null
);
drop table if exists formats;
create table formats (
    id int(10) unsigned auto_increment primary key,
    description varchar(25) not null,
    daily_rate decimal(5,2) default 0,
    created datetime default null,
    modified datetime default null
);
drop table if exists copies;
create table copies (
    id int(10) unsigned auto_increment primary key,
    title varchar(100) not null,
    format_id int(10) not null,
    active boolean default true,
    on_sale boolean default false,
    adquisition_cost decimal(5,2) default 0,
    sale_price decimal(5,2) default 0,
    created datetime default null,
    modified datetime default null, 
key `format_id` (`format_id`)
);
drop table if exists movements;
create table movements (
    id int(10) unsigned auto_increment primary key,
    client_id int(10) not null,
    copy_id int(10),
    mov_type varchar(1) default 'C', /*Legend: C - Copy rent, M - money */
    amount decimal(5,2) default 0,
    started datetime,
    ended datetime not null,
    prepaid boolean, /* if true it means that the copy rent has been previously paid and it does not afect to balance */
    returned boolean, 
    comments varchar(250),
    created datetime default null,
    modified datetime default null,
key `client_id`(`client_id`),
key `copy_id`(`copy_id`)
);
drop table if exists users;
create table users (
    id int(10) unsigned auto_increment primary key,
    username varchar(50) not null,
    password varchar(50) not null,
    role varchar(20),
    created datetime default null,
    modified datetime default null
);
insert into users(username,password,role) values ('admin','videoclub','admin');