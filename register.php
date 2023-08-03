<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Account</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<?php 
session_start();
include("database/database.php"); 
include("validation/valid.php");
?>

<div class="Outer-form-text">
<h1>College Management System</h1>
<span id="outer-form-span">
Welcome to our school management system! Our user-friendly 
platform aims to streamline administrative tasks, facilitate 
efficient communication between students, parents, and faculty.
</span>
</div>

    <div class="Main_form">
        <div class="signup">
            <form method="post" action="register.php" name="signup">
                <div class="signup-image">
                    <img src="icons/add-user.png" id="addUser" style="width: 60px;">
                </div>

                <div class="username-section">
                <input type="text" name="username" class="userInput" id="usernameInput" placeholder="Enter your UserName" autocomplete="off">
                <p style="color: red; margin-right:40px" id="usernameError"><?php if (isset($errors['username'])) echo $errors['username']; ?></p>
                </div><br>

                <div class = "password-section">
                <input type="text" name="email" class="userInput" id="emailInput" placeholder="Enter your Email" autocomplete="off">
                <p style="color: red; margin-right:50px" id="emailError"><?php if (isset($errors['email'])) echo $errors['email']; ?></p>
                </div><br>

                <div class="password-section">
                    <input type="password" id="userPassword" class="userInput" id="passwordInput" name="password" placeholder="Enter your Password" autocomplete="off">
                    <p style="color: red; margin-right:5px" id="passwordError"><?php if (isset($errors['password'])) echo $errors['password']; ?></p>
                    <img src="icons/eye-close.png" id="eyeicon"><br>
                </div>
        </div>
        <br>
        <input type="submit" class="button" name="signupSubmit" value="Signup">
        </form>
        <a href="login.php">
            <button class="button">Login Page</button>
        </a>
    </div>
    <script src="javascript/password.js"></script>

    <!-- php code -->
    <?php

/* User Registration */
function userRegistration($email, $password, $username)
{
    global $conn;
    try {
        $st = $conn->prepare("SELECT * FROM user_information WHERE email=:email");
        $st->bindParam("email", $email);
        $st->execute();
        $st->setFetchMode(PDO::FETCH_ASSOC); // fetch the output in form of associative array
        $count = $st->rowCount();
        if ($count < 1) {
            $stmt = $conn->prepare("INSERT INTO user_information(email,password,username) VALUES (:email,:hash_password,:username)");
            $stmt->bindParam("email", $email, PDO::PARAM_STR);
            $hash_password = hash('sha256', $password); //Password encryption
            $stmt->bindParam("hash_password", $hash_password, PDO::PARAM_STR);
            $stmt->bindParam("username", $username, PDO::PARAM_STR);
            $stmt->execute();
            $uid = $conn->lastInsertId(); // Last inserted row id
            $_SESSION['uid'] = $uid;
            return true;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}

/* Signup Form */
if (!empty($_POST['signupSubmit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];

    // email and password rules
    $email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
    $password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);

    if ($email_check && $password_check && strlen(trim($username)) > 0) {
        $uid = userRegistration($email, $password, $username);
        
        if ($uid) {
            echo "<script>alert('Users details added successfully!');</script>";
            header("Location: login.php");
        } else {
            echo "<script>alert('Username or Email already exists. Please choose a different one.');</script>";
        }
    }
}
?>
</body>

</html>