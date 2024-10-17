
<?php
CREATE TABLE `election`.`successful_voters` (
`user_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`reg_no` VARCHAR( 15 ) NOT NULL ,
`first_name` VARCHAR( 30 ) NOT NULL ,
`sur_name` VARCHAR( 30 ) NOT NULL ,
`gender` VARCHAR( 10 ) NOT NULL ,
`id_no` INT( 8 ) NOT NULL ,
`phone_no` VARCHAR( 13 ) NOT NULL ,
`email_address` VARCHAR( 40 ) NOT NULL ,
`graduate_level` VARCHAR( 15 ) NOT NULL ,
`category` VARCHAR( 15 ) NOT NULL ,
`campus` VARCHAR( 30 ) NOT NULL ,
`academic_division` VARCHAR( 50 ) NOT NULL ,
`year_of_study` VARCHAR( 10 ) NOT NULL ,
`residence_area` VARCHAR( 15 ) NOT NULL ,
`residence_hall` VARCHAR( 15 ) NOT NULL ,
`username` VARCHAR( 40 ) NOT NULL ,
`password` VARCHAR( 40 ) NOT NULL ,
UNIQUE (
`reg_no` ,
`id_no`
)
) ENGINE = InnoDB;

?>