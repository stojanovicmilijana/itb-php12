--Komanda za kreiranje baze podataka

--CREATE DATABASE test_druga;
CREATE DATABASE test_druga CHARACTER SET utf16 collate utf16_slovenian_ci;


--Komanda za brisanje baze podataka:
DROP DATABASE test_druga;


--KOMANDA ZA ODABIR BAZE PODATAKA
USE test_baza;



--primer
--Kreiraj bazu skola
CREATE DATABASE skola CHARACTER SET utf16 collate utf16_slovenian_ci;

--Odaberi bazu skola
USE skola;

--Kreiranje tabele studenti
CREATE TABLE studenti(
  ime VARCHAR(50),
  prezime VARCHAR(50)
);

--Kreiranje table customers
CREATE TABLE customers(
   
   id INT NOT NULL,
   name VARCHAR (20) NOT NULL,
   age TINYINT NOT NULL,
   adress char(25),
   salary decimal (18,2) DEFAULT 500
 
);

--Kreiranje tabele tasks
CREATE TABLE tasks(
  task_id INT UNIQUE,
  title VARCHAR(255) NOT NULL,
  start_date DATE,
  due_date DATE,
  status TINYINT NOT NULL,
  description TEXT
);

--Kreiranje table customers sa primarnim kljucem
--CREATE TABLE customers(
   
--   id INT NOT NULL,
 --  name VARCHAR (20) NOT NULL,
 --  age TINYINT NOT NULL,
 --  adress char(25),
 --  salary decimal (18,2) DEFAULT 500,
 --  PRIMARY KEY (id)
 
--); - ovo ne jer već postoji tabela sa ovim nazivom

--Dodavanje primarnog ključa u tabelu customers(moze i bez -backticks)
ALTER TABLE `customers` ADD PRIMARY KEY(`id`);
ALTER TABLE tasks ADD PRIMARY KEY(task_id);

--U tabeli customers dodati kolonu active tipa tinyint
ALTER TABLE `customers` ADD active TINYINT;
--U tabeli customers dodati kolonu state tipa varchar 90
ALTER TABLE `customers` ADD state VARCHAR(90);
--U tabeli customers dodati kolonu number_of_visits tipa tinyint
ALTER TABLE `customers` ADD number_of_visits TINYINT;


--U tabeli tasks dodati kolonu priority TINYINT NOT NULL
ALTER TABLE `tasks` ADD priority TINYINT NOT NULL;


--Brisanje tabele
DROP TABLE studenti;


--Dodavanje novih redova u tabelu
INSERT INTO customers
VALUES(1,"Ana", 25, "Bubanjskih heroja 48", 600, 1, "Srbija", 37);

INSERT INTO customers(name, id, age, active, state, number_of_visits)
VALUES
("Bojana", 2, 39, 0, "Srbija",16),
("Dejan", 3, 31, 0, "Crna Gora",3);

