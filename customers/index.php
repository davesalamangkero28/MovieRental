<?php include('../config/connect.php'); ?>

<h1>Customers</h1>
<a href="create.php">Add Customer</a>

<?php
$result = mysqli_query($conn, "SELECT * FROM customers");

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['first_name'] . " " . $row['last_name'];

    echo "<a href='edit.php?id=".$row['id']."'> Edit </a>";

    echo "<a href='delete.php?id=".$row['id']."'> Delete </a><br>";
}
?>
