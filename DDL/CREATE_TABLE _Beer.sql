CREATE TABLE IF NOT EXISTS `team15`.`Beer` (
    `beer_no` INT(5) NOT NULL AUTO_INCREMENT,
    `beer_name` varchar(20) NOT NULL UNIQUE KEY,
    `beer_rank` INT(5) NOT NULL,
    `beer_exp` TEXT,
    `hashtag1` INT(5),
    `hashtag2` INT(5),
    `hashtag3` INT(5),
    `beer_score` FLOAT(5),
    `beer_img` TEXT ,
    PRIMARY KEY (`beer_no`),
    INDEX `beer_index` (`beer_no`, `beer_name`)
)