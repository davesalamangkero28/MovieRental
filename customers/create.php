<?php 
include('../config/connect.php'); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Customer</title>
    <link rel="stylesheet" href="/MovieRental/css/create.css">
</head>

<body>

<div class="container">

    <h1>Add Customer</h1>

    <form action="store.php" method="POST">

        <div class="input-box">
            <input type="text" name="first_name" required>
            <label>First Name</label>
        </div>

        <div class="input-box">
            <input type="text" name="last_name" required>
            <label>Last Name</label>
        </div>

        <div class="input-box">
            <input type="email" name="email" required>
            <label>Email</label>
        </div>

        <div class="input-box">
            <input type="text" name="phone" required>
            <label>Phone</label>
        </div>

        <button type="submit" class="btn">Save Customer</button>

    </form>

    <a href="index.php" class="back">Back</a>

</div>

</body>
</html>