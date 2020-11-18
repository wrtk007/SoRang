ALTER TABLE user_review DROP COLUMN `review_alc_table`;
ALTER TABLE user_review DROP COLUMN `review_alc_no`;
ALTER TABLE user_review ADD COLUMN `alc_name` VARCHAR(50);