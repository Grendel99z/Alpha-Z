CREATE TABLE `user` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `phone_number` VARCHAR(255) NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `role` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO `user` (`name`, `email`, `phone_number`, `address`, `role`, `password`) VALUES ('admin', 'admin@admin.com', '123456789', 'admin', 'admin', '7c6a180b36896a0a8c02787eeafb0e4c');
