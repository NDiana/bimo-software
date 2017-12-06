create database bimo;

use bimo;

/* Tabla tipo de documento */

create table `tipo_documento`(
`id_tipo_documento` int(2),
`descripcion_tipo_documento` varchar(25) not null,

primary key(`id_tipo_documento`)
);

insert into 

`tipo_documento`(`id_tipo_documento`, `descripcion_tipo_documento`)

values

(1,'Cédula de ciudadania'),
(2,'Tarjeta de identidad'),
(3,'Cédula extranjera');

/* Tabla rol */

create table `rol`(
`id_rol` int(2),
`descripcion_rol` varchar(25) not null,

primary key(`id_rol`)
);

insert into 

`rol`(`id_rol`, `descripcion_rol`)

values

(1,'Administrador'),
(2,'Supervisor'),
(3,'Guarda'),
(4,'Usuario');

/* Tabla estado */

create table `estado`(
`id_estado` int(2),
`descripcion_estado` varchar(25) not null,

primary key(`id_estado`)
);

insert into 

`estado`(`id_estado`, `descripcion_estado`)

values

(1,'Activo'),
(2,'Inactivo');

/* Tabla usuario */

create table `usuario`(
`id` int(2) not null,
`nombre` varchar(255) not null,
`tipo_documento` int(2) not null,
`no_documento` varchar(11) not null,
`rol` int(2) not null,
`telefono` varchar(10) not null,
`email` varchar(255) not null,
`contrasena` varchar(255) not null,
`estado` int(2) not null,


foreign key(`tipo_documento`) references `tipo_documento`(`id_tipo_documento`),
foreign key(`rol`) references `rol`(`id_rol`),
foreign key(`estado`) references `estado`(`id_estado`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into 

`usuario`(`id`, `nombre`, `tipo_documento`, `no_documento`, `rol`, `telefono`, `email`, 
`contrasena`,`estado`)

values

(1,'ADMINISTRADOR',1,1128990051,1,3103302525,'admin@misena.edu.co','7367cc4cee061a476290d18978830414',1);

ALTER TABLE `usuario`
ADD PRIMARY KEY (`id`);

ALTER TABLE `usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
