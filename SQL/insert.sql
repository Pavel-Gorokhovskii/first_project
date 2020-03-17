-- Добавляем новый элемент
Insert into Goods
    (Name)
values
    ('beer');

Insert into Goods
    (Name, price)
values
    ('meat', 5.67);

-- update
Update Goods set price = 2;
Update Goods set price = 22 where id = 5;
Update Goods set price = 38 where id = 1 OR id = 3;
Update Goods set price = null where price > 20;
Update Goods set price = 6 where Name = 'Milk';
Update Goods set price = 8 where Name = 'Bread';
Update Goods set price = 5 where Name = 'Water';

-- delete
Delete From Goods where id = 2;

-- Between
SELECT *
FROM people
WHERE salary >= 1000 AND salary <= 2000;

SELECT *
FROM people
WHERE salary Between 1000 AND 1500;

-- IN
SELECT *
FROM people
WHERE Department = 'WEB-Development' OR Department = 'QA-Ingeneer';

SELECT *
FROM people
WHERE Department IN ('WEB-Development', 'Team_Lead');

-- Like
SELECT *
FROM people
WHERE Name LIKE 'Ив%';

-- % - любые символы
-- _ - один любой символ

-- вывести всех сотрудников, которые работают в отделе, название которого содержит ровно девять символов
SELECT *
FROM people
WHERE Department LIKE '_________';

-- Функции агрегирования
-- Функции агрегирования вычисляют групповые характеристики полей таблицы

-- min - миниму
-- max - максимум
-- sum - сумма
-- count - количество
-- avg - среднее

SELECT max(salary), min(salary), sum(salary), avg(salary)
from people;

SELECT count(Name)
from people;

Update people set salary = null where id = 5;
SELECT count(salary)
from people;

SELECT count(*)
from people;

-- Вложенные запросы
Update people set salary = 2500 where id = 5;
SELECT *
FROM people
WHERE salary > (SELECT avg(salary)
FROM people);

-- Найти работника с самой большой зарплатой
SELECT Name
FROM people
WHERE salary = (SELECT max(salary)
FROM people);

SELECT Name
FROM people
WHERE salary = (SELECT min(salary)
FROM people);

-- Вывести инфлормацию о сотрудниках, имеющих зарплату больше средней зарплаты WEB-Developments
SELECT Name
FROM people
WHERE salary > (SELECT avg(salary)
from people
where Department = 'WEB-Development');