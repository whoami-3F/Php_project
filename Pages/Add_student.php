<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding Student</title>
    <link rel="stylesheet" href="../css/index.css">
    <style>
    html,body{
        font-family: Arial;
        margin: 0; 
        height: 100%; 
        overflow: hidden;
        background-color: #2fa8e4;
    }

    #Main-box{
        width: 700px;
        height: 700px;
        padding: 15px;
        border-radius: 5px;
        font-size: 14px;
        background: white;
        color: #333333;
        position: absolute;
        overflow: hidden;
        top: 50%; 
        left: 50%; 
        transform: translate(-50%, -50%); 
    }

    h1{
        text-align: center;
    }

    #input-section{
        height: 80%;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .input-box{
        text-align: center;
        outline: none;
        border: 2px solid #a3a375;
        font-weight: 800;
        font-size: 19px;
        padding: 10px;
        width: 80%;
        margin: 10px;
        text-align: start;
        border-radius: 5px;
    }

    .input-box:hover {
        border: 2px solid #16385e;
    }

    .input-box:focus {
        outline: none; 
        border-color:#16385e;
    }
    #addStudent a{
        color: white;
        text-decoration: none;
    }
    </style>
</head>
<body>
<?php 
session_start();
$root_directory = $_SERVER['DOCUMENT_ROOT'] . '/PHP_PROJECT';
include("$root_directory/database/database.php");
?>
    <div id="Main-box">
        <h1 style="color:black">Enter Student details</h1>
        <form action="Add_student.php" method="post" name="add-student" >
        <div id="input-section">
            <input type="text" id="first_name" class="input-box" name="firstname" placeholder="Enter your First name"><br>
            <input type="text" id="last_name" class="input-box" name="lastname" placeholder="Enter your Last name"><br>
            <input type="text" id="address" class="input-box" name="address" placeholder="Enter your Address"><br>
            <input type="text" id="phone_number" class="input-box" name="phonenumber" placeholder="Enter your phone number"><br>
            <input type="text" id="batch_year" class="input-box" name="batchyear" placeholder="Enter your Batch Year"><br>
            <input type="text" id="batch_sem" class="input-box" name="batchsem" placeholder="Enter your Batch Sem"><br>
            <input type="text" id="section" class="input-box" name="section" placeholder="Enter your Section"><br>
        </div>
            <input type="submit" value="Submit" id="addStudent-btn-1" class="button" name="add-student">
            <button id="addStudent" class="button"><a href="Home.php">Already Have</a></button>
        </form>
    </div>
    <?php
session_start();

$servername = "localhost";
$dbname = "Users";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST['add-student'])){
        // Get the entered data from the form
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $address = $_POST['address'];
        $phone_number = $_POST['phonenumber'];
        $batch_year = $_POST['batchyear'];
        $batch_sem = $_POST['batchsem'];
        $section = $_POST['section'];

        // Insert the data into the database
        $sql = "INSERT INTO student_details (FirstName, LastName, Address, PhoneNumber, BatchYear, BatchSem, Section) VALUES (:first_name, :last_name, :address, :phone_number, :batch_year, :batch_sem, :section)";
        $query = $conn->prepare($sql);
        $query->bindParam(':first_name', $first_name);
        $query->bindParam(':last_name', $last_name);
        $query->bindParam(':address', $address);
        $query->bindParam(':phone_number', $phone_number);
        $query->bindParam(':batch_year', $batch_year);
        $query->bindParam(':batch_sem', $batch_sem);
        $query->bindParam(':section', $section);

        if ($query->execute()) {
            // Data inserted successfully
            echo "<script>alert('Student details added successfully!');</script>";
            header("Location: /mysite/PHP_PROJECT/database/student_database.php");
            exit;
        } else {
            // Error occurred while inserting data
            echo "<script>alert('Error: Unable to add student details.');</script>";
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

</body>
</html>
