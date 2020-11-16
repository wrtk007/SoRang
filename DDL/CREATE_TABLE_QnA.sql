 create table `team15`.`qna` (
    number int unsigned not null primary key auto_increment,
    title varchar(150) not null,
    content text not null,
    id varchar(20) not null,
    date datetime not null,
   );