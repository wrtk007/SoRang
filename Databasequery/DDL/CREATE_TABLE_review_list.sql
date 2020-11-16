CREATE TABLE IF NOT EXISTS `team15`.`user_review` (
    `review_no` INT(5) NOT NULL AUTO_INCREMENT,
    `review_id_no` INT(20) NOT NULL,
    `review` TEXT,
    `review_score` INT(5) NOT NULL,
    `review_alc_table` INT(5) NOT NULL,
    `review_alc_no` INT(5) NOT NULL,
    `review_date` DATETIME NOT NULL,
    PRIMARY KEY (`review_no`),
    INDEX `review_index` (`review_no`)
)