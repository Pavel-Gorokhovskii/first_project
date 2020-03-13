-- выбрать все
Select *
From payroll;

-- выбрать конкретные поля
Select name, salary
From payroll;

-- выбрать тех, у кого зарплата больше 500
Select *
From payroll
Where salary > 500;

-- операторы сравнения
Select *
From payroll
Where salary <> 10000;

-- логические операторы
Select *
From payroll
Where salary >= 500 AND salary <= 2500;

Select *
From payroll
Where salary > 500 AND Department = 'Отдел образования';

Select *
From payroll
Where NOT salary < 500;

-- Упорядочивание Order by (ASC, DESC)
Select *
From payroll
Order by salary;

Select *
From payroll
Order by salary DESC;

Select *
From payroll
Order by Department ASC, Salary DESC;

-- показать как (AS)
Select
    Number AS 'Номер', Name AS 'ФИО', Salary AS 'Зарплата', Department AS 'Отдел'
From payroll;

-- вычисления
Select Number AS 'Номер', Name AS 'ФИО', Salary * 0.13 AS 'Налоги', Department AS 'Отдел'
From payroll;

Select Number AS 'Номер', Name AS 'ФИО', Salary - Salary * 0.13 AS 'Зарплата на руки', Department AS 'Отдел'
From payroll;