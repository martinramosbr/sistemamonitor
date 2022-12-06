CREATE PROCEDURE `sp_users_save`(
pdes_usuario VARCHAR(100),
pdes_senha VARCHAR(256)
)
BEGIN
	DECLARE vidusuario INT;
	INSERT INTO usuario (des_usuario, des_senha)
	VALUES(pdes_usuario, pdes_senha);

	SET vidusuario = LAST_INSERT_ID();

	SELECT * FROM usuario ORDER BY idusuario;
END

		/*
		pdes_contrato VARCHAR(100),
		pdes_datavencimento date,
		pdes_valorcontrato decimal(30,2)
		*/

CREATE PROCEDURE `sp_orgao_save` (
pdes_contrato VARCHAR(100),
pdes_datavencimento date,
pdes_valorcontrato decimal
)
BEGIN
	DECLARE vidcontrato INT;
    INSERT INTO contratos (des_contrato, des_datavencimento, des_valorcontrato)
    VALUES(pdes_contrato, pdes_datavencimento, pdes_valorcontrato);
    
    SET vidcontrato = LAST_INSERT_ID();
    
    SELECT * FROM contratos ORDER BY idcontrato;
END


>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
<p id="titulo-cadastro-ticket" style="font-size: 30px">Te amo Isa ♥</p>


USE `db_sysmonitor`;
DROP procedure IF EXISTS `sp_ticket_save`;

DELIMITER $$
USE `db_sysmonitor`$$
CREATE PROCEDURE `sp_ticket_save` (
pdes_nome VARCHAR(45),
pdes_email VARCHAR(45),
pdes_titulo VARCHAR(45),
pdes_departamento VARCHAR(45),
pdes_tipo VARCHAR(45),
pdes_proridade VARCHAR(45),
pdes_mensagem tinytext,
pdes_datahora  timestamp(2),
pdes_arquivo VARCHAR(45)
)
BEGIN
DECLARE vidtickets INT;
    INSERT INTO tickets (des_nome, des_email, des_titulo, des_departamentto, des_tipo, des_prioridade, des_mensagem, des_datahora, des_arquivo)
    VALUES(pdes_nome, pdes_email, pdes_titulo, pdes_departamentto, pdes_tipo, pdes_prioridade, pdes_mensagem, des_datahora, pdes_arquivo);
    
    SET vidtickets = LAST_INSERT_ID();
    
    SELECT * FROM tickets ORDER BY idtickets;
END$$

DELIMITER ;