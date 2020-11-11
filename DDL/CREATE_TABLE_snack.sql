CREATE TABLE IF NOT EXISTS `team15`.`snack` (
    `no` INT(5) NOT NULL AUTO_INCREMENT,
    `name` varchar(20) NOT NULL UNIQUE KEY,
    `recipe` TEXT,
    `exp` TEXT,
    `img` TEXT,
    `matching1_table` INT(5),
    `matching2_table` INT(5),
    `matching1_no` INT(5),
    `matching2_no` INT(5),
    PRIMARY KEY (`no`),
    INDEX `snack_index` (`no`, `name`)
)