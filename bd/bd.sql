CREATE DATABASE papeleria;
CREATE TABLE articulos(
    id int auto_increment,
    nombre varchar(80),
    precio float(30),
    stock int(10),
    imagen varchar(60),
    PRIMARY KEY (id)
);



CREATE TABLE cliente(
    idCliente int auto_increment NOT NULL,
    nombre varchar(80),
    apPaterno varchar(30),
    apMaterno varchar(30),
    fechaNacimiento date,
    correo varchar(60),
    contraseña varchar(30),
    telefono varchar(12),
    id_rol varchar(60) NOT NULL,
    PRIMARY KEY (idCliente)
    INDEX (id_rol),
    FOREIGN KEY (id_rol) REFERENCES roles(id)
) TYPE = INNODB;

CREATE TABLE venta
(
    id_factura INT NOT NULL,
    id_cliente INT NOT NULL,
    cantidad   INT,
    PRIMARY KEY(id_factura),
    INDEX (id_cliente)
) TYPE = INNODB;

ALTER TABLE cliente ADD FOREIGN KEY(id_rol) REFERENCES roles(id_rol);
