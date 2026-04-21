<?php include('config/connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Movie Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<div class="layout">

    <div class="sidebar">
        <div class="logo">🎬MovieDashboard</div>

        <div class="sidebar-menu">
            <a href="index.php" class="active">Home</a>
            <a href="#">Payments</a>
            <a href="movies/index.php">Movies</a>
            <a href="customers/index.php">Customers</a>
            <a href="rentals/index.php">Rentals</a>
        </div>
    </div>

    <div class="container">
        <h1 class="section-title">Movies For Rent</h1>

        <div class="movie-list">
            <?php
            $result = mysqli_query($conn, "SELECT * FROM movies");

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="movie-card">
                    <img src="images/movies/<?php echo $row['image']; ?>" alt="movie poster">

                    <div class="overlay">
                        <h3><?php echo $row['title']; ?></h3>
                        <p><?php echo $row['genre']; ?></p>
                        <span><?php echo $row['release_year']; ?></span>

                        <a href="rentals/index.php" class="rent-btn">Rent</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</div>

</body>
</html>
