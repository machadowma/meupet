CREATE DATABASE meupet;

USE meupet;

CREATE TABLE especie (
 id INTEGER PRIMARY KEY AUTO_INCREMENT
 ,nome VARCHAR(20)
);

CREATE TABLE pet (
 id INTEGER PRIMARY KEY AUTO_INCREMENT
 ,nome VARCHAR(20)
 ,sexo char(1)
 ,id_especie INTEGER
 ,FOREIGN KEY(id_especie) REFERENCES especie(id)
);

INSERT INTO especie (id, nome) VALUES (1,'Cachorro');
INSERT INTO especie (id, nome) VALUES (2,'Gato');
INSERT INTO especie (id, nome) VALUES (3,'Coelho');