CREATE TABLE IF NOT EXISTS `team15`.`snack` (
    `snack_no` INT(5) NOT NULL AUTO_INCREMENT,
    `snack_name` varchar(20) NOT NULL UNIQUE KEY,
    `snack_recipe` TEXT,
    `snack_exp` TEXT,
    `snack_img` varchar(255),
    `matching1_table` INT(5),
    `matching2_table` INT(5),
    `matching1_no` INT(5),
    `matching2_no` INT(5),
    PRIMARY KEY (`snack_no`),
    INDEX `beer_index` (`beer_no`, `beer_name`)
)