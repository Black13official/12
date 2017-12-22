<?php
 
try { //Подключение к БД.
 
$conn = new PDO("sqlsrv:server = tcp:vol1.database.windows.net,1433; Database = Black13", "Danil", "12338110saveL");
 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Создание таблицы в БД
 
$sql = "CREATE TABLE registration_tbl(
 
id INT NOT NULL IDENTITY(1,1)
 
PRIMARY KEY(id),
 
name VARCHAR(30),
 
email VARCHAR(30),
 
date DATE)";
 
$conn->query($sql);
 
}
 
catch (PDOException $e) {
 
print("Error connecting to SQL Server.");
 
die(print_r($e));
 
}
 
echo "<h3>Table created.</h3>";
 
?>
