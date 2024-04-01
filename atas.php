<?php
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Dono</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        .navbar {
            text-align: center;
            background-color: #ffffcc;
            padding: 10px 0;
        }

        .navbar a {
            text-decoration: none;
            color: #333;
            margin: 0 10px;
        }

        .navbar a:hover {
            color: blue;
        }
    </style>
</head>

<body>
    <h1>WEB DONO</h1>

    <div class="navbar">
        <?php
        foreach ($menu_atas as $key => $value) {
            echo "<a href='index.php?hal=$key'>$value</a>";
        }
        ?>
    </div>
</body>

</html>