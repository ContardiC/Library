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

CREATE TABLE libri(
    id INT AUTO_INCREMENT,
    titolo TEXT,
    id_autore INT,
    id_editore INT,
    id_genere INT,
    PRIMARY KEY(id),
    FOREIGN KEY(id_autore) REFERENCES autori(id),
    FOREIGN KEY(id_editore) REFERENCES editori(id),
    FOREIGN KEY(id_genere) REFERENCES generi(id)
);

CREATE TABLE utenti(
    id INT AUTO_INCREMENT,
    nome VARCHAR(255),
    cognome VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(64),
);