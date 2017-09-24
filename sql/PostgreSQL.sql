CREATE TABLE Books (
    boo_id int SERIAL PRIMARY KEY NOT NULL, 
    boo_title VARCHAR(25) NOT NULL, 
    boo_date DATE NOT NULL, 
    boo_content VARCHAR(255) NOT NULL, 
    boo_type VARCHAR(25)
);

CREATE TABLE Users ( 
    use_id int SERIAL PRIMARY KEY, 
    use_name VARCHAR(25) NOT NULL, 
    use_email VARCHAR(75) NOT NULL, 
    use_password VARCHAR(255)
);

CREATE TABLE Comments(
        com_id int (11) SERIAL NOT NULL ,
        com_content Varchar (255)
);

ALTER TABLE comments ADD COLUMN use_id INT REFERENCES users;
ALTER TABLE comments ADD COLUMN boo_id INT REFERENCES books;