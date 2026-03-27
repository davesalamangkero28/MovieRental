<?php
include('../config/connect.php');

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM customers WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">

    <input name="first_name" value="<?= $data['first_name'] ?>">
    <input name="last_name" value="<?= $data['last_name'] ?>">
    <input name="email" value="<?= $data['email'] ?>">
    <input name="phone" value="<?= $data['phone'] ?>">

    <button type="submit">Update</button>
</form>
