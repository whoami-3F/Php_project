<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details Table</title>
    <link rel="stylesheet" href="..//css/index.css";
</head>
<body>
    <?php
    include("database.php");
    ?>
    <?php
    $users = [];
    $sql = "SELECT * from student_details";
    $query = $conn->prepare($sql);
    $query->execute();
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $users = $query->fetchAll();
    ?>
    <div class="table-container">
    <table border="1px solid;" id="table-section">
        <thead>
            <th>student_id</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Address</th>
            <th>PhoneNumber</th>
            <th>BatchYear</th>
            <th>BatchSem</th>
            <th>Section</th>
            <th colspan="2">Action</th>
        </thead>
        <tbody>
            </div>
            <?php
            foreach ($users as $key => $value) {
                echo "
                <tr>
                <td>" . $key+1 . "</td>
                <td>" . $value['FirstName'] . "</td>
                <td>" . $value['LastName'] . "</td>
                <td>" . $value['Address'] . "</td>
                <td>" . $value['PhoneNumber'] . "</td>
                <td>" . $value['BatchYear'] . "</td>
                <td>" . $value['Section'] . "</td>
                <td><a href = '../edit_delete/delete_student.php?student_id=$value[student_id]'>Delete</td>
                <td><a href = '../edit_delete/update_student.php?student_id=$value[student_id]'>Update</td>
                </tr>
                ";
            }
            ?>
        </tbody>
    </table>
    <br>

    <!-- modify this code -->
    <button id="addUser-btn" class="button"><a href="/mysite/PHP_PROJECT/Pages/Add_student.php">Add Student</a></button>
    <button id="addUser-btn" class="button"><a href="/mysite/PHP_PROJECT/Pages/Home.php">Home Page</a></button>
</body>

</html>