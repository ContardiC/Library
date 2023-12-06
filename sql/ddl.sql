CREATE TABLE autori(
    id INT AUTO_INCREMENT,
    nome VARCHAR(255),
    cognome VARCHAR(255),
    nazione CHAR(2),
    PRIMARY KEY(id)
);

CREATE TABLE editori(
    id INT AUTO_INCREMENT,
    nome VARCHAR(255),
    luogo VARCHAR(255),
    PRIMARY KEY(id)
);

CREATE TABLE generi(
    id INT AUTO_INCREMENT,
    nome VARCHAR(60),
    PRIMARY KEY(id)
);