CREATE DATABASE IF NOT EXISTS utilizadores;

USE utilizadores;

CREATE TABLE IF NOT EXISTS condominos(
    user VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    mensalidade INT,
    despesa_agua DECIMAL(10, 2),
    despesa_luz DECIMAL(10, 2),
    despesa_internet DECIMAL(10, 2)
);

INSERT INTO condominos (user, password)
VALUES ('condomino', 'condomino');

CREATE TABLE IF NOT EXISTS admins(
    user VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

INSERT INTO admins (user, password)
VALUES ('admin', 'admin');
