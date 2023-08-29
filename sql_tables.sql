-- Host: localhost    Database: valemobi
-- Table structure for table `tb_mercadoria`

DROP TABLE IF EXISTS `tb_mercadoria`;

CREATE TABLE `tb_mercadoria` (
  `ID_MERCADORIA` int(11) NOT NULL auto_increment,
  `CODIGO_MERCADORIA` int(11) DEFAULT NULL,
  `TIPO_MERCADORIA` varchar(255) DEFAULT NULL,
  `NOME_MERCADORIA` varchar(255) DEFAULT NULL,
  `QUANTIDADE_MERCADORIA` int(11) DEFAULT NULL,
  `PRECO_MERCADORIA` float DEFAULT NULL,
  `TIPO_NEGOCIO` varchar(255) DEFAULT null,
  PRIMARY KEY (`ID_MERCADORIA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert default value into tb_mercadoria
INSERT INTO `tb_mercadoria` (`CODIGO_MERCADORIA`, `TIPO_MERCADORIA`, `NOME_MERCADORIA`, `QUANTIDADE_MERCADORIA`, `PRECO_MERCADORIA`, `TIPO_NEGOCIO`) VALUES (1,'Games','Resident Evil 4 REMAKE - 2023',5,20,'Venda');
