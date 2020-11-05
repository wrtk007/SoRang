CREATE TABLE IF NOT EXISTS `team15`.`Liquor` (
    `liquor_no` INT(5) NOT NULL AUTO_INCREMENT,
    `liquor_name` varchar(20) NOT NULL UNIQUE KEY,
    `liquor_rank` INT(5) NOT NULL,
    `liquor_exp` TEXT,
    `hashtag1` INT(5),
    `hashtag2` INT(5),
    `hashtag3` INT(5),
    `liquor_score` FLOAT(5),
    `liquor_img` varchar(255),
    PRIMARY KEY (`liquor_no`),
    INDEX `liquor_index` (`liquor_no`, `liquor_name`)
)