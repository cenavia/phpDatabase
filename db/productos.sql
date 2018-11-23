CREATE DATABASE tienda;
USE tienda;

CREATE TABLE productos
(
    prod_id int(10) unsigned NOT NULL AUTO_INCREMENT, -- primary key column
    nombre varchar(20) NOT NULL,
    descrpcion varchar(100),
    Precio double (6,2) NOT NULL,
    cantidad int(10) NOT NULL,
    PRIMARY KEY (prod_id)

)ENGINE=InnoDB DEFAULT CHARSET=utf8;