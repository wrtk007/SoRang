CREATE TABLE IF NOT EXISTS `team15`.`Cocktail` (
    `cocktail_no` INT(5) NOT NULL AUTO_INCREMENT,
    `cocktail_name` varchar(20) NOT NULL UNIQUE KEY,
    `cocktail_rank` INT(5) NOT NULL,
    `cocktail_exp` varchar(225),
    `cocktail_origin` varchar(25),
    `hashtag1` varchar(20),
    `hashtag2` varchar(20),
    `hashtag3` varchar(20),
    `cocktail_score` FLOAT(5),
    `cocktail_img` varchar(255),
    PRIMARY KEY (`cocktail_no`),
    INDEX `cocktail_index` (`cocktail_no`, `cocktail_name`)
)