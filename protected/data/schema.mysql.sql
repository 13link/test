CREATE TABLE tbl_user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL
);

INSERT INTO tbl_user (username, password, email) VALUES ('admin', 'admin', 'admin@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('demo', 'demo', 'demo@example.com');

CREATE TABLE tbl_state (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(128) NOT NULL
);

INSERT INTO tbl_state (name) VALUES ('Новая');
INSERT INTO tbl_state (name) VALUES ('Подтверждена');
INSERT INTO tbl_state (name) VALUES ('В обработке');
INSERT INTO tbl_state (name) VALUES ('Закрыта');


CREATE TABLE tbl_tasks (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(128) NOT NULL,
    description VARCHAR(255) NULL,
    director INTEGER NOT NULL,
	contractor INTEGER NOT NULL,
	sost INTEGER NOT NULL
);