CREATE TABLE IF NOT EXISTS `team15`.`Liquor` (
    `liquor_no` INT(5) NOT NULL AUTO_INCREMENT,
    `liquor_name` varchar(20) NOT NULL UNIQUE KEY,
    `liquor_rank` INT(5) NOT NULL,
    `liquor_exp` TEXT,
    `liquor_origin` varchar(25),
    `hashtag1` varchar(20),
    `hashtag2` varchar(20),
    `hashtag3` varchar(20),
    `liquor_score` FLOAT(5),
    `liquor_img` varchar(255),
    PRIMARY KEY (`liquor_no`),
    INDEX `liquor_index` (`liquor_no`, `liquor_name`)
)