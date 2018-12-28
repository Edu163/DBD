-- 
-- Trigger Acción inicial de Usuario:
-- Añade como la primera acción del usuario la creación de su cuenta.
--

CREATE OR REPLACE FUNCTION primera_accion()
  RETURNS trigger AS
$BODY$
BEGIN
  INSERT INTO acciones(id_user, fecha, accion) VALUES(users.id_user, NEW.fecha, "El usuario ha creado su cuenta");
END;
$BODY$ LANGUAGE plpgsql;

DROP TRIGGER IF EXISTS asignacion_primera_accion ON users;

CREATE TRIGGER asignacion_primera_accion
  AFTER INSERT ON users
  EXECUTE PROCEDURE primera_accion();

--
-- Triggar Servicio y Automóvil/Vehículo:
-- Rellena la tabla intermedia servicios_y_vehiculos
--

CREATE OR REPLACE FUNCTION servicio_y_vehiculo()
  RETURNS trigger AS
$BODY$
BEGIN
  INSERT INTO servicios_y_vehiculos(id_servicio, patente) VALUES(servicios_de_vechiculos.id_servicio, automoviles.patente);
END;
$BODY$ LANGUAGE plpgsql;

DROP TRIGGER IF EXISTS servicio_y_vehiculo ON users;

CREATE TRIGGER servicio_y_vehiculo
  AFTER INSERT ON users
  FOR EACH ROW
  EXECUTE PROCEDURE servicio_y_vehiculo();



 