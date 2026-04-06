<?php
include('../config/connect.php');

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM movies WHERE movie_id=$id");

header("Location: index.php");
