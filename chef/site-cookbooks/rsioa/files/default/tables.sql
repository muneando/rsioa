SET SESSION FOREIGN_KEY_CHECKS=0;


/* Create Tables */

CREATE TABLE apartmets
(
	id int NOT NULL UNIQUE AUTO_INCREMENT,
	name varchar(100) NOT NULL,
	created datetime NOT NULL,
	modified datetime NOT NULL,
	PRIMARY KEY (id)
);


CREATE TABLE rooms
(
	id int NOT NULL UNIQUE AUTO_INCREMENT,
	apartment_id int NOT NULL UNIQUE,
	room_no char(8) NOT NULL,
	room_status enum('vacant','occupancy') NOT NULL,
	created datetime NOT NULL,
	modified datetime NOT NULL,
	PRIMARY KEY (id)
);



/* Create Foreign Keys */

ALTER TABLE rooms
	ADD FOREIGN KEY (apartment_id)
	REFERENCES apartmets (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;



