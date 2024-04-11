--Čitanje podataka iz baze
SELECT * FROM `tasks`;

SELECT `title`, `start_date`, `due_date` FROM `tasks`;

SELECT `name`,`age`,`adress` FROM `customers`;

--Dohvati sva različita imena koja imaju nasi potrosaci

SELECT DISTINCT `name` FROM `customers`;

SELECT DISTINCT `name`,`age`,`adress` FROM `customers`;

--Iz tabele customers procitati sve klijente
--Koji dolaze iz Srbije
--Koji imaju platu jednaku (manju,veću) od 500

SELECT *
FROM `customers`
WHERE `state` = "Srbija";

SELECT *
FROM `customers`
WHERE `salary` = 500;


SELECT *
FROM `customers`
WHERE `salary` >= 500;

--Iz tabele tasks procitati sve zadatke 
--ciji je status aktivan

SELECT `tasks_id`, `title`, `description`
FROM `customers`
WHERE `salary` >= 500;

--zadaci koji su prioritetni, a nisu završeni
SELECT `tasks_id`, `title`, `description`
FROM `customers`
WHERE `priority` = 1
AND `due_date` IS NOT NULL;
