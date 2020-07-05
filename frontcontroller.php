<?php 
// config data
require 'config.php';

// выборка всего из бд по найденному урлу
$sql = "SELECT * FROM promothod_kz___promothod_kz WHERE url = '$url'";

// MySQLi Object-oriented
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// выполнение запроса
$result = $conn->query($sql);
// если результатов не найдено
if ($result->num_rows < 1) {
// редирект на 404 ошибку
	header('Location: '. $base_uri . '404.php');
  	exit;
}
// если результат есть
if ($result->num_rows > 0) {
  // присваиваем значения переменных и закрываем соединение
  while($row = $result->fetch_assoc()) {
    $title = $row['title'];
    $descr = $row['descr'];
    $keywords = $row['keywords'];
    $h1 = $row['h1'];	
    $content = $row['content'];	
    }
}  
$conn->close();

// подтягиваем шаблон
require 'template.php';
