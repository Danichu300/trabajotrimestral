-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-02-2018 a las 16:23:30
-- Versión del servidor: 5.7.21-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `store013`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `BRAND`
--

CREATE TABLE `BRAND` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `BRAND`
--

INSERT INTO `BRAND` (`ID`, `NAME`) VALUES
(1, 'Samsung'),
(2, 'Asus'),
(3, 'Acer'),
(4, 'Logitech'),
(5, 'Tacens Mars'),
(6, 'HP'),
(7, 'Razer'),
(8, 'MSI'),
(9, 'Intel'),
(10, 'AMD'),
(11, 'Sapphire'),
(12, 'Gigabyte'),
(13, 'Zotac'),
(14, 'Crucial'),
(15, 'Kingston'),
(16, 'G.Skill'),
(17, 'Corsair'),
(18, 'Lenovo'),
(19, 'Medion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CATEGORY`
--

CREATE TABLE `CATEGORY` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(32) NOT NULL,
  `PARENTCATEGORY` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `CATEGORY`
--

INSERT INTO `CATEGORY` (`ID`, `NAME`, `PARENTCATEGORY`) VALUES
(1, 'Componentes', NULL),
(2, 'Perifericos', NULL),
(3, 'Procesadores', 1),
(4, 'Gráficas', 1),
(5, 'MemoriaRAM', 1),
(10, 'Monitores', 2),
(14, 'Teclado', 2),
(15, 'Ratones', 2),
(16, 'Placas Base', 1),
(17, 'Ordenadores', NULL),
(18, 'Portatiles', 17),
(19, 'PCSobremesa', 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `IMAGE`
--

CREATE TABLE `IMAGE` (
  `URL` varchar(256) NOT NULL,
  `PRODUCT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `IMAGE`
--

INSERT INTO `IMAGE` (`URL`, `PRODUCT`) VALUES
('https://img.pccomponentes.com/articles/11/112752/1111.jpg', 1),
('https://img.pccomponentes.com/articles/11/113117/1111.jpg', 2),
('https://img.pccomponentes.com/articles/11/119504/2017021011363642-big.jpg', 3),
('https://img.pccomponentes.com/articles/11/112114/intel-i7-6700k-4-0ghz-box.jpg', 4),
('https://img.pccomponentes.com/articles/11/112147/intel-i5-6600k-3-5ghz.jpg', 5),
('https://img.pccomponentes.com/articles/12/121664/1711152-a-ryzen5-3d-lft.jpg', 6),
('https://img.pccomponentes.com/articles/11/118894/ryzen7-wof-3d-rt-facing.jpg', 7),
('https://img.pccomponentes.com/articles/10/106065/1111.jpg', 8),
('https://img.pccomponentes.com/articles/10/106073/1111.jpg', 9),
('https://img.pccomponentes.com/articles/12/124586/1.jpg', 10),
('https://img.pccomponentes.com/articles/14/144252/1442520.jpg', 11),
('https://img.pccomponentes.com/articles/8/85998/g-skill-ripjaws-5-red-ddr4-2133-pc4-17000-8gb-2x4gb-cl15-2.jpg', 12),
('https://img.pccomponentes.com/articles/6/64288/64288.jpg', 13),
('https://img.pccomponentes.com/articles/10/103718/1-1.jpg', 14),
('https://img.pccomponentes.com/articles/4/42948/5099206020580-2.jpg', 15),
('https://img.pccomponentes.com/articles/14/146611/a1.jpg', 16),
('https://img.pccomponentes.com/articles/7/79644/logitech-wireless-mouse-m185-azul.jpg', 17),
('https://img.pccomponentes.com/articles/14/143592/msi-clutch-gm60-gaming-mouse-product-photos-2d2.jpg', 18),
('https://img.pccomponentes.com/articles/12/124246/1.jpg', 19),
('https://img.pccomponentes.com/articles/14/141593/1.jpg', 28),
('https://img.pccomponentes.com/articles/13/136950/1369500.jpg', 29),
('https://img.pccomponentes.com/articles/14/146382/l1-copia.jpg', 30),
('https://img.pccomponentes.com/articles/14/141215/1412150.jpg', 31),
('https://img.pccomponentes.com/articles/14/145646/d2.jpg', 32),
('https://img.pccomponentes.com/articles/14/146446/e6.jpg', 33),
('https://img.pccomponentes.com/articles/13/136985/1369850.jpg', 34),
('https://img.pccomponentes.com/articles/13/134343/1343430.jpg', 35),
('https://img.pccomponentes.com/articles/10/105719/105719.jpg', 36),
('https://img.pccomponentes.com/articles/11/117838/81mx7y4qtjl-sl1500.jpg', 37),
('https://img.pccomponentes.com/articles/13/134786/1.jpg', 38),
('https://img.pccomponentes.com/articles/10/102968/asus-dual-geforce-gtx-1070-oc-8gb-gddr5.jpg', 39),
('https://img.pccomponentes.com/articles/9/92712/g-skill-aegis-ddr4-2133-pc4-17000-4gb-1x4gb-cl15.jpg', 40),
('https://img.pccomponentes.com/articles/10/103114/corsair-vengeance-lpx-ddr4-2400-pc4-19200-16gb-1x16gb-cl14-1.jpg', 41),
('https://img.pccomponentes.com/articles/9/98535/kingston-hyperx-fury-ddr4-2133-pc4-17000-4gb-cl14.jpg', 42),
('https://img.pccomponentes.com/articles/12/123490/1024.jpg', 43),
('https://img.pccomponentes.com/articles/13/139863/rog-strix-z370-f-gaming-06.jpg', 44),
('https://img.pccomponentes.com/articles/14/147066/b1.jpg', 54),
('https://img.pccomponentes.com/articles/13/136707/1.jpg', 55),
('https://img.pccomponentes.com/articles/4/42948/5099206020580-2.jpg', 56),
('https://img.pccomponentes.com/articles/12/123496/1.jpg', 57),
('https://img.pccomponentes.com/articles/7/76431/tacens-mars-gaming-mcp1-pack-teclado-raton.jpg', 58),
('https://img.pccomponentes.com/articles/8/85041/1.jpg', 59),
('https://img.pccomponentes.com/articles/8/80021/lg-22m47vq-b-22-led.jpg', 60),
('https://img.pccomponentes.com/articles/10/105898/1111.jpg', 61),
('https://img.pccomponentes.com/articles/5/59994/logitech-b100-raton-negro-1.jpg', 62),
('https://img.pccomponentes.com/articles/14/149858/e1.jpg', 63);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ORDER`
--

CREATE TABLE `ORDER` (
  `ID` int(11) NOT NULL,
  `DATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `PAYMENTINFO` enum('PAID','PENDING','REJECTED') NOT NULL DEFAULT 'PENDING',
  `STATUS` enum('RECEIVED','PROCESSING','SHIPPED','ONDELIVERY','DELIVERED','CANCELED','RETURNED') NOT NULL DEFAULT 'RECEIVED',
  `SHIPPINGADDRESS` varchar(256) NOT NULL,
  `USER` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ORDER`
--

INSERT INTO `ORDER` (`ID`, `DATE`, `PAYMENTINFO`, `STATUS`, `SHIPPINGADDRESS`, `USER`) VALUES
(1, '2018-02-19 18:03:32', 'PENDING', 'RECEIVED', '', 'lito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ORDERITEM`
--

CREATE TABLE `ORDERITEM` (
  `ORDERLINE` int(11) NOT NULL,
  `ORDER` int(11) NOT NULL,
  `PRODUCT` int(11) NOT NULL,
  `QUANTITY` int(11) NOT NULL DEFAULT '1',
  `PRICE` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PRODUCT`
--

CREATE TABLE `PRODUCT` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `STOCK` int(11) DEFAULT '0',
  `PRICE` decimal(6,2) NOT NULL,
  `SPONSORED` enum('Y','N') DEFAULT 'N',
  `SHORTDESCRIPTION` varchar(128) DEFAULT NULL,
  `LONGDESCRIPTION` varchar(9999) DEFAULT NULL,
  `BRAND` int(11) NOT NULL,
  `CATEGORY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `PRODUCT`
--

INSERT INTO `PRODUCT` (`ID`, `NAME`, `STOCK`, `PRICE`, `SPONSORED`, `SHORTDESCRIPTION`, `LONGDESCRIPTION`, `BRAND`, `CATEGORY`) VALUES
(1, 'MSI B250M Bazooka', 2, '73.00', 'Y', 'MSI B250M Bazooka', 'Las placas base MSI te permiten administrar velocidades y temperaturas para todos los ventiladores de tu sistema y CPU, dándote un control total para configurar un sistema fresco y silencioso. Los cabezales del ventilador se colocan convenientemente con los disipadores de CPU más populares del mercado.', 8, 16),
(2, 'Gigabyte GA-Z270-HD3P', 5, '115.00', 'N', 'Gigabyte GA-Z270-HD3P', 'Compatible con procesadores de 7ª y 6ª Generación Intel® Core™\r\n\r\n', 12, 16),
(3, 'Gigabyte GA-AB350-GAMING 3', 3, '105.00', 'Y', 'Gigabyte GA-AB350-GAMING 3', 'AM4 Socket:\r\nAMD Ryzen™ processor', 12, 16),
(4, 'Intel Core I7-7700K 4.2GHz BOX', 5, '292.00', 'N', 'Procesador Intel Core I7-7700K 4.2GHz BOX', 'Market segment Desktop\r\nFamily Intel Core i7\r\nModel number i7-7700K\r\nFrequency 4200 MHz', 9, 3),
(5, 'Intel Core i5-7400 3.0GHz BOX', 4, '156.00', 'Y', 'Procesador Intel Core i5-7400 3.0GHz BOX', 'Market segment	Desktop\r\nFamily Intel Core i5\r\nModel number ? i5-7400\r\nFrequency ? 3000 MHz\r\nTurbo frequency	3500 MHz ', 9, 3),
(6, 'AMD Ryzen 5 1600 3.2GHZ BOX', 4, '189.00', 'N', 'Procesador AMD Ryzen 5 1600 3.2GHZ BOX', 'Familia de procesador: AMD Ryzen 5\r\nFrecuencia del procesador: 3,2 GHz\r\nNúmero de núcleos de procesador: 6', 10, 3),
(7, 'AMD RYZEN 7 1700 3.7GHZ BOX', 5, '269.00', 'Y', 'Procesador AMD RYZEN 7 1700 3.7GHZ BOX', 'Family AMD Ryzen 7\r\nModel number  1700\r\nFrequency  3000 MHz', 10, 3),
(8, 'Gigabyte GeForce GTX 1050Ti 4GB ', 4, '185.00', 'N', 'Gigabyte GeForce GTX 1050Ti OC WindForce 4GB GDDR5', 'Te presentamos la Gigabyte GeForce GTX 1050Ti OC Windforce , una gráfica con 4Gb GDDR5, VR Ready y sistema de ventilación Windforce.', 12, 4),
(9, 'MSI GeForce GTX 1050Ti 4GB ', 5, '184.00', 'Y', 'MSI GeForce GTX 1050Ti GAMING X 4GB GDDR5', 'Te presentamos la GTX 1050Ti Gaming X, una gráfica con 4GB GDDR5 y VR Ready', 8, 4),
(10, 'Sapphire Nitro+ Radeon RX 570 8GB OC GDDR5', 2, '389.00', 'N', 'Sapphire Nitro+ Radeon RX 570 8GB OC GDDR5', 'Construida sobre la arquitectura Polaris a prueba de futuro, la tarjeta gráfica SAPPHIRE NITRO + Radeon ™ RX 570 reproduce tus favoritos a 1080p y más allá, desde los últimos juegos de eSports y MOBA hasta los títulos AAA más populares y de gran intensidad gráfica. La evolución del proceso FinFET 14 ha permitido a la nueva serie RX 500 alcanzar mayores relojes que las generaciones anteriores.', 11, 4),
(11, 'Kingston HyperX Fury Black DDR4 2400 PC4-19200 4GB', 6, '46.00', 'Y', 'Kingston HyperX Fury Black DDR4 2400 PC4-19200 4GB CL15', 'HyperX® FURY DDR4 reconoce automáticamente la plataforma a la que se conecta y realiza el overclock a la máxima frecuencia publicada, hasta 2666 MHz, para una funcionalidad plug-and-play perfecta. ', 15, 5),
(12, 'G.Skill Ripjaws V Red DDR4 3000 PC4-24000 16GB ', 4, '210.00', 'Y', 'G.Skill Ripjaws V Red DDR4 3000 PC4-24000 16GB 2x8GB CL15', 'La nueva gama G.Skill Ripjaws V ofrece soluciones para un rendimiento increíble. Estos kits optimizar el rendimiento de las plataformas de nueva generación, con la ventaja añadida un alto potencial de overclocking. ', 16, 5),
(13, 'Acer V226HQL 21.5" LED', 7, '89.00', 'N', 'Acer V226HQL 21.5" LED', 'Estos resistentes monitores también disponen de una amplia variedad de puertos para que pueda conectar distintos tipos de dispositivos al mismo tiempo. Además, incorporan funciones respetuosas con el medio ambiente para ahorrar energía y costes.', 3, 10),
(14, 'ASUS VX248H 24" LED', 7, '178.00', 'Y', 'ASUS VX248H 24" LED', 'Este monitor incluye dos puertos HDMI y un D-sub para conectar todo tipo de dispositivos externos, como reproductores Blu-ray, DVD, etc., y disfrutar de contenidos multimedia de calidad sin necesidad de emplear un sistema de sonido externo.', 2, 10),
(15, 'Logitech Desktop MK120', 8, '18.00', 'N', 'Logitech Desktop MK120', 'Una combinación resistente, cómoda, elegante y sencilla a la vez. Con un teclado plano equipado con teclas silenciosas en una distribución estándar, teclas F de tamaño normal y teclado numérico. ', 4, 2),
(16, 'Tacens Mars Gaming MK4 ', 7, '39.00', 'N', 'Tacens Mars Gaming MK4 ', 'Pensado para los gamers más exigentes, el MK4 es el primer teclado totalmente mecánico de Mars Gaming, con switches rojo y azul para ajustarse a los gustos de los gamers y tecnología profesional con anti ghosting total.', 5, 14),
(17, 'Logitech Wireless Mouse M185 Azul', 8, '13.00', 'N', 'Logitech Wireless Mouse M185 Azul', 'Conexión inalámbrica fiable \r\nSin retrasos ni interrupciones. El minúsculo receptor inalámbrico proporciona una conexión de confianza.', 4, 15),
(18, 'MSI Clutch GM60 ', 10, '99.00', 'Y', 'MSI Clutch GM60 Ratón Gaming 10800DPI Negro RGB', 'Cuando se trata de esos momentos decisivos en el juego, necesitas el accesorio correcto para atrapar la victoria. La serie de mouse GAMING MSI Clutch utiliza los mejores componentes para asegurar que puedas confiar en este mouse. ¡Para que cuando llegue el momento, estés preparado con Clutch!', 8, 15),
(19, 'Lenovo Essential V110-15ISK', 5, '365.00', 'Y', 'Lenovo Essential V110-15ISK Intel Core i3-6006U/4GB/500GB/15.6', 'Te presentamos el portátil Essential V110-15ISK de Lenovo. Con su teclado que mejora el sistema, procesadores y tarjeta gráfica de vanguardia y fiabilidad integrada, el Lenovo V110 puede ayudar a tu empresa hoy y en el futuro. Ligero de peso y bajo de precio, este portátil de 15.6" tiene un moderno diseño y una pantalla que facilita el trabajo tanto en interiores como en exteriores. Existen opciones de extensión de la garantía y del soporte.', 18, 18),
(28, 'Lenovo Ideapad 320-15ISK ', 5, '429.00', 'Y', 'Lenovo Ideapad 320-15ISK Intel Core i3-6006U/4GB/500GB/15.6"', 'Te presentamos el Ideapad 320-15ISK de Lenovo. Un ordenador portátil con procesador Intel Core i3, 4GB de memoria RAM, 500 GB de disco duro.', 18, 18),
(29, 'MSI GL62M 7RDX-1655XES', 8, '999.00', 'N', 'MSI GL62M 7RDX-1655XES Intel Core i7-7700HQ/8GB/1TB +256 SSD/GTX 1050/15.6"', 'Te presentamos el portátil GL62M 7RDX-1656XES de MSI. Prepárate para sentir todo el poder del juego con este potente ordenador portátil de MSI. Un portátil Gaming dotado con un procesador Intel Core i7, 8GB de RAM, 1TB de almacenamiento con un disco duro SSD de 256GB, y todo bajo una potente gráfica NVIDIA GeForce GTX 1050 4GB GDDR5.', 8, 18),
(30, 'HP 15-BS512NS', 5, '604.00', 'N', 'HP 15-BS512NS Intel Core i5-7200U/8GB/256GB SSD/15.6"', 'Realiza todas las tareas diarias con éxito utilizando un portátil elegante creado para mantenerte conectado, el HP 15-BS512NS, así como para llevar a cabo tus actividades habituales. Con un rendimiento fiable y una batería de larga duración puedes navegar, transmitir datos y mantenerte en contacto con lo que más te preocupa de forma sencilla.', 6, 18),
(31, 'HP Notebook 250 G6 ', 7, '479.00', 'Y', 'HP Notebook 250 G6 Intel Core i3-6006U/8GB/128GB SSD/15.6"', 'Afronta todas tus tareas diarias con un portátil asequible que viene equipado con todas las características que necesitas. Obtén toda la potencia que deseas con el portátil HP Notebook 250 G6.', 6, 18),
(32, 'HP Pavilion Desktop 570-P066NS ', 6, '509.00', 'N', 'HP Pavilion Desktop 570-P066NS AMD A10-9700/12GB/1TB', 'Mientras que el desarrollo de otras torres ha sido detenido, HP ha revolucionado esta categoría. Desde su diseño atractivo y ahorrador de espacio, hasta su pleno rendimiento y fiabilidad, este HP Pavilion 570-p066ns es lo mejor que ha pasado en el campo de las torres en más de 20 años.\r\n\r\nPotencia y rendimiento para un entretenimiento de primera clase, juegos y experiencia multitarea.\r\n\r\n', 6, 19),
(33, 'Medion Erazer ', 6, '819.00', 'Y', 'Medion Erazer X57 Intel Core i5-6400/16GB/1TB+120GB SSD/GeForce GTX 1060 3G', 'El MEDION ERAZER X57 contiene un procesador Intel Core i5-6400 con una frecuencia de 2.7 GHz. Así, los juegos más populares y actuales pueden desplegar toda su gama de píxeles creando una experiencia incomparable con un número máximo de detalles y altas tasas de imágenes. ', 19, 19),
(34, 'MSI Trident 3 VR7RC-027EU', 7, '1299.00', 'N', 'MSI Trident 3 VR7RC-027EU Intel Core i7-7700/8GB/1TB+256 SSD/GTX1060', 'VERDADERO PC GAMING LIGERO Y COMPACTO\r\nIr a una LAN-party, casa de un amigo o simplemente tener la posibilidad de llevarlo allá donde quieras. El Trident 3 únicamente pesa 3.17 KG y entra en la mayoría de mochilas. Lleva allá donde quieras el verdadero rendimiento.', 8, 19),
(35, 'MSI Trident 3 7RB-074EU ', 6, '799.00', 'N', 'MSI Trident 3 7RB-074EU Intel Core i5-7400/8GB/1TB/GTX1050Ti', 'El ordenador de alto rendimiento extremo y diseño compacto, conoce el Trident 3. Con un nivel de rendimiento que encaja con las necesidades de cualquier gamer. \r\n\r\nRedefiniendo el tamaño de los ordenadores de sobremesa con el MSI Trident 3 .\r\n\r\nVERDADERO PC GAMING LIGERO Y COMPACTO\r\n\r\nIr a una LAN-party, casa de un amigo o simplemente tener la posibilidad de llevarlo allá donde quieras. El Trident 3 únicamente pesa 3.17 KG y entra en la mayoría de mochilas. Lleva allá donde quieras el verdadero rendimiento.', 8, 19),
(36, 'HP 260-P103NS ', 5, '349.00', 'Y', 'HP 260-P103NS Intel Core i3-6100T/4GB/1TB', 'Supera tu día de trabajo con el almacenamiento ampliado, el procesador Intel® o AMD, un diseño más pequeño y la fiabilidad probada de esta torre HP rediseñada. Encontrar una torre asequible con el rendimiento que necesitas y la marca en la que confías ahora es más fácil.\r\n\r\nPotencia y rendimiento para un entretenimiento de primera clase, juegos y experiencia multitarea.', 6, 19),
(37, 'Intel Pentium G4560 3.5GHz Box', 8, '61.00', 'N', 'Intel Pentium G4560 3.5GHz Box', 'Rendimiento excepcional para Trabajar, jugar y mucho más\r\nPrepárate para más de lo que quieres y necesitas. Los nuevos procesadores Intel® Pentium® te permiten transmitir, compartir, comprar, jugar, crear, consumir... y todo al mismo tiempo.\r\n\r\nDescubre una nueva dimensión en productividad con la próxima generación de procesadores Pentium® de Intel. Rendimiento optimizado para acelerar los 2 en 1, portátiles, torres, equipos de sobremesa y All-in-one. Apúntate al estilo más fino, elegante y pequeño con una fiabilidad en la que puedes confiar.', 9, 3),
(38, 'Zotac GeForce GTX 1060 AMP! Edition 6GB GDDR5', 8, '319.00', 'N', 'Zotac GeForce GTX 1060 AMP! Edition 6GB GDDR5', 'La tarjeta gráfica GTX 1060 de ZOTAC se carga con nuevas tecnologías innovadoras de juego, por lo que es la elección perfecta para los últimos juegos de alta definición. Desarrollado por NVIDIA Pascal ™ la arquitectura de la GPU más avanzada jamás creado la ZOTAC GeForce GTX 1060 ofrece un rendimiento brillante que abre la puerta a la realidad virtual y más allá.', 13, 4),
(39, 'Asus Dual GeForce GTX 1070 OC 8GB GDDR5', 7, '529.00', 'N', 'Asus Dual GeForce GTX 1070 OC 8GB GDDR5', ' Con hasta un 100% más de rendimiento que las tarjetas de la serie anterior y un espectacular desempeño gráfico en videojuegos y realidad virtual, llegan a nosotros las GTX 1070, las joyas de la corona de las tarjetas gráficas. La serie 70 es tradicionalmente la mejor serie en cuanto a relación calidad/precio.\r\n\r\nLa nueva serie de tarjetas gráficas Nvidia han dejado boquiabiertos a todo el mundo en todos los aspectos imaginables al superar en potencia, consumo precio que nadie esperaba. Sobre todo después de haber sido sometida a varias pruebas en las que su rendimiento no sólo dobla, sino que en algunos casos triplica, la potencia gráfica de modelos anteriores, y todo ello con un precio ultra competitivo.\r\n\r\n', 2, 4),
(40, 'G.Skill Aegis DDR4 2133 PC4-17000 4GB CL15', 10, '46.00', 'N', 'G.Skill Aegis DDR4 2133 PC4-17000 4GB CL15', 'Te presentamos en PcComponentes la Gama AEGIS de G.Skill. Una gama diseñada para eliminar el LAG y tener una fluidez de juego mucho mayor en tu PC. Disfruta de su impuso instantáneo en el rendimiento y la estabilidad desde el primer arranque.', 16, 5),
(41, 'Corsair Vengeance LPX DDR4 2400 PC4-19200 8GB CL16', 10, '109.00', 'N', 'Corsair Vengeance LPX DDR4 2400 PC4-19200 8GB CL16', 'La memoria Vengeance LPX se ha diseñado para overclocking de alto rendimiento. El disipador de calor, fabricado en aluminio puro, permite una disipación térmica más rápida; la placa impresa de ocho capas administra el calor y proporciona una capacidad superior para incrementar el overclocking. Cada circuito integrado está seleccionado individualmente para el máximo potencial de rendimiento. El formato DDR4 está optimizado para las placas base Intel de la serie X99/100 Series más recientes y ofrece frecuencias más elevadas, mayor ancho de banda y menor consumo energético que los módulos DDR3. Se ha verificado la compatibilidad de los módulos Vengeance LPX DDR4 para toda las placas base de la serie X99/100 Series, lo que asegura un rendimiento rápido y fiable. Compatibilidad con XMP 2.0 para un overclocking automático sin problemas. Y están disponibles en distintos colores para combinar con su placa base, sus componentes, o sencillamente con su estilo personal.', 17, 5),
(42, 'Kingston HyperX Fury Black DDR4 2400 PC4-19200 8GB', 10, '93.00', 'N', 'Kingston HyperX Fury Black DDR4 2400 PC4-19200 8GB CL15', 'Te presentamos la revolución en las memorias para PC. La Kingston HyperX Fury DDR4 ha sido diseñada para ofrecer un rendimiento superior a lo establecido. Disfruta de toda la potencia y saca el mayor partido a tu procesador y gráfica con la serie Fury de Kingston. Con el lanzamiento del procesador Intel Skylake y los chipsets de serie 100, HyperX se complace en anunciar que todas sus unidades HyperX FURY DDR4 y HyperX Predator DDR4 son compatibles con Skylake. ', 15, 5),
(43, 'MSI Z270 Gaming Plus', 10, '118.00', 'N', 'MSI Z270 Gaming Plus', 'Te presentamos la placa base Z270 Gaming Plus de MSI. Opciones de personalización ilimitadas y cargadas de características gaming, las placas base MSI PERFORMANCE GAMING ofrecen la mejor esperiencia de juego posible.', 8, 16),
(44, 'Asus Z370-F Gaming', 10, '207.00', 'N', 'Asus Z370-F Gaming\r\n', 'Te presentamos la Asus Z370-F Gaming una placa base con socket Intel 1151 y chipset Z370. Placa base de gaming ATX Intel Z370 con iluminación Aura Sync RGB LED, soporte DDR4 4000 MHz, dos M.2, SATA 6 Gbps y USB 3.1 Gen. 2', 2, 16),
(54, 'Samsung UE55MU6125 55', 8, '599.00', 'N', 'Samsung UE55MU6125 55" LED UltraHD 4K', 'Samsung UE55MU6125 es el verdadero televisor UHD 4K. Disfrute de todo el realismo hasta el más mínimo detalle con 4 veces la resolución del televisor Full HD. Con Ultra HD, su contenido será aún más agradable gracias a colores y brillo increíblemente realistas.', 1, 10),
(55, 'HP 22w 21.5" LED IPS FullHD', 10, '109.00', 'N', 'HP 22w 21.5" LED IPS FullHD', 'Te presentamos el monitor HP 22w de 21.5", pantalla IPS y con una resolución de FullHD. Con una resolución Full HD completa y un diseño casi sin bordes, esta pantalla IPS ofrece la combinación perfecta de forma y funcionalidad por menos de lo que podría imaginar. Conecte fácilmente su ordenador portátil o de escritorio y disfrute de sus contenidos favoritos en una experiencia de cine.', 6, 10),
(56, 'Logitech Desktop MK120', 16, '18.99', 'N', 'Logitech Desktop MK120', 'Una combinación resistente, cómoda, elegante y sencilla a la vez. Logitech® Desktop MK120. Una combinación resistente, cómoda, elegante y sencilla a la vez. Con un teclado plano equipado con teclas silenciosas en una distribución estándar, teclas F de tamaño normal y teclado numérico', 4, 14),
(57, 'Tacens Mars Gaming MK116 ', 20, '20.00', 'N', 'Tacens Mars Gaming MK116 Teclado Gaming Retroiluminado', 'El teclado Mars Gaming MK116 cuenta con un procesador Gaming interno de alta tecnología, una memoria interna que permite guardar configuraciones y tecnología profesional gaming con 1000 Hz de frecuencia de sondeo y capacidad anti-ghosting. La pulsación perfecta del teclado MK116 está desarrollada para Gaming, la altura de las teclas está optimizada para Gaming, los pulsadores están especialmente seleccionados por su presión y respuesta para un rendimiento extremo. Todas sus teclas se desmontan para intercambiar su posición y permitir una limpieza en profundidad del teclado.', 5, 14),
(58, 'Tacens Mars Gaming MCP1 Pack Gaming ', 10, '25.00', 'N', 'Tacens Mars Gaming MCP1 Pack Gaming Teclado + Ratón', 'El MCP1 es un combo de teclado y ratón perfecto para los gamers más exigentes.  El teclado cuenta con 12 teclas multimedia para un control total del juego en todo momento. La pulsación está especialmente optimizada para gaming, con teclas de respuesta rápida para una precisión extrema durante las sesiones de juego. Su llamativo diseño con teclas gaming especiales rojas, un original reposamuñecas e iluminación tambien en rojo.', 5, 14),
(59, 'Logitech K400+ Wireless ', 11, '43.00', 'N', 'Logitech K400+ Wireless Touch Keyboard Negro', 'Las utilidades de un teclado inalámbrico son tantas que no podemos si no alabar al Logitech K400. Un teclado compatible con cualquier dispositivo con conexión USB para el receptor Unifying.  Disfruta conectado a tu smartTV cómodamente desde tu sofá gracias a la tecnología inalámbrica Unifying con la que puedes conectar hasta seis dispositivos Logitech en un radio de acción de 10 metros.  El teclado Logitech K400 tiene un diseño enfocado al uso multimedia tanto en PC como TV. Ya no tiene que ser complicado navegar por los menús de tu SmartTV gracias a su intuitivo touchpad.', 4, 14),
(60, 'LG 22M47VQ-P ', 15, '109.00', 'N', 'LG 22M47VQ-P 21.5" LED', 'Velocidad de respuesta alta para juegos. Un tiempo de respuesta de dos ms para mejor disfrute de tus juegos, películas y sucesos deportivos preferidos con la mayor calidad y detalle. La velocidad de respuesta de estos monitores te va a dejar ver vídeos o jugar a juegos para videoconsolas a lo largo de más tiempo sin cansar tu vista.', 4, 10),
(61, 'Tacens Mars Gaming MM116 ', 10, '15.00', 'N', 'Tacens Mars Gaming MM116 Ratón Gaming 3200 DPI', 'Alta precisión El ratón MM116 Mars Gaming y su tecnología de sensor óptico profesional para Gamers de 3200DPI con frecuencia de refresco ultra-rápida, ofrece una precisión extrema y gran ergonomía. Cuenta con cambio de nivel de alta velocidad On-the-Fly para una precisión y control máximo, seis botones gaming profesionales con capacidad de hasta cinco millones de pulsaciones y rueda de scroll de alta velocidad para un rápido movimiento.', 5, 15),
(62, 'Logitech B100 Ratón Negro', 15, '8.75', 'N', 'Logitech B100 Ratón Negro', 'Cómodo, diseño ambidiestro La forma cómoda y de bajo perfil se siente bien en cualquier mano, incluso después de un largo día de trabajo. 800 dpi precisión óptica Disfrutará suave, control preciso del cursor que permite editar documentos y navegar por la Web de manera más eficiente. configuración Zero  Funciona nada más sacarlo de la caja, basta conectarla al puerto USB y ya está listo para los negocios. Construido por Logitech ® Este ratón cuenta con la calidad y el diseño que hemos aplicado a más de mil millones de ratones, más que cualquier otro fabricante.', 4, 15),
(63, 'HP X500 Ratón Óptico', 15, '8.00', 'N', 'HP X500 Ratón Óptico', 'Disfrute del ratón con cable HP X500 que cómodamente se conecta a su equipo a través del puerto USB. La forma se ajusta cómodamente al arco natural de la mano y puede programarse para trabajar con ambas manos. Simplemente conecte y navegue perfectamente con el seguimiento óptico sensible.', 6, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PROMOTION`
--

CREATE TABLE `PROMOTION` (
  `ID` int(11) NOT NULL,
  `DISCOUNTPERCENTAGE` int(2) NOT NULL,
  `STARTDATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ENDDATE` datetime DEFAULT NULL,
  `PRODUCT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `PROMOTION`
--

INSERT INTO `PROMOTION` (`ID`, `DISCOUNTPERCENTAGE`, `STARTDATE`, `ENDDATE`, `PRODUCT`) VALUES
(1, 10, '2018-02-12 17:09:22', NULL, 5),
(2, 50, '2018-02-15 15:48:04', NULL, 1),
(5, 45, '2018-02-15 15:52:41', NULL, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USER`
--

CREATE TABLE `USER` (
  `USERNAME` varchar(32) NOT NULL,
  `PASSWORD` varchar(32) NOT NULL,
  `CREATIONDATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `ADRESS` varchar(100) NOT NULL,
  `POSTALCODE` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `USER`
--

INSERT INTO `USER` (`USERNAME`, `PASSWORD`, `CREATIONDATE`, `NAME`, `EMAIL`, `ADRESS`, `POSTALCODE`) VALUES
('admin', '$1b89RcKsNf9Y', '2018-02-20 12:38:47', 'admin', 'g.mas.simon@gmail.com', 'calle pedrera nº 12A piso 3º A', '07014'),
('lito', '$1LHgVUEgDSdY', '2018-02-18 21:57:46', 'Gabriel Más simon', 'g.mas.simon@gmail.com', 'calle pedrera nº 12A piso 3º A', '07014');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `BRAND`
--
ALTER TABLE `BRAND`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `CATEGORY`
--
ALTER TABLE `CATEGORY`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PARENTCATEGORY` (`PARENTCATEGORY`);

--
-- Indices de la tabla `IMAGE`
--
ALTER TABLE `IMAGE`
  ADD PRIMARY KEY (`URL`,`PRODUCT`),
  ADD KEY `PRODUCT` (`PRODUCT`);

--
-- Indices de la tabla `ORDER`
--
ALTER TABLE `ORDER`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USER` (`USER`);

--
-- Indices de la tabla `ORDERITEM`
--
ALTER TABLE `ORDERITEM`
  ADD PRIMARY KEY (`ORDERLINE`,`ORDER`),
  ADD KEY `ORDER` (`ORDER`),
  ADD KEY `PRODUCT` (`PRODUCT`);

--
-- Indices de la tabla `PRODUCT`
--
ALTER TABLE `PRODUCT`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `BRAND` (`BRAND`),
  ADD KEY `CATEGORY` (`CATEGORY`);

--
-- Indices de la tabla `PROMOTION`
--
ALTER TABLE `PROMOTION`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PRODUCT` (`PRODUCT`);

--
-- Indices de la tabla `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`USERNAME`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `BRAND`
--
ALTER TABLE `BRAND`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `CATEGORY`
--
ALTER TABLE `CATEGORY`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `ORDER`
--
ALTER TABLE `ORDER`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `PRODUCT`
--
ALTER TABLE `PRODUCT`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT de la tabla `PROMOTION`
--
ALTER TABLE `PROMOTION`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `CATEGORY`
--
ALTER TABLE `CATEGORY`
  ADD CONSTRAINT `CATEGORY_ibfk_1` FOREIGN KEY (`PARENTCATEGORY`) REFERENCES `CATEGORY` (`ID`);

--
-- Filtros para la tabla `IMAGE`
--
ALTER TABLE `IMAGE`
  ADD CONSTRAINT `IMAGE_ibfk_1` FOREIGN KEY (`PRODUCT`) REFERENCES `PRODUCT` (`ID`);

--
-- Filtros para la tabla `ORDER`
--
ALTER TABLE `ORDER`
  ADD CONSTRAINT `ORDER_ibfk_1` FOREIGN KEY (`USER`) REFERENCES `USER` (`USERNAME`);

--
-- Filtros para la tabla `ORDERITEM`
--
ALTER TABLE `ORDERITEM`
  ADD CONSTRAINT `ORDERITEM_ibfk_1` FOREIGN KEY (`ORDER`) REFERENCES `ORDER` (`ID`),
  ADD CONSTRAINT `ORDERITEM_ibfk_2` FOREIGN KEY (`PRODUCT`) REFERENCES `PRODUCT` (`ID`);

--
-- Filtros para la tabla `PRODUCT`
--
ALTER TABLE `PRODUCT`
  ADD CONSTRAINT `PRODUCT_ibfk_1` FOREIGN KEY (`BRAND`) REFERENCES `BRAND` (`ID`),
  ADD CONSTRAINT `PRODUCT_ibfk_2` FOREIGN KEY (`CATEGORY`) REFERENCES `CATEGORY` (`ID`);

--
-- Filtros para la tabla `PROMOTION`
--
ALTER TABLE `PROMOTION`
  ADD CONSTRAINT `PROMOTION_ibfk_1` FOREIGN KEY (`PRODUCT`) REFERENCES `PRODUCT` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
