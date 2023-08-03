<?php
    $errors = [];
    $email = "";
    $password = "";
    $username = "";
    // checks if the current request if post or not
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = htmlspecialchars($_POST['email']);
        $email_pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        $password = htmlspecialchars($_POST['password']);
        $username = htmlspecialchars(($_POST['username']));

        if (strlen($email) == 0) {
            $errors['email'] = "Please provide your email!";
        } else if (!preg_match($email_pattern, $email)) {
            $errors['email'] = "Please provide your email in correct formate!";
        }
        if(strlen($username) == 0){
            $errors['username'] = "please provide your username";
        }
        if(strlen($password)== 0){
            $errors['password'] = "Please provide your password";
        }
    }
    ?>
