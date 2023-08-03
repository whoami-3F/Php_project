<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Page</title>
    <style>
    body {
        margin: 0;
        height: 100vh;
        font-family: 'Arial', sans-serif;
        background-color: black;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .message-container {
        max-width: 400px;
        text-align: center;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px #fff, 0 0 20px gray, 0 0 20px green,0 0 30px whitesmoke, 0 0 150px white,0 0 100px white,0 0 100px white;
        border-radius: 8px;
    }

    .message {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    .emoji {
        font-size: 48px;
    }

    .footer {
        font-size: 12px;
        color: #888;
        margin-top: 30px;
    }
    .button{
        padding: 10px 20px;
        border: none;
        border-radius: 10px;
        background-color: #16385e;
        text-align: center;
        cursor: pointer;
    }
    .button a{
        text-decoration: none;
        font-weight: 800;
        color: white;
    }
    .message a{
        text-decoration: none;
        color: black;
    }
    </style>
</head>
<body>
    <div class="message-container">
    <div class="emoji">💃</div>
    <div class="message">Want to see Student Dancing</div>
    <div class="message"><a href="https://youtu.be/UkaJrzd6-hw">Click Here</a></div>
    <br>
    <button id="back-btn" class="button">
        <a href="../Pages/Home.php">Go Home</a>
    </button>
    </div>
    
</body>
</html>
