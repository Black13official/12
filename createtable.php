<?php 
try { 
$conn = new PDO("sqlsrv:server = tcp:blackmamba.database.windows.net,1433; Database = Black13", "Danil", "12338110saveL"); 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

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
echo"Таблица создана"; 
?>
