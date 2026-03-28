<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Create Customer</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        :root{
            --bg:#f4f7fb;
            --card:#fff;
            --accent:#2b7cff;
            --muted:#6b7280;
        }
        *{box-sizing:border-box}
        body{
            margin:0;
            font-family:Inter,ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial;
            background:linear-gradient(180deg,var(--bg),#e9eef6);
            display:flex;
            align-items:center;
            justify-content:center;
            min-height:100vh;
            padding:24px;
            color:#111827;
        }
        .card{
            width:100%;
            max-width:420px;
            background:var(--card);
            padding:22px;
            border-radius:12px;
            box-shadow:0 6px 20px rgba(30,41,59,0.08);
            border:1px solid rgba(15,23,42,0.04);
        }
        h1{
            font-size:18px;
            margin:0 0 12px 0;
        }
        .field{
            display:flex;
            flex-direction:column;
            gap:6px;
            margin-bottom:12px;
        }
        label{
            font-size:13px;
            color:var(--muted);
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"]{
            width:100%;
            padding:10px 12px;
            border-radius:8px;
            border:1px solid #e6e9ef;
            background:#fbfdff;
            font-size:14px;
            outline:none;
            transition:box-shadow .12s, border-color .12s;
        }
        input:focus{
            border-color:var(--accent);
            box-shadow:0 4px 12px rgba(43,124,255,0.12);
        }
        .row{display:flex;gap:10px}
        .row .field{flex:1;margin-bottom:0}
        .actions{
            margin-top:16px;
            display:flex;
            gap:8px;
            justify-content:flex-end;
        }
        button{
            padding:10px 14px;
            border-radius:8px;
            border:0;
            background:var(--accent);
            color:white;
            font-weight:600;
            cursor:pointer;
            transition:transform .08s ease,box-shadow .08s;
        }
        button:hover{transform:translateY(-1px)}
        button:active{transform:translateY(0)}
        .btn-secondary{
            background:#eef2ff;
            color:var(--accent);
            font-weight:600;
            border:1px solid rgba(43,124,255,0.08);
        }
        @media (max-width:420px){
            .card{padding:16px}
        }
    </style>
</head>
<body>
    <main class="card" role="main">
        <h1>Create Customer</h1>
        <form action="store.php" method="POST" autocomplete="off" novalidate>
            <div class="row">
                <div class="field">
                    <label for="first_name">First Name</label>
                    <input id="first_name" name="first_name" placeholder="First Name" type="text" required>
                </div>
                <div class="field">
                    <label for="last_name">Last Name</label>
                    <input id="last_name" name="last_name" placeholder="Last Name" type="text" required>
                </div>
            </div>

            <div class="field">
                <label for="email">Email</label>
                <input id="email" name="email" placeholder="Email" type="email" required>
            </div>

            <div class="field">
                <label for="phone">Phone</label>
                <input id="phone" name="phone" placeholder="Phone" type="tel">
            </div>

            <div class="actions">
                <button type="button" class="btn-secondary" onclick="history.back()">Cancel</button>
                <button type="submit">Save</button>
            </div>
        </form>
    </main>
<?php include('../config/connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Customer</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        h1 {
            margin-bottom: 15px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            padding: 10px;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .save {
            background: #28a745;
        }

        .back {
            background: gray;
            text-decoration: none;
            display: inline-block;
            padding: 10px;
            margin-top: 10px;
            color: white;
            border-radius: 5px;
        }

        .save:hover {
            background: #218838;
        }

        .back:hover {
            background: #555;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>Add Customer</h1>

    <form action="store.php" method="POST">
        <input name="first_name" placeholder="First Name" required>
        <input name="last_name" placeholder="Last Name" required>
        <input name="email" placeholder="Email" required>
        <input name="phone" placeholder="Phone" required>

        <button type="submit" class="btn save">Save</button>
    </form>

    <a href="index.php" class="back">← Back</a>
</div>

</body>
</html>
