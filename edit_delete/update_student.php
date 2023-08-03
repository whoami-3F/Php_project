<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Details</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #111;
        }

        h1 {
            font-size: 4em;
            font-family: 'Arial', sans-serif;
            color: #fff;
            text-align: center;
            text-transform: uppercase;
        }

        .glow {
            text-shadow: 0 0 10px #fff, 0 0 20px gray, 0 0 20px green,0 0 30px grey, 0 0 150px #ff00c8,0 0 100px #ff00c8,0 0 100px #ff00c8;
            transition: text-shadow 0.5s ease-in-out;
        }

        .glow.active {
            text-shadow: 0 0 10px #fff, 0 0 20px gray, 0 0 20px green,0 0 30px grey, 0 0 150px #ff00c8,0 0 100px #ff00c8,0 0 100px #ff00c8, 0 0 20px #fff, 0 0 30px #ff00c8;
        }
    </style>
</head>
<body>
    <h1 class="glow" onclick="toggleGlow(this)">Working on this</h1>

    <script>
        function toggleGlow(element) {
            element.classList.toggle("active");
        }
    </script>
</body>
</html>
