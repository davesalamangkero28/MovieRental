<<<<<<< Updated upstream
<?php
    include ('../config/connect.php');
=======
<?php 
  include ('../config/connect.php');
>>>>>>> Stashed changes

?>


<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Movie</title>
    <link rel="stylesheet" href="create.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Add New Movie</h2>
                <a href="index.php" class="btn btn-secondary mb-3">← Back to Movies</a>
                <form action="store.php" method="POST" class="bg-white p-4 rounded shadow">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter movie title" required>
                    </div>
                    <div class="mb-3">
                        <label for="genre" class="form-label">Genre</label>
                        <input type="text" class="form-control" id="genre" name="genre" placeholder="Enter genre" required>
                    </div>
                    <div class="mb-3">
                        <label for="release_year" class="form-label">ReleaseYear</label>
                        <input type="number" class="form-control" id="release_year" name="release_year" placeholder="e.g. 2023" min="1900" max="2025" required>
                    </div>
                    <div class="mb-3">
                        <label for="rental_rate" class="form-label">Rental Rate (₱)</label>
                        <input type="number" step="0.01" class="form-control" id="rental_rate" name="rental_rate" placeholder="e.g. 4.99" min="0" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Save Movie</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
