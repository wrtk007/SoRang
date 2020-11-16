CREATE TABLE IF NOT EXISTS `team15`.`QnA` (
    `number` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(150) NOT NULL,
    `content` TEXT NOT NULL,
    `id` VARCHAR(20) NOT NULL,
    `date` DATETIME NOT NULL,
    PRIMARY KEY(`number`),
    INDEX `qna_index` (`number`)
)