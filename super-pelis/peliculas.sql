-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2018 a las 22:34:16
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `peliculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idcategorias` int(11) NOT NULL,
  `genero` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idcategorias`, `genero`) VALUES
(1, 'Acción'),
(2, 'Animación'),
(3, 'Anime'),
(4, 'Aventura'),
(5, 'Ciencia-ficción'),
(6, 'Coches'),
(7, 'Comedia'),
(8, 'Crimen'),
(9, 'Culto'),
(10, 'Destacadas'),
(11, 'Documental'),
(12, 'Drama'),
(13, 'Estrenos'),
(14, 'Familia'),
(15, 'Fantasía'),
(16, 'Foreign'),
(17, 'Guerra'),
(18, 'Hindu'),
(19, 'Historia'),
(20, 'Infantil'),
(21, 'Marvel'),
(22, 'Misterio'),
(23, 'Música'),
(24, 'Navidad'),
(25, 'Próximos-Estrenos'),
(26, 'Romance'),
(27, 'Suspense'),
(28, 'Suspenso'),
(29, 'Terror'),
(30, 'Thriller'),
(31, 'uncategorized'),
(32, 'Western'),
(33, 'Película-de-la-televisión');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `iddatos` int(10) UNSIGNED NOT NULL,
  `imagen` text,
  `imagenho` text,
  `video` varchar(255) DEFAULT NULL,
  `video2` varchar(255) DEFAULT NULL,
  `video3` varchar(255) DEFAULT NULL,
  `descarga` varchar(250) DEFAULT NULL,
  `trailer` varchar(50) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `titulo2` text NOT NULL,
  `anio` varchar(20) DEFAULT NULL,
  `duracion` int(10) DEFAULT NULL,
  `sinopsis` text,
  `idioma` set('espaniol','subespaniol','espanioles') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`iddatos`, `imagen`, `imagenho`, `video`, `video2`, `video3`, `descarga`, `trailer`, `titulo`, `titulo2`, `anio`, `duracion`, `sinopsis`, `idioma`) VALUES
(1, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/ySk5NDh9KjmTLaCbnYlk7vowGuc.jpg', 'https://image.tmdb.org/t/p/original/uXNrC9A4VNFfeKLLLaZKfmhCyxQ.jpg', 'https://openload.co/embed/Z0eahsDkmsI/049-Nivel_13_lat_hd720.mp4', 'https://streamango.com/embed/ameprkdkqndcqmbc/049-Nivel_13_lat_hd720_mp4', '', '', 'CMSxmp-LRvw', 'Nivel 13', 'The Thirteenth Floor', '1999', 100, 'Hannon Fuller, un magnate de los negocios y empresario emprendedor, muere en extrañas circunstancias. Su amigo y mano derecha, Douglas Hall, se ve lanzado a un mundo de crímenes y decepciones, llegando a descubrir que Fuller llevaba una peligrosa doble vida que se movía entre dos mundos paralelos: uno en 1937 y otro en el presente...', 'espanioles'),
(2, 'https://image.tmdb.org/t/p/original/j6QP6UTgyTtTVkepboIRSa6u6uL.jpg', 'https://image.tmdb.org/t/p/original/72BXXV7UpSteCnoiltBizPxCXq4.jpg', 'https://openload.co/embed/weRzZv97sX0/2Linterna-verde.mp4', 'https://streamango.com/embed/clrccoklmoofdfns/2linterna-verde_mp4', '', 'https://openload.co/f/weRzZv97sX0/2Linterna-verde.mp4', 'PQ_JNy6lyow', 'Linterna verde', 'Green Lantern', '2011', 114, 'En un universo tan vasto como misterioso, una pequeña pero misteriosa fuerza ha existido por siglos. Protectores de la paz y la justicia se hace llamar el cuerpo de linternas verdes. Una hermandad de guerreros que juraron mantener el orden intergaláctico donde cada linterna verde lleva un anillo que le da superpoderes. Pero cuando un nuevo enemigo llamado Parallax amenaza con destruir el balance y el poder del universo, su destino y el de la tierra cae en manos del nuevo recluta; el primer humano que ha sido elegido: Hal Jordan.', 'espanioles'),
(3, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/6453Ua2jBSngAAE5iu900EoBVci.jpg', 'https://image.tmdb.org/t/p/original/obKkOgdvV7kOFUuIOBd2dZ85p4k.jpg', 'https://openload.co/embed/ESh0m0-DvC0/3Las-aventuras-de-Peabody-y-Sherman.lat.hd1080.mp4', 'https://streamango.com/embed/opalrcsbcelbkbbm/3Las-aventuras-de-Peabody-y-Sherman_lat_hd1080_mp4', '', 'https://openload.co/f/ESh0m0-DvC0/3Las-aventuras-de-Peabody-y-Sherman.lat.hd1080.mp4', '2dcGqIASq9U', 'Las aventuras de Peabody y Sherman', 'Mr. Peabody & Sherman', '2014', 92, 'Los personajes de la serie animada de los 60 The Rocky & Bullwinkle Show, Mr. Peabody y Sherman, se cuelan en la gran pantalla adquiriendo una nueva dimensión 3D. En esta ocasión el perro parlante más inteligente del mundo, Mr. Peabody y su mascota Sherman, un enérgico niño bastante ingenuo, se adentrarán en nueva una aventura determinante en el curso de la historia universal. Cuando Sherman desastrosamente avería la máquina del tiempo, la peculiar pareja se ve obligada a recomponer los hechos y arreglar la máquina antes de que sea demasiado tarde y el continuo espacio-tiempo se destruya afectando irreparablemente a nuestra existencia.', 'espaniol'),
(5, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/lqBQ40GYWqU1wWDWirzp1dbOZdg.jpg', 'https://image.tmdb.org/t/p/original/dbRU41CkCOFji8g4Mp9pMNu7jrC.jpg', 'https://openload.co/embed/UeMlUJcbnrA/5-Encerrado.1989_lat_hd1080.mp4', 'https://streamango.com/embed/dsastmefststrooc/5-Encerrado_1989_lat_hd1080_mp4', '', 'https://openload.co/f/UeMlUJcbnrA/5-Encerrado.1989_lat_hd1080.mp4', 'UMc8bOENgbw', 'Encerrado', 'Lock Up', '1989', 115, 'Frank Leone está a punto de cumplir su condena de reclusión por un delito menor. Sin embargo a punto de ser liberado, Warden Drumgoole se hace cargo de la prisión. Drumgoole fue reasignado a tan infernal presidio después de que su administración fuera públicamente puesta en entredicho por Leone, y ahora él se encargará de que nunca vuelva a ver la luz del día.', 'espaniol'),
(6, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/bmaj1ATO4s0SeRCUMuQ40fm0ulH.jpg', 'https://image.tmdb.org/t/p/original/jNLAdepG0JkCgr7Rw8J2y8gaPyw.jpg', 'https://openload.co/embed/wTkMWbgm65E/6-selena.lat_hd720.mp4', 'https://streamango.com/embed/fndllfstbodcrtod/6-selena_lat_hd720_mp4', '', 'https://openload.co/f/wTkMWbgm65E/6-selena.lat_hd720.mp4', 'V91R8iRwJNQ', 'Selena', 'Selena', '1997', 125, 'Basada en hechos reales, narra la meteórica carrera de la joven cantante hispana Selena Quintanilla-Perez, todo un fenómeno de la música que surge en una localidad de Texas para convertirse en una estrella del universo latino. Descubierta casualmente por su propio padre a la temprana edad de 10 años, su vida será un continuo carrusel de problemas familiares, incluyendo su matrimonio en secreto con su guitarrista Chris Perez. A pesar de su corta y trágica carrera, su popularidad fue extraordinaria tanto en México como entre la población hispana de los Estados Unidos, que vivió su fulgurante ascenso y su trágica muerte, sucedida en 1995 cuando contaba con apenas 23 años de edad, a manos de su mayor admiradora: la presidenta de su club de fans y secretaria personal.', 'espaniol'),
(7, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/3P32AujNDVdnbUwAqfWz2i8uTWe.jpg', 'https://image.tmdb.org/t/p/original/eCgIoGvfNXrbSiQGqQHccuHjQHm.jpg', 'https://openload.co/embed/FpjUl1UUAuw/7-Lucy.720p.CAS.mkv.mp4', 'https://streamango.com/embed/qrlpbcsqbdmmbkkl/7-Lucy_720p_CAS_mkv_mp4', '', 'https://openload.co/f/FpjUl1UUAuw/7-Lucy.720p.CAS.mkv.mp4', 'luOcWjmAUuA', 'Lucy', 'Lucy', '2014', 90, 'Lucy es una joven obligada a traficar con droga que un día, inesperadamente, absorbe en su sistema los estupefacientes que transporta. Lo sorprendente es que en lugar de ir directa al hospital, las drogas le otorgan una serie de poderes sobrehumanos tales como telequinesis, la cancelación de dolor, y la habilidad de absorber el conocimiento de forma instantánea; poderes que, inevitablemente, cambiarán su vida para siempre.', 'espanioles'),
(8, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/d5Q9Gi3CY589vfVXGL9mVSwbFKS.jpg', 'https://lh3.googleusercontent.com/NWEIFz2aXG6Q0vp32SuwdPOhVPHpoCShM_3WGdRwN81KIaVz_dFY4f6fOqUit2aVJiOwStsUbSGh', 'https://openload.co/embed/GcUmZnbEKtk/8-R.L.Stines.Monsterville.The_Cabinet_of_Souls.lat.hd1080.mp4', 'https://streamango.com/embed/aotclmfnonorkkle/8-R_L_Stines_Monsterville_The_Cabinet_of_Souls_lat_hd1080_mp4', '', 'https://openload.co/f/GcUmZnbEKtk/8-R.L.Stines.Monsterville.The_Cabinet_of_Souls.lat.hd1080.mp4', 'D6ZSJKnAQXk', 'Bienvenidos a la Casa de la Muerte', 'R.L. Stine\'s Monsterville: The Cabinet of Souls', '2015', 85, 'Un grupo de amigos adolescentes deben resistir el hechizo de un malvado showman que se presenta en una casa de los horrores en su pequeña ciudad.', 'espaniol'),
(9, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/i2Lfpppu6Hbr3iKlgXZX4NFUIKl.jpg', 'https://image.tmdb.org/t/p/original/gqLAwI8kmqoMl1Z8ZDl78tAMUGG.jpg', 'https://openload.co/embed/Jgx1kxO6JG0/9-Rostro.del.angel.7p.CAS.mkv.mp4', 'https://streamango.com/embed/snsktrraststqtkf/9-Rostro_del_angel_7p_CAS_mkv_mp4', '', 'https://openload.co/f/Jgx1kxO6JG0/9-Rostro.del.angel.7p.CAS.mkv.mp4', '_5D4QUzehvo', 'El rostro de un ángel', 'The Face of an Angel', '2014', 108, 'Una periodista y un director de documentales investigan un crimen cometido en Perugia (Italia). La protagonista es Amanda Knox, la estudiante norteamericana que fue acusada de asesinar a una compañera de piso con la complicidad de su novio italiano y un amigo de Costa de marfil.', 'espanioles'),
(10, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/wK8nWEzBjXHpmsYsmoHhS2K9mEb.jpg', 'https://image.tmdb.org/t/p/original/g6WT9zxATzTy9NVu2xwbxDAxvjd.jpg', 'https://openload.co/embed/dr_pxgi990s/10-divergente.1.lathd720.mp4', 'https://streamango.com/embed/mqftadrampbmsaln/10-divergente_1_lathd720_mp4', '', 'https://openload.co/f/dr_pxgi990s/10-divergente.1.lathd720.mp4', '853LDxEaf2k', 'Divergente', 'Divergent', '2014', 139, '\"Divergente\" es la historia de una sociedad que se divide en cinco categorías: Verdad, Abnegación, Osadía, Cordialidad y Erudición. Todos los miembros de esta sociedad tienen que elegir a una edad temprana, los dieciséis años, a qué bando creen pertenecer, atendiendo a sus virtudes personales más destacadas. En este dilema se encuentra la protagonista, Beatrice, que sorprende a todos sus allegados y amigos con la decisión que toma. Beatrice, que pasa a llamarse más tarde Tris, tiene que buscar su lugar adecuado, pero ella no es como el resto. Guarda un secreto que podría ser definitivo para mantener el orden social descrito y también para salvar su propia vida.', 'espaniol'),
(11, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/1hYevti8A2YDs155FEgfvfFxMJg.jpg', 'https://image.tmdb.org/t/p/original/i7wpYzdgoY2zaK3qqkHWCdoTc1w.jpg', 'https://openload.co/embed/xIjBhIxSwxA/11-Riesgo_total_%281993%29_10808p_latino.mp4', 'https://streamango.com/embed/mtobqseobktkelfc/11-Riesgo_total_1993_10808p_latino_mp4', '', 'https://openload.co/f/xIjBhIxSwxA/11-Riesgo_total_%281993%29_10808p_latino.mp4', 'https://www.youtube.com/watch?v=MckRA8OOG1o', 'Al límite del Riesgo', 'Maximum Risk', '1996', 101, 'Un policía francés descubre que ha tenido un gemelo cuando éste aparece asesinado en Niza. A partir de ahí, decide viajar a los Estados Unidos para descubrir más cosas sobre las actividades de su hermano. Con esta intención, decide suplantarle, viéndose involucrado en una trama que le obligará a enfrentarse al FBI y a las mafias rusas.', 'espaniol'),
(12, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/mpZkQKUlcUTwbgcmcGaNALAkr72.jpg', 'https://image.tmdb.org/t/p/original/lqn2pPNzHZYg1KQowGC2yPHvMYk.jpg', 'https://openload.co/embed/uCHWaKH_XBs/12-Las_aventuras_de_Tint%C3%ADn_El_secreto_del_Unicornio.mp4', 'https://streamango.com/embed/kffsnkeadoqkfnsc/12-Las_aventuras_de_Tint_n_El_secreto_del_Unicornio_mp4', '', 'https://openload.co/f/uCHWaKH_XBs/12-Las_aventuras_de_Tint%C3%ADn_El_secreto_del_Unicornio.mp4', 'kB3FUOMrAE8', 'Las aventuras de Tintín: El secreto del unicornio', 'The Adventures of Tintin', '2011', 107, 'Tintín, un joven periodista dotado de una curiosidad insaciable, y su leal perro Milú descubren que la maqueta de un barco contiene un enigmático y secular secreto que deben investigar. A partir de ese momento, Tintín se verá acosado por Ivan Ivanovitch Sakharine, un diabólico villano que cree que el joven ha robado un valioso tesoro vinculado a un cruel pirata llamado Rackham el Rojo. Pero, con la ayuda de Milú, del cascarrabias capitán Haddock y de los torpes detectives Hernández y Fernández, viajará por medio mundo, sirviéndose de su proverbial astucia para burlar a sus perseguidores y encontrar antes que ellos El Unicornio, un navío hundido que puede proporcionar la clave de una fabulosa fortuna y de una antigua maldición.', 'espaniol'),
(13, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/lyprRmrmAn17hgsjiSK89D1jIil.jpg', 'https://image.tmdb.org/t/p/original/pALnP7MdGEK18FQkMH8JkkepRIc.jpg', 'https://openload.co/embed/72TuinROB8o/13-bbdestino.final.1.lat.hd1080.mp4', 'https://streamango.com/embed/taflqqfrfrannbse/13-bbdestino_final_1_lat_hd1080_mp4', '', 'https://openload.co/f/72TuinROB8o/13-bbdestino.final.1.lat.hd1080.mp4', 'pCiWxIHw7bQ', 'Destino final', 'Final Destination', '2000', 98, 'Al subir a un avión con destino a Paris, junto con sus compañeros de clase, Alex tiene una premonición, por lo que desembarca justo antes de despegar junto a seis de sus amigos y una profesora. Poco después el aparato explota en el aire. El grupo de supervivientes se verá perseguido por la dama de la guadaña, la propia muerte, que no se dará por vencida. Acosado por el FBI que considera a Alex responsable del accidente y perseguido por sus propios miedos, el joven deberá descubrir que las coincidencias y los accidentes no son algo casual.', 'espaniol'),
(14, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/4KHFGNCQvAa5xjJpAFBgqcF4mC2.jpg', 'https://image.tmdb.org/t/p/original/jIX8LRnNdSlOjYv8Z7z9VfdReNV.jpg', 'https://openload.co/embed/22zG5ynO2rY/14-bbdestino.final.2.lathd1080.mp4', 'https://streamango.com/embed/ckmsflblpfedkmrc/14-bbdestino_final_2_lathd1080_mp4', '', 'https://openload.co/f/22zG5ynO2rY/14-bbdestino.final.2.lathd1080.mp4', '7vZqVooni2o', 'Destino final 2', 'Final Destination 2', '2003', 90, 'Kimberly Corman se va de vacaciones con sus amigos Dano , Shaina y Frankie hacia Daytona Beach. De repente, un camión cargado de troncos pierde el control al reventarse la cadena que los sostiene, cayendo y rodando por la autopista donde se origina un trágico accidente, matando a todos los que se encuentran a su paso. Pero esto solo fue una premonición de Kimberly, que al volver a la realidad se asusta y detiene la camioneta en plena desviación de la autopista, de modo que ocasiona que los autos que van detrás se detengan haciendo un gran atasco. Un policía , se acerca a ver que ocurre, y Kim le cuenta lo que ha visto. El policía no le cree y trata de tranquilizarla haciéndole entender que es solo su imaginación, y le ruega que retire el auto del camino, pero Kim se niega, cuando de repente, el camión de troncos cruza ante sus ojos y se cumple la catástrofe, tal y como ella lo había contado.', 'espaniol'),
(15, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/3PEVkIBOii1fxQxaQ0iKODGnBUp.jpg', 'https://image.tmdb.org/t/p/original/ntgZZBA0QoNDcn8Bj78UBoksUVJ.jpg', 'https://openload.co/embed/g608zEgDKys/15-bbdestino.final.3.lat_hd1080.mp4', 'https://streamango.com/embed/pqbfkeocfsccearm/15-bbdestino_final_3_lat_hd1080_mp4', '', 'https://openload.co/f/g608zEgDKys/15-bbdestino.final.3.lat_hd1080.mp4', 'xp8IR9Mh3g0', 'Destino final 3', 'Final Destination 3', '2006', 92, 'Una estudiante del instituto tiene una premonición sobre una tragedia en un parque de atracciones local, por lo que decide no montarse en una montaña rusa que presiente va a descarrilar...', 'espaniol'),
(16, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/wbv0q5aWHhK7L50ihGFnXoS9ALk.jpg', 'https://image.tmdb.org/t/p/original/kGalplb3ORM7aGXkW9UaZrp5AYN.jpg', '', '', '', '', 'azQH42WEoTg', 'Destino final 4', 'The Final Destination', '2009', 82, 'Nick O’Bannon y unos amigos acuden a un circuito de carreras para presenciar una prueba del Nascar. Durante ésta tiene lugar un terrible accidente que conlleva desastrosas consecuencias para el estadio. Pero Nick descubre que se trata de sólo una visión de algo que está a punto de suceder, y junto con otras doce personas consigue salir del recinto y escapar de una tragedia segura. Pensando que han burlado a la muerte, el grupo continúa con su vida, pero desafortunadamente para Nick, Lori y sus amigos sólo es el principio, ya que la muerte no deja cabos sueltos, y regresará para llevarse a los supervivientes de una manera brutal.', 'espaniol'),
(17, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/yU81cJ29FazT39KXTqFQ0OrQo9q.jpg', 'https://image.tmdb.org/t/p/original/kk28Whg2OE7evFpV2DLWEtflP5P.jpg', 'https://openload.co/embed/oSMbHuvXnpQ/16-bbdestino.final.5.lat_hd1080.mp4', 'https://streamango.com/embed/rclaqleblrbpbaqk/16-bbdestino_final_5_lat_hd1080_mp4', '', 'https://openload.co/f/oSMbHuvXnpQ/16-bbdestino.final.5.lat_hd1080.mp4', 'OWVYtZVhg-Q', 'Destino final 5', 'Final Destination 5', '2011', 95, 'Sam Lawton tiene una premonición sobre la destrucción de un puente colgante que causaría su muerte y la de otras personas. La visión se hace realidad, pero Sam se las arregla para salvarse a sí mismo y a algunos otros de la catastrófica tragedia. Sin embargo, Sam y su novia Molly descubren que no están realmente a salvo: la muerte los persigue a ellos y a los que sobrevivieron al horrible accidente... Quinta entrega de la popular serie de terror \"Destino final\".', 'espaniol'),
(18, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/4lxMDbQ6jAafG0TLXAyUlmo7mOh.jpg', 'https://image.tmdb.org/t/p/original/7sSOGEtDbQkDpVNkrmmz10AtLh6.jpg', 'https://openload.co/embed/0WOKsofZTQM/17-Abzurdah.7p.LAT.mp4', 'https://streamango.com/embed/qnbaomcccokofddk/17-Abzurdah_7p_LAT_mp4', '', 'https://openload.co/f/0WOKsofZTQM/17-Abzurdah.7p.LAT.mp4', 'SL_e4tdlYN0', 'Abzurdah', 'Abzurdah', '2015', 90, 'Abzurdah cuenta la historia de Cielo, una adolescente de clase media acomodada que conoce por internet a un chico nueve años mayor que ella, con quien inicia una relación y se enamora perdidamente. Sumergida en un ambiente superficial, sin amigas y en un mundo adulto que poco comprende del universo adolescente, la relación se vuelve una obsesión para Cielo, una narradora locuaz, incisiva y vertiginosa, que nos conduce por una historia de amor no correspondido donde la opción de dejar de comer se vuelve la ilusión de una vida perfecta.', 'espaniol'),
(19, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/p9rjqQM9q5tIKs49b0qVIBIUA2e.jpg', 'https://image.tmdb.org/t/p/original/blD4vACWJiW1fpN0j3nQs5B0nSR.jpg', 'https://openload.co/embed/UlEJ-1mW6go/18-La_abeja_Maya.la_pel%C3%ADcula.lat_hd1080.mp4', 'https://streamango.com/embed/afdoqfpcskcptkmr/18-La_abeja_Maya_la_pel_cula_lat_hd1080_mp4', '', 'https://openload.co/f/UlEJ-1mW6go/18-La_abeja_Maya.la_pel%C3%ADcula.lat_hd1080.mp4', 'yNXfOOL8824', 'la abeja maya', 'la abeja maya', '1975', 25, 'Maya the Bee is an anime television series produced by Zuiyo Enterprise in Japan. The series consisted of 52 episodes and was originally telecast across Japan from April 1975 to April 1976 on the TV Asahi network. Based on the classic children\'s book Maya the Bee by Waldemar Bonsels, the anime series has become extremely popular in Europe and has been rebroadcast in countries and languages all around the world since its premiere.', 'espaniol'),
(20, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/p6LiANVEWUQ3gCu7l7RxesPgkbb.jpg', 'https://image.tmdb.org/t/p/original/3gu944cvSn9fY4ON9z7m26v3Rxh.jpg', 'https://openload.co/embed/HhBFg9X9ciU/19-Agua_para_elefantes.lat_hd1080.mp4', 'https://streamango.com/embed/aktmncrtrsplbrnk/19-Agua_para_elefantes_lat_hd1080_mp4', '', 'https://openload.co/f/HhBFg9X9ciU/19-Agua_para_elefantes.lat_hd1080.mp4', 'K60-TLN13H4', 'Agua para elefantes', 'Water for Elephants', '2011', 120, 'En la época de la Gran Depresión, un joven estudiante de veterinaria se ve obligado a dejar sus estudios tras la muerte de sus padres. Empieza entonces a trabajar para el circo de los hermanos Benzini como veterinario y encargado de los animales. El joven se enamora de Marlena, una amazona que está casada con August, el dueño del circo, un hombre tan carismático como retorcido... Adaptación del aclamado best-seller homónimo de Sara Gruen', 'espaniol'),
(21, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/th4zcMSPbdhDMdCglCcZIjDkWLd.jpg', 'https://image.tmdb.org/t/p/original/z4GV6fSihcbMX5ODeWY41Micszm.jpg', 'https://openload.co/embed/xrRG2xtOHLU/21-Pinocchio_%28Pinocho%29_lat.mp4', 'https://streamango.com/embed/knkfflmtftbelesr/21-Pinocchio_Pinocho_lat_mp4', '', 'https://openload.co/f/xrRG2xtOHLU/21-Pinocchio_%28Pinocho%29_lat.mp4', 'notiene', 'Pinocho', 'Pinocchio', '1940', 88, 'Un anciano llamado Geppetto fabrica una marioneta de madera a la que llama Pinocho, con la esperanza de que se convierta en un niño de verdad. El Hada Azul hace realidad su deseo y da vida a Pinocho, pero conserva su cuerpo de madera. Pepito Grillo, la conciencia de Pinocho, tendrá que aconsejarlo para que se aleje de las situaciones difíciles o peligrosas hasta conseguir que el muñeco se convierta en un niño de carne y hueso.', 'espaniol'),
(22, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/e8pmWcArrz6IVDrBNp7yEAtKE3k.jpg', 'https://image.tmdb.org/t/p/original/3zQzN87U8pJgLDvVRZ6zj05jEYw.jpg', 'https://openload.co/embed/mulb-WTjvCs/22-Estado_de_sitio.1998_lat_hd1080.mp4', 'https://openload.co/embed/mulb-WTjvCs/22-Estado_de_sitio.1998_lat_hd1080.mp4', '', 'https://openload.co/f/mulb-WTjvCs/22-Estado_de_sitio.1998_lat_hd1080.mp4', 'Btn9ISwK--M', 'Estado de sitio', 'The Siege', '1998', 116, 'Tras el secuestro de un líder religioso musulmán por tropas norteamericanas, Nueva York se convierte en el objetivo de una serie de atentados terroristas. Anthony Hubbard, el director del equipo antiterrorista del FBI, y la agente de la CIA Elise Kraft serán los encargados de acabar con la organización criminal. Mientras tanto, el gobierno decide declarar la ley marcial en la Gran Manzana.', 'espaniol'),
(23, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/wwEi8IMGfSXSQVXNX6cKy5KUtvC.jpg', 'https://image.tmdb.org/t/p/original/baPvHD25royEtail74wW3r4Mzxc.jpg', 'https://openload.co/embed/oTAF8MC3CVY/23-Sin_Hijos_%5BBrRip_720p%5D_lat.mkv.mp4', 'https://streamango.com/embed/ecnpqqdtsdbttpad/23-Sin_Hijos_BrRip_720p_lat_mkv_mp4', '', 'https://openload.co/f/oTAF8MC3CVY/23-Sin_Hijos_%5BBrRip_720p%5D_lat.mkv.mp4', 'CTE-kk4gJMo', 'Sin hijos', 'Sin hijos', '2015', 100, 'Gabriel está separado hace cuatro años. Desde entonces Sofía, su hija de ocho años, es el centro de su vida. Negado de plano a intentar una nueva relación amorosa, Gabriel vuelca toda su energía en su hija y en su trabajo. El idilio padre-hija se ve conmocionado por la aparición de Vicky, amor platónico de la adolescencia, transformada ahora en una mujer hermosa, independiente y desenfadada. Ante la inminencia del romance, ella pone una condición: no se involucraría por nada del mundo con un hombre con hijos. A partir de ese momento, su vida se transforma en un tormento de maniobras y ocultamientos: ante cada cita con Vicky.', 'espaniol'),
(24, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/7Sq7PuBIDdhaeSEpLDgbikOQ8BB.jpg', 'https://image.tmdb.org/t/p/original/3LkvUFhsZGNhShg1oNsxvScvgQr.jpg', 'https://openload.co/embed/SnYZPPUaAnI/24-Equipo_mortal.1998_lat_hd720.mp4', 'https://streamango.com/embed/cnaleecppqnnndlk/24-Equipo_mortal_1998_lat_hd720_mp4', '', 'https://openload.co/f/SnYZPPUaAnI/24-Equipo_mortal.1998_lat_hd720.mp4', '9F1NnHxGKUY', 'Equipo mortal', 'The Big Hit', '1998', 91, 'Mel, un buscado asesino a sueldo, planea un secuestro rápido con cuatro socios, Cisco, Crunch, Wince y Gump, y así conseguir dinero fácil. Sin embargo, la cosa se complica y el tiro les sale por la culata, y lo que parecía un secuestro fácil se complica enormemente, ya que la chica secuestrada, Keiko, es la hija de un importante hombre de negocios, no es otra que la ahijada de Paris el jefe de Mel. Cuando uno de sus socios le traiciona, Mel se convierte en el principal objetivo de Paris. Mientras tanto, y como si todo esto no fuera suficiente, la amante de Mel, Chantel, se fuga con su dinero al mismo tiempo que los padres de su prometida Pam, reacios a la boda, llegan de visita. Los problemas laborales y caseros de Mel colisionan entre sí cuando este se encuentra a la vez esquivando a los sicarios de Paris e intentando causar una buena impresión a sus futuros suegros, comprobando cómo la lujosa vida que se había ido construyendo se le desmorona como un castillo de naipes.', 'espaniol'),
(25, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/bCv4FiSPV9HyGi8xRmdKvRZXPX6.jpg', 'https://image.tmdb.org/t/p/original/mgGQbf8trfPw7VVI2WmD8svPO7Y.jpg', 'https://openload.co/embed/8JEwN5eznQk/25-La_casa_de_los_muertos_%28Demonic%29_1080p_latino.mkv.mp4', 'https://streamango.com/embed/msbtfflfspfassbq/25-La_casa_de_los_muertos_Demonic_1080p_latino_mkv_mp4', '', 'https://openload.co/f/8JEwN5eznQk/25-La_casa_de_los_muertos_%28Demonic%29_1080p_latino.mkv.mp4', 'QERakFZvhFU', 'Demonic', 'Demonic', '2015', 83, 'La película se centra en un terrible, crimen de cómo cinco jovenes estudiantes son brutalmente asesinados en el interior de una abandonada casa. El detective Mark Lewis y la psicóloga del departamento Elizabeth Klein se centran en John Ascot, el principal sospechoso, quien está siendo interrogado en la estación de policía. Durante el interrogatorio explicará lo que ha sucedido con sus amigos, quienes eran cazadores de fantasmas amateurs que estaban realizando una investigación en el interior de la casa. La película nos mostrará imágenes del material encontrado, cintas del interrogatorio así como película clásica.', 'espaniol'),
(26, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/95awqTWnU41lX2k2GnPKAnFOSy1.jpg', 'https://image.tmdb.org/t/p/original/bA7oh6mDeROcWgaBt5AxOCmavTr.jpg', 'https://openload.co/embed/-XM8JTzg_R0/26-Babel.lat_hd1080.mp4', 'https://streamango.com/embed/nnlslpdmbkkrtntl/26-Babel_lat_hd1080_mp4', '', 'https://openload.co/f/-XM8JTzg_R0/26-Babel.lat_hd1080.mp4', 'i3maaU-Pgf0', 'Babel', 'Babel', '2006', 143, 'Ambientada en Marruecos, Túnez, México y Japón. Armados con un Winchester, dos muchachos marroquíes salen en busca del rebaño de cabras de la familia. En medio del silencio del desierto, deciden probar el rifle, sin conocer el alcance de la bala. En un instante, entran en colisión las vidas de cuatro grupos de personas que viven en tres continentes distintos.', 'espaniol'),
(27, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/coR3rhXIHJQF6DDrtA9EUeqeo0o.jpg', 'https://image.tmdb.org/t/p/original/ni3DtIc0rm7OgxenOPKEktUjgsU.jpg', 'https://openload.co/embed/nAcChApVWKI/27-Caos.2005.lat_hd1080.mp4', 'https://streamango.com/embed/ppsndmmlcbdcqtrp/27-Caos_2005_lat_hd1080_mp4', '', 'https://openload.co/f/nAcChApVWKI/27-Caos.2005.lat_hd1080.mp4', 'JBMH0SCvOIU', 'Caos', 'Chaos', '2005', 106, 'La historia empieza en una tranquila mañana de un día laborable cuando un banco abre sus puertas. Antes de que nadie se dé cuenta de lo que pasa, un grupo de cinco ladrones, encapuchados y vestidos de negro, irrumpen en el banco y toman a todos como rehenes. En breve la policía llega y rodean a los atracadores. El cabecilla de la banda Lorenz (Wesley Snipes) pide un negociador. Exige que sea el detective Quentin Conners (Jason Statham). Conners vuelve a su puesto tras su reciente expulsión causada por un incidente fortuito que terminó con la muerte de un rehén, y la expulsión definitiva del cuerpo de su entonces compañero el detective York.', 'espaniol'),
(28, 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/kmC85ZKOBDyxevm6egBN6Rp0bym.jpg', 'https://image.tmdb.org/t/p/original/zGP9UgLsMUZUlZwR2s6wUk0Qgp5.jpg', 'https://openload.co/embed/UxiY8VMqpvE/4La-sombra-del-reino2007-lat-hd1080.mp4', 'https://streamango.com/embed/etbldbbmnfofrmcd/4La-sombra-del-reino2007-lat-hd1080_mp4', '', 'https://openload.co/f/UxiY8VMqpvE/4La-sombra-del-reino2007-lat-hd1080.mp4', 'DqpT9erQ3Js', 'La sombra del reino', 'The Kingdom', '2007', 110, 'A Ronald Fleury (Jamie Foxx), un inteligente agente especial del Gobierno, le acaban de encargar una importante misión: organizar un equipo de élite (Jennifer Garner, Chris Cooper y Jason Baterman) que deberá desplazarse a Riad para capturar al cerebro de un atentado terrorista que le costó la vida a varios compatriotas. El equipo dispondrá de una semana para infiltrarse y destruir una célula terrorista decidida a emprender la “yihad” (guerra santa) contra Occidente. Fleury encuentra un inesperado aliado: un capitán de la policía local (Ashraf Bahroum) que lo instruye sobre los entresijos de la política saudí y le ayuda a investigar la auténtica razón del atentado, gracias a lo cual acabarán encontrando a los terroristas.', 'espaniol'),
(91, 'https://image.tmdb.org/t/p/original/8eqEw3NGdqAfGtHyCTiuoMb4RrM.jpg', 'https://image.tmdb.org/t/p/original/aJh5rFH6jQRqvZyd0HR8BMiHhRn.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', 'U4KDgK3Ae-U', 'Esto es la guerra', 'This Means War', '2012-02-14', 93, 'Dos agentes de la CIA, grandes amigos desde la infancia, se enamoran de la misma mujer. Su amistad desaparece y se enzarzan en una batalla de proporciones épicas que pondrá en jaque a la ciudad de Nueva York.', 'espaniol'),
(92, 'https://image.tmdb.org/t/p/original/uIv460nXqX8T5fjwemgFOPs6DGH.jpg', 'https://image.tmdb.org/t/p/original/rPHoGfjhLV0rdRK8zJRXfWP4Zxz.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', 'RQaqitCcfno', 'Trench 11', 'Trench 11', '2017-10-06', 90, 'Durante los últimos días de la Segunda Guerra Mundial, un soldado lidera una misión para adentrarse en una oculta base alemana a más de 30 metros bajo las trincheras enemigas para detener una letal arma biólogica, encontrándose en una lucha por sobrevivir bajo la tierra contra hordas de infectados de esta letal infección.', 'espaniol'),
(90, 'https://image.tmdb.org/t/p/original/tCBxnZwLiY1BOKw3tH6AxHZdqPh.jpg', 'https://image.tmdb.org/t/p/original/yCOLqh5MOGyYdo58Ap0aWvKop9h.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', '4NZsWou9Txo', 'Johnny English: De nuevo en acción', 'Johnny English Strikes Again', '2018-09-14', 87, 'Tercera entrega de la saga cómica Johnny English, con Rowan Atkison de regreso en el papel del muy querido agente secreto. Esta nueva aventura empieza cuando un ciberataque revela la identidad de todos los agentes de incógnito de Gran Bretaña, por lo que Johnny English es la última esperanza para los servicios secretos. Al verse sacado de su plácida vida de jubilado, English se lanza sin contemplaciones a la busca y captura del hacker que lo planeó todo. Nuestro héroe, un hombre de pocas habilidades y métodos analógicos, deberá superar los retos que plantea la tecnología moderna para que su misión se convierta en un éxito.', 'espaniol'),
(89, 'https://image.tmdb.org/t/p/original/9qYKrgzHbYtKej9Gvd7NxJvGiC2.jpg', 'https://image.tmdb.org/t/p/original/7oZR0oaFOPrzGkg3ZntEKwMCLTe.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', '', 'Kin', 'Kin', '2018-08-29', 102, 'Perseguidos por un criminal vengativo (James Franco) y una banda de soldados sobrenaturales,? un exconvicto recién liberado (Jack Reynor) y su hermano adolescente adoptado (Myles Truitt) se ven obligados a escapar con un arma de origen misterioso que es su única protección.', 'espaniol'),
(88, 'https://image.tmdb.org/t/p/original/2L8ehd95eSW9x7KINYtZmRkAlrZ.jpg', 'https://image.tmdb.org/t/p/original/wWoCid7YUxiLhq3ZZT6CtFEDPXw.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', '', 'Milla 22', 'Mile 22', '2018-08-16', 94, 'James Silva (Mark Wahlberg) es un experimentado agente de la CIA, enviado a un país sospechoso de actividad nuclear ilegal. Cuando el funcionario local, LI (Iko Uwais), llega a la embajada de los EE. UU. buscando intercambiar información sobre material radioactivo robado a cambio de su paso seguro a los EE. UU., Silva tiene la tarea de transportarlo desde el centro de una ciudad, en una peligrosa misión, hasta una pista de aterrizaje a 22 millas de distancia.', 'espaniol'),
(86, 'https://image.tmdb.org/t/p/original/vDPZHQRpvmicYCKgIITyoKgSl4D.jpg', 'https://image.tmdb.org/t/p/original/fXFQnOSbybaU9h2kJ3jtRUU4OpA.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', '', 'Megalodón', 'Megalodon', '2018-08-13', 86, 'Un buque militar en búsqueda de un sumergible no identificado se encuentra cara a cara con un tiburón gigante, obligado a usar solo lo que tiene a bordo para defenderse de la monstruosa bestia.', 'espaniol'),
(87, 'https://image.tmdb.org/t/p/original/7WsyChQLEftFiDOVTGkv3hFpyyt.jpg', 'https://image.tmdb.org/t/p/original/lmZFxXgJE3vgrciwuDib0N8CfQo.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', '_cD4w9J-6IY', 'Vengadores: Infinity War', 'Avengers: Infinity War', '2018-04-25', 156, 'El todopoderoso Thanos ha despertado con la promesa de arrasar con todo a su paso, portando el Guantelete del Infinito, que le confiere un poder incalculable. Los únicos capaces de pararle los pies son los Vengadores y el resto de superhéroes de la galaxia, que deberán estar dispuestos a sacrificarlo todo por un bien mayor. Capitán América e Ironman deberán limar sus diferencias, Black Panther apoyará con sus tropas desde Wakanda, Thor y los Guardianes de la Galaxia e incluso Spider-Man se unirán antes de que los planes de devastación y ruina pongan fin al universo. ¿Serán capaces de frenar el avance del titán del caos?', 'espaniol'),
(85, 'https://image.tmdb.org/t/p/original/x1txcDXkcM65gl7w20PwYSxAYah.jpg', 'https://image.tmdb.org/t/p/original/mabuNsGJgRuCTuGqjFkWe1xdu19.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', 'gD5PEHX3jog', 'Los Increíbles 2', 'Incredibles 2', '2018-06-14', 118, 'Helen tiene que liderar una campaña para que los superhéroes regresen, mientras Bob vive su vida \"normal\" con Violet, Dash y el bebé Jack-Jack —cuyos superpoderes descubriremos—. Su misión se va a pique cuando aparece un nuevo villano con un brillante plan que lo amenaza todo. Pero los Parr no se amedrentarán y menos teniendo a Frozone de su parte.', 'espaniol'),
(61, 'https://image.tmdb.org/t/p/original/inVq3FRqcYIRl2la8iZikYYxFNR.jpg', 'https://image.tmdb.org/t/p/original/n1y094tVDFATSzkTnFxoGZ1qNsG.jpg', '', '', '', '', '', 'Deadpool', 'Deadpool', '2016-02-09', 108, 'Basado en el anti-héroe menos convencional de la Marvel, Deadpool narra el origen de un ex-operativo de la fuerzas especiales llamado Wade Wilson, reconvertido a mercenario, y que tras ser sometido a un cruel experimento adquiere poderes de curación rápida, adoptando Wade entonces el alter ego de Deadpool. Armado con sus nuevas habilidades y un oscuro y retorcido sentido del humor, Deadpool intentará dar caza al hombre que casi destruye su vida.', 'espaniol'),
(62, 'https://image.tmdb.org/t/p/original/7WsyChQLEftFiDOVTGkv3hFpyyt.jpg', 'https://image.tmdb.org/t/p/original/lmZFxXgJE3vgrciwuDib0N8CfQo.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', '_cD4w9J-6IY', 'Vengadores: Infinity War', 'Avengers: Infinity War', '2018', 156, 'El todopoderoso Thanos ha despertado con la promesa de arrasar con todo a su paso, portando el Guantelete del Infinito, que le confiere un poder incalculable. Los únicos capaces de pararle los pies son los Vengadores y el resto de superhéroes de la galaxia, que deberán estar dispuestos a sacrificarlo todo por un bien mayor. Capitán América e Ironman deberán limar sus diferencias, Black Panther apoyará con sus tropas desde Wakanda, Thor y los Guardianes de la Galaxia e incluso Spider-Man se unirán antes de que los planes de devastación y ruina pongan fin al universo. ¿Serán capaces de frenar el avance del titán del caos?', 'espaniol'),
(63, 'https://image.tmdb.org/t/p/original/5LYSsOPzuP13201qSzMjNxi8FxN.jpg', 'https://image.tmdb.org/t/p/original/oMKFQmoVgB69fyXfSMu0lGlHJP2.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', 'OX3YMvxa0uE', 'El Rascacielos', 'Skyscraper', '2018-07-11', 103, 'Will Ford es un antiguo líder del Equipo de Rescate de Rehenes del FBI y veterano de los marines que ahora trabaja como asesor de seguridad de los rascacielos. En una misión en China, Ford se encontrará con que el edificio más alto y seguro del mundo de repente se incendia. Mientras encuentra a los responsables del incendio, tendrá que intentar salvar a su familia atrapada dentro del rascacielos.', 'espaniol'),
(67, 'https://image.tmdb.org/t/p/original/v5HlmJK9bdeHxN2QhaFP1ivjX3U.jpg', 'https://image.tmdb.org/t/p/original/mo5EJsExrQCroqPDwUwp6jeq0xS.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', 'zi_qF6gaLqo', 'Pacific Rim: Insurrección', 'Pacific Rim: Uprising', '2018-03-21', 120, 'Un futuro cercano. Después de la primera invasión que sufrió la humanidad, la lucha aun no ha terminado. El planeta vuelve a ser asediado por los Kaiju, una raza de alienígenas colosales que emergen desde un portal interdimensional, con el objetivo de destruir a la raza humana.  Ante esta nueva amenaza para la cual los humanos no están preparados, los Jaegers, robots gigantes de guerra pilotados por dos personas para sobrellevar la inmensa carga neural que conlleva manipularlos, ya no están a la altura de lo que se les viene encima. Será entonces cuando los supervivientes de la primera invasión, además de nuevos personajes como el hijo de Pentecost (John Boyega), tendrán que idear la manera de sorprender al enorme enemigo, apostando por nuevas estrategias defensivas y de ataque. Con la Tierra en ruinas e intentando reconstruirse, esta nueva batalla puede ser decisiva para el futuro.', 'espaniol'),
(68, 'https://image.tmdb.org/t/p/original/jjPJ4s3DWZZvI4vw8Xfi4Vqa1Q8.jpg', 'https://image.tmdb.org/t/p/original/9ywA15OAiwjSTvg3cBs9B7kOCBF.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', 'AxQaNa2mYZA', 'Cincuenta sombras liberadas', 'Fifty Shades Freed', '2018-01-17', 105, 'Creyendo que han dejado atrás las sombras del pasado, los recién casados Christian y Anastasia disfrutan de su relación y de su vida llena de lujos. Pero justo cuando Ana empieza a relajarse, aparecen nuevas amenazas que ponen en riesgo su felicidad. Adaptación de la última novela de la saga \"50 sombras de Grey\".', 'espaniol'),
(66, 'https://image.tmdb.org/t/p/original/AkJQpZp9WoNdj7pLYSj1L0RcMMN.jpg', 'https://image.tmdb.org/t/p/original/a9fRqsl6P27qxbDSb4pBXNv9Fwl.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', 'GN_NWxwiy_0', 'Misión imposible 6: Fallout', 'Mission: Impossible - Fallout', '2018-07-25', 147, 'Un traficante de armas y un grupo de terroristas pretenden realizar un triple ataque nuclear con tres artefactos de plutonio, los cuales se pierden. Ethan Hunt y su equipo tendrán que recuperarlos antes de que caigan en las manos equivocadas.', 'espaniol'),
(69, 'https://image.tmdb.org/t/p/original/nAU74GmpUk7t5iklEp3bufwDq4n.jpg', 'https://image.tmdb.org/t/p/original/roYyPiQDQKmIKUEhO912693tSja.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', 'zEN1EfASWTI', 'Un lugar tranquilo', 'A Quiet Place', '2018-04-03', 95, 'Evelyn y Lee Abbott son una pareja con tres hijos que vive una granja aislada de toda civilización al norte de Nueva York. Esta familia ha sobrevivido durante meses en un mundo invadido y amenazado por mortales criaturas extraterrestres que se guían por el sonido para cazar. En este contexto en el que una palabra puede significar la muerte, la familia Abbott vive silenciosamente, andan descalzos y se comunican por medio del lenguaje de señas.', 'espaniol'),
(70, 'https://image.tmdb.org/t/p/original/5YUYg5q7QfC4IoNwNUtiwdiYKPr.jpg', 'https://image.tmdb.org/t/p/original/rqMEeajyzSF4PpJtdCB816Iz8Vr.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', 'NuJzAwODTKE', 'Con amor, Simon', 'Love, Simon', '2018-02-16', 110, 'Simon Spier es un joven 16 años que no se atreve a revelar su homosexualidad, ya que prefiere esperar al musical que se celebra en secundaria. Pero un día, uno de sus correos electrónicos llega a manos equivocadas y las cosas se complican extraordinariamente.', 'espaniol'),
(71, 'https://image.tmdb.org/t/p/original/MGADip4thVSErP34FAAfzFBTZ5.jpg', 'https://image.tmdb.org/t/p/original/wrqUiMXttHE4UBFMhLHlN601MZh.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', '82VRA1EjFqg', 'Proyecto Rampage', 'Rampage', '2018-04-12', 107, 'El primatólogo Davis Okoye, un hombre que mantiene las distancias con otras personas, tiene un sólido vínculo con George, el extraordinariamente inteligente gorila de espalda plateada al que ha estado cuidando desde que nació. Pero cuando un experimento genético sale mal, este apacible simio se convierte en una enorme y embravecida criatura. Para empeorar más las cosas, pronto se descubre que existen otros animales con la misma alteración. Cuando estos depredadores alfa recién creados arrasan Norteamérica destruyendo todo lo que interpone en su camino, Okoye se une a un ingeniero genético sin prestigio para conseguir un antídoto y se abre paso en un cambiante campo de batalla, no solo para frenar una catástrofe mundial sino para salvar a la aterradora criatura que una vez fue su amigo. Adaptación al cine del videojuego \"Rampage\", en el que simios y monstruos de todo tipo atacan y destruyen ciudades.', 'espaniol'),
(72, 'https://image.tmdb.org/t/p/original/vdxLpPsZkPZdFrREp7eSeSzcimj.jpg', 'https://image.tmdb.org/t/p/original/qqdVRlVCvVWdmSBYrEHwQuC3GBd.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', '-n_QL9FyUr4', 'Los Extraños: Cacería Nocturna', 'The Strangers: Prey at Night', '2018-03-07', 85, 'Una familia que viaje por carretera llega a un parque de caravanas donde esperan reunirse con unos parientes y lo encuentran misteriosamente desierto. En plena noche, tres psicópatas enmascarados llevarán a la familia al límite en una lucha desesperada por sobrevivir.', 'espaniol'),
(73, 'https://image.tmdb.org/t/p/original/kdkNaQYZ7dhM80LsnAGKpH8ca2g.jpg', 'https://image.tmdb.org/t/p/original/jrZTNZmcjUVh7DPy6txp93Aczpa.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', '0gL_Xo-XKms', 'Verdad o reto', 'Truth or Dare', '2018-04-12', 100, 'Un grupo de amigos comienza a jugar a \"Verdad o atrevimiento\", pero rápidamente descubren que algo que empezó de forma inocente se ha vuelto peligroso. Si no siguen las normas o se niegan a jugar, serán poseídos por un demonio que les obligará a matar, a sí mismos o a los demás.', 'espaniol'),
(74, 'https://image.tmdb.org/t/p/original/4oD6VEccFkorEBTEDXtpLAaz0Rl.jpg', 'https://image.tmdb.org/t/p/original/96B1qMN9RxrAFu6uikwFhQ6N6J9.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', 'lFmNk0nd5es', 'Han Solo: Una historia de Star Wars', 'Solo: A Star Wars Story', '2018-05-15', 143, 'Precuela de la saga Star Wars, en la que se conocerán los primeros pasos que dio el personaje de Han Solo, desde joven hasta convertirse en el antihéroe que vimos en \"Una nueva esperanza\", antes de que se encontrase con Luke y Obi-Wan en la cantina de Mos Eisley.', 'espaniol'),
(75, 'https://image.tmdb.org/t/p/original/qauHzSQJdo9VYX4NKn9PdWnvXOV.jpg', 'https://image.tmdb.org/t/p/original/1c9UOyJP0FnhhdNoEvhI3ODcE3i.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', 'cxsvbHklPqY', 'Hombre al agua', 'Overboard', '2018-05-03', 112, 'Un mimado y rico dueño de un yate, cae por la borda y pierde la memoria, por lo que se convierte en el objetivo de la venganza de su empleada maltratada, una madre soltera. Remake de la comedia de 1987 del mismo nombre.', 'espaniol'),
(76, 'https://image.tmdb.org/t/p/original/pU1ULUq8D3iRxl1fdX2lZIzdHuI.jpg', 'https://image.tmdb.org/t/p/original/5a7lMDn3nAj2ByO0X1fg6BhUphR.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', 'J0ZKannF6l4', 'Ready Player One', 'Ready Player One', '2018-03-28', 145, 'Año 2044. Wade Watts es un adolescente al que le gusta evadirse del cada vez más sombrío mundo real a través de una popular utopía virtual a escala global llamada Oasis, hasta que su excéntrico y multimillonario creador muere. Antes de morir, ofrece su fortuna como premio a una elaborada búsqueda del tesoro a través de los rincones más inhóspitos de su creación. Será el punto de partida para que Wade se enfrente a jugadores, poderosos enemigos corporativos y otros competidores despiadados dispuestos a hacer lo que sea, tanto dentro de Oasis como del mundo real, para hacerse con el premio.', 'espaniol'),
(77, 'https://image.tmdb.org/t/p/original/to0spRl1CMDvyUbOnbb4fTk3VAd.jpg', 'https://image.tmdb.org/t/p/original/3P52oz9HPQWxcwHOwxtyrVV1LKi.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', '5YWn3n9ifHE', 'Deadpool 2', 'Deadpool 2', '2018-05-15', 120, 'Wade Wilson (Ryan Reynolds), mejor conocido como Deadpool, su nombre de batalla e identidad antiheroica, está de regreso con Deadpool 2 y en esta ocasión su misión será salvar a un chico llamado Russell (Julian Dennison) de las manos de un poderoso rival llamado Cable (Josh Brolin). En aras de dar cumplimiento a su tarea el antihéroe formará un grupo al cual pondrá el nombre de X-Force. Secuela de la exitosa película (recaudó más de 780 millones de dólares en todo el mundo) parodia de los superhéroes mutantes del 2016, también protagonizada por Reynolds.', 'espaniol'),
(78, 'https://image.tmdb.org/t/p/original/c9XxwwhPHdaImA2f1WEfEsbhaFB.jpg', 'https://image.tmdb.org/t/p/original/3s9O5af2xWKWR5JzP2iJZpZeQQg.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', '8FUCULvrpRY', 'Jurassic World: El reino caído', 'Jurassic World: Fallen Kingdom', '2018-06-06', 128, 'Tras cuatro años de abandono del complejo turístico Jurassic World, la isla Nublar solo está habitada por los dinosaurios supervivientes. Pero, cuando un volcán entra en erupción, Owen (Chris Pratt) y Claire (Bryce Dallas Howard) vuelven allí para rescatar a los dinosaurios de la extinción: el primero va en busca de Blue, el raptor que crio, mientras que la segunda quiere salvar a todos los ejemplares de las demás especies. Sin embargo, en las antiguas instalaciones del parque no estarán solos, ya que en ellas descubren una conspiración que pretende llevar al planeta de nuevo a la era prehistórica.', 'espaniol'),
(79, 'https://image.tmdb.org/t/p/original/dscvG9AWLOzxedHcXN7QguJRhsP.jpg', 'https://image.tmdb.org/t/p/original/pS9Aub8MPyQbENblGD8mHeaqMuv.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', 'MJNR58zaStE', 'Hereditary', 'Hereditary', '2018-06-04', 126, 'Cosas extrañas comienzan a suceder en casa de los Graham tras la muerte de la abuela y matriarca, que deja en herencia su casa a su hija Annie. Annie Graham, una galerista casada y con dos hijos, no tuvo una infancia demasiado feliz junto a su madre, y cree que la muerte de ésta puede hacer que pase página. Pero todo se complica cuando su hija menor comienza a ver figuras fantasmales, que también empiezan a aparecer ante su hermano.', 'espaniol'),
(80, 'https://image.tmdb.org/t/p/original/msqWSQkU403cQKjQHnWLnugv7EY.jpg', 'https://image.tmdb.org/t/p/original/tnwMCH4yLBY4qpe6Nr4n66u4U3f.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', 'QW-0hZZr8qA', 'Sicario: El Día Del Soldado', 'Sicario: Day of the Soldado', '2018-06-27', 122, 'La guerra contra los cárteles de la droga se ha intensificado en la frontera entre EE.UU. y México a medida que éstos se han metido en el negocio de tráfico de personas, introduciendo en suelo americano a terroristas islámicos. Para hacer frente a esta nueva guerra sucia, el agente federal Matt Graver (Josh Brolin) planea una idea para que los carteles se enfrenten entre ellos. Para ello volverá a reclutar para la peligrosa misión al volátil mercenario Alejandro Gillick (Benicio del Toro).', 'espaniol'),
(81, 'https://image.tmdb.org/t/p/original/rv1AWImgx386ULjcf62VYaW8zSt.jpg', 'https://image.tmdb.org/t/p/original/6P3c80EOm7BodndGBUAJHHsHKrp.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', 'sc4XCKre4mo', 'Ant-Man y la Avispa', 'Ant-Man and the Wasp', '2018-07-04', 118, 'Tras lo sucedido en Capitán América: Civil War, Scott Lang (Paul Rudd), también conocido como Ant-Man, debe lidiar a la par con las consecuencias de sus acciones como superhéroe y como padre. Mientras él intenta equilibrar su vida familiar y sus responsabilidades como Ant-Man, Hope Van Dyne (Evangeline Lilly) y Hank Pym (Michael Douglas) necesitarán su ayuda para realizar una misión muy urgente. Scott tendrá, una vez más, que ponerse su traje y aprender a luchar junto a The Wasp para formar un equipo que logre destapar secretos de su pasado.', 'espaniol');
INSERT INTO `datos` (`iddatos`, `imagen`, `imagenho`, `video`, `video2`, `video3`, `descarga`, `trailer`, `titulo`, `titulo2`, `anio`, `duracion`, `sinopsis`, `idioma`) VALUES
(82, 'https://image.tmdb.org/t/p/original/gjAFM4xhA5vyLxxKMz38ujlUfDL.jpg', 'https://image.tmdb.org/t/p/original/m03jul0YdVEOFXEQVUv6pOVQYGL.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', '9c44MV4vw9c', 'Hotel Transylvania 3', 'Hotel Transylvania 3: Summer Vacation', '2018-06-30', 90, 'Nuestra familia de monstruos favorita se embarca en un crucero de lujo para que por fin Drac pueda tomarse un descanso de proveer de vacaciones al resto en el hotel. Es una navegación tranquila para la pandilla de Drac, ya que los monstruos se entregan a toda la diversión a bordo que ofrece el crucero, desde el voleibol de monstruos y las excursiones exóticas, a ponerse al día con sus bronceados de luna. Pero las vacaciones de ensueño se convierten en una pesadilla cuando Mavis se da cuenta de que Drac se ha enamorado de la misteriosa capitana de la nave, Ericka, quien esconde un peligroso secreto que podría destruir a todos los monstruos.', 'espaniol'),
(83, 'https://image.tmdb.org/t/p/original/nDZFsjClO6wfKLxd9CEDT4rVv6R.jpg', 'https://image.tmdb.org/t/p/original/z6KLDE72SxE1A8JcJTmmnWArOvR.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', 'IibsmbB6PXQ', 'The Equalizer 2', 'The Equalizer 2', '2018-07-19', 120, 'Robert McCall (Denzel Washington) garantiza una justicia inquebrantable para los explotados y oprimidos, pero ¿cuánto de lejos llegará cuando se trate de alguien a quien ama? Secuela de The Equalizer (El protector) (2014).', 'espaniol'),
(84, 'https://image.tmdb.org/t/p/original/xR5w0he6czZkcAz459a4iPBqXGe.jpg', 'https://image.tmdb.org/t/p/original/uDt8bQ4lGVlabEx5Gl2cPzvy6qz.jpg', 'https://www.youtube.com/embed/9CO6Ta3xfUA', 'https://www.youtube.com/embed/sWtQqhYcK1Q', 'https://www.youtube.com/embed/VOew9nnVbwI', '', 'v7smIJjnA_k', 'Christopher Robin: Un reencuentro Inolvidable', 'Christopher Robin', '2018-08-02', 100, 'En esta nueva aventura de acción real, el niño que se embarcó en innumerables aventuras en el bosque de los Cien Acres con su banda de animales de peluche, ha crecido y…  ha perdido el rumbo. Ahora les toca a sus amigos de la infancia aventurarse en nuestro mundo y ayudar a Christopher Robin a recordar al niño cariñoso y juguetón que aún tiene dentro.', 'espaniol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion`
--

