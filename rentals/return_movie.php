<?php
include("../config/db.php");

$rental_id = $_GET['id'];


$result = $conn->query("SELECT movie_id FROM rentals WHERE rental_id='$rental_id'");
$row = $result->fetch_assoc();
$movie_id = $row['movie_id'];


$conn->query("UPDATE rentals SET return_date = NOW() WHERE rental_id='$rental_id'");


$conn->query("UPDATE movies SET status='available' WHERE movie_id='$movie_id'");

echo "Movie returned!";
?>