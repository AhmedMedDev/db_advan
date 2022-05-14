SELECT serial_no 
FROM cars 
WHERE manufacturer = 'Toyota' 
AND model = 'Corolla';

Cars::where('manufacturer', 'Toyota')->where('model', 'Corolla')->get();

SELECT model, price 
FROM cars
WHERE price BETWEEN 150000 AND 250000

Cars::whereBetween('price', [150000, 250000])->get()

SELECT model, price, (price + (price * .07)) AS new_price
FROM cars

Cars::all()

SELECT cars.serial_no ,model, manufacturer, cars.price, option_cars.option_name, option_cars.price AS option_price , 
( SELECT SUM(price) FROM option_cars WHERE option_cars.serial_no = cars.serial_no) AS total_option
FROM cars
LEFT JOIN option_cars ON (cars.serial_no = option_cars.serial_no)

Cars::with('options')->get() //

SELECT cars.serial_no , SUM(option_cars.price) AS total_options FROM cars
JOIN option_cars ON (cars.serial_no = option_cars.serial_no ) 
GROUP BY cars.model

Cars::with('options')->get() //

SELECT * FROM `sales_persons` WHERE name LIKE 's%';

SalesPersons::where('name', 'LIKE', 'S%')->get() //

SELECT * FROM `sales_persons` WHERE phone IS null

SalesPersons::whereNull('phone')->get() //

SELECT cars.model, cars.price, sales_persons.name, sales.date, sale_price
FROM `sales` 
JOIN sales_persons ON (sales_person_id = sales_persons.id)
JOIN cars ON (sales.serial_no = cars.serial_no)

Sale::with(['car', 'person'])->get() //

SELECT sales_persons.id, sales_persons.name, 
COUNT(sales.sales_person_id) AS solds_num,
SUM(sales.sale_price) AS solds_prices 
FROM sales_persons
LEFT JOIN sales ON (sales_persons.id = sales.sales_person_id)
GROUP BY sales_persons.id

SalesPersons::with('sales')->get() //

SELECT * FROM `cars` WHERE price = (SELECT MAX(price) FROM cars)

Cars::wherePrice(DB::table('cars')->max('price'))->get()