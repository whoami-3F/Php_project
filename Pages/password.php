<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Joke</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .password-container {
            max-width: 400px;
            text-align: center;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .input-label {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .password-input {
            padding: 8px;
            width: 100%;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .joke {
            font-size: 24px;
            color: #333;
            display: none;
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
    </style>
</head>
<body>
    <div class="password-container">
        <div class="input-label">Enter a Strong Password:</div>
        <input class="password-input" type="password" id="password" placeholder="Type 8 characters password">
        <div class="joke" id="passwordJoke">
                Why did the password break up with its boyfriend?
                Because he couldn't commit to a secure relationship!
            </div>
            <button id="back-btn" class="button">
        <a href="../Pages/Home.php">Go Home</a>
    </button>
    </div>

    <script>
        const passwordInput = document.getElementById('password');
        const passwordJoke = document.getElementById('passwordJoke');

        passwordInput.addEventListener('input', checkPasswordStrength);
        function checkPasswordStrength() {
            const password = passwordInput.value;
            const passwordStrength = calculatePasswordStrength(password);

            if (passwordStrength === 'strong') {
                passwordJoke.style.display = 'block';
            } else {
                passwordJoke.style.display = 'none';
            }
        }

        function calculatePasswordStrength(password) {
            // Add your password strength criteria here
            // For simplicity, we'll consider a password with at least 8 characters as strong
            if (password.length >= 8) {
                return 'strong';
            } else {
                return 'weak';
            }
        }
    </script>
</body>
</html>
