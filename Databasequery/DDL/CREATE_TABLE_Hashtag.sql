CREATE TABLE IF NOT EXISTS `team15`.`HashTag` (
    `hashtag_no` INT(10) NOT NULL,
    `hashtag_name` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`hashtag_no`),
    INDEX `hashtag_index` (`hashtag_no`,`hashtag_name`)
)