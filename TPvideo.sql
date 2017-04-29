create table user(
userID int(9) NOT NULL primary key,
username varchar(20) NOT NULL,
password varchar(20) not null ,
logoimage varchar(50) default '',
sex char(2),
phone char(11),
birthday varchar(20),
email varchar(20),
lastLoginTime varchar(20),
userVio int,
userstatus int,
registerTime varchar(20)
);
insert into user values(142011060,'majialong','123123','','男','19191919191','1998-1-13','214693086@qq.com','2017/4/29',100,0,'2016/3/5');
insert into user values(142011058,'majialong','123123','','男','19191919191','1998/1/13','214693086@qq.com','2017/4/29',1,1,'2016/3/5');
create table manager(
mg_id int(11) not null auto_increment primary key,
mg_name varchar(30) not null ,
mg_pwd varchar(30) not null ,
mg_role_id tinyint(3) unsigned not null default '0' comment '角色id'
);
insert into manager values(1,'admin','123123','0');
insert into manager values(2,'jialong','123123','1');