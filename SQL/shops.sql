-- найти средний размер комисионных продавцов в каждом городе
Select
  CITY,
  avg(COMM)
from salespeople
GROUP BY
  CITY;
-- Having - условия, записанные после ключевого слова where, применяются к
  -- каждой записи таблицы в отдельности. Условия, записанные после ключевого
  -- слова Having, применяются к группам записей. Поэтому инструкция Having
  -- не используется без инструкции Group by. Так как условия записываемые
  -- после Having применяются к группам записей, это дает возможность использовать
  -- в условиях функции агрегирования (min, max, couns, sum, avg).
  -- Вывести список городов, в которых средний размер комисионных продавцов
  -- больше 0.14.
Select
  CITY,
  avg(COMM)
from salespeople
GROUP BY
  CITY
HAVING
  avg(COMM) >.14;
--Найти средний рейтинг покупателей в каждом городе
Select
  CITY,
  avg(RATING)
from customers
GROUP BY
  CITY
HAVING
  avg(RATING);
-- Вывести список городов, в которых минимальный рейтинг покупателей
  -- выше среднего рейтинга всех покупателей.
SELECT
  CITY,
  min(RATING)
from customers
GROUP BY
  CITY
HAVING
  min(RATING) > (
    SELECT
      avg(RATING)
    from customers
  );
-- Вложенные запросы, возвращающие не единственное значение
  -- ALL ANY SOME
  -- Найти покупателей, у которых рейтинг выше рейтинга любого покупателя
  -- из Лондона
SELECT
  *
FROM customers
WHERE
  RATING > ALL(
    SELECT
      RATING
    FROM customers
    WHERE
      city = 'London'
  );
SELECT
  *
FROM customers
WHERE
  RATING > ANY(
    SELECT
      RATING
    FROM customers
    WHERE
      city = 'London'
  );
SELECT
  *
FROM customers
WHERE
  RATING > ANY(
    SELECT
      RATING
    FROM customers
    WHERE
      city = 'SanJose'
  );
-- Вывести список заказов, на сумму более 1000
SELECT
  *
from orders
where
  AMT > 1000;
--Вывести список городов,  в которых живут покупатели, совершившие покупку
  -- на сумму более 5000.
SELECT
  CITY
FROM customers
WHERE
  CNUM IN (
    SELECT
      CNUM
    FROM orders
    WHERE
      AMT > 5000
  );
-- Написать запрос, который выводит список городов, в которых проживают клиенты.
  -- Из результата запроса удалить дублирующиеся города.
SELECT
  distinct CITY
FROM customers;
SELECT
  *
FROM salespeople,
  orders
WHERE
  salespeople.snum = orders.snum;
SELECT
  *
FROM customers,
  orders
WHERE
  customers.cnum = orders.cnum;
SELECT
  *
FROM customers,
  salespeople
WHERE
  customers.snum = salespeople.snum;
-- Найти общую сумму заказов каждого продавца
SELECT
  sname,
  sum(amt)
FROM salespeople,
  orders
WHERE
  salespeople.snum = orders.snum
Group by
  sname;
-- Посчитать количество заказов у каждого продавца
SELECT
  sname,
  count(*)
FROM salespeople,
  orders
WHERE
  salespeople.snum = orders.snum
Group by
  sname;
-- количество заказов и общая сумма заказов по каждому продавцу
SELECT
  sname AS 'Имя продавца',
  count(*) AS 'Количество заказов',
  sum(amt) AS 'Сумма от заказов'
FROM salespeople,
  orders
WHERE
  salespeople.snum = orders.snum
Group by
  sname;