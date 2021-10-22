-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.18-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando datos para la tabla sistema_medico.arbol: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `arbol` DISABLE KEYS */;
INSERT INTO `arbol` (`nodo`, `texto`, `pregunta`) VALUES
	(1, 'Carl Sagan', b'0');
/*!40000 ALTER TABLE `arbol` ENABLE KEYS */;

-- Volcando datos para la tabla sistema_medico.consecuente: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `consecuente` DISABLE KEYS */;
INSERT INTO `consecuente` (`id_consecuente`, `nombre`) VALUES
	(1, 'gripa'),
	(2, 'faringitis');
/*!40000 ALTER TABLE `consecuente` ENABLE KEYS */;

-- Volcando datos para la tabla sistema_medico.hechos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `hechos` DISABLE KEYS */;
INSERT INTO `hechos` (`idhechos`, `nombre`) VALUES
	(1, 'fiebre'),
	(2, 'tos'),
	(3, 'dolor_de_garganta'),
	(4, 'malestar');
/*!40000 ALTER TABLE `hechos` ENABLE KEYS */;

-- Volcando datos para la tabla sistema_medico.reglas: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `reglas` DISABLE KEYS */;
INSERT INTO `reglas` (`idregla`, `id_antecedente`, `id_consecuente`, `v_difuso`) VALUES
	(1, 1, 1, 0.2),
	(2, 4, 1, 0.3),
	(3, 2, 1, 0.5),
	(4, 4, 2, 0.2),
	(5, 3, 2, 0.5);
/*!40000 ALTER TABLE `reglas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
