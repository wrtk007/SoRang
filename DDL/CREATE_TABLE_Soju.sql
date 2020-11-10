CREATE TABLE IF NOT EXISTS `team15`.`Soju` (
    `soju_no` INT(5) NOT NULL AUTO_INCREMENT,
    `soju_name` varchar(20) NOT NULL UNIQUE KEY,
    `soju_rank` INT(5) NOT NULL,
    `soju_exp` varchar(225),
    `soju_origin` varchar(25),
    `hashtag1` varchar(20),
    `hashtag2` varchar(20),
    `hashtag3` varchar(20),
    `soju_score` FLOAT(5),
    `soju_img` varchar(255),
    PRIMARY KEY (`soju_no`),
    INDEX `soju_index` (`soju_no`, `soju_name`)
)