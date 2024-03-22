#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: tdl_user
#------------------------------------------------------------

CREATE TABLE tdl_user(
        id_user   Int  Auto_increment  NOT NULL ,
        firstName Varchar (50) NOT NULL ,
        lastName  Varchar (50) NOT NULL ,
        password  Varchar (255) NOT NULL ,
        email     Varchar (255) NOT NULL
	,CONSTRAINT tdl_user_AK UNIQUE (email)
	,CONSTRAINT tdl_user_PK PRIMARY KEY (id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: tdl_priority
#------------------------------------------------------------

CREATE TABLE tdl_priority(
        id_priority Int  Auto_increment  NOT NULL ,
        name        Varchar (255) NOT NULL
	,CONSTRAINT tdl_priority_PK PRIMARY KEY (id_priority)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: tdl_task
#------------------------------------------------------------

CREATE TABLE tdl_task(
        id_task     Int  Auto_increment  NOT NULL ,
        name        Varchar (255) NOT NULL ,
        description Varchar (255) ,
        date        Datetime ,
        id_user     Int NOT NULL ,
        id_priority Int NOT NULL
	,CONSTRAINT tdl_task_PK PRIMARY KEY (id_task)

	,CONSTRAINT tdl_task_tdl_user_FK FOREIGN KEY (id_user) REFERENCES tdl_user(id_user)
	,CONSTRAINT tdl_task_tdl_priority0_FK FOREIGN KEY (id_priority) REFERENCES tdl_priority(id_priority)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: tdl_category
#------------------------------------------------------------

CREATE TABLE tdl_category(
        id_category Int  Auto_increment  NOT NULL ,
        name        Varchar (255) NOT NULL
	,CONSTRAINT tdl_category_PK PRIMARY KEY (id_category)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: tdl_categoriser
#------------------------------------------------------------

CREATE TABLE tdl_categoriser(
        id_category Int NOT NULL ,
        id_task     Int NOT NULL
	,CONSTRAINT tdl_categoriser_PK PRIMARY KEY (id_category,id_task)

	,CONSTRAINT tdl_categoriser_tdl_category_FK FOREIGN KEY (id_category) REFERENCES tdl_category(id_category)
	,CONSTRAINT tdl_categoriser_tdl_task0_FK FOREIGN KEY (id_task) REFERENCES tdl_task(id_task)
)ENGINE=InnoDB;