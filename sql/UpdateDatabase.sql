
USE snows;

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
	(1, 'A00', 'Gucci', 'Tissu', 50, 'Siège confortable qui est de couleur bleu','Ce siège auto pour enfant ne place pas seulement la sécurité des petits au premier plan – la position confortable n’est pas en reste. L’appuie-tête breveté inclinable 3 positions empêche la tête de l’enfant de tomber en avant lorsqu’il s’endort. De plus, vous pouvez régler la hauteur du dossier sur 11 positions et ainsi trouver l’orientation optimale de la ceinture de sécurité. Le siège suit ainsi simplement l’évolution de vos enfants. Le siège confortable est équipé du système L.S.P (protection linéaire contre les impacts latéraux) et peut aider en cas d’urgence à éviter des blessures. Homologué UN R44/04, ce siège enfant protège les petits passagers d’un poids compris entre 15 et 36 kg.' , 150, 'view/content/Furnitures/1/FELPA-BLUE-1.jpg', 1),
	(2, 'A01', 'Nike', 'Cuivre', 50, 'Siège confortable sans image', 'Sécurité et fonctionnalité. C’est ce qu’incarne le siège auto pour enfants CBX AURA-FIX. Il s’installe rapidement et efficacement dans le véhicule par ISOFIX. La particularité? Contrairement à d’autres sièges auto pour enfants, celui-ci est orienté vers l’avant. En plus de son excellente finition et d’un très haut niveau de sécurité, ce siège convainc par un design moderne adapté aux enfants. Le bouclier d’impact protège des blessures à la nuque, tout en offrant suffisamment d’espace pour que l’enfant ne se sente pas à l’étroit. Son utilisation est recommandée jusqu’à un âge de trois ans et demi. La protection contre les chocs latéraux à double paroi propose en outre une protection supplémentaire en cas de chocs de côté. L’appuie-tête réglable s’adapte sans problème à la taille de votre enfant. Pour un voyage confortable et sûr.' , 200, '', 0),
	(3, 'A02', 'Puma', 'Cuire', 75 , 'Siège confortable de couleur bleu foncée','Le siège-coque pratique CITI ROBIN rouge est un must absolu pour les nouveaux parents. S’il est d’une part non seulement pratique en protégeant les plus faibles d’entre nous, vous pouvez d’autre part vous fier à la qualité spécifique de cet article de la maison MAXI-COSI. Ce siège-auto enfant est un authentique poids plume que vous pouvez emmener partout sans le moindre problème. Son installation est réglée simplement et rapidement par la sangle trois points. L’assise présente un rembourrage extrêmement confortable qui permet aux petits de passer un voyage agréable. Et grâce à sa housse lavable, ce siège-coque est infiniment facile d’entretien. En plus: Ce siège-enfant est homologué aussi pour une utilisation en avion.' , 100, 'view/content/Furnitures/3/biza_1.jpg', 1)