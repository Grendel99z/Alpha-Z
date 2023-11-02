CREATE TABLE `Products` (
    `name` VARCHAR(255) NOT NULL,
    `type` VARCHAR(255) NOT NULL,
    `price` FLOAT NOT NULL,
    `quantity` INT NOT NULL,
    `details` VARCHAR(255) NOT NULL,
    `picture` VARCHAR(255) NOT NULL,
    `id` INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (`id`)

INSERT INTO Products
(name, type, price, quantity, details, picture)
VALUES
('zenith', 'PC', 880.00, 20, 'a state-of-the-art, ultra-compact PC designed for maximum productivity and efficiency. With a sleek aluminum chassis and lightning-fast SSD storage, this PC is perfect for multitasking, gaming, and content creation.', 'PC/zenith.png'),
('horizon', 'PC', 950.00, 18, 'a high-performance PC designed for gamers and power users. With dedicated graphics card, and lightning-fast SSD storage, this PC can handle the most demanding applications.', 'PC/horizon.png'),
('nova', 'PC', 800.00, 20, 'a versatile PC that''s perfect for work or play. With a fast processor, ample storage, and a sleek design, this PC can handle everything from productivity apps to streaming video.', 'PC/nova.png'),
('zenith pro', 'PC', 1200.00, 15, 'an upgraded version of our popular Zenith PC, with even more power and performance. With a faster processor, more storage, and a dedicated graphics card, this PC can handle anything you throw at it.', 'PC/zenith-pro.png'),
('alpha', 'PC', 700.00, 25, 'a budget-friendly PC that''s perfect for everyday use. With a fast processor and ample storage, this PC can handle everything from web browsing to document editing. Its compact design makes it a great choice for small spaces.', 'PC/alpha.png'),
('beta', 'PC', 600.00, 30, 'a basic PC that''s perfect for home or office use. With a reliable processor and plenty of storage, this PC can handle everyday tasks with ease. Its simple design and energy-efficient components make it an eco-friendly choice.', 'PC/beta.png');

INSERT INTO Products
(name, type, price, quantity, details, picture)
VALUES
('spectre', 'Laptop', 1200.00, 15, 'a premium laptop designed for power users and professionals. With a sleek aluminum chassis, high-resolution display, and lightning-fast SSD storage, this laptop is perfect for multitasking, content creation, and more.', 'Laptop/spectre'),
('envy', 'Laptop', 950.00, 18, 'a high-performance laptop designed for gamers and power users. With dedicated graphics card, and lightning-fast SSD storage, this laptop can handle the most demanding applications.', 'Laptop/envy'),
('pavilion', 'Laptop', 800.00, 20, 'a versatile laptop that''s perfect for work or play. With a fast processor, ample storage, and a sleek design, this laptop can handle everything from productivity apps to streaming video.', 'Laptop/pavilion'),
('elitebook', 'Laptop', 1500.00, 15, 'an upgraded version of our popular Spectre laptop, with even more power and performance. With a faster processor, more storage, and a dedicated graphics card, this laptop can handle anything you throw at it.', 'Laptop/elitebook'),
('stream', 'Laptop', 500.00, 25, 'a budget-friendly laptop that''s perfect for everyday use. With a fast processor and ample storage, this laptop can handle everything from web browsing to document editing. Its compact design makes it a great choice for small spaces.', 'Laptop/stream'),
('boltbook', 'Laptop', 400.00, 30, 'a basic laptop that''s perfect for home or office use. With a reliable processor and plenty of storage, this laptop can handle everyday tasks with ease. Its simple design and energy-efficient components make it an eco-friendly choice.', 'Laptop/boltbook');
