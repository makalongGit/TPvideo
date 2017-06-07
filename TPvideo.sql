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


create table cate(
vt_id int not null auto_increment,
typeName varchar(20) not null,
typeDescription text,
level int not null,
vt_key varchar(30) not null,
primary key(vt_id)
);
insert into cate values(1,'电影','电影描述',0,'电影关键字');
insert into cate values(2,'电视剧','电视剧描述',0,'电视剧关键字');
insert into cate values(3,'爱情电视剧','爱情电视剧描述',2,'爱情电视剧关键字');
视频表
create table video(
vid int not null auto_increment,
vt_id int not null ,
uid int(9) not null,
videoName varchar(30) not null default '',
introduction text,
videoSrc varchar(100) not null default '',
keywords varchar(50),
publishedTime varchar(20),
numOfViewed int,
isPassed int,
isHomePage int not null default 0,
isRem int not null default 0,
isDelete int,
primary key(vid)
);
alter table video add column ori_img varchar(50);
alter table video add column thumb_img varchar(50);
alter table video drop column numOfViewed;
alter table video add column numOfViewed int not null default 0;
insert into video values(1,1,142011059,'速度与激情8',"2`1323",'33com','激8','2017/4/2',999,1,1,1);
insert into video values(2,2,142011059,'速度与激情7','激7','33.com','激8','2017/4/2',999,0,1,1);
insert into video values(3,11,142011060,'速度与激情6','激6','33.com','激8','2017/4/2',999,1,0,1);
insert into video values(4,3,142011059,'速度与激情5','激5','35.com','激5','2017/4/5',432,1,0,1);
insert into video values(5,8,142011058,'速度与激情4','激4','34.com','激4','2017/4/4',224,0,1,1);
insert into video values(6,9,142011057,'速度与激情3','激3','33.com','激3','2017/4/3',132,1,0,1);
insert into video values(7,10,142011057,'速度与激情2','激2','32.com','激2','2017/4/2',314,1,1,0);
insert into video values(8,1,142011059,'速度与激情1','激1','31.com','激1','2017/4/1',111,0,1,1);
create table review(
ReID int AUTO_INCREMENT PRIMARY KEY NOT NULL,
userID int NOT NULL,
reviews text NOT NULL,
vid int NOT NULL,
reSym int,
ReTime varchar(20) NOT NULL

);
insert into review values(1,142011059,'sjfdfkaf','3',1,'2017/4/2');
insert into review values(2,142011058,'sjfdfkaf','3',0,'2017/4/2');
insert into review values(3,142011058,'sjfdfkaf','3',0,'2017/4/2');

	//查询表的外键名
	SELECT  CONSTRAINT_CATALOG, 
 CONSTRAINT_SCHEMA, 
 CONSTRAINT_NAME, 
 TABLE_SCHEMA, 
 TABLE_NAME, 
 CONSTRAINT_TYPE  
 FROM 
 information_schema.TABLE_CONSTRAINTS 
 WHERE 
 TABLE_NAME='表名'
 