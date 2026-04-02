<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include '../config/connect.php'; ?>

<div class="top-bar">
    <h2>Movies</h2>
    <a href="create.php" class="btn">Add Movie</a>
</div>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Release Year</th>
                <th>Rental Rate</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM movies ORDER BY movie_id DESC")
            or die("Query Error: " . mysqli_error($conn));

        if (mysqli_num_rows($result) > 0):
            while ($row = mysqli_fetch_assoc($result)):
        ?>
            <tr>
                <td><?php echo (int)$row['movie_id']; ?></td>
                <td><?php echo htmlspecialchars($row['title']); ?></td>
                <td><?php echo htmlspecialchars($row['genre']); ?></td>
                <td><?php echo htmlspecialchars($row['release_year']); ?></td>
                <td><?php echo htmlspecialchars($row['rental_rate']); ?></td>
                <td class="actions">
                    <a href="edit.php?id=<?php echo (int)$row['movie_id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo (int)$row['movie_id']; ?>" 
                       onclick="return confirm('Delete this movie?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; else: ?>
            <tr>
                <td colspan="6">No movies yet</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>

<p class="meta">Total movies: <?php echo mysqli_num_rows($result); ?></p>

</body>
</html>