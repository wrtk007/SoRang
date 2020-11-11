CREATE TABLE IF NOT EXISTS `team15`.`Wine` (
    `no` INT(5) NOT NULL AUTO_INCREMENT,
    `name` varchar(20) NOT NULL UNIQUE KEY,
    `rank` INT(5) NOT NULL,
    `exp` TEXT,
    `origin` varchar(25),
    `hashtag1` varchar(20),
    `hashtag2` varchar(20),
    `hashtag3` varchar(20),
    `score` FLOAT(5),
    `img` TEXT,
    PRIMARY KEY (`no`),
    INDEX `wine_index` (`no`, `name`)
)