drop schema if exists `DBweb1`;

-- creacion de la base de datos
create schema if not exists `DBweb1` default character set utf8 collate utf8_sapanish_ci;

-- selecionamos la DB para trabajar sobre ella
USE `DBweb1`;

-- Crear un tabla

CREATE TABLE `persona`(
`nombre_usuario` text not null,
`equipo_usuario` text not null,
`direccion_usuario` text not null,
`numero_usuario` text not null,
`correo_usuario` text not null,
`contraseña_usuario` text not null,
`fecha_registro` text not null
);