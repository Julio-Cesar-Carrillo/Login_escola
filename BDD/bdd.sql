create database db_escuela;

use db_escuela;

CREATE TABLE  tbl_usuarios(
id_user INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nom_user VARCHAR(30) NOT NULL,
email_user VARCHAR(100) NOT NULL,
rol_user INT NOT NULL,
pwd_user VARCHAR(100) NOT NULL
);

CREATE TABLE tbl_roles(
id_rol INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nom_rol VARCHAR(30) NOT NULL
);

ALTER TABLE tbl_usuarios 
ADD CONSTRAINT fk_usario_roles FOREIGN KEY (rol_user) REFERENCES tbl_roles(id_rol);

INSERT INTO tbl_roles VALUES(
    NULL,'admin'
);
INSERT INTO tbl_usuarios VALUES(
    NULL,'Juan', 'juan@gmail.com', 1, '$2y$10$9006Rj3MzStLFob2tk4d5.XTKZM10y9i7cT15vO9SFwyivBZxlute'
);