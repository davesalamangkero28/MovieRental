<?php include('../config/connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Customer</title>
    <link rel="stylesheet" href="create.css">
</head>

<body>

<div class="container">
    <h1>Add Customer</h1>

    <form action="store.php" method="POST">
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone" required>

        <button type="submit" class="btn save">Save</button>
    </form>

    <a href="index.php" class="back">← Back</a>
</div>

</body>
</html>
