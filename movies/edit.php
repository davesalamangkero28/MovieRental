<?php
    include('../config/connect.php');
            
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM movies WHERE movie_id=$id");
    $data = mysqli_fetch_assoc($result);

   
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Movie</title>
    <link rel="stylesheet" href="/MovieRental/css/edit.css">
</head>

<body>

<div class="container">
    <h1>Edit Movie</h1>

    <form action="update.php" method="POST">
        <input type="hidden" name="movie_id" value="<?= $data['movie_id'] ?>">

        <input type="text" name="title" value="<?= $data['title'] ?>" required>
        <input type="text" name="genre" value="<?= $data['genre'] ?>" required>
        <input type="text" name="release_year" value="<?= $data['release_year'] ?>" required>
        <input type="text" name="rental_rate" value="<?= $data['rental_rate'] ?>" required>

        <button type="submit" class="btn save">Update</button>
    </form>

    <a href="index.php" class="back-btn">Back</a>
</div>

</body>
</html>
