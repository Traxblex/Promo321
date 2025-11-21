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
/* insert into sert a ajouter une ligne dans une table*/
INSERT INTO client (id, nom, prenom, email, mdp, date_naissance, adresse) VALUES ( 1, "Uchiwa", "Itachi", "itachi@gmail.com", "Louvre", "2000-08-23", "3 rue de konoha");

INSERT INTO commande (id, numero_commande, montant_total, adresse_livraison, date_commande) VALUES (1, "CMD001", 55000.00, "3 rue de konoha", "2024-06-15");

INSERT INTO client (nom, prenom, email, mdp, date_naissance, adresse) VALUES ("Uzumaki", "Naruto", "naruto@gmail.com", "Louvre", "2005-08-23", "31 rue de konoha");

INSERT INTO COMMANDE (numero_commande, montant_total, adresse_livraison, date_commande) VALUES ("CMD002", 75000.00, "31 rue de konoha", "2024-06-16");
INSERT INTO client (nom, prenom, email, mdp, date_naissance, adresse) VALUES ("Haruno", "Sakura", "sakura@gmail.com", "Louvre", "2003-08-23", "5 rue de konoha");
INSERT INTO COMMANDE (numero_commande, montant_total, adresse_livraison, date_commande) VALUES ("CMD0003", 65000.00, "5 rue de konoha", "2024-06-17");
insert INTO client (nom, prenom, email, mdp, date_naissance, adresse) VALUES ("Uchiwa", "Sasuke", "sasuke@gmail.com", "Louvre", "2004-08-23", "7 rue de konoha");
insert into COMMANDE (numero_commande, montant_total, adresse_livraison, date_commande) VALUES ("CMD004", 65000.00, "7 rue de konoha", "2024-06-17");
INSERT INTO client (nom, prenom, email, mdp, date_naissance, adresse) VALUES ("Nara", "Shikamaru", "shikamaru@gmail.com", "Louvre", "2002-08-23", "9 rue de konoha");
INSERT INTO COMMANDE (numero_commande, montant_total, adresse_livraison, date_commande) VALUES ("CMD005", 80000.00, "7 rue de konoha", "2024-06-18");
INSERT INTO client (nom, prenom, email, mdp, date_naissance, adresse) VALUES ("Akimichi", "Choji", "choji@gmail.com", "Louvre", "2001-08-23", "11 rue de konoha");
INSERT INTO COMMANDE (numero_commande, montant_total, adresse_livraison, date_commande) VALUES ("CMD006", 70000.00, "11 rue de konoha", "2024-06-19");
INSERT INTO client (nom, prenom, email, mdp, date_naissance, adresse) VALUES ("Yamanaka", "Ino", "ino@gmail.com", "Louvre", "2003-05-12", "13 rue de konoha");
INSERT INTO COMMANDE (numero_commande, montant_total, adresse_livraison, date_commande) VALUES ("CMD007", 72000.00, "9 rue de konoha", "2024-06-19");
INSERT INTO client (nom, prenom, email, mdp, date_naissance, adresse) VALUES ("Sarutobi", "Asuma", "asuma@gmail.com", "Louvre", "1995-09-07", "15 rue de konoha");
INSERT INTO COMMANDE (numero_commande, montant_total, adresse_livraison, date_commande) VALUES ("CMD008", 68000.00, "11 rue de konoha", "2024-06-20");
INSERT INTO client (nom, prenom, email, mdp, date_naissance, adresse) VALUES ("Tsunade", "Senju", "senju@gmail.com", "Louvre", "1980-03-02", "17 rue de konoha");
INSERT INTO commande (numero_commande, montant_total, adresse_livraison, date_commande) VALUES ("CMD009", 90000.00, "13 rue de konoha", "2024-06-21");
INSERT INTO client (nom, prenom, email, mdp, date_naissance, adresse) VALUES ("Hyuuga", "Hinata", "hinata@gmail.com", "Louvre", "2004-12-27", "19 rue de konoha");
INSERT INTO COMMANDE (numero_commande, montant_total, adresse_livraison, date_commande) VALUES ("CMD010", 76000.00, "15 rue de konoha", "2024-06-22");

/* RECUPERAR DEPUIS LA TABLE CLIENT*/
/*select sert a recuperer des donnees depuis une table*/
select * from client;
/*recuperer selon un critere*/
select * from client where email="itachi@gmail.com";
select * from client where email="itachi@gmail.com" AND nom="Itachi";
select * from client where email="itachi@gmail.com" or nom="Uchiwa";
/*suppresion d'une ligne dans la table client*/
delete from client where id = 1;
/*modifier une ligne dans la table client */
/* Set sert à affecter une nouvelle valeur à un champ, dans le champ update il n'y a pas besoins de from*/
update client set nom="TOTO" where id=2;

#1 : afficher tous les commandes
select * from commande;
#2 : afficher les commandes dont le montant est superieur a 70000
select * from commande where montant_total > 70000;
#3 : afficher les 5 commandes les plus chères et order by veut dire trier par et DESC veut dire du plus grand au plus petit
select * from commande order by montant_total DESC limit 5;
#4 : trier les commandes par date de libraison la plus proche et asc veut dire du plus petit au plus grand
select * from commande order by date_commande ASC;
#5 : compter toutes les commmandes et count(*) veur dire compter toutes les lignes et AS permet de renommer le resultat
select count(*) AS nombre_commande from commande