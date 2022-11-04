1. get all products with all category information - using JOIN;

SELECT Products.name_prod, Category.name_cat
FROM Products
JOIN Category ON Products.id_cat=Category.id_cat;

2. get the number of products from each category - using JOIN, Count, Group BY.

SELECT Category.name_cat, COUNT(Products.id_cat)
FROM Products
JOIN Category ON Products.id_cat=Category.id_cat
GROUP BY name_cat; 

3. get all orders with the all information about products and categories the products belong to - using JOIN

SELECT Orders.product_id AS Orders, Products.name_prod AS Products, Category.name_cat AS Category
FROM orders 
JOIN Products ON Products.id_prod=Orders.product_id
JOIN Category ON Products.id_cat=Category.id_cat;

4. get the number of orders for each category - using JOIN, Count, Group By
 - display 2 columns: nb of orders, category name

 SELECT Count(Orders.product_id) AS NumberOfOrders, Category.name_cat AS CategoryName
 FROM orders
 JOIN Category ON Orders.product_id = Category.id_cat 
 GROUP BY name_cat;

 5.  get all orders with all the information about the customer - using JOIN

 SELECT Orders.id AS Orders, Customer.email AS CustomerEmail, Customer.id AS CustomerID
 FROM orders 
 JOIN Customer ON Customer.id = Orders.customer_id;


6. get the number of ordersfor each customer.
 - diaplay 2 columns nb of orders, customr email
 - the result must be ordered by number of orders descending

SELECT  COUNT(Orders.customer_id) AS NBOfOrders ,Customer.email AS CustomerEmail
 FROM orders
 JOIN Customer ON Customer.id = Orders.customer_id
 GROUP BY customer_id
 ORDER BY NBOfOrders desc;


7. get the number of orders of each customer grouped by category
and ordered by the number of orders descending 
- using JOIN, Count, Group By, Order By .
- display 3 columns nb of orders, customer email, category name

SELECT COUNT(orders.customer_id) AS NumberOfOrders,
Customer.email AS CustomerEmail 
Category.name_cat AS CategoryName,  
FROM orders 
JOIN Customer ON Customer.id=Orders.customer_id
GROUP BY name_cat
ORDER BY NumberOfOrders DESC