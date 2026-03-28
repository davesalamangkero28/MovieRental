<?php include('../config/connect.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Customers</title>
    <style>
        body { font-family: Arial, Helvetica, sans-serif; background:#f5f7fa; color:#222; margin:0; padding:20px; }
        .wrap { max-width:900px; margin:0 auto; background:#fff; padding:20px; border-radius:6px; box-shadow:0 2px 6px rgba(0,0,0,.08); }
        h1 { margin:0 0 12px; font-size:22px; }
        .actions { margin-bottom:12px; }
        .btn {
            display:inline-block; padding:8px 12px; text-decoration:none; border-radius:4px;
            font-size:14px; color:#fff;
        }
        .btn.add { background:#2196F3; }
        .btn.edit { background:#4CAF50; margin-right:6px; }
        .btn.delete { background:#f44336; }
        table { width:100%; border-collapse:collapse; margin-top:6px; }
        th, td { text-align:left; padding:10px 8px; border-bottom:1px solid #e6e9ee; }
        th { background:#fafbfc; font-weight:600; }
        .no-data { padding:14px; text-align:center; color:#666; }
        @media (max-width:600px){
            th, td { padding:8px 6px; }
            .btn { padding:6px 8px; font-size:13px; }
        }
    </style>
</head>
<body>
    <div class="wrap">
        <h1>Customers</h1>
        <div class="actions">
            <a class="btn add" href="create.php">Add Customer</a>
        </div>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM customers");
        if (!$result) {
                echo '<p class="no-data">Error loading customers.</p>';
        } else {
                if (mysqli_num_rows($result) === 0) {
                        echo '<p class="no-data">No customers found.</p>';
                } else {
                        echo '<table>';
                        echo '<thead><tr><th>First Name</th><th>Last Name</th><th>Actions</th></tr></thead><tbody>';
                        while ($row = mysqli_fetch_assoc($result)) {
                                $id = (int)$row['id'];
                                $first = htmlspecialchars($row['first_name']);
                                $last = htmlspecialchars($row['last_name']);
                                echo "<tr>";
                                echo "<td>{$first}</td>";
                                echo "<td>{$last}</td>";
                                echo "<td>";
                                echo "<a class='btn edit' href='edit.php?id={$id}'>Edit</a>";
                                echo "<a class='btn delete' href='delete.php?id={$id}' onclick=\"return confirm('Delete this customer?');\">Delete</a>";
                                echo "</td>";
                                echo "</tr>";
                        }
                        echo '</tbody></table>';
                }
        }
        ?>
    </div>
<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .add-btn {
            display: inline-block;
            margin-bottom: 15px;
            padding: 8px 15px;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .add-btn:hover {
            background: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #f1f1f1;
        }

        .edit {
            color: #007bff;
            text-decoration: none;
            margin-right: 10px;
        }

        .delete {
            color: red;
            text-decoration: none;
        }

        .edit:hover,
        .delete:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>Customers</h1>

    <a href="create.php" class="add-btn">+ Add Customer</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM customers");

        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['first_name'] . " " . $row['last_name']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="edit">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="delete"
                   onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>

</div>

</body>
</html>
