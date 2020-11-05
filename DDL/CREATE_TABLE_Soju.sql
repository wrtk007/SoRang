CREATE TABLE IF NOT EXISTS `team15`.`Soju` (
    `soju_no` INT(5) NOT NULL AUTO_INCREMENT,
    `soju_name` varchar(20) NOT NULL UNIQUE KEY,
    `soju_rank` INT(5) NOT NULL,
    `soju_exp` varchar(225),
    `hashtag1` INT(5),
    `hashtag2` INT(5),
    `hashtag3` INT(5),
    `soju_score` FLOAT(5),
    `soju_img` varchar(255),
    PRIMARY KEY (`soju_no`),
    INDEX `soju_index` (`soju_no`, `soju_name`)
)