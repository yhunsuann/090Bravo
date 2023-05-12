use project1;
CREATE TABLE users(
id INT NOT NULL AUTO_INCREMENT,
email varchar(30),
password varchar(20),
PRIMARY KEY (id)
);
CREATE TABLE recruitments(
id INT NOT NULL AUTO_INCREMENT,
title varchar(255),
image varchar(30),
status ENUM('active', 'inactive'),
create_at timestamp,
PRIMARY KEY (id)
);
INSERT INTO users(email,password) VALUES('mienphi221@gmail.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm');

INSERT INTO recruitments(title, content, description, image, status, created_at) VALUES('[HCM-DN-HN] Senior Frontend Dev (ReactJS, JavaScript)', 'ok','ok', 'full.jpg', 'active', now());

ALTER TABLE recruitments
ADD content varchar(255);

UPDATE recruitments
SET password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'
WHERE id = 1;

ALTER TABLE users
MODIFY COLUMN password varchar(100);

ALTER TABLE users
ADD token varchar(100);

ALTER TABLE
    recruitments
CHANGE
    delete_at
    deleted_at timestamp;
    
UPDATE recruitments
SET deleted_at = null
WHERE id =2 ; 

UPDATE recruitments
SET created_at = '2023-05-6 00:00:00'
WHERE id = 2; 
