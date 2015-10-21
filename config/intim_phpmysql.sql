CREATE TABLE 
`intim_phpmysql`.`users`( 
	`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT, 
	`name` VARCHAR(255), 
	`password` VARCHAR(255) COMMENT 'please encrypt password using md5', 
	`email` VARCHAR(255), 
	`created_at` DATETIME, 
	`updated_at` DATETIME, 
	PRIMARY KEY (`id`) 
); 

INSERT INTO `intim_phpmysql`.`users`(
	`name`,`password`,`email`,`created_at`,`updated_at`
) VALUES ( 
	'Mohamad',MD5('1234'),'mohamad@gmail.com',NOW(),NOW()
); 

UPDATE `intim_phpmysql`.`users` SET 
	`name`='Mohamad Mahdin',
	`email`='m.mahdin@gmail.com' 
WHERE `id`='2'; 

# reset all user's password
UPDATE intim_phpmysql.users SET `password` = MD5('12345');

# reset particular user's password
UPDATE intim_phpmysql.users SET `password` = MD5('1234') WHERE id = 2;

DELETE FROM `intim_phpmysql`.`users` WHERE `name` LIKE 'test%'; 