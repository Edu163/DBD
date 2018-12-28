--
-- Eliminar tablas
--

DROP TABLE IF EXISTS acciones CASCADE;
DROP TABLE IF EXISTS aeropuertos CASCADE;
DROP TABLE IF EXISTS alojamientos_privados CASCADE;
DROP TABLE IF EXISTS alojamientos_servicios CASCADE;
DROP TABLE IF EXISTS asientos CASCADE;
DROP TABLE IF EXISTS automoviles CASCADE;
DROP TABLE IF EXISTS aviones CASCADE;
DROP TABLE IF EXISTS calendarios_alojamientos CASCADE;
DROP TABLE IF EXISTS calendarios_vehiculos CASCADE;
DROP TABLE IF EXISTS calendarios_vuelos CASCADE;
DROP TABLE IF EXISTS checks_in CASCADE;
DROP TABLE IF EXISTS companias CASCADE;
DROP TABLE IF EXISTS detalles_reservas_autos CASCADE;
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
DROP TABLE IF EXISTS reservas_autos CASCADE;
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
    id_user serial NOT NULL,
    accion character varying(255) NOT NULL,
    fecha timestamp NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS aeropuertos (
    id serial NOT NULL,
    pais character varying(255) NOT NULL,
    ciudad character varying(255) NOT NULL,
    nombre character varying(255) NOT NULL,
    direccion character varying(255) NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS alojamientos_privados (
    id serial NOT NULL,
    id_calendario_alojamiento serial NOT NULL,
    direccion character varying(255) NOT NULL,
    nombre character varying(255) NOT NULL,
    pais character varying(255) NOT NULL,
    valoracion double precision NOT NULL,
    estrella double precision NOT NULL,
    capacidad integer NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS alojamientos_servicios (
    id serial NOT NULL,
    id_alojamiento_privado serial NOT NULL,
    id_servicio_alojamiento serial NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS asientos (
    id serial NOT NULL,
    id_avion serial NOT NULL,
    clase character varying(255) NOT NULL,
    letra character varying(255) NOT NULL,
    tipo character varying(255) NOT NULL,
    disponible boolean NOT NULL,
    numero integer NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS automoviles (
    id serial NOT NULL,
    id_zona serial NOT NULL,
    id_proveedor serial NOT NULL,
    id_calendario_vehiculo serial NOT NULL,
    combustible character varying(255) NOT NULL,
    transmision character varying(255) NOT NULL,
    patente character varying(255) NOT NULL,
    marca character varying(255) NOT NULL, 
    gamma character varying(255) NOT NULL,
    tipo character varying(255) NOT NULL,
    aire_acondicionado boolean NOT NULL,
    precio_hora double precision NOT NULL,
    n_kilometraje integer NOT NULL,
    n_pasajeros integer NOT NULL,
    equipaje_g integer NOT NULL,
    equipaje_p integer NOT NULL,
    n_puertas integer NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS aviones (
    id serial NOT NULL,
    id_compania serial NOT NULL,
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
    id_user serial NOT NULL,
    id_asiento serial NOT NULL,
    estado character varying(255) NOT NULL,
    fecha date NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS companias (
    id serial NOT NULL,
    nombre character varying(255) NOT NULL,
    direccion character varying(255) NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS detalles_reservas_autos (
    id serial NOT NULL,
    id_res_auto serial NOT NULL,
    patente character varying(255) NOT NULL,
    cantidad integer NOT NULL,
    descuento double precision NOT NULL,
    precio_reserva double precision NOT NULL,
    fecha_retiro timestamp,
    fecha_regreso timestamp,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS detalles_reservas_hoteles (
    id serial NOT NULL,
    id_reserva_hotel serial NOT NULL,
    id_habitacion_hotel serial NOT NULL,
    id_alojamiento_privado serial NOT NULL,
    fecha_egreso date NOT NULL,
    fecha_ingreso date NOT NULL,
    precio double precision NOT NULL,
    tipo character varying(255) NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS detalles_ventas_vuelos (
    id serial NOT NULL,
    id_venta serial NOT NULL,
    cantidad integer NOT NULL,
    precio double precision NOT NULL,
    descuento double precision NOT NULL,
    monto_total double precision NOT NULL,
    tipo character varying(255) NOT NULL,
    fecha timestamp,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS detalles_vuelos (
    id serial NOT NULL,
    id_avion serial NOT NULL,
    id_vuelo serial NOT NULL,
    fecha_aterrizaje timestamp,
    fecha_despegue timestamp,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS habitaciones (
    id serial NOT NULL,
    id_alojamiento_privado serial NOT NULL,
    piso integer NOT NULL,
    camas integer NOT NULL,
    numero integer NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS habitaciones_hoteles (
    id serial NOT NULL,
    id_hotel serial NOT NULL,
    id_calendario_alojamiento serial NOT NULL,
    camas integer NOT NULL,
    numero integer NOT NULL,
    capacidad integer NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS habitaciones_servicios (
    id serial NOT NULL,
    id_habitacion_hotel serial NOT NULL,
    id_servicio_alojamiento serial NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS hoteles (
    id serial NOT NULL,
    capacidad integer NOT NULL,
    estrellas double precision NOT NULL,
    pais character varying(255) NOT NULL,
    nombre character varying(255) NOT NULL,
    direccion character varying(255) NOT NULL,
    valoracion date NOT NULL,
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
    id_aeropuerto serial NOT NULL,
    id_detalle_vuelo serial NOT NULL,
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
    kilometraje integer NOT NULL,
    franquicia_daños character varying(255) NOT NULL,
    politica_combustible character varying(255) NOT NULL,
    documentacion_necesaria character varying(255) NOT NULL,
    calificacion double precision NOT NULL,
    deposito_seguridad double precision NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS reservas_autos (
    id serial NOT NULL,
    id_venta serial NOT NULL,
    monto_total double precision NOT NULL,
    fecha timestamp NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS reservas_hoteles (
    id serial NOT NULL,
    id_venta serial NOT NULL,
    precio double precision NOT NULL,
    descuento double precision NOT NULL,
    monto_total double precision NOT NULL,
    cantidad integer NOT NULL,
    fecha date NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS servicios_alojamientos (
    id serial NOT NULL,
    id_hotel serial NOT NULL,
    precio double precision NOT NULL,
    nombre character varying(255) NOT NULL,
    descripcion character varying(255) NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS servicios_de_vehiculos (
    id serial NOT NULL,
    duracion integer NOT NULL,
    nombre_servicio character varying(255) NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS servicios_proveedores (
    id serial NOT NULL,
    id_servicio serial NOT NULL,
    id_proveedor serial NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS servicios_y_vehiculos (
    id serial NOT NULL,
    id_servicio serial NOT NULL,
    patente character varying(255) NOT NULL,
    precio double precision NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS users (
    id serial NOT NULL,
    acceso character varying(255) NOT NULL,
    nombre character varying(255) NOT NULL,
    apellido character varying(255) NOT NULL,
    pais character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    telefono character varying(255) NOT NULL,
    categoria character varying(255) NOT NULL,
    n_documento character varying(255),
    tipo_documento character varying(255),
    puntos integer,
    millas integer,
    millas_elite integer,
    fecha_nac date NOT NULL,
    remember_token character varying(100),
    email_verified_at timestamp,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS ventas (
    id serial NOT NULL,
    id_user serial NOT NULL,
    n_cuotas integer NOT NULL,
    monto_total integer NOT NULL,
    impuesto double precision NOT NULL,
    descuento double precision NOT NULL,
    metodo_pago character varying(255) NOT NULL,
    tipo_comprobante character varying(255) NOT NULL,
    fecha date NOT NULL,
    created_at timestamp,
    updated_at timestamp
);

CREATE TABLE IF NOT EXISTS vuelos (
    id serial NOT NULL,
    id_detalle_venta_vuelo serial NOT NULL,
    duracion_vuelo time NOT NULL,
    precio double precision NOT NULL,
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

ALTER TABLE automoviles
    ADD CONSTRAINT automoviles_pkey
    PRIMARY KEY (id);

ALTER TABLE automoviles
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

ALTER TABLE detalles_reservas_autos
    ADD CONSTRAINT detalles_reservas_autos_pkey
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

ALTER TABLE reservas_autos
    ADD CONSTRAINT reservas_autos_pkey
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
    FOREIGN KEY (id_user)
    REFERENCES users(id);

ALTER TABLE alojamientos_privados
    ADD CONSTRAINT alojamientos_privados_calendario_alojamiento_id_foreign
    FOREIGN KEY (id_calendario_alojamiento)
    REFERENCES calendarios_alojamientos(id);

ALTER TABLE alojamientos_servicios
    ADD CONSTRAINT alojamientos_servicios_alojamiento_privado_id_foreign
    FOREIGN KEY (id_alojamiento_privado)
    REFERENCES alojamientos_privados(id);

ALTER TABLE alojamientos_servicios
    ADD CONSTRAINT alojamientos_servicios_servicio_alojamiento_id_foreign
    FOREIGN KEY (id_servicio_alojamiento)
    REFERENCES servicios_alojamientos(id);

ALTER TABLE asientos
    ADD CONSTRAINT asientos_avion_id_foreign
    FOREIGN KEY (id_avion)
    REFERENCES aviones(id);

ALTER TABLE automoviles
    ADD CONSTRAINT automoviles_zona_id_foreign
    FOREIGN KEY (id_zona)
    REFERENCES zonas(id);

ALTER TABLE automoviles
    ADD CONSTRAINT automoviles_proveedor_id_foreign
    FOREIGN KEY (id_proveedor)
    REFERENCES proveedores(id);

ALTER TABLE automoviles
    ADD CONSTRAINT automoviles_calendario_vehiculo_id_foreign
    FOREIGN KEY (id_calendario_vehiculo)
    REFERENCES calendarios_vehiculos(id);

ALTER TABLE aviones
    ADD CONSTRAINT aviones_compania_id_foreign
    FOREIGN KEY (id_compania)
    REFERENCES companias(id);

ALTER TABLE checks_in
    ADD CONSTRAINT checks_in_user_id_foreign
    FOREIGN KEY (id_user)
    REFERENCES users(id);

ALTER TABLE checks_in
    ADD CONSTRAINT checks_in_asiento_id_foreign
    FOREIGN KEY (id_asiento)
    REFERENCES asientos(id);

ALTER TABLE detalles_reservas_autos
    ADD CONSTRAINT detalles_reservas_autos_res_auto_id_foreign
    FOREIGN KEY (id_res_auto)
    REFERENCES reservas_autos(id);

ALTER TABLE detalles_reservas_hoteles
    ADD CONSTRAINT detalles_reservas_hoteles_reserva_hotel_id_foreign
    FOREIGN KEY (id_reserva_hotel)
    REFERENCES reservas_hoteles(id);

ALTER TABLE detalles_reservas_hoteles
    ADD CONSTRAINT detalles_reservas_hoteles_habitacion_hotel_id_foreign
    FOREIGN KEY (id_habitacion_hotel)
    REFERENCES habitaciones_hoteles(id);

ALTER TABLE detalles_reservas_hoteles
    ADD CONSTRAINT detalles_reservas_hoteles_alojamiento_privado_id_foreign
    FOREIGN KEY (id_alojamiento_privado)
    REFERENCES alojamientos_privados(id);

ALTER TABLE detalles_ventas_vuelos
    ADD CONSTRAINT detalles_ventas_vuelos_venta_id_foreign
    FOREIGN KEY (id_venta)
    REFERENCES ventas(id);

ALTER TABLE detalles_vuelos
    ADD CONSTRAINT detalles_vuelos_reserva_avion_id_foreign
    FOREIGN KEY (id_avion)
    REFERENCES aviones(id);

ALTER TABLE detalles_vuelos
    ADD CONSTRAINT detalles_vuelos_vuelo_id_foreign
    FOREIGN KEY (id_vuelo)
    REFERENCES vuelos(id);

ALTER TABLE habitaciones
    ADD CONSTRAINT habitaciones_alojamiento_privado_id_foreign
    FOREIGN KEY (id_alojamiento_privado)
    REFERENCES alojamientos_privados(id);

ALTER TABLE habitaciones_hoteles
    ADD CONSTRAINT habitaciones_hoteles_hotel_id_foreign
    FOREIGN KEY (id_hotel)
    REFERENCES hoteles(id);

ALTER TABLE habitaciones_servicios
    ADD CONSTRAINT habitaciones_servicios_habitacion_hotel_id_foreign
    FOREIGN KEY (id_habitacion_hotel)
    REFERENCES habitaciones_hoteles(id);

ALTER TABLE habitaciones_servicios
    ADD CONSTRAINT habitaciones_servicios_servicio_alojamiento_id_foreign
    FOREIGN KEY (id_servicio_alojamiento)
    REFERENCES servicios_alojamientos(id);

ALTER TABLE origenes_destinos
    ADD CONSTRAINT origenes_destinos_aeropuerto_id_foreign
    FOREIGN KEY (id_aeropuerto)
    REFERENCES aeropuertos(id);

ALTER TABLE origenes_destinos
    ADD CONSTRAINT origenes_destinos_detalle_vuelo_id_foreign
    FOREIGN KEY (id_detalle_vuelo)
    REFERENCES detalles_vuelos(id);

ALTER TABLE reservas_autos
    ADD CONSTRAINT reservas_autos__venta_id_foreign
    FOREIGN KEY (id_venta)
    REFERENCES ventas(id);

ALTER TABLE reservas_hoteles
    ADD CONSTRAINT reservas_hoteles__venta_id_foreign
    FOREIGN KEY (id_venta)
    REFERENCES ventas(id);

ALTER TABLE servicios_alojamientos
    ADD CONSTRAINT servicios_alojamientos_hotel_id_foreign
    FOREIGN KEY (id_hotel)
    REFERENCES hoteles(id);

ALTER TABLE servicios_proveedores
    ADD CONSTRAINT servicios_proveedores_servicio_id_foreign
    FOREIGN KEY (id_servicio)
    REFERENCES servicios_de_vehiculos(id);

ALTER TABLE servicios_proveedores
    ADD CONSTRAINT servicios_proveedores_proveedor_id_foreign
    FOREIGN KEY (id_proveedor)
    REFERENCES proveedores(id);

ALTER TABLE servicios_y_vehiculos
    ADD CONSTRAINT servicios_y_vehiculos_servicio_id_foreign
    FOREIGN KEY (id_servicio)
    REFERENCES servicios_de_vehiculos(id);

ALTER TABLE servicios_y_vehiculos
    ADD CONSTRAINT servicios_y_vehiculos_patente_id_foreign
    FOREIGN KEY (patente)
    REFERENCES automoviles(patente);

ALTER TABLE ventas
    ADD CONSTRAINT ventas_user_id_foreign
    FOREIGN KEY (id_user)
    REFERENCES users(id);

ALTER TABLE vuelos
    ADD CONSTRAINT vuelos_detalle_venta_vuelo_id_foreign
    FOREIGN KEY (id_detalle_venta_vuelo)
    REFERENCES detalles_ventas_vuelos(id);
