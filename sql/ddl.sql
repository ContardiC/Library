// tabella autori
CREATE TABLE autori(
    id INT AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    cognome VARCHAR(255) NOT NULL,
    nazione CHAR(2),
    PRIMARY KEY(id)
);

CREATE TABLE editori(
    id INT AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    luogo VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE generi(
    id INT AUTO_INCREMENT,
    genere VARCHAR(60) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE libri(
    id INT AUTO_INCREMENT,
    titolo TEXT NOT NULL,
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
    nome VARCHAR(255) NOT NULL,
    cognome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(64) NOT NULL,
    PRIMARY KEY(id)
);
