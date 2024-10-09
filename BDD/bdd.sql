CREATE DATABASE db_escuela;

USE db_escuela;

CREATE TABLE  tbl_usarios(

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


ALTER TABLE tbl_usarios 
ADD CONSTRAINT fk_usario_roles FOREIGN KEY (rol_user) REFERENCES tbl_roles(id_rol);
INSERT INTO tbl_roles VALUES(
    NULL,'admin'
);

INSERT INTO tbl_usUarios VALUES(
    NULL,'Juan', 'juan@gmail.com', 1, '1234'
);