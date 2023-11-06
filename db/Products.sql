CREATE TABLE `Products` (
    `name` VARCHAR(255) NOT NULL,
    `type` VARCHAR(255) NOT NULL,
    `price` FLOAT NOT NULL,
    `quantity` INT NOT NULL,
    `details` VARCHAR(255) NOT NULL,
    `picture` VARCHAR(255) NOT NULL,
    `id` INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (`id`) );

INSERT INTO Products
(name, type, price, quantity, details, picture)
VALUES
('zenith', 'PC', 880.00, 20, 'a state-of-the-art, ultra-compact PC designed for maximum productivity and efficiency. With a sleek aluminum chassis and lightning-fast SSD storage, this PC is perfect for multitasking, gaming, and content creation.', 'PC/zenith'),
('horizon', 'PC', 950.00, 18, 'a high-performance PC designed for gamers and power users. With dedicated graphics card, and lightning-fast SSD storage, this PC can handle the most demanding applications.', 'PC/horizon'),
('nova', 'PC', 800.00, 20, 'a versatile PC that''s perfect for work or play. With a fast processor, ample storage, and a sleek design, this PC can handle everything from productivity apps to streaming video.', 'PC/nova'),
('zenith pro', 'PC', 1200.00, 15, 'an upgraded version of our popular Zenith PC, with even more power and performance. With a faster processor, more storage, and a dedicated graphics card, this PC can handle anything you throw at it.', 'PC/zenith-pro'),
('alpha', 'PC', 700.00, 25, 'a budget-friendly PC that''s perfect for everyday use. With a fast processor and ample storage, this PC can handle everything from web browsing to document editing. Its compact design makes it a great choice for small spaces.', 'PC/alpha'),
('beta', 'PC', 600.00, 30, 'a basic PC that''s perfect for home or office use. With a reliable processor and plenty of storage, this PC can handle everyday tasks with ease. Its simple design and energy-efficient components make it an eco-friendly choice.', 'PC/beta');

INSERT INTO Products
(name, type, price, quantity, details, picture)
VALUES
('spectre', 'Laptop', 1200.00, 15, 'a premium laptop designed for power users and professionals. With a sleek aluminum chassis, high-resolution display, and lightning-fast SSD storage, this laptop is perfect for multitasking, content creation, and more.', 'Laptop/spectre'),
('envy', 'Laptop', 1300.00, 18, 'a high-performance laptop designed for gamers and power users. With dedicated graphics card, and lightning-fast SSD storage, this laptop can handle the most demanding applications.', 'Laptop/envy'),
('pavilion', 'Laptop', 1400.00, 20, 'a versatile laptop that''s perfect for work or play. With a fast processor, ample storage, and a sleek design, this laptop can handle everything from productivity apps to streaming video.', 'Laptop/pavilion'),
('elitebook', 'Laptop', 1500.00, 15, 'an upgraded version of our popular Spectre laptop, with even more power and performance. With a faster processor, more storage, and a dedicated graphics card, this laptop can handle anything you throw at it.', 'Laptop/elitebook'),
('stream', 'Laptop', 2500.00, 25, 'a budget-friendly laptop that''s perfect for everyday use. With a fast processor and ample storage, this laptop can handle everything from web browsing to document editing. Its compact design makes it a great choice for small spaces.', 'Laptop/stream'),
('boltbook', 'Laptop', 3000.00, 30, 'a basic laptop that''s perfect for home or office use. With a reliable processor and plenty of storage, this laptop can handle everyday tasks with ease. Its simple design and energy-efficient components make it an eco-friendly choice.', 'Laptop/boltbook');

INSERT INTO Products
(name, type, price, quantity, details, picture)
VALUES
('DeathAdder', 'Mouse', 50.00, 10, 'a high-performance gaming mouse with a lightweight design and customizable RGB lighting. With a 12,000 DPI sensor and six programmable buttons, this mouse is perfect for gamers and power users.', 'accessories/mouse/DeathAdder'),
('G Pro', 'Mouse', 70.00, 8, 'a professional-grade gaming mouse designed for esports athletes and competitive gamers. With a 16,000 DPI sensor and customizable RGB lighting, this mouse is built for speed and precision.', 'accessories/mouse/GPro'),
('Cloud II', 'Headset', 100.00, 15, 'a premium gaming headset with 7.1 surround sound and noise-cancelling microphone. With memory foam ear cushions and a durable aluminum frame, this headset is built for comfort and longevity.', 'accessories/headset/CloudII'),
('Kraken', 'Headset', 80.00, 20, 'a versatile gaming headset with 7.1 surround sound and retractable microphone. With plush ear cushions and a lightweight design, this headset is perfect for extended gaming sessions.', 'accessories/headset/Kraken'),
('G213', 'Keyboard', 60.00, 12, 'a high-performance gaming keyboard with customizable RGB lighting and dedicated media controls. With a spill-resistant design and durable construction, this keyboard is built to last.', 'accessories/keyboard/G213'),
('G Pro X', 'Keyboard', 130.00, 8, 'a professional-grade gaming keyboard with swappable mechanical switches and customizable RGB lighting. With a compact design and detachable cable, this keyboard is perfect for esports athletes and competitive gamers.', 'accessories/keyboard/GProX'),
('Yeti', 'Mic', 130.00, 5, 'a professional-grade USB microphone with four different polar patterns and built-in headphone jack. With a sleek design and easy-to-use controls, this mic is perfect for podcasters, streamers, and musicians.', 'accessories/mic/Yeti'),
('Snowball', 'Mic', 70.00, 10, 'a versatile USB microphone with two different polar patterns and adjustable stand. With a compact design and plug-and-play functionality, this mic is perfect for home studios and on-the-go recording.', 'accessories/mic/Snowball'),
('C920', 'Webcam', 80.00, 15, 'a high-definition webcam with 1080p resolution and built-in microphone. With automatic light correction and adjustable field of view, this webcam is perfect for video conferencing and streaming.', 'accessories/webcam/C920'),
('Brio', 'Webcam', 200.00, 5, 'a professional-grade webcam with 4K resolution and HDR support. With adjustable field of view and multiple mounting options, this webcam is perfect for content creators, streamers, and remote workers.', 'accessories/webcam/Brio');
