CREATE TABLE IF NOT EXISTS `team15`.`Beer` (
    `beer_no` INT(5) NOT NULL AUTO_INCREMENT,
    `beer_name` varchar(20) NOT NULL UNIQUE KEY,
    `beer_rank` INT(5) NOT NULL,
    `beer_exp` TEXT,
    `beer_origin` varchar(25),
    `hashtag1` varchar(20),
    `hashtag2` varchar(20),
    `hashtag3` varchar(20),
    `beer_score` FLOAT(5),
    `beer_img` TEXT ,
    PRIMARY KEY (`beer_no`),
    INDEX `beer_index` (`beer_no`, `beer_name`)
)