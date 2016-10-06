--
-- Procedimientos
--
DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `login_usuario` (IN `alias` VARCHAR(80), IN `contra` VARCHAR(32), OUT `existe` INT)  
BEGIN
set existe=0;
select count(*) into existe from usuarios where MD5(contra)=password AND (username=alias OR email=alias);

END$$