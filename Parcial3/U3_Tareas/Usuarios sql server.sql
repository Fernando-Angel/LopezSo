CREATE DATABASE gimnasio;
USE gimnasio;
CREATE TABLE usuario
(
	id_usuario INT NOT NULL IDENTITY(1,1),
	nombre VARCHAR(40) NOT NULL,
	apellidopat VARCHAR(40) NULL,
	apellidomat VARCHAR(40) NULL,
	usuario VARCHAR(50) NULL,
	contraseña VARCHAR(50) NULL,
	fecha_vigencia date NULL,
	fecha_expiracion date NULL,
	PRIMARY  KEY (id_usuario)
)



INSERT INTO usuario (nombre, apellidopat, apellidomat, usuario, contraseña, fecha_vigencia, fecha_expiracion)
VALUES ('Fernando Angel','Lopez','Soto','FernandoA','1234F','07-05-2020','07-06-2020')

SELECT * FROM usuario