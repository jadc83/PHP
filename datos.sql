DROP TABLE IF EXISTS usuarios CASCADE;

CREATE TABLE usuarios (
    id              BIGSERIAL    PRIMARY KEY,
    nombre          VARCHAR(255) NOT NULL,
    apellidos       VARCHAR(255) NOT NULL,
    dni             VARCHAR(255) NOT NULL UNIQUE
);

INSERT INTO usuarios (nombre, apellidos, dni)
VALUES ('Manolo', 'Pérez', '52358293F'),
       ('María', 'Rodríguez', '50938592A'),
       ('Rosa', 'González', '98532718P');
