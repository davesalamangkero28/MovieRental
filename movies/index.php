<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies - MovieRental</title>
</head>
<body>

    <h1>Movies</h1>
    <a href="create.php">Add Movie</a>

    <hr>

    <?php include('../config/connect.php'); ?>

    <?php
    $result = mysqli_query($conn, "SELECT * FROM movies ORDER BY id DESC") or die("Query Error: " . mysqli_error($conn));
    $movie_count = mysqli_num_rows($result);

    if ($movie_count > 0) {
    ?>

        <table border="1" cellpadding="10">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Release Year</th>
                <th>Rental Rate</th>
                <th>Actions</th>
            </tr>

            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo htmlspecialchars($row['title']); ?></td>
                    <td><?php echo htmlspecialchars($row['genre']); ?></td>
                    <td><?php echo $row['release_year']; ?></td>
                    <td><?php echo $row['rental_rate']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
                        <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this movie?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>

        </table>

        <p>Total movies: <?php echo $movie_count; ?></p>

    <?php
    } else {
    ?>

        <p>No movies yet</p>
        <a href="create.php">Add Movie</a>

    <?php
    }
    ?>

</body>
</html>
