<?php
include('../config/connect.php');

$title = $_POST['title'];
$genre = $_POST['genre'];
$year = $_POST['year'];
$stock = $_POST['rate'];

mysqli_query($conn, "INSERT INTO movies 
(title, genre, year, stock) 
VALUES ('$title', '$genre', '$year', '$stock')");

header("Location: index.php");
