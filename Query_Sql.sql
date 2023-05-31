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

INSERT INTO recruitments(image, status, created_at) VALUES('2.jpg', 'Inactive', now());
INSERT INTO recruitment_translates(recruitment_id, language_code, title, content,description) 
VALUES(LAST_INSERT_ID(),'en','title_en','content_en','description_en'),
	  (LAST_INSERT_ID(),'vi','nha phat trien full stack','nha phat trien full stack','description_vi');

INSERT INTO posts(images, type, created_at) VALUES('1.jpg', 'Office', now());
INSERT INTO post_translates(post_id, language_code, title, content,description) 
VALUES(2,'en','title_en','content_en','description_en'),
	  (2,'vi','nha phat trien full stack','nha phat trien full stack','description_vi');

INSERT INTO languages(language_code,language_name) VALUES ('vi','VietNamese');

INSERT INTO contact(full_name, email, address, phone, message, created_at) VALUES ('tuan','mienphi221@gmail.com','487 cach mang thang 8, Cam le, Da Nang', '+84 799307885', 'Ung tuyen laravel', '2023-05-29 16:21:48');

INSERT INTO config_contact(name, contact_key, type, value) VALUES ('email','email_text','text', 'mienphi221@gmail.com');


ALTER TABLE recruitments
ADD content varchar(255);

UPDATE blogs
SET image = '1.jpg'
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
WHERE id > 0 ; 

UPDATE recruitments
SET created_at = '2023-05-6 00:00:00'
WHERE id = 2; 

SELECT language_code
FROM recruitment_translates
GROUP BY language_code;

SELECT * FROM recruitments WHERE deleted_at IS NULL;
 
TRUNCATE TABLE recruitments;
TRUNCATE TABLE recruitment_translates;
TRUNCATE TABLE languages;

DELETE FROM config_contact where contact_key = 'add_text';

SELECT recruitment_translates.id,  recruitment_translates.recruitment_id, recruitment_translates.title, recruitment_translates.content, recruitment_translates.description, created_at, image, recruitments.deleted_at ,recruitment_translates.language_code
FROM recruitments
INNER JOIN recruitment_translates
ON recruitments.id = recruitment_translates.recruitment_id
WHERE language_code = 'vi';

UPDATE languages 
SET language_name = 'VietNam'
WHERE language_code = 'vi';


