CREATE TABLE IF NOT EXISTS `team15`.`Wine` (
    `wine_no` INT(5) NOT NULL AUTO_INCREMENT,
    `wine_name` varchar(20) NOT NULL UNIQUE KEY,
    `wine_rank` INT(5) NOT NULL,
    `wine_exp` TEXT,
    `wine_origin` varchar(25),
    `hashtag1` INT(5),
    `hashtag2` INT(5),
    `hashtag3` INT(5),
    `wine_score` FLOAT(5),
    `wine_img` varchar(255),
    PRIMARY KEY (`wine_no`),
    INDEX `wine_index` (`wine_no`, `wine_name`)
)