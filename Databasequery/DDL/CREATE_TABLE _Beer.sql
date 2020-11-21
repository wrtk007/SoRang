CREATE TABLE IF NOT EXISTS `team15`.`Beer` (
    `no` INT(5) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(50) NOT NULL UNIQUE KEY,
    `exp` TEXT,
    `origin` VARCHAR(25),
    `hashtag1` INT(5) NOT NULL FOREIGN KEY,
    `hashtag2` INT(5) NOT NULL FOREIGN KEY,
    `hashtag3` INT(5) NOT NULL FOREIGN KEY,
    `score` FLOAT(5) NOT NULL,
    `img` TEXT,
    `price` INT(20) NOT NULL, 
    PRIMARY KEY (`no`),
    INDEX `beer_index` (`no`, `name`)
)