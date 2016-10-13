create DATABASE mercado_online;
use mercado_online;

CREATE TABLE `mercadorias` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `tipo_mercadoria` varchar(50) NOT NULL,  
  `nome` varchar(100) NOT NULL,
  `quantidade` int(11) NOT NULL default 1,
  `preco` decimal(10,2) NOT NULL,
  `tipo_negocio` char(1) NOT NULL default 'C'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;