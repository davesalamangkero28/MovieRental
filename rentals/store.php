<?php
include("../config/connect.php");

// get data from form
$customer_id = $_POST['customer_id'];
$movie_id = $_POST['movie_id'];
$rental_date = $_POST['rental_date'];
$return_date = $_POST['return_date'];

// insert query
$sql = "INSERT INTO rentals (customer_id, movie_id, rental_date, return_date)
        VALUES ('$customer_id', '$movie_id', '$rental_date', '$return_date')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>