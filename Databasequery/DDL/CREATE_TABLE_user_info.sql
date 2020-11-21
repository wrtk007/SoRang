CREATE TABLE IF NOT EXISTS `team15`.`user_info` (
    `user_no` INT(5) NOT NULL AUTO_INCREMENT,
    `id` varchar(20) NOT NULL,
    `password` varchar(255) NOT NULL,
    `name` varchar(20) NOT NULL,
    `email` varchar(50) NOT NULL UNIQUE KEY,
    `taste_hash1` INT(5) FOREIGN KEY,
    `taste_hash2` INT(5) FOREIGN KEY,
    `taste_hash3` INT(5) FOREIGN KEY,
    PRIMARY KEY (`user_no`),
    INDEX `user_index` (`user_no`, `id`)
)