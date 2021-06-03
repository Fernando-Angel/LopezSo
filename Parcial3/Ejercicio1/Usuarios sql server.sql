CREATE DATABASE lopezso;
GO

USE lopezso;

CREATE TABLE usuario
(
	id_usuario INT NOT NULL IDENTITY(1,1),
	nombre VARCHAR(40) NOT NULL,
	apellidopat VARCHAR(40) NULL,
	apellidomat VARCHAR(40) NULL,
	email VARCHAR(50) NULL,
	usuario VARCHAR(50) NULL,
	contrasena VARCHAR(50) NULL,	
	fecha_vigencia date NULL,
	fecha_expiracion date NULL,
	telefono VARCHAR(20) NULL
	
	PRIMARY  KEY (id_usuario)
)
--============================================================================================================
INSERT INTO usuario (nombre, apellidopat, apellidomat, usuario, contrasena, fecha_vigencia, fecha_expiracion)
VALUES ('Fernando Angel','Lopez','Soto','FernandoA','9898fcc5b2155259c134bb1a4208ae64','07-05-2020','07-06-2020'),
	   ('Alejando ', 'Enrique', 'Perez','AlenP','7614f27b933057c77cb20fb8879fe659','02-03-2017','02-04-2017'),
	   ('Luis Manuel','Martínez','Cruz','LuisCruz','c44688b5061756b3cca2b86c016a1535','07-09-2018','07-10-2018'),
	   ('Miguel','Ruiz','Ramírez','MikeRuRal','b5e4f812c48c77a1504e0b04abf8929b','12-04-2021','12-05-2021'),
	   ('Gerardo Jose','Rey','Flores','Jose_Flores','4daba401c66c18e9d69826df90b64d7b','03-31-2015','03-01-2016'),
	   ('Maria Jose','Martínez','Torres','Pedro Matoi','7d61dd51a2b1321b81f9e79128caeb30','12-04-2021','12-05-2021')

SELECT * FROM usuario