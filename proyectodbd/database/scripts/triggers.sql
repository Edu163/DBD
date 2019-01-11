-- 
-- Trigger Acción inicial de Usuario:
-- Añade como la primera acción del usuario la creación de su cuenta.
--

CREATE OR REPLACE FUNCTION primera_accion()
  RETURNS trigger AS

$BODY$
DECLARE mensaje TEXT := 'El usuario ha creado su cuenta';
DECLARE user_id INT;

BEGIN
  
  SELECT MAX(id) FROM users INTO user_id;

  INSERT INTO acciones(user_id, fecha, accion) VALUES(user_id, clock_timestamp(), mensaje);
  RETURN NULL;
END;

$BODY$ LANGUAGE plpgsql;

DROP TRIGGER IF EXISTS asignacion_primera_accion ON users;

CREATE TRIGGER asignacion_primera_accion
  AFTER INSERT ON users
  EXECUTE PROCEDURE primera_accion();



 