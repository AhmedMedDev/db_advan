SELECT serial_no 
FROM cars 
WHERE manufacturer = 'Toyota' 
AND model = 'Corolla';


SELECT model, price 
FROM cars
WHERE price BETWEEN 150000 AND 250000


SELECT model, price, (price + (price * .07)) AS new_price
FROM cars

SELECT cars.serial_no ,model, manufacturer, cars.price, option_cars.option_name, option_cars.price AS option_price , 
( SELECT SUM(price) FROM option_cars WHERE option_cars.serial_no = cars.serial_no) AS total_option
FROM cars
LEFT JOIN option_cars ON (cars.serial_no = option_cars.serial_no)


SELECT cars.serial_no , SUM(option_cars.price) FROM cars
JOIN option_cars ON (cars.serial_no = option_cars.serial_no ) 
GROUP BY cars.model


SELECT * FROM `sales_persons` WHERE name LIKE 's%';


SELECT * FROM `sales_persons` WHERE phone IS null


SELECT cars.model, cars.price, sales_persons.name, sales.date, sale_price
FROM `sales` 
JOIN sales_persons ON (sales_person_id = sales_persons.id)
JOIN cars ON (sales.serial_no = cars.serial_no)


SELECT sales_persons.id, sales_persons.name, 
COUNT(sales.sales_person_id) AS solds_num,
SUM(sales.sale_price) AS solds_prices 
FROM sales_persons
LEFT JOIN sales ON (sales_persons.id = sales.sales_person_id)
GROUP BY sales_persons.id


SELECT * FROM `cars` WHERE price = (SELECT MAX(price) FROM cars)
