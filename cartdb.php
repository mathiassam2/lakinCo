<?php

$dbc = mysqli_connect('localhost', 'root', '', 'productlakin');

$sql = "CREATE TABLE IF NOT EXISTS productlakin(product_ID INT NOT NULL,
name VARCHAR(64),
price DOUBLE,
image text,
code VARCHAR(64),
PRIMARY KEY(product_ID)
)";

$result = mysqli_query($dbc, $sql) or die ("Bad Create: $sql");

$sql = "INSERT INTO productlakin (product_ID, name, price, image, code) VALUES
(1, 'Supreme Oreo', 1400.00, 'cartimages/oreo1.jpg', 'oreo')";
mysqli_query($dbc, $sql);

$sql = "INSERT INTO productlakin (product_ID, name, price, image, code) VALUES
(2, 'Louis Vuitton Bread', 6250.00, 'cartimages/lv1.png', 'bread')";
mysqli_query($dbc, $sql);

$sql = "INSERT INTO productlakin (product_ID, name, price, image, code) VALUES
(3, 'Gold Coated Beef Burger', 5500.00, 'cartimages/goldburger1.png', 'burger')";
mysqli_query($dbc, $sql);

?>