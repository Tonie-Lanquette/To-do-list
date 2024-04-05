#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Salles
#------------------------------------------------------------

CREATE TABLE Salles(
        ID      Int  Auto_increment  NOT NULL ,
        Nom     Varchar (100) NOT NULL ,
        Nombre  Int NOT NULL ,
        PMR     Bool NOT NULL
	,CONSTRAINT Salles_PK PRIMARY KEY (ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Catégorie
#------------------------------------------------------------

CREATE TABLE Categorie(
        ID          Int  Auto_increment  NOT NULL ,
        Nom         Varchar (100) NOT NULL ,
        Description Text NOT NULL
	,CONSTRAINT Categorie_PK PRIMARY KEY (ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Classification
#------------------------------------------------------------

CREATE TABLE Classification(
        ID            Int  Auto_increment  NOT NULL ,
        Intitule      Varchar (100) NOT NULL ,
        Avertissement Bool NOT NULL
	,CONSTRAINT Classification_PK PRIMARY KEY (ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Films
#------------------------------------------------------------

CREATE TABLE Films(
        ID                Int  Auto_increment  NOT NULL ,
        Nom               Varchar (100) NOT NULL ,
        Affiche           Varchar (500) NOT NULL ,
        Trailer           Varchar (500) NOT NULL ,
        Resume            Text NOT NULL ,
        Duree             Int NOT NULL ,
        Sortie            Date NOT NULL ,
        ID_Classification Int NOT NULL
	,CONSTRAINT Films_PK PRIMARY KEY (ID)

	,CONSTRAINT Films_Classification_FK FOREIGN KEY (ID_Classification) REFERENCES Classification(ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Employés
#------------------------------------------------------------

CREATE TABLE Employes(
        ID        Int  Auto_increment  NOT NULL ,
        Nom       Varchar (50) NOT NULL ,
        Prenom    Varchar (50) NOT NULL ,
        Annee     Date NOT NULL ,
        Mail      Varchar (100) NOT NULL ,
        Telephone Varchar (50) NOT NULL
	,CONSTRAINT Employes_AK UNIQUE (Mail,Telephone)
	,CONSTRAINT Employes_PK PRIMARY KEY (ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Projeter
#------------------------------------------------------------

CREATE TABLE Projeter(
        ID          Int NOT NULL ,
        ID_Films    Int NOT NULL ,
        ID_Employes Int NOT NULL ,
        Horaire     Int NOT NULL
	,CONSTRAINT Projeter_PK PRIMARY KEY (ID,ID_Films,ID_Employes)

	,CONSTRAINT Projeter_Salles_FK FOREIGN KEY (ID) REFERENCES Salles(ID)
	,CONSTRAINT Projeter_Films0_FK FOREIGN KEY (ID_Films) REFERENCES Films(ID)
	,CONSTRAINT Projeter_Employes1_FK FOREIGN KEY (ID_Employes) REFERENCES Employes(ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Catégoriser
#------------------------------------------------------------

CREATE TABLE Categoriser(
        ID       Int NOT NULL ,
        ID_Films Int NOT NULL
	,CONSTRAINT Categoriser_PK PRIMARY KEY (ID,ID_Films)

	,CONSTRAINT Categoriser_Categorie_FK FOREIGN KEY (ID) REFERENCES Categorie(ID)
	,CONSTRAINT Categoriser_Films0_FK FOREIGN KEY (ID_Films) REFERENCES Films(ID)
)ENGINE=InnoDB;

