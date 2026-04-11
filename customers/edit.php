<?php
include('../config/connect.php');

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM customers WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
    <link rel="stylesheet" href="/MovieRental/css/edit.css">
</head>

<body>

<div class="container">
    <h1>Edit Customer</h1>

    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">

        <input type="text" name="first_name" value="<?= $data['first_name'] ?>" required>
        <input type="text" name="last_name" value="<?= $data['last_name'] ?>" required>
        <input type="email" name="email" value="<?= $data['email'] ?>" required>
        <input type="text" name="phone" value="<?= $data['phone'] ?>" required>

        <button type="submit" class="btn save">Update</button>
    </form>

    <a href="index.php" class="back-btn">Back</a>
</div>

</body>
</html>