<?php include('config/connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title> Movie Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<div class="container">

    <header class="header">
        <h1>🎬 Movie Rental Dashboard</h1>
    </header>

    <div class="cards">

        <div class="card">
            <div class="icon">👥</div>
            <h2>Customers</h2>
            <p>Manage user records</p>
            <a href="customers/index.php" class="btn">Open →</a>
        </div>

        <div class="card">
            <div class="icon">🎞️</div>
            <h2>Movies</h2>
            <p>Manage movie inventory</p>
            <a href="movies/index.php" class="btn">Open →</a>
        </div>

    </div>

</div>

</body>
</html>
