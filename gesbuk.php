<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Dari Penggemar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .message-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 align="center">Guest Book</h2>
        <form>
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <label for="pesan">Pesan:</label><br>
            <textarea id="pesan" name="pesan" rows="4" required></textarea><br><br>
            <input type="submit" value="Kirim">
        </form>
    </div>
</body>
</html>
