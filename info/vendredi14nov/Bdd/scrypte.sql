/*permet de creer la base de donnees mercedes*/
CREATE DATABASE mercedes;

/*permet d'utiliser la base de donnees mercedes*/
USE mercedes;


/*permet de creer la table client*/
CREATE TABLE client (
    /*id est la cle primaire de la table client et s'incremente auto*/
    id int auto_increment PRIMARY KEY,
    /*not null signifie que le champ ne peut pas etre vide*/
    nom varchar(255) NOT NULL,
    prenom varchar(255) NOT NULL,
    /*unique signifie que l'email doit etre unique*/
    email varchar(255) NOT NULL UNIQUE,
    mdp varchar(255) NOT NULL,
    date_naissance date,
    adresse varchar(255)
);

CREATE TABLE commande (
    id int auto_increment PRIMARY KEY,
    numero_commande varchar (255) NOT NULL UNIQUE,
    montant_total decimal NOT NULL,
    adresse_livraison varchar(255) NOT NULL,
    date_commande date NOT NULL
);

CREATE TABLE voiture (
    id int auto_increment PRIMARY KEY,
    etat boolean NOT NULL,
    marque varchar(255) NOT NULL,
    modele varchar(255) NOT NULL,
    annee int NOT NULL,
    couleur varchar(100),
    prix decimal NOT NULL
);

/*ajouter une ligne dans la table client*/
INSERT INTO client (id, nom, prenom, email, mdp, date_naissance, adresse) VALUES ( 1, "Uchiwa", "Itachi", "itachi@gmail.com", "Louvre", "2000-08-23", "3 rue de konoha");