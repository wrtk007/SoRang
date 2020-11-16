CREATE TABLE IF NOT EXISTS `team15`.`Cocktail` (
    `no` INT(5) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(50) NOT NULL UNIQUE KEY,
    `exp` TEXT,
    `origin` VARCHAR(25),
    `hashtag1` INT(5) NOT NULL,
    `hashtag2` INT(5) NOT NULL,
    `hashtag3` INT(5) NOT NULL,
    `score` FLOAT(5) NOT NULL,
    `img` TEXT,
    `price` INT(20) NOT NULL,
    PRIMARY KEY (`no`),
    INDEX `cocktail_index` (`no`, `name`)
)