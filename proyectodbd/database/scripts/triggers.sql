-- 
-- Trigger Acción inicial de Usuario:
-- Añade como la primera acción del usuario la creación de su cuenta.
--

CREATE OR REPLACE FUNCTION primera_accion()
  RETURNS trigger AS

$BODY$
DECLARE mensaje TEXT := 'El usuario ha creado su cuenta';
DECLARE id_user INT;

BEGIN
  
  SELECT MAX(id) FROM users INTO id_user;

  INSERT INTO acciones(id_user, fecha, accion) VALUES( id_user, clock_timestamp(), mensaje);
  RETURN NULL;
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
DECLARE id_servicio INT;
DECLARE patente TEXT;

BEGIN
  SELECT MAX(id) FROM servicios_de_vechiculos INTO id_servicio;
  SELECT MAX(id) FROM automoviles INTO patente;

  INSERT INTO servicios_y_vehiculos(id_servicio, patente) VALUES(id_servicio, patente);
END;
$BODY$ LANGUAGE plpgsql;

DROP TRIGGER IF EXISTS servicio_y_vehiculo ON users;

CREATE TRIGGER servicio_y_vehiculo
  AFTER INSERT ON servicios_de_vechiculos
  FOR EACH ROW
  EXECUTE PROCEDURE servicio_y_vehiculo();



 