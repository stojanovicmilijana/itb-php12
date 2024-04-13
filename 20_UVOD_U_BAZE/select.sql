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


-- Iz tabele customers, pročitati sve klijente:
-- Čija je plata između 300 i 800,

SELECT `name`,`adress`,`state`,`salary`
FROM `customers`
WHERE `salary` BETWEEN 300 AND 800;

--čija je plata jednaka 500,600 ili 700
SELECT `name`,`adress`,`state`,`salary`
FROM `customers`
WHERE `salary` = 500,
OR `salary` = 600,
OR `salary` = 700;


--bolje rešenje
SELECT `name`,`adress`,`state`,`salary`
FROM `customers`
WHERE `salary` IN(500,600,700);

--polje čije je ime Ana,Bojana ili Vuk
SELECT `name`,`adress`,`state`,`salary`
FROM `customers`
WHERE `name` IN('Ana', 'Bojana', 'Vuk');

--polje cije ime pocinje na slovo B
SELECT *
FROM `customers`
WHERE `name` LIKE 'B%';

--polje cije ime sadrzi  slovo 'j'
SELECT `name`,`adress`,`state`,`salary`
FROM `customers`
WHERE `name` LIKE '%j%';


-- Koji su iz Srbije, Rumunije ili Bugarske,
SELECT `name`,`adress`,`state`,`salary`
FROM `customers`
WHERE `state` IN('Srbija', 'Rumunija', 'Bugarska');


-- Koju potiču iz zemlje koja počinje na slovo “S”.
SELECT `name`,`adress`,`state`,`salary`
FROM `customers`
WHERE `state` LIKE 's%';


--Limitiranje broja rezultata
SELECT *
FROM `customers`
LIMIT 2;

SELECT *
FROM `customers`
WHERE `name` LIKE 'B%'
LIMIT 1;

--Prikazi prva dva korisnika koji imaju dvocifren br poseta
SELECT *
FROM `customers`
WHERE `number_of_visits` BETWEEN 10 AND 99
LIMIT 2;


--Sortiranje podataka
SELECT *
FROM `customers`
ORDER BY `name`;

--svi korisnici po godinama od najstarijeg ka najmladjem
SELECT *
FROM `customers`
ORDER BY `age`DESC;

--svi korisnici po godinama od najmladjih ka najstarijima
--i po broju poseta od vise ka manjem-primenice se kod onih koji imaju istu vrednost prvog polja
SELECT *
FROM `customers`
ORDER BY `age`ASC, `number_of_visits` DESC;

--prikari prva dva korisnika sa najvecim brojem poseta, a ciji je broj poseta dvocifren(odredi korisnike sa najvecim brojem poseta pa prikazi prva dva)

SELECT *
FROM `customers`
WHERE `number_of_visits` BETWEEN 10 AND 99
ORDER BY `number_of_visits` DESC
LIMIT 2;

--prikazi korisnika koji ima najmanju platu koja je u opsegu izmedju 300 ili 500
--ako ima vise ovakvih korisnika, prikazi onog cije je ime prvo u leksikografskom poretku
SELECT *
FROM `customers`
WHERE `salary` BETWEEN 300 OR 500
ORDER BY `salary`,`name`
LIMIT 1;

-- Iz tabele customers, pročitati sve klijente:
-- Koji su iz Srbije a plata je 600,
-- Čije ime počinje na S ili imaju manje od 30god.
SELECT *
FROM `customers`
WHERE `state` = "Srbija" 
AND `salary`=600;

--FUNKCIJE OD SELECTA
--PREBROJATI KOLIKO IMA KUPACA IZMEDJU 30 I 40 GODINA

SELECT COUNT(`age`)
FROM `customers`
WHERE `age` BETWEEN 30 and 40;
