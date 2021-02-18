USE furnitures;

/* Renames table */
RENAME TABLE snows TO furnitures;

/* Deletes columns */
ALTER TABLE furnitures
DROP COLUMN snowLength;

ALTER TABLE furnitures
DROP COLUMN model;

/* Deletes all data in table */
DELETE from furnitures;

/* Rename a column */
ALTER table furnitures
CHANGE dailyPrice price float unsigned;

/* Create a column */
ALTER table furnitures
ADD material varchar(20) NOT NULL;

ALTER table furnitures
ADD longDescription longtext NULL;


/* ADD DATA */
INSERT INTO `furnitures` (`id`, `code`, `brand`, `material`, `qtyAvailable`, `description`,`longDescription`,  `price`, `photo`, `active`) VALUES
	(1, 'A00', 'Gucci', 'Fabric', 50, 'Light blue chair','This wonderful chair is the best for everyone, its wonderful blue color is what makes it so beautiful, it is comfortable and really easy to build, you will not have any trouble building it with your children.' , 150, 'view/content/img/feature/A00_1.jpg', 1),
	(2, 'A01', 'Nike', 'Copper', 50, 'Chair without a picture', 'For individuals sitting in Aeron, cross-performance design means the chair accommodates a wide range of activities and postures people adopt while working – from intense forward-facing focus to relaxed contemplative recline. For designers and organisations, cross-performance makes Aeron suitable for a wide array of workplace settings, from residential workpoints to shared workshops.' , 200, '', 0),
	(3, 'A02', 'Puma', 'Leather', 75 , 'Dark blue chair','By doing away with foam and fabric, Aeron solved one of prolonged sitting’s biggest predicaments: the build-up of heat and humidity close to the body. Pellicle allows air, body heat and water vapour to pass through the seat and backrest to help maintain even and comfortable skin temperatures. While many chairs have adopted mesh as a way to deliver some performance, there’s only one Pellicle.' , 100, 'view/content/img/feature/A02_1.jpg', 1);