<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rentals</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>

<?php include '../config/connect.php'; ?>

<div class="top-bar">
    <h2>Rentals</h2>
    <a href="rent_movie.php" class="btn">New Rental</a>
</div>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Movie</th>
                <th>Rental Date</th>
                <th>Return Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
                $sql = "SELECT r.rental_id, r.rental_date, r.return_date,
                CONCAT(c.first_name, ' ', c.last_name) AS customer_name,
                m.title
         FROM rentals r
         JOIN customers c ON r.customer_id = c.id
         JOIN movies m ON r.movie_id = m.movie_id
         ORDER BY r.rental_id DESC";
        $result = mysqli_query($conn, $sql) or die("Query Error: " . mysqli_error($conn));

        if (mysqli_num_rows($result) > 0):
            while ($row = mysqli_fetch_assoc($result)):
        ?>
            <tr>
                <td><?php echo (int)$row['rental_id']; ?></td>
                <td><?php echo htmlspecialchars($row['customer_name']); ?></td>
                <td><?php echo htmlspecialchars($row['title']); ?></td>
                <td><?php echo htmlspecialchars($row['rental_date']); ?></td>
                <td><?php echo $row['return_date'] ? htmlspecialchars($row['return_date']) : 'Pending'; ?></td>
                <td class="actions">
                    <?php if (!$row['return_date']): ?>
                        <a href="return_movie.php?id=<?php echo (int)$row['rental_id']; ?>">Return</a>
                    <?php else: ?>
                        Returned
                    <?php endif; ?>
                </td>
            </tr>
        <?php endwhile; else: ?>
            <tr>
                <td colspan="7">No rentals yet</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>

<p class="meta">Total rentals: <?php echo mysqli_num_rows($result); ?></p>

<a href="../index.php" class="back-btn">Back to Dashboard</a>

</body>
</html>
