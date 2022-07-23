SELECT categories.name , COALESCE(count(products))
FROM products
RIGHT JOIN categories ON products.category_id = categories.id
GROUP BY categories.name;
