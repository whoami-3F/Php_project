<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
<?php 
session_start();
include("validation/valid.php");
include("database/database.php");
include_once('session/users.php');
?>
  <div class="Outer-form-text">
  <h1>College Management System</h1>
  <span id="outer-form-span">
Welcome to our school management system! Our user-friendly 
platform aims to streamline administrative tasks, facilitate 
efficient communication between students, parents, and faculty.
</span>
</div>

  <div class="Main_form" id = "index_form">
    <form action="login.php" method="post">
      <div>
        <img src="icons/login.png" alt="login" style="width:60px">
      </div>

      <div class="inputBox">
        <div class="email-section">
        <input type="email" id="userEmail" class="userInput" name="email" placeholder="Enter your email" autocomplete="off" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>">
        <p style="color: red; margin-right:50px"><?php if (isset($errors['email'])) echo $errors['email']; ?></p>
        </div>
        <br>

        <div class="password-section">
          <input type="password" id="userPassword" class="userInput" name="password" placeholder="Enter your password" autocomplete="off">
          <p style="color: red; margin-right:5px"><?php if (isset($errors['password'])) echo $errors['password']; ?></p>
          <img src="icons/eye-close.png" id="eyeicon">
        </div>
      </div>
      <div class="errorMsg">
                    <?php echo $errorMsgLogin; ?>
                </div>

      <br>
      <div class="userBtn">
        <input type="submit" class="button" id="userLogin" name="loginSubmit" value="Login">
        <br>
        <a href="forgetPassword.php" id="forgetLink">Forget password</a><br><br>
        <a href="register.php" class="button" id="userRegister" style="margin-left: auto; height:17px;">Register</a>
      </div>
    </form>
  </div>
  <script src="javascript/password.js"></script>

  <!-- php code -->

  <?php
function userLogin($email, $password)
{
    global $conn;
    try {
        $hash_password = hash('sha256', $password); //Password encryption
        $stmt = $conn->prepare("SELECT id FROM user_information WHERE (email=:email) AND password=:hash_password");
        $stmt->bindParam("email", $email, PDO::PARAM_STR);
        $stmt->bindParam("hash_password", $hash_password, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        $data = $stmt->fetch(PDO::FETCH_OBJ);
        if ($count) {
            $_SESSION['uid'] = $data->id; // Storing user session value
            return true;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}
$errorMsg = '';

/* Login Form */
if (!empty($_POST['loginSubmit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (strlen(trim($email)) > 1 && strlen(trim($password)) > 1) {
        $uid = userLogin($email, $password);
        if ($uid) {
            $url = 'Pages/Home.php';
            header("Location: Pages/Home.php"); 
        } 
        else {
            $errorMsg = "Please check login details";
        }
    }
}
?>
</body>

</html>