DROP TABLE IF EXISTS books CASCADE;
DROP TABLE IF EXISTS users CASCADE;
DROP TABLE IF EXISTS comments CASCADE;

CREATE TABLE books (
    boo_id SERIAL PRIMARY KEY NOT NULL, 
    boo_title VARCHAR(25) NOT NULL, 
    boo_author VARCHAR(25) NOT NULL,
    boo_date DATE NOT NULL, 
    boo_content VARCHAR NOT NULL, 
    boo_type VARCHAR NOT NULL
);

CREATE TABLE users ( 
    use_id SERIAL PRIMARY KEY, 
    use_name VARCHAR(25) NOT NULL, 
    use_email VARCHAR(75) NOT NULL, 
    use_password VARCHAR(255)
);

CREATE TABLE comments(
        com_id SERIAL PRIMARY KEY NOT NULL ,
        com_content Varchar (255),
        boo_id INT,
        FOREIGN KEY (boo_id) REFERENCES books (boo_id)
);