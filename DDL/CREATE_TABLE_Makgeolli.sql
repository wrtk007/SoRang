CREATE TABLE IF NOT EXISTS `team15`.`Makgeolli` (
    `makgeolli_no` INT(5) NOT NULL AUTO_INCREMENT,
    `makgeolli_name` varchar(20) NOT NULL UNIQUE KEY,
    `makgeolli_rank` INT(5) NOT NULL,
    `makgeolli_exp` varchar(225),
    `hashtag1` INT(5),
    `hashtag2` INT(5),
    `hashtag3` INT(5),
    `makgeolli_score` FLOAT(5),
    `makgeolli_img` varchar(255),
    PRIMARY KEY (`makgeolli_no`),
    INDEX `makgeolli_index` (`makgeolli_no`, `makgeolli_name`)
)