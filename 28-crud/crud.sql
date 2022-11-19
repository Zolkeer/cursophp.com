
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `idade` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

