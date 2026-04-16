<?php
include("../config/connect.php");

$sql = "SELECT r.*, c.name AS customer, m.title AS movie
        FROM rentals r
        JOIN customers c ON r.customer_id = c.customer_id
        JOIN movies m ON r.movie_id = m.movie_id";

$result = $conn->query($sql);

// check if query works
if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<h2>Rental List</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Customer</th>
    <th>Movie</th>
    <th>Date</th>
    <th>Return</th>
    <th>Action</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?php echo $row['rental_id']; ?></td>
    <td><?php echo $row['customer']; ?></td>
    <td><?php echo $row['movie']; ?></td>
    <td><?php echo $row['rental_date']; ?></td>
    <td><?php echo $row['return_date'] ?? "Not returned"; ?></td>
    <td>
        <?php if (!$row['return_date']) { ?>
            <a href="return_movie.php?id=<?php echo $row['rental_id']; ?>">Return</a>
        <?php } ?>

        <!-- FIXED FORM -->
        <form method="POST" action="rent_movie.php">
            <input type="hidden" name="movie_id" value="<?php echo $row['movie_id']; ?>">
            <input type="hidden" name="customer_id" value="1">
            <button type="submit">Rent</button>
        </form>
    </td>
</tr>
<?php } ?>
</table>