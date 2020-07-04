<?php 
// config data
require 'config.php';

$sql = "SELECT * FROM promothod_kz___promothod_kz WHERE url = '$url'";

// MySQLi Object-oriented
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $title = $row['title'];
    $descr = $row['descr'];
    $keywords = $row['keywords'];
    $h1 = $row['h1'];	
    $content = $row['content'];	
    }
}  elseif ($result->num_rows = 0) {
	header('Location: http://www.promothod.kz/404.html');
  	exit;
}
$conn->close();




require 'template.php';






// else{
// 	
// }
