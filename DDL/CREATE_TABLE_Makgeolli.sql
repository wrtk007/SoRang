CREATE TABLE IF NOT EXISTS `team15`.`Makgeolli` (
    `mak_no` INT(5) NOT NULL AUTO_INCREMENT,
    `mak_name` varchar(20) NOT NULL UNIQUE KEY,
    `mak_rank` INT(5) NOT NULL,
    `mak_exp` varchar(225),
    `mak_origin` varchar(25),
    `hashtag1` varchar(20),
    `hashtag2` varchar(20),
    `hashtag3` varchar(20),
    `mak_score` FLOAT(5),
    `mak_img` varchar(255),
    PRIMARY KEY (`mak_no`),
    INDEX `mak_index` (`mak_no`, `mak_name`)
)