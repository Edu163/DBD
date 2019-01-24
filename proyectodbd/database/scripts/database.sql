--
-- Eliminar tablas
--

DROP TABLE IF EXISTS acciones CASCADE;
DROP TABLE IF EXISTS aeropuertos CASCADE;
DROP TABLE IF EXISTS alojamientos_privados CASCADE;
DROP TABLE IF EXISTS alojamientos_servicios CASCADE;
DROP TABLE IF EXISTS asientos CASCADE;
DROP TABLE IF EXISTS vehiculos CASCADE;
DROP TABLE IF EXISTS aviones CASCADE;
DROP TABLE IF EXISTS calendarios_alojamientos CASCADE;
DROP TABLE IF EXISTS calendarios_vehiculos CASCADE;
DROP TABLE IF EXISTS calendarios_vuelos CASCADE;
DROP TABLE IF EXISTS checks_in CASCADE;
DROP TABLE IF EXISTS companias CASCADE;
DROP TABLE IF EXISTS detalles_reservas_vehiculos CASCADE;
DROP TABLE IF EXISTS detalles_reservas_hoteles CASCADE;
DROP TABLE IF EXISTS detalles_reservas_vuelos CASCADE;
DROP TABLE IF EXISTS detalles_ventas_vuelos CASCADE;
DROP TABLE IF EXISTS detalles_vuelos CASCADE;
DROP TABLE IF EXISTS habitaciones CASCADE;
DROP TABLE IF EXISTS habitaciones_hoteles CASCADE;
DROP TABLE IF EXISTS habitaciones_servicios CASCADE;
DROP TABLE IF EXISTS hoteles CASCADE;
DROP TABLE IF EXISTS migrations CASCADE;
DROP TABLE IF EXISTS origenes_destinos CASCADE;
DROP TABLE IF EXISTS password_resets CASCADE;
DROP TABLE IF EXISTS proveedores CASCADE;
DROP TABLE IF EXISTS reservas_vehiculos CASCADE;
DROP TABLE IF EXISTS reservas_hoteles CASCADE;
DROP TABLE IF EXISTS servicios_alojamientos CASCADE;
DROP TABLE IF EXISTS servicios_de_vehiculos CASCADE;
DROP TABLE IF EXISTS servicios_proveedores CASCADE;
DROP TABLE IF EXISTS servicios_y_vehiculos CASCADE;
DROP TABLE IF EXISTS users CASCADE;
DROP TABLE IF EXISTS ventas CASCADE;
DROP TABLE IF EXISTS vuelos CASCADE;
DROP TABLE IF EXISTS zonas CASCADE;

--
-- Crear tablas (orden alfabético)
--