CREATE TABLE `relacion` (
  `idrelacion` int(11) NOT NULL,
  `iddatos` int(11) DEFAULT NULL,
  `idcategorias` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `relacion`
--

INSERT INTO `relacion` (`idrelacion`, `iddatos`, `idcategorias`) VALUES
(1, 1, 5),
(2, 1, 22),
(3, 1, 27),
(4, 2, 1),
(5, 2, 4),
(6, 2, 5),
(7, 2, 27),
(8, 3, 2),
(9, 3, 4),
(10, 3, 14),
(11, 5, 1),
(12, 5, 8),
(13, 5, 12),
(14, 5, 27),
(15, 6, 12),
(16, 6, 23),
(17, 7, 1),
(18, 7, 5),
(19, 8, 7),
(20, 8, 29),
(21, 9, 12),
(22, 9, 27),
(23, 10, 1),
(24, 10, 4),
(25, 10, 5),
(26, 11, 1),
(27, 11, 4),
(28, 11, 27),
(29, 12, 2),
(30, 12, 4),
(31, 12, 22),
(32, 13, 28),
(33, 13, 29),
(34, 14, 22),
(35, 14, 28),
(36, 14, 29),
(37, 15, 22),
(38, 15, 28),
(39, 15, 29),
(40, 16, 22),
(41, 16, 28),
(42, 16, 29),
(43, 17, 22),
(44, 17, 28),
(45, 17, 29),
(46, 18, 12),
(47, 19, 2),
(48, 19, 4),
(49, 20, 12),
(50, 20, 26),
(51, 21, 2),
(52, 21, 14),
(53, 22, 1),
(54, 22, 8),
(55, 22, 12),
(56, 22, 27),
(57, 23, 7),
(58, 23, 26),
(59, 24, 1),
(60, 24, 4),
(61, 24, 7),
(62, 24, 27),
(63, 25, 27),
(64, 25, 29),
(65, 26, 12),
(66, 27, 1),
(67, 27, 8),
(68, 27, 12),
(69, 28, 1),
(70, 28, 12),
(71, 28, 27),
(72, 29, 12),
(73, 29, 26),
(74, 29, 27),
(75, 37, 1),
(76, 37, 4),
(77, 37, 5),
(78, 37, 15),
(79, 38, 1),
(80, 38, 4),
(81, 38, 5),
(82, 38, 15),
(83, 39, 1),
(84, 39, 4),
(85, 39, 5),
(86, 39, 15),
(87, 40, 1),
(88, 40, 2),
(89, 40, 3),
(90, 40, 4),
(91, 43, 1),
(92, 43, 2),
(93, 43, 3),
(94, 44, 1),
(95, 44, 2),
(96, 44, 3),
(97, 44, 4),
(98, 45, 1),
(99, 45, 2),
(100, 45, 3),
(101, 47, 1),
(102, 47, 2),
(103, 47, 3),
(104, 48, 1),
(105, 48, 2),
(106, 49, 1),
(107, 49, 2),
(108, 49, 3),
(109, 50, 1),
(110, 50, 2),
(111, 50, 3),
(112, 51, 1),
(113, 51, 4),
(114, 51, 5),
(115, 52, 1),
(116, 52, 4),
(117, 52, 5),
(118, 53, 1),
(119, 53, 4),
(120, 53, 5),
(121, 54, 1),
(122, 54, 7),
(123, 55, 1),
(124, 55, 8),
(125, 55, 12),
(126, 55, 27),
(127, 56, 1),
(128, 56, 2),
(129, 56, 3),
(130, 56, 4),
(131, 56, 12),
(132, 56, 27),
(133, 57, 1),
(134, 57, 4),
(135, 57, 5),
(136, 58, 6),
(137, 58, 7),
(138, 58, 8),
(139, 59, 1),
(140, 59, 5),
(141, 59, 7),
(142, 60, 1),
(143, 60, 4),
(144, 60, 7),
(145, 61, 1),
(146, 61, 4),
(147, 61, 7),
(148, 62, 1),
(149, 62, 4),
(150, 62, 5),
(151, 62, 13),
(152, 63, 1),
(153, 63, 12),
(154, 63, 13),
(155, 63, 27),
(156, 65, 1),
(157, 65, 8),
(158, 65, 12),
(159, 65, 13),
(160, 65, 27),
(161, 66, 1),
(162, 66, 4),
(163, 66, 13),
(164, 66, 27),
(165, 67, 1),
(166, 67, 4),
(167, 67, 5),
(168, 67, 13),
(169, 67, 15),
(170, 68, 12),
(171, 68, 13),
(172, 68, 26),
(173, 69, 5),
(174, 69, 12),
(175, 69, 13),
(176, 69, 27),
(177, 69, 29),
(178, 70, 7),
(179, 70, 12),
(180, 70, 13),
(181, 70, 26),
(182, 71, 1),
(183, 71, 4),
(184, 71, 5),
(185, 71, 13),
(186, 71, 15),
(187, 72, 13),
(188, 72, 27),
(189, 72, 29),
(190, 73, 13),
(191, 73, 27),
(192, 73, 29),
(193, 74, 1),
(194, 74, 4),
(195, 74, 5),
(196, 74, 13),
(197, 75, 7),
(198, 75, 13),
(199, 75, 26),
(200, 76, 4),
(201, 76, 13),
(202, 76, 15),
(203, 77, 1),
(204, 77, 5),
(205, 77, 7),
(206, 77, 13),
(207, 78, 1),
(208, 78, 4),
(209, 78, 5),
(210, 78, 13),
(211, 79, 12),
(212, 79, 13),
(213, 79, 22),
(214, 79, 27),
(215, 79, 29),
(216, 80, 1),
(217, 80, 8),
(218, 80, 12),
(219, 80, 13),
(220, 80, 27),
(221, 81, 1),
(222, 81, 4),
(223, 81, 5),
(224, 81, 7),
(225, 81, 13),
(226, 81, 15),
(227, 82, 2),
(228, 82, 7),
(229, 82, 13),
(230, 82, 14),
(231, 82, 15),
(232, 83, 1),
(233, 83, 8),
(234, 83, 13),
(235, 83, 27),
(236, 84, 2),
(237, 84, 4),
(238, 84, 7),
(239, 84, 13),
(240, 84, 14),
(241, 85, 1),
(242, 85, 2),
(243, 85, 4),
(244, 85, 13),
(245, 85, 14),
(246, 86, 1),
(247, 86, 5),
(248, 86, 13),
(249, 87, 1),
(250, 87, 4),
(251, 87, 5),
(252, 87, 13),
(253, 88, 1),
(254, 88, 13),
(255, 89, 1),
(256, 89, 5),
(257, 89, 13),
(258, 90, 1),
(259, 90, 4),
(260, 90, 7),
(261, 90, 13),
(262, 90, 14),
(263, 91, 1),
(264, 91, 7),
(265, 91, 26),
(266, 92, 27),
(267, 92, 29);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idcategorias`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`iddatos`);

--
-- Indices de la tabla `relacion`
--
ALTER TABLE `relacion`
  ADD PRIMARY KEY (`idrelacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idcategorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `iddatos` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT de la tabla `relacion`
--
ALTER TABLE `relacion`
  MODIFY `idrelacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
