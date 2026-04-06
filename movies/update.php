<?php
include('../config/connect.php');

$movie_id = $_POST['movie_id'];
$title = $_POST['title'];
$genre = $_POST['genre'];
$release_year = $_POST['release_year'];
$rental_rate = $_POST['rental_rate'];

$stmt = $conn->prepare("UPDATE movies SET title = ?, genre = ?, release_year = ?, rental_rate = ? WHERE movie_id = ?");

if (!$stmt) {
    die($conn->error);
}

$stmt->bind_param("ssidi", $title, $genre, $release_year, $rental_rate, $movie_id);

$stmt->execute();
if ($stmt->execute()) {
    header("Location: index.php");
    exit();
} else {
    die("Update failed: " . $stmt->error);
}

$stmt->close();
?>