<?php
    include ('../config/connect.php');


?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Movie</title>
    <link rel="stylesheet" href="/MovieRental/css/create.css">
</head>

<body>

<div class="container">

    <h1>Add Movie</h1>

    <form action="store.php" method="POST">

        <div class="input-box">
            <input type="text" name="title" required>
            <label>Title</label>
        </div>

        <div class="input-box">
            <input type="text" name="genre" required>
            <label>Genre</label>
        </div>

        <div class="input-box">
            <input type="number" name="release_year" required>
            <label>Release Year</label>
        </div>

        <div class="input-box">
            <input type="number" name="rental_rate" step="0.01" required>
            <label>Rental Rate</label>
        </div>

        <button type="submit" class="btn">Save Movie</button>

    </form>

    <a href="index.php" class="back">Back</a>

</div>

</body>
</html>
