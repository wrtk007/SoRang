CREATE TABLE IF NOT EXISTS `team15`.`QnA` (
    `qna_no` INT(5) NOT NULL AUTO_INCREMENT,
    `qna_id` varchar(20) NOT NULL,
    `qna_pw` varchar(225) NOT NULL,
    `qna_q` TEXT NOT NULL,
    `qna_a` TEXT NOT NULL,
    PRIMARY KEY (`qna_no`),
    INDEX `qna_index` (`qna_no`)
)