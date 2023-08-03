<?php

// including the database connection file
$root_directory = $_SERVER['DOCUMENT_ROOT'] . '/mysite/PHP_PROJECT';
include("$root_directory/database/database.php");

// getting id from
$id = $_GET['id'];

// selecting data associated with this particular id
$sql = "SELECT * FROM user_information WHERE id=:id";
$query = $conn->prepare($sql);
$query->execute(array(':id' => $id));

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $username = $row['username'];
    $email = $row['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating information</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
<div class="Main_form">
        <div class="update-image">
            <form method="post" action="update.php" name="update">
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div class="update-image">
                    <img src="../icons/update.png" id="addUser" style="width: 60px;">
                </div>

                <div class="username-section">
                <input type="text" name="username" class="userInput" id="usernameInput" placeholder="Enter your UserName" value="<?php echo $username?>">
                </div><br>

                <div class = "email-section">
                <input type="text" name="email" class="userInput" id="emailInput" placeholder="Enter your Email" value="<?php echo $email?>">
                </div><br>

                <!-- <div class="password-section">
                    <input type="password"  class="userInput" id="passwordInput" name="password" placeholder="Enter your Password" autocomplete="off">
                    <p style="color: red; margin-right:5px" id="passwordError">
                    <img src="..//icons/eye-close.png" id="eyeicon"><br>
                </div> -->
        </div>f
        <br>
        <input type="submit" class="button" name="update" value="Update">
        <button><a href="../database/return_database.php"></a></button>
        <button id="back-btn" class="button"><a href="../database/return_database.php" style="color:white;text-decoration:none">Back <--</a></button>
        </form>
    </div>
    <!-- <script src="..//javascript/password.js"></script> -->
</body>
</html>

<?php
$root_directory = $_SERVER['DOCUMENT_ROOT'] . '/mysite/PHP_PROJECT';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    
    // updating the table
    $sql = "UPDATE user_information SET username=:username, email=:email WHERE id=:id";
    $query = $conn->prepare($sql);
    
    $query->bindparam(':id', $id);
    $query->bindparam(':username', $username);
    $query->bindparam(':email', $email);
    $query->execute();

    if ($query->execute()) {
        header("Location: $root_directory/database/return_database.php");
        exit;
    } else {
        echo "failed";
    }
    
}
?>