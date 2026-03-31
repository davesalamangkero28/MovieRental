<?php
        include('../config/connect.php');
            $id = $_GET['id'] ?? 0;

    $result = mysqli_query($conn, "SELECT * FROM movies WHERE movie_id= $id");

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    $data = mysqli_fetch_assoc($result);

    if (!$data) {
        die("No record found!");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Movies</title>
    </head>
    <link rel="stylesheet" href="css/edit.css">
        <body>
            <form action="" method="POST">
                <input type="hidden" name="movie_id" value="<?php echo $data['movie_id']; ?>">
                <label for="title">Title:</label>
                <input type="text" name="title" value="<?php echo $data['title']; ?>" required>
                <br>
                <label for="genre">Email:</label>
                <input type="text" name="genre" value="<?php echo $data['genre']; ?>" required>
                <br>
                <label for="release_year">Release Year:</label>
                <input type="text" name="release_year" value="<?php echo $data['release_year']; ?>" required>
                <br>
                <label for="rental_rate">Rental Rate:</label>
                <input type="text" name="rental_rate" value="<?php echo $data['rental_rate']; ?>" required>
                <br>
                <input type="submit" name="update" value="Update">
            </form>
        </body>
</html>