CREATE TABLE IF NOT EXISTS acciones (
    id serial NOT NULL,
    user_id serial NOT NULL,
    accion character varying(255) NOT NULL,
    fecha timestamp NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS aeropuertos (
    id serial NOT NULL,
    pais character varying(255) NOT NULL,
    ciudad character varying(255) NOT NULL,
    direccion character varying(255) NOT NULL,
    nombre character varying(255) NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS alojamientos_privados (
    id serial NOT NULL,
    calendario_alojamiento_id serial NOT NULL,
    capacidad integer NOT NULL,
    direccion character varying(255) NOT NULL,
    nombre character varying(255) NOT NULL,
    estrella double precision NOT NULL,
    valoracion double precision NOT NULL,
    pais character varying(255) NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS alojamientos_servicios (
    id serial NOT NULL,
    servicio_alojamiento_id serial NOT NULL,
    alojamiento_privado_id serial NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS asientos (
    id serial NOT NULL,
    avion_id serial NOT NULL,
    numero integer NOT NULL,
    letra character varying(255) NOT NULL,
    tipo character varying(255) NOT NULL,
    clase character varying(255) NOT NULL,
    disponible boolean NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS vehiculos (
    id serial NOT NULL,
    patente character varying(255) NOT NULL,
    calendario_vehiculo_id serial NOT NULL,
    proveedor_id serial NOT NULL,
    zona_id serial NOT NULL,
    marca character varying(255) NOT NULL, 
    tipo character varying(255) NOT NULL,
    gamma character varying(255) NOT NULL,
    transmision character varying(255) NOT NULL,
    combustible character varying(255) NOT NULL,
    n_pasajeros integer NOT NULL,
    equipaje_g integer NOT NULL,
    equipaje_p integer NOT NULL,
    n_puertas integer NOT NULL,
    n_kilometraje integer NOT NULL,
    precio_hora double precision NOT NULL,
    aire_acondicionado boolean NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS aviones (
    id serial NOT NULL,
    compania_id serial NOT NULL,
    modelo character varying(255) NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS calendarios_alojamientos (
    id serial NOT NULL,
    año integer NOT NULL,
    mes character varying(255) NOT NULL,
    dia integer NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS calendarios_vehiculos (
    id serial NOT NULL,
    año integer NOT NULL,
    mes character varying(255) NOT NULL,
    dia integer NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS calendarios_vuelos (
    id serial NOT NULL,
    año integer NOT NULL,
    mes character varying(255) NOT NULL,
    dia integer NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS checks_in (
    id serial NOT NULL,
    asiento_id serial NOT NULL,
    user_id serial NOT NULL,
    fecha date NOT NULL,
    estado character varying(255) NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS companias (
    id serial NOT NULL,
    direccion character varying(255) NOT NULL,
    nombre character varying(255) NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS detalles_reservas_vehiculos (
    id serial NOT NULL,
    reserva_vehiculo_id serial NOT NULL,
    patente character varying(255) NOT NULL,
    fecha_retiro timestamp,
    fecha_regreso timestamp,
    precio_reserva double precision NOT NULL,
    descuento double precision NOT NULL,
    cantidad integer NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS detalles_reservas_hoteles (
    id serial NOT NULL,
    reserva_hotel_id serial NOT NULL,
    habitacion_hotel_id serial NOT NULL,
    alojamiento_privado_id serial NOT NULL,
    fecha_egreso date NOT NULL,
    fecha_ingreso date NOT NULL,
    precio double precision NOT NULL,
    tipo character varying(255) NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS detalles_ventas_vuelos (
    id serial NOT NULL,
    venta_id serial NOT NULL,
    precio double precision NOT NULL,
    descuento double precision NOT NULL,
    monto_total double precision NOT NULL,
    fecha timestamp,
    tipo character varying(255) NOT NULL,
    cantidad integer NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS detalles_vuelos (
    id serial NOT NULL,
    user_id serial NOT NULL,
    avion_id serial NOT NULL,
    vuelo_id serial NOT NULL,
    fecha_despegue timestamp,
    fecha_aterrizaje timestamp,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS habitaciones (
    id serial NOT NULL,
    alojamiento_privado_id serial NOT NULL,
    piso integer NOT NULL,
    numero integer NOT NULL,
    camas integer NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS habitaciones_hoteles (
    id serial NOT NULL,
    hotel_id serial NOT NULL,
    calendario_alojamiento_id serial NOT NULL,
    capacidad integer NOT NULL,
    camas integer NOT NULL,
    numero integer NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS habitaciones_servicios (
    id serial NOT NULL,
    servicio_alojamiento_id serial NOT NULL,
    habitacion_hotel_id serial NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS hoteles (
    id serial NOT NULL,
    nombre character varying(255) NOT NULL,
    pais character varying(255) NOT NULL,
    direccion character varying(255) NOT NULL,
    estrellas double precision NOT NULL,
    valoracion date NOT NULL,
    capacidad integer NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS migrations (
    id serial NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);

CREATE TABLE IF NOT EXISTS origenes_destinos (
    id serial NOT NULL,
    detalle_vuelo_id serial NOT NULL,
    aeropuerto_id serial NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp
);


CREATE TABLE IF NOT EXISTS proveedores (
    id serial NOT NULL,
    politica_combustible character varying(255) NOT NULL,
    documentacion_necesaria character varying(255) NOT NULL,
    franquicia_daños character varying(255) NOT NULL,
    calificacion double precision NOT NULL,
    kilometraje integer NOT NULL,
    deposito_seguridad double precision NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS reservas_vehiculos (
    id serial NOT NULL,
    venta_id serial NOT NULL,
    fecha timestamp NOT NULL,
    monto_total double precision NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS reservas_hoteles (
    id serial NOT NULL,
    venta_id serial NOT NULL,
    precio double precision NOT NULL,
    fecha date NOT NULL,
    cantidad integer NOT NULL,
    monto_total double precision NOT NULL,
    descuento double precision NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS servicios_alojamientos (
    id serial NOT NULL,
    hotel_id serial NOT NULL,
    nombre character varying(255) NOT NULL,
    precio double precision NOT NULL,
    descripcion character varying(255) NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS servicios_de_vehiculos (
    id serial NOT NULL,
    nombre_servicio character varying(255) NOT NULL,
    duracion integer NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS servicios_proveedores (
    id serial NOT NULL,
    servicio_id serial NOT NULL,
    proveedor_id serial NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS servicios_y_vehiculos (
    id serial NOT NULL,
    servicio_id serial NOT NULL,
    patente character varying(255) NOT NULL,
    precio double precision NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS users (
    id serial NOT NULL,
    nombre character varying(255) NOT NULL,
    apellido character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp,
    password character varying(255) NOT NULL,
    acceso character varying(255) NOT NULL,
    n_documento character varying(255),
    tipo_documento character varying(255),
    pais character varying(255) NOT NULL,
    puntos integer,
    millas integer,
    millas_elite integer,
    telefono character varying(255) NOT NULL,
    categoria character varying(255) NOT NULL,
    fecha_nac date NOT NULL,
    remember_token character varying(100),
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS ventas (
    id serial NOT NULL,
    user_id serial NOT NULL,
    monto_total integer NOT NULL,
    fecha date NOT NULL,
    impuesto double precision NOT NULL,
    tipo_comprobante character varying(255) NOT NULL,
    metodo_pago character varying(255) NOT NULL,
    n_cuotas integer NOT NULL,
    descuento double precision NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS vuelos (
    id serial NOT NULL,
    detalle_venta_vuelo_id serial NOT NULL,
    precio double precision NOT NULL,
    duracion_vuelo time NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS zonas (
    id serial NOT NULL,
    nombre character varying(255) NOT NULL,
    direccion character varying(255) NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

--
-- Llaves primarias y propiedad único.
--

ALTER TABLE acciones
    ADD CONSTRAINT acciones_pkey
    PRIMARY KEY (id);

ALTER TABLE aeropuertos
    ADD CONSTRAINT aeropuertos_pkey
    PRIMARY KEY (id);

ALTER TABLE alojamientos_privados
    ADD CONSTRAINT alojamientos_privados_pkey
    PRIMARY KEY (id);

ALTER TABLE alojamientos_servicios
    ADD CONSTRAINT alojamientos_servicios_pkey
    PRIMARY KEY (id);

ALTER TABLE asientos
    ADD CONSTRAINT asientos_pkey
    PRIMARY KEY (id);

ALTER TABLE vehiculos
    ADD CONSTRAINT vehiculos_pkey
    PRIMARY KEY (id);

ALTER TABLE vehiculos
    ADD CONSTRAINT patente_unique
    UNIQUE (patente);

ALTER TABLE aviones
    ADD CONSTRAINT aviones_pkey
    PRIMARY KEY (id);

ALTER TABLE calendarios_alojamientos
    ADD CONSTRAINT calendarios_alojamientos_pkey
    PRIMARY KEY (id);

ALTER TABLE calendarios_vehiculos
    ADD CONSTRAINT calendarios_vehiculos_pkey
    PRIMARY KEY (id);

ALTER TABLE calendarios_vuelos
    ADD CONSTRAINT calendarios_vuelos_pkey
    PRIMARY KEY (id);

ALTER TABLE checks_in
    ADD CONSTRAINT checks_in_pkey
    PRIMARY KEY (id);

ALTER TABLE companias
    ADD CONSTRAINT companias_pkey
    PRIMARY KEY (id);

ALTER TABLE detalles_reservas_vehiculos
    ADD CONSTRAINT detalles_reservas_vehiculos_pkey
    PRIMARY KEY (id);

ALTER TABLE detalles_reservas_hoteles
    ADD CONSTRAINT detalles_reservas_hoteles_pkey
    PRIMARY KEY (id);

ALTER TABLE detalles_ventas_vuelos
    ADD CONSTRAINT detalles_ventas_vuelos_pkey
    PRIMARY KEY (id);

ALTER TABLE detalles_vuelos
    ADD CONSTRAINT detalles_vuelos_pkey
    PRIMARY KEY (id);

ALTER TABLE habitaciones
    ADD CONSTRAINT habitaciones_pkey
    PRIMARY KEY (id);

ALTER TABLE habitaciones_hoteles
    ADD CONSTRAINT habitaciones_hoteles_pkey
    PRIMARY KEY (id);

ALTER TABLE habitaciones_servicios
    ADD CONSTRAINT habitaciones_servicios_pkey
    PRIMARY KEY (id);

ALTER TABLE hoteles
    ADD CONSTRAINT hoteles_pkey
    PRIMARY KEY (id);

ALTER TABLE migrations
    ADD CONSTRAINT migrations_pkey
    PRIMARY KEY (id);

ALTER TABLE origenes_destinos
    ADD CONSTRAINT origenes_destinos_pkey
    PRIMARY KEY (id);

ALTER TABLE proveedores
    ADD CONSTRAINT proveedores_pkey
    PRIMARY KEY (id);

ALTER TABLE reservas_vehiculos
    ADD CONSTRAINT reservas_vehiculos_pkey
    PRIMARY KEY (id);

ALTER TABLE reservas_hoteles
    ADD CONSTRAINT reservas_hoteles_pkey
    PRIMARY KEY (id);

ALTER TABLE servicios_alojamientos
    ADD CONSTRAINT servicios_alojamientos_pkey
    PRIMARY KEY (id);

ALTER TABLE servicios_de_vehiculos
    ADD CONSTRAINT servicios_de_vehiculos_pkey
    PRIMARY KEY (id);

ALTER TABLE servicios_proveedores
    ADD CONSTRAINT servicios_proveedores_pkey
    PRIMARY KEY (id);

ALTER TABLE servicios_y_vehiculos
    ADD CONSTRAINT servicios_y_vehiculos_pkey
    PRIMARY KEY (id);

ALTER TABLE users
    ADD CONSTRAINT users_pkey
    PRIMARY KEY (id);

ALTER TABLE users
    ADD CONSTRAINT email_unique
    UNIQUE (email);

ALTER TABLE ventas
    ADD CONSTRAINT ventas_pkey
    PRIMARY KEY (id);

ALTER TABLE vuelos
    ADD CONSTRAINT vuelos_pkey
    PRIMARY KEY (id);

ALTER TABLE zonas
    ADD CONSTRAINT zonas_pkey
    PRIMARY KEY (id);

--
-- CLAVES FORANEAS
--

ALTER TABLE acciones
    ADD CONSTRAINT acciones_user_id_foreign
    FOREIGN KEY (user_id)
    REFERENCES users(id);

ALTER TABLE alojamientos_privados
    ADD CONSTRAINT alojamientos_privados_calendario_alojamiento_id_foreign
    FOREIGN KEY (calendario_alojamiento_id)
    REFERENCES calendarios_alojamientos(id);

ALTER TABLE alojamientos_servicios
    ADD CONSTRAINT alojamientos_servicios_alojamiento_privado_id_foreign
    FOREIGN KEY (alojamiento_privado_id)
    REFERENCES alojamientos_privados(id);

ALTER TABLE alojamientos_servicios
    ADD CONSTRAINT alojamientos_servicios_servicio_alojamiento_id_foreign
    FOREIGN KEY (servicio_alojamiento_id)
    REFERENCES servicios_alojamientos(id);

ALTER TABLE asientos
    ADD CONSTRAINT asientos_avion_id_foreign
    FOREIGN KEY (avion_id)
    REFERENCES aviones(id);

ALTER TABLE vehiculos
    ADD CONSTRAINT vehiculos_zona_id_foreign
    FOREIGN KEY (zona_id)
    REFERENCES zonas(id);

ALTER TABLE vehiculos
    ADD CONSTRAINT vehiculos_proveedor_id_foreign
    FOREIGN KEY (proveedor_id)
    REFERENCES proveedores(id);

ALTER TABLE vehiculos
    ADD CONSTRAINT vehiculos_calendario_vehiculo_id_foreign
    FOREIGN KEY (calendario_vehiculo_id)
    REFERENCES calendarios_vehiculos(id);

ALTER TABLE aviones
    ADD CONSTRAINT aviones_compania_id_foreign
    FOREIGN KEY (compania_id)
    REFERENCES companias(id);

ALTER TABLE checks_in
    ADD CONSTRAINT checks_in_user_id_foreign
    FOREIGN KEY (user_id)
    REFERENCES users(id);

ALTER TABLE checks_in
    ADD CONSTRAINT checks_in_asiento_id_foreign
    FOREIGN KEY (asiento_id)
    REFERENCES asientos(id);

ALTER TABLE detalles_reservas_vehiculos
    ADD CONSTRAINT detalles_reservas_vehiculos_reserva_vehiculo_id_foreign
    FOREIGN KEY (reserva_vehiculo_id)
    REFERENCES reservas_vehiculos(id);

ALTER TABLE detalles_reservas_hoteles
    ADD CONSTRAINT detalles_reservas_hoteles_reserva_hotel_id_foreign
    FOREIGN KEY (reserva_hotel_id)
    REFERENCES reservas_hoteles(id);

ALTER TABLE detalles_reservas_hoteles
    ADD CONSTRAINT detalles_reservas_hoteles_habitacion_hotel_id_foreign
    FOREIGN KEY (habitacion_hotel_id)
    REFERENCES habitaciones_hoteles(id);

ALTER TABLE detalles_reservas_hoteles
    ADD CONSTRAINT detalles_reservas_hoteles_alojamiento_privado_id_foreign
    FOREIGN KEY (alojamiento_privado_id)
    REFERENCES alojamientos_privados(id);

ALTER TABLE detalles_ventas_vuelos
    ADD CONSTRAINT detalles_ventas_vuelos_venta_id_foreign
    FOREIGN KEY (venta_id)
    REFERENCES ventas(id);

ALTER TABLE detalles_vuelos
    ADD CONSTRAINT detalles_vuelos_reserva_avion_id_foreign
    FOREIGN KEY (avion_id)
    REFERENCES aviones(id);

ALTER TABLE detalles_vuelos
    ADD CONSTRAINT detalles_vuelos_vuelo_id_foreign
    FOREIGN KEY (vuelo_id)
    REFERENCES vuelos(id);

ALTER TABLE habitaciones
    ADD CONSTRAINT habitaciones_alojamiento_privado_id_foreign
    FOREIGN KEY (alojamiento_privado_id)
    REFERENCES alojamientos_privados(id);

ALTER TABLE habitaciones_hoteles
    ADD CONSTRAINT habitaciones_hoteles_hotel_id_foreign
    FOREIGN KEY (hotel_id)
    REFERENCES hoteles(id);

ALTER TABLE habitaciones_servicios
    ADD CONSTRAINT habitaciones_servicios_habitacion_hotel_id_foreign
    FOREIGN KEY (habitacion_hotel_id)
    REFERENCES habitaciones_hoteles(id);

ALTER TABLE habitaciones_servicios
    ADD CONSTRAINT habitaciones_servicios_servicio_alojamiento_id_foreign
    FOREIGN KEY (servicio_alojamiento_id)
    REFERENCES servicios_alojamientos(id);

ALTER TABLE origenes_destinos
    ADD CONSTRAINT origenes_destinos_aeropuerto_id_foreign
    FOREIGN KEY (aeropuerto_id)
    REFERENCES aeropuertos(id);

ALTER TABLE origenes_destinos
    ADD CONSTRAINT origenes_destinos_detalle_vuelo_id_foreign
    FOREIGN KEY (detalle_vuelo_id)
    REFERENCES detalles_vuelos(id);

ALTER TABLE reservas_vehiculos
    ADD CONSTRAINT reservas_vehiculos__venta_id_foreign
    FOREIGN KEY (venta_id)
    REFERENCES ventas(id);

ALTER TABLE reservas_hoteles
    ADD CONSTRAINT reservas_hoteles__venta_id_foreign
    FOREIGN KEY (venta_id)
    REFERENCES ventas(id);

ALTER TABLE servicios_alojamientos
    ADD CONSTRAINT servicios_alojamientos_hotel_id_foreign
    FOREIGN KEY (hotel_id)
    REFERENCES hoteles(id);

ALTER TABLE servicios_proveedores
    ADD CONSTRAINT servicios_proveedores_servicio_id_foreign
    FOREIGN KEY (servicio_id)
    REFERENCES servicios_de_vehiculos(id);

ALTER TABLE servicios_proveedores
    ADD CONSTRAINT servicios_proveedores_proveedor_id_foreign
    FOREIGN KEY (proveedor_id)
    REFERENCES proveedores(id);

ALTER TABLE servicios_y_vehiculos
    ADD CONSTRAINT servicios_y_vehiculos_servicio_id_foreign
    FOREIGN KEY (servicio_id)
    REFERENCES servicios_de_vehiculos(id);

ALTER TABLE servicios_y_vehiculos
    ADD CONSTRAINT servicios_y_vehiculos_patente_id_foreign
    FOREIGN KEY (patente)
    REFERENCES vehiculos(patente);

ALTER TABLE ventas
    ADD CONSTRAINT ventas_user_id_foreign
    FOREIGN KEY (user_id)
    REFERENCES users(id);

ALTER TABLE vuelos
    ADD CONSTRAINT vuelos_detalle_venta_vuelo_id_foreign
    FOREIGN KEY (detalle_venta_vuelo_id)
    REFERENCES detalles_ventas_vuelos(id);

-- PostgreSQL database dump
--

-- Dumped from database version 11.1
-- Dumped by pg_dump version 11.0

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.users VALUES (1, 'David', 'Schroeder', 'hdoyle@example.org', '2018-12-28 12:14:35', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Colaborador', 'sed', 'non', 'Montenegro', 3853, 6406, 9668, '227-365-1295', 'Normal', '1989-03-20', 'f2jIaYW5aY', '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.users VALUES (2, 'Dexter', 'Howe', 'gzemlak@example.com', '2018-12-28 12:14:35', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Usuario', 'ut', 'qui', 'Faroe Islands', 1643, 5554, 597, '+1 (287) 983-6348', 'Platinum', '2017-07-07', 'UhEOgQNAc3', '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.users VALUES (3, 'Sarah', 'Stracke', 'jfadel@example.com', '2018-12-28 12:14:35', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Colaborador', 'ea', 'earum', 'Solomon Islands', 2812, 8181, 3767, '(527) 626-4156', 'Normal', '2015-08-19', 'lIJTQnGKRi', '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.users VALUES (4, 'Hunter', 'Schoen', 'sadye.tillman@example.com', '2018-12-28 12:14:35', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Colaborador', 'dolor', 'quas', 'Turkmenistan', 7610, 1678, 7129, '640-922-6114', 'Platinum', '2001-05-17', 'to9Zt9CHc8', '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.users VALUES (5, 'Kamren', 'Ferry', 'jane99@example.com', '2018-12-28 12:14:35', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Usuario', 'aspernatur', 'illum', 'United States of America', 3717, 9377, 2207, '+1-742-955-4433', 'Premium', '2004-09-20', 'v05vfp7Hv8', '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.users VALUES (6, 'Cornell', 'Halvorson', 'ewitting@example.net', '2018-12-28 12:14:35', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Colaborador', 'est', 'accusamus', 'Colombia', 1138, 6293, 5276, '308.686.6015 x4521', 'Normal', '1998-05-07', 'ozFWjm5TVB', '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.users VALUES (7, 'Winnifred', 'Gutkowski', 'kreiger.margret@example.org', '2018-12-28 12:14:35', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Usuario', 'rerum', 'nisi', 'Haiti', 9575, 4256, 2172, '+1-773-336-2668', 'Platinum', '2015-11-19', 'ofpLOx2Mq7', '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.users VALUES (8, 'Marilie', 'Daugherty', 'diana.reynolds@example.net', '2018-12-28 12:14:35', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Colaborador', 'dolores', 'quas', 'Isle of Man', 714, 6852, 1748, '627.529.3088', 'Normal', '2010-09-14', 'spf6oqMGrx', '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.users VALUES (9, 'Vincenzo', 'Cronin', 'hackett.zander@example.org', '2018-12-28 12:14:35', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Usuario', 'velit', 'quisquam', 'United Arab Emirates', 2579, 1462, 6879, '1-491-941-6608', 'Normal', '2004-06-25', 'lzmSTE1GYb', '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.users VALUES (10, 'Lelia', 'Fritsch', 'rae61@example.com', '2018-12-28 12:14:35', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Usuario', 'quas', 'autem', 'Macedonia', 7860, 6953, 823, '610.692.6895 x5277', 'Normal', '2015-05-10', 'mlnfRq4xPQ', '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.users VALUES (11, 'Lia', 'Purdy', 'birdie09@example.net', '2018-12-28 12:14:35', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Usuario', 'magni', 'sapiente', 'Congo', 8726, 6111, 8942, '732.227.7366', 'Platinum', '1999-06-22', 'm8EDHAVlJz', '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.users VALUES (12, 'Jaylon', 'Stamm', 'mack37@example.net', '2018-12-28 12:14:35', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Usuario', 'adipisci', 'sequi', 'Lebanon', 5327, 8597, 8397, '+1.805.503.6612', 'Premium', '1993-07-20', 'R9vbNxO9dB', '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.users VALUES (13, 'Donny', 'Windler', 'melyssa.lang@example.com', '2018-12-28 12:14:35', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Colaborador', 'ut', 'non', 'Netherlands', 3954, 7875, 160, '(324) 443-4821 x255', 'Premium', '1979-03-23', 'NwZvvNtZP2', '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.users VALUES (14, 'Isadore', 'Corwin', 'rowe.arielle@example.org', '2018-12-28 12:14:35', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Usuario', 'eveniet', 'aut', 'Isle of Man', 6795, 9609, 1815, '1-635-746-3173 x98300', 'Premium', '2014-01-28', 'EFAFbUpOTB', '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.users VALUES (15, 'Margarete', 'Ferry', 'noemy.kilback@example.com', '2018-12-28 12:14:35', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Usuario', 'voluptatum', 'consequatur', 'Libyan Arab Jamahiriya', 6961, 5680, 2422, '1-497-598-1922', 'Normal', '2001-08-27', 'bY9wVqgYF2', '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.users VALUES (16, 'Tony', 'Powlowski', 'odeckow@example.org', '2018-12-28 12:14:35', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Usuario', 'itaque', 'atque', 'Djibouti', 1794, 8362, 9901, '1-356-832-5463', 'Normal', '1976-09-02', 'hBKRkNzIAf', '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.users VALUES (17, 'Peggie', 'Boyer', 'dominique10@example.net', '2018-12-28 12:14:35', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Usuario', 'eum', 'inventore', 'Tanzania', 524, 8179, 3699, '(864) 836-9590 x156', 'Normal', '1980-10-09', 'PdG0Be3dlY', '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.users VALUES (18, 'Dejuan', 'Berge', 'uprosacco@example.com', '2018-12-28 12:14:35', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Colaborador', 'sed', 'expedita', 'Saint Martin', 2169, 2218, 6522, '+1 (984) 560-3050', 'Premium', '1980-03-20', 'm8mU3ozgDf', '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.users VALUES (19, 'Louie', 'Russel', 'haylee.koch@example.com', '2018-12-28 12:14:35', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Usuario', 'qui', 'rerum', 'Nauru', 1495, 9695, 518, '(825) 467-0501 x914', 'Normal', '2009-02-28', 'mWWhvjFKjt', '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.users VALUES (20, 'Omar', 'Carrasco', 'omar.carrasco@usach.cl', NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Administrador', NULL, NULL, 'Chile', 9999, 9999, 9999, '942723136', 'Premium', '1996-06-27', NULL, '2018-12-28 12:14:35', '2018-12-28 12:14:35');


--
-- Data for Name: acciones; Type: TABLE DATA; Schema: public; Owner: guillermo
--



--
-- Data for Name: aeropuertos; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.aeropuertos VALUES (1, 'Slovakia (Slovak Republic)', 'New Alfordhaven', '4909 Monroe Field
Swiftton, NV 27069-2145', 'Kertzmann, Kreiger and Crooks', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aeropuertos VALUES (2, 'Korea', 'Wymanview', '343 Nina Prairie
Keonville, AZ 81231-1156', 'Wisoky-Treutel', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aeropuertos VALUES (3, 'Romania', 'Deannafort', '53299 Durgan Turnpike Suite 653
East Thora, PA 17414', 'Farrell-Grimes', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aeropuertos VALUES (4, 'Swaziland', 'Baileyview', '3404 Mitchell Falls
South Hazleshire, VT 95286-4798', 'Altenwerth-Welch', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aeropuertos VALUES (5, 'Slovakia (Slovak Republic)', 'Thielton', '8936 Corwin Ferry Apt. 640
New Kayli, AK 02950', 'Orn-Treutel', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aeropuertos VALUES (6, 'Lao People''s Democratic Republic', 'Robynland', '7086 Hagenes Branch Apt. 369
Karliberg, DC 90496-9699', 'Ebert and Sons', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aeropuertos VALUES (7, 'Bahamas', 'Port Faye', '886 Raul Loaf Suite 112
Clotildestad, PA 91131-7557', 'Hayes Ltd', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aeropuertos VALUES (8, 'Macao', 'North Sabryna', '374 Mohr Track Apt. 608
Oberbrunnershire, TX 71975-2379', 'Kling-Botsford', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aeropuertos VALUES (9, 'Malawi', 'Beahanborough', '279 Mosciski Drive
West Aglae, DC 64038-0447', 'Hegmann-Fay', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aeropuertos VALUES (10, 'Saint Vincent and the Grenadines', 'Bernardland', '85525 Hoeger Fords
South Mabel, IA 29654', 'Orn, Hahn and Reichert', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aeropuertos VALUES (11, 'Slovenia', 'East Elnora', '178 Florida Meadow
Lake Russeltown, IL 77185-9064', 'Haley, Upton and O''Keefe', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aeropuertos VALUES (12, 'Libyan Arab Jamahiriya', 'Danielfort', '43171 Izaiah Motorway Suite 654
Collinsport, CA 95339-7928', 'Lindgren Ltd', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aeropuertos VALUES (13, 'Dominican Republic', 'Port Marlonmouth', '2216 Camilla Squares
Donnellystad, AZ 77027', 'Bechtelar Group', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aeropuertos VALUES (14, 'Sweden', 'Klockoside', '1561 Witting Parks
Lehnerberg, OH 67276', 'Mayert-Gislason', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aeropuertos VALUES (15, 'Mexico', 'Kulasville', '90657 Graham Freeway
Cotyfort, MN 77546', 'Considine and Sons', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aeropuertos VALUES (16, 'French Guiana', 'Carolynemouth', '28778 Alexandrea Ridge Apt. 441
East Olaffurt, RI 56587-7600', 'Nienow, Jakubowski and Marvin', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aeropuertos VALUES (17, 'Montenegro', 'South Cali', '407 Troy Plain
Gislasonmouth, TX 18126-3832', 'Kunde Group', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aeropuertos VALUES (18, 'Sudan', 'West Rafaelland', '36509 Corine Summit
East Laynemouth, NY 77641-7284', 'Blanda-Greenfelder', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aeropuertos VALUES (19, 'Reunion', 'South Macieshire', '169 Schultz Camp Apt. 785
Brownbury, IN 45001-3614', 'Weissnat-Johns', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aeropuertos VALUES (20, 'Spain', 'Rogahntown', '441 Kelly Lock
Purdyville, WY 65552-2046', 'Armstrong-Herman', '2018-12-28 12:14:37', '2018-12-28 12:14:37');


--
-- Data for Name: calendarios_alojamientos; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.calendarios_alojamientos VALUES (1, 2012, 'March', 21, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_alojamientos VALUES (2, 2017, 'March', 14, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_alojamientos VALUES (3, 2002, 'September', 14, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_alojamientos VALUES (4, 1977, 'August', 15, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_alojamientos VALUES (5, 2006, 'July', 15, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_alojamientos VALUES (6, 1977, 'November', 16, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_alojamientos VALUES (7, 1991, 'September', 27, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_alojamientos VALUES (8, 1985, 'January', 11, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_alojamientos VALUES (9, 1984, 'September', 9, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_alojamientos VALUES (10, 1977, 'October', 3, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_alojamientos VALUES (11, 2011, 'September', 11, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_alojamientos VALUES (12, 1998, 'September', 8, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_alojamientos VALUES (13, 1974, 'November', 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_alojamientos VALUES (14, 2000, 'November', 9, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_alojamientos VALUES (15, 1990, 'October', 21, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_alojamientos VALUES (16, 2018, 'March', 18, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_alojamientos VALUES (17, 1972, 'July', 26, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_alojamientos VALUES (18, 2013, 'March', 14, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_alojamientos VALUES (19, 1981, 'May', 7, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_alojamientos VALUES (20, 1999, 'January', 19, '2018-12-28 12:14:36', '2018-12-28 12:14:36');


--
-- Data for Name: alojamientos_privados; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.alojamientos_privados VALUES (2, 10, 31932, '94023 Bernadine River
Tatyanaland, AL 58438', 'Judy Weissnat V', 4, 2, 'Nicaragua', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_privados VALUES (4, 4, 681524, '4008 Bridget Camp Suite 340
North Orrin, IN 41378-2723', 'Dr. Joan Reichert', 4, 0, 'Mozambique', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_privados VALUES (5, 14, 701871, '609 Flatley Meadows Apt. 977
Alfordfort, MA 53517-8120', 'Newell Borer', 1, 4, 'Lebanon', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_privados VALUES (6, 5, 552773, '4151 Anastacio Lights Suite 703
Aufderharshire, AK 96471', 'Aisha Mante', 5, 0, 'Georgia', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_privados VALUES (7, 8, 491620, '5582 Lorna Mountain
Christyborough, NJ 13284', 'Miss Susana Osinski III', 5, 4, 'Bolivia', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_privados VALUES (8, 7, 744558, '39390 Isidro Islands
Cornellside, MT 02709', 'Lourdes Hessel', 5, 4, 'Switzerland', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_privados VALUES (9, 18, 297919, '969 Tatum Locks Suite 033
East Ettieport, IA 55691', 'Pietro Bartoletti', 1, 5, 'Brunei Darussalam', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_privados VALUES (10, 14, 574951, '546 Corene Tunnel Suite 993
Tremaineshire, CO 24311-3216', 'Ms. Lauryn Jacobs', 2, 1, 'Korea', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_privados VALUES (11, 3, 705862, '1481 Shanahan Street Apt. 691
Lake Adelashire, CO 52836-9828', 'Petra Hodkiewicz', 0, 4, 'Netherlands', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_privados VALUES (12, 12, 764970, '5417 Johnson Village Suite 599
Camilatown, KS 69604', 'Alfreda Bahringer', 3, 3, 'Greenland', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_privados VALUES (13, 11, 777115, '3501 Einar Bridge Apt. 786
West Grover, CO 47734', 'King Friesen', 5, 3, 'Palau', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_privados VALUES (14, 14, 908456, '16745 Ziemann Knoll Suite 083
Haleyton, RI 21225-9130', 'Miss Eudora Boehm', 3, 5, 'Bulgaria', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_privados VALUES (15, 7, 362205, '1345 Jacobs Stream Apt. 001
Bayershire, MD 94198-5363', 'Dr. Ezra Schneider IV', 5, 5, 'Congo', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_privados VALUES (16, 3, 808086, '825 Collins Motorway
Aylinview, UT 32965-9567', 'Alverta Wiegand', 3, 4, 'Trinidad and Tobago', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_privados VALUES (17, 5, 684218, '39793 Oral Freeway
Stehrfurt, NM 25996-9260', 'Omer Rice MD', 4, 5, 'Guinea', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_privados VALUES (18, 19, 357854, '7147 Tressa Ridges Apt. 800
Port Rosiemouth, SC 97020', 'Doug Kirlin', 0, 5, 'Costa Rica', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_privados VALUES (19, 15, 420827, '26027 Cassidy Lake
South Danielle, AK 65449', 'Armando Gaylord', 3, 4, 'Italy', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_privados VALUES (20, 18, 938910, '709 Bailey Island Apt. 930
Lake Elijahton, NC 46834-7538', 'Roy Miller', 2, 0, 'Vietnam', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_privados VALUES (21, 10, 31932, '94023 Bernadine River
Tatyanaland, AL 58438', 'Judy Weissnat V', 4, 2, 'Nicaragua', '2018-12-28 12:26:14', '2018-12-28 12:26:14');
INSERT INTO public.alojamientos_privados VALUES (3, 10, 31932, '94023 Bernadine River
Tatyanaland, AL 58438', 'Judy Weissnat V', 4, 2, 'Nicaragua', '2018-12-28 12:14:36', '2018-12-28 12:30:59');


--
-- Data for Name: hoteles; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.hoteles VALUES (1, 'Kassulke-Quigley', 'Iran', '1451 Connelly Springs
Johnsonborough, NC 92916', 4, 4, 964423, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.hoteles VALUES (2, 'Dare and Sons', 'Cayman Islands', '902 Daren Ridge
New Eileenville, CA 00260', 2, 5, 317954, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.hoteles VALUES (3, 'Mante-Zieme', 'Isle of Man', '329 Strosin Mill Suite 777
Olsonstad, OH 70339', 1, 7, 978402, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.hoteles VALUES (4, 'Harvey Group', 'Antigua and Barbuda', '1915 Florine Branch Suite 647
O''Harahaven, NV 44261-405', 1, 10, 396333, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.hoteles VALUES (5, 'Jacobi, Volkman and Nienow', 'Lesotho', '5581 Mohr Oval Apt. 242
Rodriguezmouth, NE 10977-8088', 3, 9, 331042, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.hoteles VALUES (6, 'Goyette, Pagac and Jacobs', 'Suriname', '61238 Kuvalis Square
Wendymouth, IN 41463-6618', 3, 1, 245039, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.hoteles VALUES (7, 'Reinger-Botsford', 'Barbados', '63197 Kovacek Ridges Apt. 135
Bradfordborough, NJ 40982', 2, 0, 591945, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.hoteles VALUES (8, 'Borer PLC', 'Lao People''s Democratic Republic', '328 Bruce Trafficway
Lueberg, DE 76410', 3, 9, 332648, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.hoteles VALUES (9, 'Abbott-Steuber', 'Belize', '976 Swift Hill
East Rettachester, MD 29978', 5, 7, 311383, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.hoteles VALUES (10, 'Nitzsche and Sons', 'Saint Martin', '69843 Elinor Mall
North Novella, KY 77869', 4, 8, 570214, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.hoteles VALUES (11, 'Simonis PLC', 'Palestinian Territories', '2624 Bogan Path Apt. 182
New Sylvan, IA 37063-3239', 2, 7, 161474, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.hoteles VALUES (12, 'Buckridge, Thompson and Bayer', 'French Southern Territories', '1343 Wisoky Terrace
West Jermainside, UT 68596', 2, 9, 947789, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.hoteles VALUES (13, 'Kerluke Ltd', 'Qatar', '3661 Alfonso Ramp Suite 961
Port Keonton, AL 78400-9770', 5, 3, 580397, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.hoteles VALUES (14, 'Emmerich-Kohler', 'Benin', '7082 Maxie Plaza Suite 785
Mitchelbury, MO 33065-8579', 5, 2, 26314, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.hoteles VALUES (15, 'Bartell-Champlin', 'Croatia', '8918 Haylee Burgs Apt. 849
Floridatown, MT 85632-5444', 1, 4, 394030, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.hoteles VALUES (16, 'Kunze-Thiel', 'Greenland', '972 Rohan Haven
O''Keefeborough, KY 72309-2609', 4, 5, 167073, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.hoteles VALUES (17, 'Koelpin-Carter', 'Barbados', '904 Jerel Inlet
Port Alisonhaven, NV 38205', 3, 6, 462607, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.hoteles VALUES (18, 'Littel, Jacobson and Hammes', 'Niger', '77694 Zieme Fort Apt. 123
Jastside, SC 30188', 4, 10, 471725, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.hoteles VALUES (19, 'Fay Group', 'Netherlands', '20627 Koepp Radial Apt. 128
Stanleychester, AZ 14716', 5, 9, 985738, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.hoteles VALUES (20, 'Sporer Inc', 'Norfolk Island', '8017 Lemke Wells
Dominicberg, AR 56989', 3, 3, 483667, '2018-12-28 12:14:36', '2018-12-28 12:14:36');


--
-- Data for Name: servicios_alojamientos; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.servicios_alojamientos VALUES (1, 10, 'Dr. Joyce McDermott V', 118258, 'Enim sunt repellat magni explicabo. Eveniet quia ea blanditiis est corporis cumque voluptatibus. Suscipit officiis facilis et voluptatibus. Consectetur neque est dolor est modi.', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_alojamientos VALUES (2, 5, 'Willis Hickle', 480528, 'Repellendus et animi repudiandae modi aspernatur voluptatum dolores. Quo magni deserunt distinctio maxime. Ab eum nesciunt est natus laborum aut. Adipisci culpa reprehenderit eum dolor qui itaque.', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_alojamientos VALUES (3, 11, 'Benjamin Fadel', 252291, 'Repellendus laborum et sequi doloribus et est molestiae. Voluptatem excepturi debitis quo eveniet. Dolorem est tenetur est sed. Laboriosam dignissimos laudantium ea et.', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_alojamientos VALUES (4, 3, 'Alicia Murray', 461698, 'Excepturi quae et sit dolor aut fugiat. Numquam inventore voluptates laboriosam repellat. Tenetur recusandae nisi enim ea ratione iste.', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_alojamientos VALUES (5, 7, 'Ethyl Nitzsche', 509541, 'Qui eveniet aut sed. Praesentium error natus et nisi. Molestias sequi animi et sint sit ratione doloremque. Dicta est ea sed modi eos.', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_alojamientos VALUES (6, 7, 'Ayden Braun', 796169, 'Aut sed voluptas excepturi ipsum ut. Voluptas et quos aspernatur nobis. Voluptatem tenetur dolores sapiente fugit est.', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_alojamientos VALUES (7, 4, 'Dr. Marty McLaughlin Sr.', 533058, 'Praesentium maiores quis vel autem nihil quos. Quos doloribus rerum et et. Provident optio qui et. Alias ut omnis vel facilis similique repellat architecto. Illum et minima aut aut.', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_alojamientos VALUES (8, 17, 'Pierce Krajcik', 247147, 'Voluptate quo natus praesentium corporis rerum. Officia vero impedit ipsam ratione consequatur voluptatem iste. Nam impedit tempore in. Voluptatibus praesentium magnam ut eum optio.', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_alojamientos VALUES (9, 9, 'Dr. Myriam Gusikowski', 953848, 'Veniam vel accusamus deleniti. Tempora praesentium minus eum repudiandae. Non reprehenderit cumque earum illum. Odio incidunt quo itaque repellat.', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_alojamientos VALUES (10, 7, 'Isai Feil', 118090, 'Nobis laudantium consequatur qui laboriosam cumque non. Quaerat natus consequatur eum laudantium et nam. Cum dolores consequatur et eos non. Itaque quidem dignissimos ut qui quae sint esse non.', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_alojamientos VALUES (11, 16, 'Brando Jones', 972348, 'Similique excepturi fugiat ea vitae. Ut necessitatibus quidem excepturi suscipit aspernatur blanditiis. Quia omnis non magni voluptas consequatur tempore. Ut velit illo in rerum sit.', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_alojamientos VALUES (12, 4, 'Mylene McClure', 994664, 'Enim ea nihil fugit a. Quos dolore dolorem magni quo quaerat officiis ipsa omnis. Ea ut impedit et.', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_alojamientos VALUES (13, 20, 'Jeffrey Konopelski', 877305, 'Non est quisquam quia numquam optio. Corporis ad sunt voluptatibus quaerat. Id at non et earum. Et iste accusantium repellat rerum quasi ab voluptas.', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_alojamientos VALUES (14, 18, 'Reuben Wilderman', 598478, 'Accusamus consequatur consequatur suscipit non pariatur exercitationem. Iste hic illo iusto et qui. Ut molestiae dolorum aut et sit veritatis optio.', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_alojamientos VALUES (15, 16, 'Myrna Mills Sr.', 28077, 'Qui molestias provident aut ut in unde vel. Necessitatibus autem et fuga et sint fugit. Eum enim illo corrupti dignissimos error.', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_alojamientos VALUES (16, 3, 'Reina Dickens', 803323, 'Ullam odit est autem deserunt quam. Veritatis cum labore corrupti. Maiores quod sapiente assumenda quos voluptatibus.', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_alojamientos VALUES (17, 13, 'Linnie Hessel', 803682, 'Qui quia voluptas quia maiores consequatur dicta aut. Et ut quam debitis earum nulla. Illum nobis distinctio quibusdam. Quia non voluptas voluptatibus soluta eos blanditiis quia.', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_alojamientos VALUES (18, 3, 'Ms. Robyn Witting', 844776, 'Eos architecto odit ipsa blanditiis totam voluptatem voluptas quis. Aut dolorem blanditiis molestiae sit pariatur minus. Quaerat eos qui tenetur et aperiam cumque cupiditate.', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_alojamientos VALUES (19, 2, 'Glenna Rohan', 877593, 'Rerum dolores dolor sequi velit quasi non. Assumenda voluptatem sunt ipsam. Aliquid rerum voluptas expedita et aliquid in similique minima.', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_alojamientos VALUES (20, 17, 'Chanel Schuppe IV', 684966, 'Alias sit nulla sed fugit natus voluptatem. Quia libero quaerat illo sit ducimus quisquam in. Enim magnam reprehenderit sit provident. Voluptas necessitatibus molestiae repellendus.', '2018-12-28 12:14:36', '2018-12-28 12:14:36');


--
-- Data for Name: alojamientos_servicios; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.alojamientos_servicios VALUES (2, 13, 10, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_servicios VALUES (3, 11, 17, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_servicios VALUES (4, 19, 12, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_servicios VALUES (5, 19, 3, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_servicios VALUES (6, 13, 11, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_servicios VALUES (7, 18, 3, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_servicios VALUES (8, 14, 7, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_servicios VALUES (9, 7, 18, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_servicios VALUES (10, 18, 15, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_servicios VALUES (11, 16, 9, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_servicios VALUES (12, 10, 13, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_servicios VALUES (13, 11, 20, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_servicios VALUES (14, 9, 16, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_servicios VALUES (15, 15, 13, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_servicios VALUES (16, 8, 19, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_servicios VALUES (17, 1, 3, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_servicios VALUES (18, 7, 14, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_servicios VALUES (20, 7, 10, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.alojamientos_servicios VALUES (21, 6, 8, '2018-12-28 12:52:34', '2018-12-28 12:52:34');


--
-- Data for Name: companias; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.companias VALUES (1, 'Lueilwitz Ltd', '681 Bayer Knoll
Port Tarynton, WI 74488', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.companias VALUES (2, 'Hansen, Langworth and Weissnat', '65198 Santina Ridge
Port Skyla, MN 03160-6745', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.companias VALUES (3, 'Lemke-Hagenes', '18245 Bonnie Divide
South Brandynmouth, OR 64426-6046', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.companias VALUES (4, 'Schultz, Schulist and Hagenes', '8352 Hartmann Forges Suite 575
North Julienhaven, MI 65250-8880', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.companias VALUES (5, 'Muller Group', '41183 Block Mall
Tressiechester, NV 13353', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.companias VALUES (6, 'Berge, Nolan and Rau', '19693 Hahn Courts
Abbottmouth, NJ 52813-7250', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.companias VALUES (7, 'Daniel, Stracke and Hessel', '93450 Adams Ridges Apt. 874
South Althea, DC 71764-4436', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.companias VALUES (8, 'Smitham Inc', '688 Strosin Inlet
Fabianton, CT 11617-0498', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.companias VALUES (9, 'Erdman and Sons', '342 Ellen Trail
East Orrin, PA 64800-3656', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.companias VALUES (10, 'Wiegand-Altenwerth', '458 Corwin Knoll Apt. 261
East Everardofurt, OK 29923-8389', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.companias VALUES (11, 'Monahan Inc', '8951 Hudson Haven
Lake Reba, CT 03825', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.companias VALUES (12, 'Bernhard, Kirlin and Mraz', '50132 Elias Brook
Coletown, ID 06657-8715', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.companias VALUES (13, 'Wilkinson-Bernier', '7124 Wuckert Forges Apt. 957
Wiegandland, OK 88968', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.companias VALUES (14, 'Rowe-Jones', '506 Celestine Inlet
Welchville, NV 49121', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.companias VALUES (15, 'Borer-Turcotte', '44920 Crist Village
New Magdalenhaven, WA 94618', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.companias VALUES (16, 'Heaney-Vandervort', '840 Pink Trail Suite 073
Port Ruthie, DE 30063', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.companias VALUES (17, 'Hoppe, Hegmann and Jacobi', '90309 Kobe Stream
Cordellstad, AZ 00529', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.companias VALUES (18, 'Ankunding-Schmitt', '4916 Kihn Alley
Fabianburgh, ID 00745-4939', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.companias VALUES (19, 'McClure Inc', '75983 Crona Alley Apt. 020
Makenziemouth, DE 81775', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.companias VALUES (20, 'Hilpert-Hermiston', '6046 Maggio Lake Suite 853
Lake Ressiechester, NJ 33028', '2018-12-28 12:14:37', '2018-12-28 12:14:37');


--
-- Data for Name: aviones; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.aviones VALUES (1, 14, 'Daniel', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aviones VALUES (2, 15, 'Greenfelder', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aviones VALUES (3, 15, 'Bednar', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aviones VALUES (4, 3, 'Hessel', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aviones VALUES (5, 17, 'Okuneva', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aviones VALUES (6, 14, 'Muller', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aviones VALUES (7, 8, 'Labadie', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aviones VALUES (8, 8, 'Maggio', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aviones VALUES (9, 2, 'Balistreri', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aviones VALUES (10, 9, 'McKenzie', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aviones VALUES (11, 19, 'O''Connell', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aviones VALUES (12, 17, 'Toy', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aviones VALUES (13, 17, 'Watsica', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aviones VALUES (14, 19, 'Stoltenberg', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aviones VALUES (15, 17, 'Gerlach', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aviones VALUES (16, 4, 'Fay', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aviones VALUES (17, 10, 'Gerlach', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aviones VALUES (18, 9, 'McGlynn', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aviones VALUES (19, 16, 'Carter', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.aviones VALUES (20, 15, 'Tromp', '2018-12-28 12:14:37', '2018-12-28 12:14:37');


--
-- Data for Name: asientos; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.asientos VALUES (1, 7, 3, 'f', 'doble', 'business', true, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.asientos VALUES (2, 15, 7, 'j', 'discapacitados', 'turista', true, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.asientos VALUES (3, 6, 1, 'j', 'cama', 'turista', true, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.asientos VALUES (4, 2, 2, 'h', 'cama', 'turista', true, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.asientos VALUES (5, 4, 1, 'b', 'cama', 'premium', false, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.asientos VALUES (6, 20, 7, 'o', 'discapacitados', 'premium', true, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.asientos VALUES (7, 12, 5, 'p', 'doble', 'premium', false, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.asientos VALUES (8, 9, 8, 'a', 'cama', 'business', false, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.asientos VALUES (9, 4, 6, 'g', 'doble', 'turista', false, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.asientos VALUES (10, 11, 2, 'l', 'cama', 'turista', true, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.asientos VALUES (11, 5, 0, 'm', 'doble', 'turista', false, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.asientos VALUES (12, 20, 8, 'e', 'discapacitados', 'premium', false, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.asientos VALUES (13, 9, 0, 'k', 'cama', 'business', false, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.asientos VALUES (14, 16, 0, 'k', 'cama', 'premium', true, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.asientos VALUES (15, 17, 9, 's', 'doble', 'business', false, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.asientos VALUES (16, 18, 0, 'l', 'cama', 'premium', true, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.asientos VALUES (17, 8, 6, 'o', 'discapacitados', 'business', true, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.asientos VALUES (18, 7, 5, 'd', 'discapacitados', 'business', false, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.asientos VALUES (19, 20, 2, 'k', 'discapacitados', 'business', true, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.asientos VALUES (20, 18, 2, 'n', 'doble', 'premium', false, '2018-12-28 12:14:37', '2018-12-28 12:14:37');


--
-- Data for Name: calendarios_vehiculos; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.calendarios_vehiculos VALUES (1, 1984, 'May', 11, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.calendarios_vehiculos VALUES (2, 2002, 'August', 27, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_vehiculos VALUES (3, 1978, 'August', 19, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_vehiculos VALUES (4, 2002, 'August', 17, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_vehiculos VALUES (5, 2018, 'November', 2, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_vehiculos VALUES (6, 2007, 'May', 15, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_vehiculos VALUES (7, 2000, 'July', 2, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_vehiculos VALUES (8, 1997, 'July', 16, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_vehiculos VALUES (9, 1972, 'July', 4, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_vehiculos VALUES (10, 1997, 'May', 5, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_vehiculos VALUES (11, 2015, 'February', 24, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_vehiculos VALUES (12, 2012, 'March', 14, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_vehiculos VALUES (13, 2013, 'November', 25, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_vehiculos VALUES (14, 2003, 'April', 9, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_vehiculos VALUES (15, 2012, 'November', 22, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_vehiculos VALUES (16, 2001, 'April', 23, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_vehiculos VALUES (17, 1971, 'April', 25, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_vehiculos VALUES (18, 2018, 'November', 8, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_vehiculos VALUES (19, 1998, 'June', 12, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.calendarios_vehiculos VALUES (20, 2018, 'February', 4, '2018-12-28 12:14:36', '2018-12-28 12:14:36');


--
-- Data for Name: proveedores; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.proveedores VALUES (1, 'veritatis', 'Temporibus laboriosam et eveniet animi. Exercitationem officiis rerum ut quisquam alias nesciunt nihil. Dolores delectus incidunt a assumenda placeat aspernatur.', 'Sit esse mollitia earum rerum voluptatum sit. Cum dolore ab assumenda. Pariatur impedit distinctio cum quod. Dignissimos quia nostrum aspernatur rerum eaque.', 5, 38572, 57626, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.proveedores VALUES (2, 'id', 'Nihil est velit excepturi dolor cum ea reiciendis. Illum deleniti qui est facilis repellendus. Porro fugiat facilis ut quis.', 'Deserunt minus qui ullam omnis voluptate earum sunt quod. Doloremque et et nobis nisi quidem. Sit voluptates quam numquam rem consequuntur.', 3, 46509, 90321, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.proveedores VALUES (3, 'deleniti', 'Pariatur ut ducimus iusto repellendus. Ut quis amet enim porro maiores fugit. Iure voluptatem ut neque aut nulla accusantium. Ut id deserunt et illo. Eaque fuga hic ex aut ipsa repudiandae iusto.', 'Eum voluptatem vitae harum consequuntur tempore quisquam et. Doloremque repudiandae placeat adipisci rem rem. Expedita ut ut necessitatibus. Ut sapiente adipisci et aliquam enim veritatis ratione.', 4, 58124, 87229, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.proveedores VALUES (4, 'ut', 'Hic dicta est modi ipsam. Quo vel itaque voluptas in aut ex eaque. Vitae omnis omnis quo et et quo vero. Magnam consequatur alias enim maxime dicta et eaque expedita.', 'Quia ut voluptas doloribus rerum. Quia commodi corporis id fuga eum quod. Ratione quam dolor non. Vel minima quia mollitia qui est.', 5, 86293, 41923, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.proveedores VALUES (5, 'dolorem', 'Aut quaerat culpa nam. Perferendis maxime ea necessitatibus voluptate qui at blanditiis. Sequi non molestias qui iusto blanditiis accusamus.', 'Deleniti accusamus est velit quia et. Voluptatem eaque excepturi natus sunt eum. Voluptatibus odit hic nesciunt ipsam harum.', 2, 76243, 50207, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.proveedores VALUES (6, 'neque', 'Occaecati modi et reiciendis repudiandae. Nisi et recusandae delectus ab est rerum. Officia cupiditate beatae rerum totam. Qui non consequatur praesentium.', 'Velit ullam distinctio nulla voluptates. Adipisci iste voluptatibus dolore architecto. Provident unde eveniet molestiae quidem cupiditate ut amet.', 1, 67299, 38800, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.proveedores VALUES (7, 'et', 'Vitae sapiente labore at facilis id blanditiis aliquam. Ea consequatur deleniti rerum enim. Et officia sit molestiae.', 'Enim beatae reiciendis omnis ab aliquam quia nemo deleniti. Quaerat itaque laborum aperiam dolorem qui animi. Explicabo quisquam rerum inventore atque.', 1, 93248, 62663, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.proveedores VALUES (8, 'nostrum', 'Nihil accusamus similique quos velit ipsum quasi. Facere odit odit dolores omnis quasi. Qui dicta occaecati sit voluptas dignissimos harum molestiae. Cum non temporibus quia quia hic.', 'Nostrum aliquid id ut ea repellendus. Facilis et dolores voluptatem molestiae et. Amet et voluptatem nemo numquam dolorem in voluptatem.', 2, 19744, 94890, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.proveedores VALUES (9, 'sequi', 'Ut at voluptate minus molestiae voluptatem. Aut consequatur qui laboriosam et nulla sit perferendis. Qui animi veniam fugit sit non ut a aut. Dolor nihil qui et itaque quaerat aut possimus.', 'Id consequuntur eveniet molestias laborum. Sint totam pariatur ullam velit dolorem ut. Est iusto consequatur perspiciatis.', 1, 69899, 61119, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.proveedores VALUES (10, 'est', 'Ut ea aspernatur sunt amet dolorum. Maxime iusto quam animi quis eum dolor repellat. Est occaecati quasi occaecati delectus voluptatem. In molestiae nihil at ut suscipit.', 'Excepturi doloribus id totam aut in. Vel voluptatem perspiciatis velit iusto deleniti. Ut et maiores debitis hic. Accusamus incidunt facilis voluptatem molestiae perspiciatis sed.', 4, 70082, 47315, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.proveedores VALUES (11, 'similique', 'Maxime ut et dicta qui. Unde laboriosam aut sapiente et sed praesentium. Id cum accusantium voluptates nihil.', 'Qui qui porro error neque. Explicabo quo cumque est. Qui molestiae tenetur aut culpa id. Mollitia sunt est est sunt aut et ut ut.', 4, 81937, 84737, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.proveedores VALUES (12, 'eaque', 'Sunt accusamus et placeat suscipit facilis. Praesentium a quis autem minus tenetur dolorem. Assumenda nisi esse omnis. Porro at numquam repellat et natus cumque ea.', 'Omnis ducimus ad nisi. In est dolores alias recusandae inventore. Minima vero neque cum dolores. Expedita laboriosam possimus quaerat minus est tenetur. Tempore enim aliquid voluptates sed omnis.', 5, 42188, 72189, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.proveedores VALUES (13, 'velit', 'Laborum fugit occaecati sint tempora iusto velit. Suscipit harum corrupti et cupiditate ex accusamus. Facere natus ipsum incidunt ut autem neque.', 'Quos non nemo autem velit aspernatur sint. Quaerat nam ipsam dolorum. Quos eum non quam nostrum veritatis.', 1, 59279, 87540, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.proveedores VALUES (14, 'et', 'Vitae omnis dolorem deleniti consequuntur debitis facere alias beatae. Illum dignissimos eligendi repudiandae deleniti dignissimos non non.', 'Possimus eum impedit nemo ducimus accusamus non et. Deserunt repellat cumque veritatis repellat dicta. Numquam nesciunt perferendis tempore voluptatem sed porro.', 5, 67000, 94051, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.proveedores VALUES (15, 'odio', 'A dolore quis asperiores neque nostrum corporis aperiam possimus. Voluptates nemo cupiditate esse deleniti ut dicta. Amet dicta et eos tempore.', 'Fugiat dicta qui vero quia. Et officiis vero molestiae consequuntur et quod consequuntur vel. Eaque enim sunt omnis sunt aut temporibus magni voluptatem.', 5, 34284, 44377, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.proveedores VALUES (16, 'nobis', 'Repellat ut at aliquam molestiae. Impedit est eius illo sint reiciendis veritatis voluptatem. Debitis et velit esse.', 'Dolorem iure officia exercitationem exercitationem officia et. Velit id nihil tenetur. Maxime temporibus ad rerum molestias ab voluptas. Sint nemo nemo eum dolor.', 5, 63574, 77768, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.proveedores VALUES (17, 'necessitatibus', 'Ullam commodi non necessitatibus id quibusdam dignissimos unde. Odit totam ipsam impedit. Aspernatur dolorem ut similique. Fugiat cum consequatur ut explicabo maiores.', 'Voluptatibus quos dolor hic inventore sed molestias omnis aspernatur. Et dolor perspiciatis sit enim ad et voluptatem. Cumque beatae minus optio animi error. Est animi eum culpa cupiditate aliquam.', 3, 67753, 69711, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.proveedores VALUES (18, 'minima', 'Accusamus error cum doloribus quia occaecati est architecto. Qui et dolor sunt at rem. Repellendus quae et doloribus vel. Veritatis inventore molestias blanditiis recusandae tenetur nostrum.', 'Fugit accusantium et perspiciatis impedit quod aut porro. Ut rem qui quo possimus et odio sit. Recusandae occaecati veniam repudiandae fugit id.', 1, 45178, 58095, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.proveedores VALUES (19, 'rem', 'Velit odit voluptas ipsum magnam. Sunt quisquam laboriosam qui a laudantium laborum doloremque ullam. Voluptatem voluptas consequatur est molestias qui accusamus.', 'Necessitatibus ipsam animi suscipit excepturi eum. Eligendi consequatur exercitationem repellat sed eligendi unde. Ut doloribus voluptas ut eveniet reprehenderit facere est.', 1, 75932, 34000, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.proveedores VALUES (20, 'consequatur', 'Ut aut velit quia earum maiores esse nihil. Vel excepturi nihil deleniti libero voluptatum aut quaerat. Distinctio modi tenetur non autem.', 'Pariatur repudiandae doloribus consequuntur optio reprehenderit quidem. Natus est optio officiis. Sit nihil quia ducimus incidunt soluta totam et.', 2, 56851, 49112, '2018-12-28 12:14:36', '2018-12-28 12:14:36');


--
-- Data for Name: zonas; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.zonas VALUES (1, 'Wyoming', '1472 Christian Heights Suite 792
Lindgrenstad, VA 00558-8041', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.zonas VALUES (2, 'Iowa', '485 Purdy Crest Apt. 104
New Dessieberg, KS 27723', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.zonas VALUES (3, 'Wyoming', '63590 Okey Junction Suite 386
Americobury, KY 25108', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.zonas VALUES (4, 'Utah', '15961 Christiansen Estates
Schroedermouth, FL 51115-0452', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.zonas VALUES (5, 'New Mexico', '3336 Harrison Station
Lake Ransomview, TN 37539', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.zonas VALUES (6, 'Delaware', '3331 Isaiah Inlet
North Jaylon, MN 83102', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.zonas VALUES (7, 'Tennessee', '10937 Bethany Port Apt. 322
Aliciashire, MO 64487', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.zonas VALUES (8, 'New Hampshire', '41694 Tromp Circle Apt. 437
Konopelskistad, ME 72125-7493', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.zonas VALUES (9, 'Massachusetts', '182 Gutmann Dale Suite 141
Shannabury, MI 44559', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.zonas VALUES (10, 'Connecticut', '89717 Homenick Point
Bartonmouth, MN 72958', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.zonas VALUES (11, 'Indiana', '634 Skiles Springs Suite 774
Crooksport, WI 45929', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.zonas VALUES (12, 'Nebraska', '604 Tremblay Lights
Rennerfurt, RI 11336-6949', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.zonas VALUES (13, 'Maine', '689 Olson Common Apt. 708
West Narcisoberg, NH 80645-9204', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.zonas VALUES (14, 'Texas', '47685 Pearl Locks
North Margarita, MD 62148', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.zonas VALUES (15, 'Massachusetts', '744 Will Tunnel Apt. 301
North Ocie, ME 30305', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.zonas VALUES (16, 'South Dakota', '125 Edwardo Track
DuBuqueville, WI 23037', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.zonas VALUES (17, 'Colorado', '755 Jonathan Islands Suite 920
Port Candelariohaven, IA 47399', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.zonas VALUES (18, 'New Hampshire', '4335 Keeling Trafficway Apt. 514
New Friedrich, IL 48940', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.zonas VALUES (19, 'Wyoming', '1670 Asia Landing Apt. 038
Port Micheal, KY 37356', '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.zonas VALUES (20, 'Tennessee', '3232 Mills Plaza
Reyesbury, CO 30664', '2018-12-28 12:14:36', '2018-12-28 12:14:36');


--
-- Data for Name: vehiculos; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.vehiculos VALUES (1, 'NJ02 JRL', 6, 15, 14, 'Mercedes', 'Minivan', 'Media', 'Automática', 'Petróleo', 2, 4, 4, 4, 29688, 77933, false, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.vehiculos VALUES (2, 'RC07 WUZ', 1, 7, 7, 'Peugeot', 'Camioneta', 'Baja', 'Manual', 'Bencina', 2, 3, 4, 4, 86126, 14973, true, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.vehiculos VALUES (3, 'MV14 LYK', 8, 16, 3, 'Peugeot', 'Camioneta', 'Alta', 'Manual', 'Bencina', 2, 3, 4, 4, 35286, 68448, true, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.vehiculos VALUES (4, 'BK06 LHK', 15, 3, 5, 'Peugeot', 'Camioneta', 'Alta', 'Manual', 'Bencina', 3, 2, 5, 4, 77082, 72968, true, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.vehiculos VALUES (5, 'NX04 PLJ', 18, 12, 20, 'Nissan', 'Automovil', 'Media', 'Manual', 'Bencina', 1, 1, 5, 4, 39059, 47211, false, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.vehiculos VALUES (6, 'YL04 XZO', 4, 16, 7, 'Citroen', 'Automovil', 'Baja', 'Automática', 'Petróleo', 1, 3, 2, 4, 59099, 59242, false, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.vehiculos VALUES (7, 'HG09 TXA', 8, 8, 2, 'Nissan', 'Automovil', 'Alta', 'Automática', 'Bencina', 1, 5, 3, 4, 32932, 63865, true, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.vehiculos VALUES (8, 'MD08 NMW', 18, 9, 5, 'Citroen', 'Camioneta', 'Media', 'Automática', 'Petróleo', 3, 5, 3, 4, 11384, 23005, false, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.vehiculos VALUES (9, 'KJ06 KWJ', 9, 3, 5, 'Renault', 'Automovil', 'Media', 'Manual', 'Bencina', 2, 2, 5, 4, 24179, 12823, false, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.vehiculos VALUES (10, 'FM17 AOV', 13, 5, 13, 'Honda', 'Minivan', 'Baja', 'Manual', 'Petróleo', 2, 2, 3, 4, 13882, 39227, false, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.vehiculos VALUES (11, 'RF06 CAY', 9, 13, 5, 'Mini', 'Camioneta', 'Baja', 'Manual', 'Petróleo', 1, 3, 2, 4, 38286, 64836, false, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.vehiculos VALUES (12, 'DL14 OQS', 13, 7, 4, 'Mini', 'Minivan', 'Media', 'Manual', 'Petróleo', 4, 4, 2, 4, 89237, 99007, false, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.vehiculos VALUES (13, 'RW06 XNI', 13, 20, 8, 'BMW', 'Automovil', 'Baja', 'Manual', 'Petróleo', 4, 1, 4, 4, 54651, 82447, true, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.vehiculos VALUES (14, 'WV06 HLF', 16, 18, 11, 'Ford', 'Minivan', 'Baja', 'Manual', 'Bencina', 2, 2, 1, 4, 78088, 65168, false, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.vehiculos VALUES (15, 'KH17 JEF', 17, 8, 9, 'Toyota', 'Camioneta', 'Media', 'Automática', 'Bencina', 2, 4, 3, 4, 94820, 21369, false, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.vehiculos VALUES (16, 'CF16 FCW', 19, 7, 5, 'Honda', 'Minivan', 'Alta', 'Manual', 'Bencina', 2, 2, 2, 4, 84672, 20935, true, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.vehiculos VALUES (17, 'GJ10 UZQ', 5, 13, 10, 'Fiat', 'Automovil', 'Media', 'Manual', 'Petróleo', 3, 1, 5, 4, 28195, 35020, false, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.vehiculos VALUES (18, 'VF15 KPN', 17, 14, 8, 'Honda', 'Minivan', 'Alta', 'Manual', 'Petróleo', 2, 2, 3, 4, 96144, 12686, false, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.vehiculos VALUES (19, 'PU17 WJX', 4, 18, 18, 'Nissan', 'Camioneta', 'Media', 'Automática', 'Bencina', 2, 2, 1, 4, 39619, 21382, false, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.vehiculos VALUES (20, 'PH01 CLB', 20, 3, 1, 'Vauxhall', 'Automovil', 'Alta', 'Manual', 'Bencina', 3, 2, 2, 4, 91083, 64624, false, '2018-12-28 12:14:36', '2018-12-28 12:14:36');


--
-- Data for Name: calendarios_vuelos; Type: TABLE DATA; Schema: public; Owner: guillermo
--



--
-- Data for Name: checks_in; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.checks_in VALUES (1, 18, 20, '1978-04-02', 'Confirmado', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.checks_in VALUES (2, 15, 3, '2008-01-02', 'Pendiente', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.checks_in VALUES (3, 13, 5, '1977-10-07', 'Pendiente', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.checks_in VALUES (4, 16, 18, '2014-12-14', 'Confirmado', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.checks_in VALUES (5, 14, 5, '1985-03-16', 'Pendiente', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.checks_in VALUES (6, 18, 15, '2016-12-06', 'Pendiente', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.checks_in VALUES (7, 18, 9, '2007-11-01', 'Pendiente', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.checks_in VALUES (8, 6, 17, '1981-07-13', 'Pendiente', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.checks_in VALUES (9, 1, 2, '2016-06-11', 'Confirmado', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.checks_in VALUES (10, 11, 6, '1973-10-29', 'Confirmado', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.checks_in VALUES (11, 5, 17, '1993-02-26', 'Pendiente', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.checks_in VALUES (12, 2, 20, '2007-01-24', 'Pendiente', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.checks_in VALUES (13, 16, 9, '2010-01-25', 'Pendiente', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.checks_in VALUES (14, 13, 11, '2010-12-29', 'Pendiente', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.checks_in VALUES (15, 17, 10, '1998-04-09', 'Pendiente', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.checks_in VALUES (16, 14, 6, '1992-06-07', 'Confirmado', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.checks_in VALUES (17, 9, 18, '1980-03-12', 'Confirmado', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.checks_in VALUES (18, 1, 6, '2011-02-09', 'Confirmado', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.checks_in VALUES (19, 19, 18, '1985-10-25', 'Pendiente', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.checks_in VALUES (20, 3, 18, '1983-07-22', 'Confirmado', '2018-12-28 12:14:37', '2018-12-28 12:14:37');


--
-- Data for Name: ventas; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.ventas VALUES (1, 1, 20286, '2017-03-03', 0.190000000000000002, 'Factura', 'Factura', 13, 41364, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.ventas VALUES (2, 20, 73380, '2017-01-03', 0.190000000000000002, 'Boleta', 'Factura', 18, 26613, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.ventas VALUES (3, 1, 77012, '2001-07-02', 0.190000000000000002, 'Factura', 'Factura', 12, 39802, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.ventas VALUES (4, 5, 14847, '2011-02-12', 0.190000000000000002, 'Boleta', 'Factura', 15, 88329, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.ventas VALUES (5, 6, 35506, '1987-08-27', 0.190000000000000002, 'Factura', 'Boleta', 7, 20654, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.ventas VALUES (6, 17, 10005, '2004-02-04', 0.190000000000000002, 'Factura', 'Boleta', 23, 98915, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.ventas VALUES (7, 4, 37516, '2002-11-14', 0.190000000000000002, 'Factura', 'Factura', 7, 55166, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.ventas VALUES (8, 19, 46144, '2015-07-30', 0.190000000000000002, 'Factura', 'Boleta', 1, 97439, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.ventas VALUES (9, 13, 86887, '1972-03-07', 0.190000000000000002, 'Boleta', 'Boleta', 7, 11664, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.ventas VALUES (10, 7, 83367, '1994-06-04', 0.190000000000000002, 'Factura', 'Boleta', 23, 30865, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.ventas VALUES (11, 8, 47895, '1999-01-07', 0.190000000000000002, 'Factura', 'Factura', 8, 51483, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.ventas VALUES (12, 14, 20684, '1993-12-31', 0.190000000000000002, 'Boleta', 'Factura', 17, 77108, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.ventas VALUES (13, 13, 91927, '1988-10-28', 0.190000000000000002, 'Boleta', 'Factura', 4, 62562, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.ventas VALUES (14, 16, 43059, '2009-08-12', 0.190000000000000002, 'Boleta', 'Factura', 7, 99101, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.ventas VALUES (15, 10, 23982, '1973-05-12', 0.190000000000000002, 'Factura', 'Factura', 7, 44823, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.ventas VALUES (16, 17, 53889, '2008-10-04', 0.190000000000000002, 'Boleta', 'Factura', 9, 59725, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.ventas VALUES (17, 14, 28264, '2012-10-14', 0.190000000000000002, 'Factura', 'Boleta', 10, 76271, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.ventas VALUES (18, 20, 20546, '1998-08-31', 0.190000000000000002, 'Factura', 'Factura', 17, 76214, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.ventas VALUES (19, 4, 60885, '2011-12-16', 0.190000000000000002, 'Boleta', 'Factura', 24, 55795, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.ventas VALUES (20, 10, 12279, '2008-10-06', 0.190000000000000002, 'Boleta', 'Boleta', 23, 27017, '2018-12-28 12:14:35', '2018-12-28 12:14:35');


--
-- Data for Name: reservas_vehiculos; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.reservas_vehiculos VALUES (1, 18, '1988-05-05 00:00:00', 86982, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.reservas_vehiculos VALUES (2, 10, '1990-06-09 00:00:00', 84949, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.reservas_vehiculos VALUES (3, 6, '1983-04-08 00:00:00', 74148, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.reservas_vehiculos VALUES (4, 16, '1975-06-05 00:00:00', 69665, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.reservas_vehiculos VALUES (5, 1, '1973-05-07 00:00:00', 66516, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.reservas_vehiculos VALUES (6, 14, '2014-12-11 00:00:00', 38939, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.reservas_vehiculos VALUES (7, 3, '1990-09-29 00:00:00', 25342, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.reservas_vehiculos VALUES (8, 7, '2007-10-31 00:00:00', 49374, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.reservas_vehiculos VALUES (9, 3, '1997-04-05 00:00:00', 71567, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.reservas_vehiculos VALUES (10, 6, '2000-12-06 00:00:00', 63638, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.reservas_vehiculos VALUES (11, 16, '1973-05-13 00:00:00', 78317, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.reservas_vehiculos VALUES (12, 18, '1978-04-05 00:00:00', 83929, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.reservas_vehiculos VALUES (13, 11, '2000-11-25 00:00:00', 92743, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.reservas_vehiculos VALUES (14, 13, '1987-11-20 00:00:00', 45188, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.reservas_vehiculos VALUES (15, 7, '1983-08-29 00:00:00', 39415, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.reservas_vehiculos VALUES (16, 5, '2017-11-17 00:00:00', 79260, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.reservas_vehiculos VALUES (17, 19, '1994-04-02 00:00:00', 94139, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.reservas_vehiculos VALUES (18, 19, '1990-10-10 00:00:00', 24548, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.reservas_vehiculos VALUES (19, 17, '1992-10-24 00:00:00', 71199, '2018-12-28 12:14:35', '2018-12-28 12:14:35');
INSERT INTO public.reservas_vehiculos VALUES (20, 17, '1998-02-08 00:00:00', 24096, '2018-12-28 12:14:35', '2018-12-28 12:14:35');


--
-- Data for Name: detalles_reservas_vehiculos; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.detalles_reservas_vehiculos VALUES (1, 13, 'NX04 PLJ', '2019-01-02 11:51:05', '2019-01-19 03:12:39', 122658, 0.200000000000000011, 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.detalles_reservas_vehiculos VALUES (2, 14, 'WV06 HLF', '2019-01-05 16:15:52', '2019-01-24 19:35:38', 51043, 0.200000000000000011, 2, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.detalles_reservas_vehiculos VALUES (3, 2, 'NX04 PLJ', '2018-12-31 17:09:36', '2019-01-23 20:15:22', 110119, 0.200000000000000011, 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.detalles_reservas_vehiculos VALUES (4, 19, 'NJ02 JRL', '2019-01-04 05:32:28', '2019-01-19 09:49:39', 188384, 0.200000000000000011, 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.detalles_reservas_vehiculos VALUES (5, 10, 'WV06 HLF', '2019-01-05 02:04:49', '2019-01-13 02:24:17', 86624, 0.200000000000000011, 2, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.detalles_reservas_vehiculos VALUES (6, 14, 'RC07 WUZ', '2019-01-09 05:58:47', '2019-01-24 13:52:24', 131867, 0.200000000000000011, 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.detalles_reservas_vehiculos VALUES (7, 15, 'KH17 JEF', '2019-01-01 12:22:58', '2019-01-21 15:29:00', 179109, 0.200000000000000011, 2, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.detalles_reservas_vehiculos VALUES (8, 10, 'DL14 OQS', '2019-01-11 12:00:20', '2019-01-19 10:16:33', 191673, 0.200000000000000011, 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.detalles_reservas_vehiculos VALUES (9, 10, 'FM17 AOV', '2019-01-09 20:07:59', '2019-01-25 11:33:54', 114674, 0.200000000000000011, 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.detalles_reservas_vehiculos VALUES (10, 17, 'MV14 LYK', '2018-12-30 20:04:20', '2019-01-13 10:44:43', 142281, 0.200000000000000011, 2, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.detalles_reservas_vehiculos VALUES (11, 19, 'RW06 XNI', '2019-01-04 07:45:19', '2019-01-12 06:56:22', 66131, 0.200000000000000011, 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.detalles_reservas_vehiculos VALUES (12, 3, 'VF15 KPN', '2018-12-31 00:27:32', '2019-01-18 17:04:47', 92235, 0.200000000000000011, 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.detalles_reservas_vehiculos VALUES (13, 14, 'KJ06 KWJ', '2019-01-02 17:00:47', '2019-01-12 03:50:38', 71659, 0.200000000000000011, 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.detalles_reservas_vehiculos VALUES (14, 16, 'CF16 FCW', '2019-01-02 03:19:43', '2019-01-19 01:12:18', 81494, 0.200000000000000011, 2, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.detalles_reservas_vehiculos VALUES (15, 11, 'PH01 CLB', '2019-01-03 03:46:18', '2019-01-22 21:58:36', 139980, 0.200000000000000011, 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.detalles_reservas_vehiculos VALUES (16, 19, 'DL14 OQS', '2019-01-03 11:08:34', '2019-01-22 07:53:17', 57316, 0.200000000000000011, 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.detalles_reservas_vehiculos VALUES (17, 3, 'MD08 NMW', '2019-01-01 09:08:24', '2019-01-14 20:47:52', 91745, 0.200000000000000011, 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.detalles_reservas_vehiculos VALUES (18, 7, 'MV14 LYK', '2019-01-04 15:15:03', '2019-01-14 01:34:12', 146584, 0.200000000000000011, 2, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.detalles_reservas_vehiculos VALUES (19, 10, 'WV06 HLF', '2018-12-31 20:23:08', '2019-01-16 06:33:14', 140039, 0.200000000000000011, 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.detalles_reservas_vehiculos VALUES (20, 19, 'KH17 JEF', '2018-12-29 22:38:41', '2019-01-20 04:11:18', 107127, 0.200000000000000011, 2, '2018-12-28 12:14:36', '2018-12-28 12:14:36');


--
-- Data for Name: habitaciones_hoteles; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.habitaciones_hoteles VALUES (1, 9, 18, 615060, 532983, 799912, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_hoteles VALUES (2, 1, 17, 683683, 190407, 929880, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_hoteles VALUES (3, 18, 20, 922818, 798544, 158019, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_hoteles VALUES (4, 20, 20, 617486, 938866, 975716, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_hoteles VALUES (5, 15, 12, 559801, 806319, 60611, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_hoteles VALUES (6, 15, 3, 54421, 839470, 472212, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_hoteles VALUES (7, 20, 16, 85446, 503682, 969831, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_hoteles VALUES (8, 9, 17, 698046, 428787, 172100, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_hoteles VALUES (9, 1, 20, 567342, 860563, 406406, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_hoteles VALUES (10, 2, 6, 34500, 104373, 975182, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_hoteles VALUES (11, 13, 14, 151167, 631439, 396868, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_hoteles VALUES (12, 8, 12, 427167, 920058, 777940, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_hoteles VALUES (13, 14, 19, 855870, 494070, 567301, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_hoteles VALUES (14, 13, 18, 177221, 111794, 802061, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_hoteles VALUES (15, 4, 10, 834358, 22705, 103670, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_hoteles VALUES (16, 1, 2, 621334, 195711, 194632, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_hoteles VALUES (17, 19, 7, 764855, 79678, 159187, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_hoteles VALUES (18, 7, 3, 85936, 505958, 735678, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_hoteles VALUES (19, 3, 3, 664388, 359402, 851814, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_hoteles VALUES (20, 20, 9, 338429, 542093, 741717, '2018-12-28 12:14:36', '2018-12-28 12:14:36');


--
-- Data for Name: reservas_hoteles; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.reservas_hoteles VALUES (1, 4, 419701, '1970-07-20', 6, 245327, 983489, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.reservas_hoteles VALUES (2, 14, 503076, '1994-07-25', 10, 665830, 584093, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.reservas_hoteles VALUES (3, 11, 383156, '1996-10-23', 2, 707322, 472141, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.reservas_hoteles VALUES (4, 5, 184041, '2002-03-24', 7, 528137, 795471, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.reservas_hoteles VALUES (5, 3, 617213, '2007-03-28', 4, 232704, 555596, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.reservas_hoteles VALUES (6, 7, 761773, '1978-06-30', 1, 270679, 573234, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.reservas_hoteles VALUES (7, 17, 435827, '1995-04-17', 4, 850212, 125290, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.reservas_hoteles VALUES (8, 3, 389590, '1996-01-07', 4, 894508, 99552, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.reservas_hoteles VALUES (9, 5, 375804, '1975-06-01', 8, 709371, 199694, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.reservas_hoteles VALUES (10, 11, 642934, '2015-11-24', 3, 722004, 535901, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.reservas_hoteles VALUES (11, 19, 970250, '1981-10-25', 1, 468077, 584909, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.reservas_hoteles VALUES (12, 10, 793378, '2011-12-20', 9, 358727, 4155, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.reservas_hoteles VALUES (13, 4, 433066, '2012-07-18', 1, 714032, 361366, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.reservas_hoteles VALUES (14, 7, 602602, '1996-11-04', 3, 941694, 540210, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.reservas_hoteles VALUES (15, 10, 262483, '1997-06-19', 10, 952393, 414289, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.reservas_hoteles VALUES (16, 19, 646620, '1973-03-29', 4, 816827, 12240, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.reservas_hoteles VALUES (17, 2, 71827, '1999-02-25', 1, 598302, 831633, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.reservas_hoteles VALUES (18, 19, 644732, '2001-03-22', 9, 638553, 812664, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.reservas_hoteles VALUES (19, 8, 265084, '1980-04-15', 6, 62925, 68996, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.reservas_hoteles VALUES (20, 9, 155190, '2014-07-26', 6, 212799, 117936, '2018-12-28 12:14:36', '2018-12-28 12:14:36');


--
-- Data for Name: detalles_reservas_hoteles; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.detalles_reservas_hoteles VALUES (1, 14, 6, 16, '1972-05-06', '2000-03-17', 144510, 'Inventore eveniet consequatur laborum aperiam enim voluptas maiores. Laudantium ut dicta eum explicabo. Earum dolor rerum quia veritatis. Qui aut nisi et aut sint in optio.', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_reservas_hoteles VALUES (2, 2, 16, 12, '1972-03-31', '1979-06-19', 617186, 'Non doloribus similique repellendus. Praesentium tempore vitae qui natus. Est occaecati exercitationem accusantium non. Tenetur nam velit et odio et.', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_reservas_hoteles VALUES (3, 12, 9, 16, '2009-09-05', '1994-06-03', 807430, 'Rem quasi et et molestiae magnam. Corrupti fuga labore aut placeat illo fuga. Quibusdam dicta quia corrupti. Iusto eveniet ex unde beatae rerum.', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_reservas_hoteles VALUES (4, 13, 3, 17, '2004-07-11', '1982-12-25', 352695, 'Possimus et tempore omnis sint eveniet. Quam tempore fugit ea consequuntur facilis assumenda sed aspernatur. Ratione sed omnis recusandae nisi voluptas.', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_reservas_hoteles VALUES (5, 7, 5, 19, '1984-07-01', '1982-08-02', 226825, 'Repellendus corporis unde eaque voluptatem qui repudiandae. Id minus dolorem velit harum quis sed. Aut ut et ut tempore aperiam vero.', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_reservas_hoteles VALUES (6, 4, 19, 6, '1996-01-09', '1997-07-02', 291513, 'Sint et provident quas inventore. Necessitatibus autem aut asperiores odit ipsa eaque saepe. Labore reprehenderit est autem.', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_reservas_hoteles VALUES (7, 7, 12, 7, '1971-07-08', '2007-07-23', 770560, 'Neque sint excepturi dicta eaque at. Earum eum non neque magni officia. Ut dignissimos quo maxime voluptatum ratione nihil esse. Velit vel quo officiis provident.', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_reservas_hoteles VALUES (8, 12, 5, 2, '2016-06-05', '2015-10-29', 514665, 'Cumque repudiandae magni veritatis in nesciunt. Eligendi nemo quo rerum fugiat sit voluptate ut perferendis. Rem deleniti nemo dolorum quod nesciunt reprehenderit.', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_reservas_hoteles VALUES (10, 9, 10, 15, '1985-12-30', '1999-08-07', 150719, 'Repellendus earum dolor occaecati dolores. Est recusandae sint quo fuga. Delectus asperiores et autem sapiente rem.', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_reservas_hoteles VALUES (11, 16, 17, 6, '2013-09-13', '1982-02-07', 274872, 'Corrupti et rem officia qui ratione consequuntur aut. Officia aut neque veritatis omnis. Ea odio quam nulla.', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_reservas_hoteles VALUES (12, 20, 3, 3, '2014-03-12', '2012-01-22', 683740, 'Eum similique sunt cum velit sed. Nobis alias voluptas non dolores. Fugiat occaecati ea recusandae quam quibusdam. Nemo maiores error sed optio rerum quo natus.', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_reservas_hoteles VALUES (13, 19, 1, 2, '2013-12-01', '2002-03-05', 8789, 'Nobis est facilis similique sed sequi. Molestiae ut aut esse est velit. Sit ut mollitia sit ea ipsum sed.', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_reservas_hoteles VALUES (14, 16, 17, 6, '1980-02-27', '2011-12-12', 560326, 'Labore voluptatem omnis dolorem et eos. A impedit corporis occaecati doloribus. Voluptatem tempore illo nesciunt est. Omnis natus nostrum minima autem possimus asperiores quaerat quo.', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_reservas_hoteles VALUES (15, 20, 4, 4, '1990-12-19', '2007-08-08', 886125, 'Quibusdam non sint deserunt ratione aut. Ad quia explicabo hic dolorem quos veritatis et eum. Beatae aut corrupti esse hic et quasi.', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_reservas_hoteles VALUES (16, 4, 3, 15, '1993-07-29', '2012-07-13', 811230, 'Qui cupiditate libero sed qui. Adipisci aspernatur quis voluptate rerum laborum ullam qui ut. Iusto voluptatibus dolor et occaecati unde consequatur.', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_reservas_hoteles VALUES (17, 8, 14, 16, '2014-02-04', '1990-04-13', 299496, 'Numquam architecto ea dignissimos quia in et aliquam. Cum qui a architecto sunt vel officiis. Placeat labore impedit esse.', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_reservas_hoteles VALUES (18, 10, 18, 5, '2011-09-15', '1976-12-09', 746759, 'In et excepturi iste accusamus enim aliquam. Harum molestias dicta ipsum accusamus est nulla ut laborum.', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_reservas_hoteles VALUES (19, 6, 16, 2, '1974-04-12', '1984-07-22', 741572, 'Dolorum consequatur aspernatur qui itaque quia vel. Excepturi minus magni aut harum enim dolor. Similique consequuntur ea quos totam vel. Culpa modi distinctio fugit velit dicta tenetur ea.', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_reservas_hoteles VALUES (20, 20, 10, 13, '1998-08-07', '2015-09-16', 338815, 'Recusandae similique animi magni cumque ratione. A assumenda atque quia id cupiditate perferendis nobis illo. Aut vel sed voluptatem expedita.', '2018-12-28 12:14:37', '2018-12-28 12:14:37');


--
-- Data for Name: detalles_ventas_vuelos; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.detalles_ventas_vuelos VALUES (1, 15, 2843, 102, 1545, '2004-12-13 16:39:19', 'ida', 3, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_ventas_vuelos VALUES (2, 19, 2159, 109, 2063, '1981-09-10 04:18:29', 'ida', 3, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_ventas_vuelos VALUES (3, 5, 2265, 366, 2985, '2010-08-17 12:13:55', 'vuelta', 2, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_ventas_vuelos VALUES (4, 3, 1534, 212, 4112, '1970-06-22 03:18:46', 'vuelta', 4, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_ventas_vuelos VALUES (5, 2, 2154, 490, 1173, '2006-04-02 06:12:10', 'vuelta', 4, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_ventas_vuelos VALUES (6, 3, 2431, 223, 3026, '2015-07-03 05:20:46', 'vuelta', 5, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_ventas_vuelos VALUES (7, 10, 1871, 39, 4547, '1989-04-09 05:25:43', 'vuelta', 4, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_ventas_vuelos VALUES (8, 20, 639, 445, 1698, '1976-12-20 07:52:22', 'vuelta', 3, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_ventas_vuelos VALUES (9, 16, 2110, 130, 1076, '1982-07-11 19:03:29', 'vuelta', 2, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_ventas_vuelos VALUES (10, 8, 1213, 280, 2598, '2010-09-20 13:37:47', 'vuelta', 5, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_ventas_vuelos VALUES (11, 13, 1810, 244, 3863, '2004-03-12 06:34:18', 'ida', 3, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_ventas_vuelos VALUES (12, 12, 4450, 268, 2496, '1989-07-15 17:35:18', 'vuelta', 3, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_ventas_vuelos VALUES (13, 14, 4321, 20, 1061, '1973-10-21 08:07:03', 'vuelta', 5, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_ventas_vuelos VALUES (14, 19, 2798, 281, 1482, '1985-04-26 16:38:14', 'vuelta', 2, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_ventas_vuelos VALUES (15, 5, 4570, 466, 3001, '1984-08-19 09:13:34', 'ida', 3, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_ventas_vuelos VALUES (16, 16, 2617, 246, 4381, '1976-09-23 17:12:11', 'ida', 4, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_ventas_vuelos VALUES (17, 10, 4821, 405, 3754, '2015-11-02 11:54:33', 'vuelta', 4, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_ventas_vuelos VALUES (18, 14, 4530, 496, 4962, '2002-08-11 11:59:41', 'ida', 4, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_ventas_vuelos VALUES (19, 19, 3408, 231, 1715, '2012-05-29 16:58:07', 'ida', 3, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_ventas_vuelos VALUES (20, 19, 3370, 194, 1850, '1970-06-02 00:23:02', 'vuelta', 4, '2018-12-28 12:14:37', '2018-12-28 12:14:37');


--
-- Data for Name: vuelos; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.vuelos VALUES (1, 2, 1365, '21:55:58', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.vuelos VALUES (2, 6, 2814, '18:11:48', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.vuelos VALUES (3, 20, 3241, '14:45:15', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.vuelos VALUES (4, 7, 2131, '08:42:18', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.vuelos VALUES (5, 6, 4738, '20:51:39', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.vuelos VALUES (6, 11, 4332, '21:03:32', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.vuelos VALUES (7, 15, 3042, '23:18:24', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.vuelos VALUES (8, 8, 3468, '14:47:57', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.vuelos VALUES (9, 8, 1002, '18:35:20', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.vuelos VALUES (10, 19, 3227, '14:40:16', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.vuelos VALUES (11, 14, 3078, '21:02:18', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.vuelos VALUES (12, 9, 3722, '19:21:19', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.vuelos VALUES (13, 12, 2009, '20:32:02', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.vuelos VALUES (14, 14, 3575, '17:17:13', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.vuelos VALUES (15, 4, 4585, '21:14:30', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.vuelos VALUES (16, 5, 4001, '12:18:31', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.vuelos VALUES (17, 3, 3864, '00:21:32', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.vuelos VALUES (18, 6, 3003, '12:17:24', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.vuelos VALUES (19, 4, 3430, '00:57:12', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.vuelos VALUES (20, 13, 4216, '09:04:30', '2018-12-28 12:14:37', '2018-12-28 12:14:37');


--
-- Data for Name: detalles_vuelos; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.detalles_vuelos VALUES (1, 16, 16, 12, '1984-05-26 13:27:34', '1979-09-23 01:18:39', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_vuelos VALUES (2, 9, 9, 14, '1998-05-04 18:35:57', '2002-09-02 10:44:56', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_vuelos VALUES (3, 19, 1, 4, '2002-08-16 01:24:39', '2017-07-11 16:17:38', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_vuelos VALUES (4, 3, 17, 20, '1996-04-04 19:12:56', '1996-08-23 14:01:09', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_vuelos VALUES (5, 10, 13, 7, '2003-05-23 16:27:34', '2006-06-19 10:18:13', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_vuelos VALUES (6, 10, 20, 20, '1991-05-09 06:41:08', '1973-05-29 10:51:33', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_vuelos VALUES (7, 10, 18, 3, '2005-03-07 20:09:18', '1989-02-16 23:38:03', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_vuelos VALUES (8, 8, 20, 17, '1989-03-24 09:21:04', '2006-10-12 20:22:29', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_vuelos VALUES (9, 17, 7, 20, '1971-07-13 04:22:59', '1989-12-15 23:58:33', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_vuelos VALUES (10, 11, 18, 3, '1999-01-13 11:07:32', '1987-01-28 16:08:35', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_vuelos VALUES (11, 1, 9, 6, '2016-09-03 21:00:54', '2004-12-17 01:31:33', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_vuelos VALUES (12, 15, 10, 12, '1990-01-17 19:31:43', '1971-09-30 20:06:58', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_vuelos VALUES (13, 17, 9, 4, '2005-01-03 04:58:54', '1990-10-09 20:53:36', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_vuelos VALUES (14, 16, 13, 14, '2007-12-19 13:01:22', '2002-09-17 12:49:11', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_vuelos VALUES (15, 11, 6, 19, '1970-03-03 13:47:13', '2012-12-28 19:47:44', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_vuelos VALUES (16, 17, 16, 5, '1992-01-16 13:52:42', '1987-12-17 04:06:49', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_vuelos VALUES (17, 17, 5, 10, '2013-04-08 04:11:14', '2017-06-16 12:38:22', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_vuelos VALUES (18, 9, 9, 16, '1995-01-27 00:51:21', '2008-09-10 23:50:39', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_vuelos VALUES (19, 12, 1, 10, '1982-06-06 23:08:47', '1974-03-01 04:04:27', '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.detalles_vuelos VALUES (20, 7, 1, 10, '1996-03-20 18:51:19', '2009-03-07 22:19:46', '2018-12-28 12:14:37', '2018-12-28 12:14:37');


--
-- Data for Name: habitaciones; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.habitaciones VALUES (1, 14, 10, 189, 4, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones VALUES (2, 19, 5, 494, 2, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones VALUES (3, 13, 12, 297, 2, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones VALUES (4, 14, 30, 484, 4, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones VALUES (5, 18, 30, 182, 2, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones VALUES (6, 15, 15, 514, 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones VALUES (7, 18, 9, 124, 3, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones VALUES (8, 19, 13, 848, 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones VALUES (9, 11, 5, 579, 4, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones VALUES (10, 4, 11, 766, 3, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones VALUES (11, 9, 30, 343, 5, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones VALUES (12, 19, 4, 911, 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones VALUES (13, 8, 21, 2, 5, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones VALUES (14, 19, 17, 447, 2, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones VALUES (15, 5, 18, 393, 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones VALUES (16, 16, 5, 868, 2, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones VALUES (17, 19, 20, 906, 4, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones VALUES (18, 3, 26, 403, 5, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones VALUES (19, 5, 27, 49, 2, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones VALUES (20, 17, 5, 372, 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');


--
-- Data for Name: habitaciones_servicios; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.habitaciones_servicios VALUES (1, 4, 14, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_servicios VALUES (2, 14, 19, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_servicios VALUES (3, 13, 5, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_servicios VALUES (4, 4, 4, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_servicios VALUES (5, 4, 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_servicios VALUES (6, 15, 3, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_servicios VALUES (7, 15, 3, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_servicios VALUES (8, 4, 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_servicios VALUES (9, 4, 5, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_servicios VALUES (10, 13, 2, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_servicios VALUES (11, 6, 6, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_servicios VALUES (12, 20, 10, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_servicios VALUES (13, 19, 8, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_servicios VALUES (14, 12, 12, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_servicios VALUES (15, 8, 10, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_servicios VALUES (16, 2, 11, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_servicios VALUES (17, 3, 18, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_servicios VALUES (18, 17, 13, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_servicios VALUES (19, 5, 11, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.habitaciones_servicios VALUES (20, 1, 9, '2018-12-28 12:14:36', '2018-12-28 12:14:36');


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.migrations VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO public.migrations VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO public.migrations VALUES (3, '2018_11_25_122743_create_ventas_table', 1);
INSERT INTO public.migrations VALUES (4, '2018_11_25_213032_create_servicios_de_vehiculos_table', 1);
INSERT INTO public.migrations VALUES (5, '2018_11_26_212509_create_calendarios_vehiculos_table', 1);
INSERT INTO public.migrations VALUES (6, '2018_11_26_212540_create_zonas_table', 1);
INSERT INTO public.migrations VALUES (7, '2018_11_26_212612_create_proveedores_table', 1);
INSERT INTO public.migrations VALUES (8, '2018_11_27_212256_create_reservas_vehiculos_table', 1);
INSERT INTO public.migrations VALUES (9, '2018_11_27_212257_create_vehiculos_table', 1);
INSERT INTO public.migrations VALUES (10, '2018_11_27_212346_create_detalles_reservas_vehiculos_table', 1);
INSERT INTO public.migrations VALUES (11, '2018_11_27_212646_create_servicios_proveedores_table', 1);
INSERT INTO public.migrations VALUES (12, '2018_11_27_213113_create_servicios_y_vehiculos_table', 1);
INSERT INTO public.migrations VALUES (13, '2018_11_28_122819_create_hoteles_table', 1);
INSERT INTO public.migrations VALUES (14, '2018_11_28_122848_create_aeropuertos_table', 1);
INSERT INTO public.migrations VALUES (15, '2018_11_28_122942_create_reservas_hoteles_table', 1);
INSERT INTO public.migrations VALUES (16, '2018_11_28_123017_create_servicios_alojamientos_table', 1);
INSERT INTO public.migrations VALUES (17, '2018_11_28_123049_create_calendarios_alojamientos_table', 1);
INSERT INTO public.migrations VALUES (18, '2018_11_28_123123_create_habitaciones_hoteles_table', 1);
INSERT INTO public.migrations VALUES (19, '2018_11_28_123219_create_alojamientos_privados_table', 1);
INSERT INTO public.migrations VALUES (20, '2018_11_28_123301_create_detalles_reservas_hoteles_table', 1);
INSERT INTO public.migrations VALUES (21, '2018_11_28_123335_create_habitaciones_table', 1);
INSERT INTO public.migrations VALUES (22, '2018_11_28_123406_create_alojamientos_servicios_table', 1);
INSERT INTO public.migrations VALUES (23, '2018_11_28_123437_create_habitaciones_servicios_table', 1);
INSERT INTO public.migrations VALUES (24, '2018_11_28_171912_create_companias_table', 1);
INSERT INTO public.migrations VALUES (25, '2018_11_28_172245_create_aviones_table', 1);
INSERT INTO public.migrations VALUES (26, '2018_11_28_172952_create_asientos_table', 1);
INSERT INTO public.migrations VALUES (27, '2018_11_28_174104_create_acciones_table', 1);
INSERT INTO public.migrations VALUES (28, '2018_11_28_174355_create_calendarios_vuelos_table', 1);
INSERT INTO public.migrations VALUES (29, '2018_11_28_200646_create_detalles_ventas_vuelos_table', 1);
INSERT INTO public.migrations VALUES (30, '2018_11_28_200934_create_vuelos_table', 1);
INSERT INTO public.migrations VALUES (31, '2018_11_28_201107_create_detalles_vuelos_table', 1);
INSERT INTO public.migrations VALUES (32, '2018_12_16_172924_create_checks_in_table', 1);
INSERT INTO public.migrations VALUES (33, '2018_12_16_173607_create_origenes_destinos_table', 1);


--
-- Data for Name: origenes_destinos; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.origenes_destinos VALUES (1, 2, 12, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.origenes_destinos VALUES (2, 5, 6, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.origenes_destinos VALUES (3, 4, 14, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.origenes_destinos VALUES (4, 13, 8, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.origenes_destinos VALUES (5, 16, 12, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.origenes_destinos VALUES (6, 7, 6, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.origenes_destinos VALUES (7, 12, 3, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.origenes_destinos VALUES (8, 6, 19, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.origenes_destinos VALUES (9, 17, 2, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.origenes_destinos VALUES (10, 1, 12, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.origenes_destinos VALUES (11, 18, 7, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.origenes_destinos VALUES (12, 19, 18, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.origenes_destinos VALUES (13, 11, 7, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.origenes_destinos VALUES (14, 16, 16, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.origenes_destinos VALUES (15, 7, 4, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.origenes_destinos VALUES (16, 18, 1, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.origenes_destinos VALUES (17, 13, 8, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.origenes_destinos VALUES (18, 11, 2, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.origenes_destinos VALUES (19, 16, 1, '2018-12-28 12:14:37', '2018-12-28 12:14:37');
INSERT INTO public.origenes_destinos VALUES (20, 16, 6, '2018-12-28 12:14:37', '2018-12-28 12:14:37');


--
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: guillermo
--



--
-- Data for Name: servicios_de_vehiculos; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.servicios_de_vehiculos VALUES (1, 'Servicio3', 6, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_de_vehiculos VALUES (2, 'Servicio1', 30, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_de_vehiculos VALUES (3, 'Servicio3', 2, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_de_vehiculos VALUES (4, 'Servicio1', 46, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_de_vehiculos VALUES (5, 'Servicio2', 6, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_de_vehiculos VALUES (6, 'Servicio2', 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_de_vehiculos VALUES (7, 'Servicio1', 43, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_de_vehiculos VALUES (8, 'Servicio3', 9, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_de_vehiculos VALUES (9, 'Servicio3', 17, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_de_vehiculos VALUES (10, 'Servicio2', 1, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_de_vehiculos VALUES (11, 'Servicio2', 23, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_de_vehiculos VALUES (12, 'Servicio3', 27, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_de_vehiculos VALUES (13, 'Servicio3', 38, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_de_vehiculos VALUES (14, 'Servicio3', 24, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_de_vehiculos VALUES (15, 'Servicio2', 47, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_de_vehiculos VALUES (16, 'Servicio2', 26, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_de_vehiculos VALUES (17, 'Servicio3', 29, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_de_vehiculos VALUES (18, 'Servicio1', 15, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_de_vehiculos VALUES (19, 'Servicio3', 31, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_de_vehiculos VALUES (20, 'Servicio3', 26, '2018-12-28 12:14:36', '2018-12-28 12:14:36');


--
-- Data for Name: servicios_proveedores; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.servicios_proveedores VALUES (1, 18, 3, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_proveedores VALUES (2, 8, 13, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_proveedores VALUES (3, 18, 18, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_proveedores VALUES (4, 4, 5, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_proveedores VALUES (5, 18, 12, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_proveedores VALUES (6, 15, 5, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_proveedores VALUES (7, 5, 9, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_proveedores VALUES (8, 11, 10, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_proveedores VALUES (9, 18, 4, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_proveedores VALUES (10, 10, 18, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_proveedores VALUES (11, 13, 5, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_proveedores VALUES (12, 1, 14, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_proveedores VALUES (13, 9, 18, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_proveedores VALUES (14, 2, 14, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_proveedores VALUES (15, 19, 14, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_proveedores VALUES (16, 15, 4, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_proveedores VALUES (17, 19, 4, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_proveedores VALUES (18, 6, 6, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_proveedores VALUES (19, 6, 15, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_proveedores VALUES (20, 15, 7, '2018-12-28 12:14:36', '2018-12-28 12:14:36');


--
-- Data for Name: servicios_y_vehiculos; Type: TABLE DATA; Schema: public; Owner: guillermo
--

INSERT INTO public.servicios_y_vehiculos VALUES (1, 12, 'PU17 WJX', 46708, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_y_vehiculos VALUES (2, 1, 'YL04 XZO', 84772, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_y_vehiculos VALUES (3, 12, 'VF15 KPN', 35169, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_y_vehiculos VALUES (4, 13, 'CF16 FCW', 80194, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_y_vehiculos VALUES (5, 11, 'MV14 LYK', 26389, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_y_vehiculos VALUES (6, 7, 'VF15 KPN', 16075, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_y_vehiculos VALUES (7, 19, 'RF06 CAY', 95593, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_y_vehiculos VALUES (8, 6, 'MV14 LYK', 50772, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_y_vehiculos VALUES (9, 20, 'KJ06 KWJ', 75742, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_y_vehiculos VALUES (10, 16, 'HG09 TXA', 17103, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_y_vehiculos VALUES (11, 10, 'RF06 CAY', 81524, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_y_vehiculos VALUES (12, 17, 'MV14 LYK', 97993, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_y_vehiculos VALUES (13, 9, 'RC07 WUZ', 52617, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_y_vehiculos VALUES (14, 18, 'DL14 OQS', 47338, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_y_vehiculos VALUES (15, 15, 'CF16 FCW', 67882, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_y_vehiculos VALUES (16, 4, 'VF15 KPN', 49135, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_y_vehiculos VALUES (17, 5, 'FM17 AOV', 89065, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_y_vehiculos VALUES (18, 20, 'PU17 WJX', 26047, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_y_vehiculos VALUES (19, 5, 'FM17 AOV', 98255, '2018-12-28 12:14:36', '2018-12-28 12:14:36');
INSERT INTO public.servicios_y_vehiculos VALUES (20, 15, 'GJ10 UZQ', 25897, '2018-12-28 12:14:36', '2018-12-28 12:14:36');


--
-- Name: acciones_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.acciones_id_seq', 1, false);


--
-- Name: aeropuertos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.aeropuertos_id_seq', 20, true);


--
-- Name: alojamientos_privados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.alojamientos_privados_id_seq', 21, true);


--
-- Name: alojamientos_servicios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.alojamientos_servicios_id_seq', 21, true);


--
-- Name: asientos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.asientos_id_seq', 20, true);


--
-- Name:vehiculos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.vehiculos_id_seq', 20, true);


--
-- Name: aviones_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.aviones_id_seq', 20, true);


--
-- Name: calendarios_alojamientos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.calendarios_alojamientos_id_seq', 20, true);


--
-- Name: calendarios_vehiculos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.calendarios_vehiculos_id_seq', 20, true);


--
-- Name: calendarios_vuelos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.calendarios_vuelos_id_seq', 1, false);


--
-- Name: checks_in_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.checks_in_id_seq', 20, true);


--
-- Name: companias_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.companias_id_seq', 20, true);


--
-- Name: detalles_reservas_vehiculos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.detalles_reservas_vehiculos_id_seq', 20, true);


--
-- Name: detalles_reservas_hoteles_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.detalles_reservas_hoteles_id_seq', 20, true);


--
-- Name: detalles_ventas_vuelos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.detalles_ventas_vuelos_id_seq', 20, true);


--
-- Name: detalles_vuelos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.detalles_vuelos_id_seq', 20, true);


--
-- Name: habitaciones_hoteles_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.habitaciones_hoteles_id_seq', 20, true);


--
-- Name: habitaciones_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.habitaciones_id_seq', 20, true);


--
-- Name: habitaciones_servicios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.habitaciones_servicios_id_seq', 20, true);


--
-- Name: hoteles_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.hoteles_id_seq', 20, true);


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.migrations_id_seq', 33, true);


--
-- Name: origenes_destinos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.origenes_destinos_id_seq', 20, true);


--
-- Name: proveedores_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.proveedores_id_seq', 20, true);


--
-- Name: reservas_vehiculos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.reservas_vehiculos_id_seq', 20, true);


--
-- Name: reservas_hoteles_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.reservas_hoteles_id_seq', 20, true);


--
-- Name: servicios_alojamientos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.servicios_alojamientos_id_seq', 20, true);


--
-- Name: servicios_de_vehiculos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.servicios_de_vehiculos_id_seq', 20, true);


--
-- Name: servicios_proveedores_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.servicios_proveedores_id_seq', 20, true);


--
-- Name: servicios_y_vehiculos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.servicios_y_vehiculos_id_seq', 20, true);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.users_id_seq', 20, true);


--
-- Name: ventas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.ventas_id_seq', 20, true);


--
-- Name: vuelos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.vuelos_id_seq', 20, true);


--
-- Name: zonas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: guillermo
--

SELECT pg_catalog.setval('public.zonas_id_seq', 20, true);


--
-- PostgreSQL database dump complete
--
