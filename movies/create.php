<?php
    include ('../config/connect.php');


?>
<html>
    <title>Add Movies</title>
    <link rel="stylesheet" href="css/create.css">
</html>
<body>
    <div class="container">
        <div class="form-wrapper">
            <h2>Add New Movie</h2>

            <a href="index.php" class="back-btn">← Back to Movies</a>

            <form action="store.php" method="POST" class="form-box">
                
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" placeholder="Enter movie title" required>
                </div>

                <div class="form-group">
                    <label for="genre">Genre</label>
                    <input type="text" id="genre" name="genre" placeholder="Enter genre" required>
                </div>

                <div class="form-group">
                    <label for="release_year">Release Year</label>
                    <input type="number" id="release_year" name="release_year" placeholder="e.g. 2023" min="1900" max="2025" required>
                </div>

                <div class="form-group">
                    <label for="rental_rate">Rental Rate (₱)</label>
                    <input type="number" step="0.01" id="rental_rate" name="rental_rate" placeholder="e.g. 4.99" min="0" required>
                </div>

                <button type="submit" class="submit-btn">Save Movie</button>
            </form>
        </div>
    </div>
</body>
