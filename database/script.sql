INSERT INTO places (name, description, created_at, updated_at) VALUES
('Machu Picchu', 'Antigua ciudad inca en lo alto de los Andes peruanos. Construida en el siglo XV.', NOW(), NOW()),
('Cusco', 'Capital del Imperio Inca, conocida por su arquitectura colonial española y ruinas incas.', NOW(), NOW()),
('Lago Titicaca', 'Uno de los lagos más altos y navegables del mundo. Sagrado para los incas.', NOW(), NOW()),
('Líneas de Nazca', 'Antiguos geoglifos en el desierto de Nazca. Creados por la cultura Nazca.', NOW(), NOW()),
('Valle Sagrado', 'Región en los Andes peruanos cerca de Cusco. Paisajes impresionantes.', NOW(), NOW()),
('Arequipa', 'Ciudad en el sur de Perú, conocida por su arquitectura colonial española.', NOW(), NOW()),
('Huascarán', 'La montaña más alta de Perú y la cuarta más alta de América del Sur.', NOW(), NOW()),
('Chan Chan', 'Ciudad precolombina en la costa norte de Perú, construida por la cultura Chimú.', NOW(), NOW()),
('Caral', 'Antigua ciudad sagrada en el valle de Supe, al norte de Lima. La más antigua de las Américas.', NOW(), NOW()),
('Colca Canyon', 'Uno de los cañones más profundos del mundo. Destino popular para practicar senderismo.', NOW(), NOW());


INSERT INTO packages (name, price, duration, rating, place_id, created_at, updated_at) VALUES
('Aventura en Machu Picchu', 150.00, 3, 4, 1, NOW(), NOW()),
('Explorando Cusco', 120.00, 2, 4, 2, NOW(), NOW()),
('Tour por el Lago Titicaca', 200.00, 2, 4, 3, NOW(), NOW()),
('Sobrevuelo en las Líneas de Nazca', 180.00, 1, 3, 4, NOW(), NOW()),
('Excursión al Valle Sagrado', 140.00, 1, 4, 5, NOW(), NOW()),
('Aventura en Arequipa', 160.00, 2, 4, 6, NOW(), NOW()),
('Escalada al Huascarán', 300.00, 4, 5, 7, NOW(), NOW()),
('Visita a Chan Chan', 100.00, 1, 3, 8, NOW(), NOW()),
('Viaje a Caral', 180.00, 2, 4, 9, NOW(), NOW()),
('Trekking en el Cañón del Colca', 220.00, 2, 4, 10, NOW(), NOW());


INSERT INTO benefits(title, description) VALUES
('Hoteles de Alta Calidad', 'Alojamiento en hoteles de cuatro o cinco estrellas con todas las comodidades modernas.'),
('Servicio de Comida Premium', 'Disfruta de menús diseñados por chefs renombrados, incluyendo opciones locales e internacionales.'),
('Guía Turística Experta', 'Guías turísticos expertos disponibles para enriquecer tu experiencia con conocimientos locales.'),
('Transporte Privado', 'Transporte privado incluido desde y hacia los hoteles, así como en todas las excursiones programadas.'),
('Acceso a SPA y Bienestar', 'Acceso a instalaciones de spa y bienestar en los hoteles para una experiencia de relajación total.'),
('Actividades Exclusivas', 'Participa en actividades exclusivas disponibles solo para miembros del tour, como cenas privadas y visitas VIP.'),
('Asistencia 24/7', 'Asistencia disponible las 24 horas del día para cualquier necesidad o emergencia durante el viaje.'),
('Kits de Bienvenida', 'Recibe un kit de bienvenida con regalos, mapas y toda la información necesaria para tu viaje.');


INSERT INTO benefit_package(benefit_id, package_id) VALUES
(1, 1),
(2, 1),
(3, 1),
(1, 2),
(4, 2),
(5, 2),
(2, 3),
(5, 3),
(6, 3),
(3, 4),
(6, 4),
(7, 4),
(4, 5),
(7, 5),
(8, 5),
(5, 6),
(8, 6),
(1, 6),
(6, 7),
(2, 7),
(3, 7),
(7, 8),
(4, 8),
(5, 8),
(8, 9),
(6, 9),
(1, 9),
(1, 10),
(3, 10),
(7, 10);


INSERT INTO categories (name, description, image) VALUES
('Nature', NULL, 'categories/nature.jpg'),
('Exotic', NULL, 'categories/exotic.jpg'),
('Adrenalin', NULL, 'categories/adrenalin.jpg'),
('Gastronomy', NULL, 'categories/gastronomy.jpg'),
('Culture', NULL, 'categories/culture.jpg');


INSERT INTO pictures (type, path, place_id) VALUES
('r', 'places/machu-picchu.jpg', 1),
('r', 'places/cusco.jpg', 2),
('r', 'places/lago-titicaca.jpg', 3),
('r', 'places/nazca.jpg', 4),
('r', 'places/valle-sagrado.jpg', 5),
('r', 'places/arequipa.jpg', 6),
('r', 'places/huascaran.jpg', 7),
('r', 'places/chan-chan.png', 8),
('r', 'places/caral.jpg', 9),
('r', 'places/colca-canyon.jpg', 10);
