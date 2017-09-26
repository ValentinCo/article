#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Comments
#------------------------------------------------------------
drop database if exists article;
create database article;
Use article;
CREATE TABLE Comments(
        com_id      int (11) Auto_increment  NOT NULL ,
        com_content Varchar (255) ,
        com_pseudo  varchar(45) ,
        boo_id      Int NOT NULL ,
        PRIMARY KEY (com_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Users
#------------------------------------------------------------
CREATE TABLE Users(
        use_id       int (11) Auto_increment  NOT NULL ,
        use_name     Varchar (25) NOT NULL ,
        use_email    Varchar (75) NOT NULL ,
        use_password Varchar (255) NOT NULL ,
        PRIMARY KEY (use_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Books
#------------------------------------------------------------
CREATE TABLE Books(
        boo_id      int (11) Auto_increment  NOT NULL ,
        boo_author varchar(45) NOT NULL,
        boo_title   Varchar (100) NOT NULL ,
        boo_date    Date NOT NULL ,
        boo_content text NOT NULL ,
        boo_type    Varchar (25) NOT NULL ,
        PRIMARY KEY (boo_id )
)ENGINE=InnoDB;

ALTER TABLE Comments ADD CONSTRAINT FK_Comments_boo_id FOREIGN KEY (boo_id) REFERENCES Books(boo_id);
