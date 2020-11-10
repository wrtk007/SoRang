CREATE TABLE IF NOT EXISTS `team15`.`Etc` (
    `etc_no` INT(5) NOT NULL AUTO_INCREMENT,
    `etc_name` varchar(20) NOT NULL UNIQUE KEY,
    `etc_rank` INT(5) NOT NULL,
    `etc_exp` TEXT,
    `etc_origin` varchar(25),
    `hashtag1` varchar(20),
    `hashtag2` varchar(20),
    `hashtag3` varchar(20),
    `etc_score` FLOAT(5),
    `etc_img` varchar(255),
    PRIMARY KEY (`etc_no`),
    INDEX `etc_index` (`etc_no`, `etc_name`)
)