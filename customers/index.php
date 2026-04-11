<?php 
require_once ('../config/connect.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
    <link rel="stylesheet" href="/MovieRental/css/index.css">
</head>

<body>

<div class="container">
    <h1>Customers</h1>

    <a href="create.php" class="add-btn">+ Add Customer</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Cellphone number</th>
            <th>Actions</th>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM customers");

        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['first_name'] . " " . $row['last_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="edit">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="delete"
                   onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

<a href="../index.php" class="back-btn">Back to Dashboard</a>

</body>
</html>