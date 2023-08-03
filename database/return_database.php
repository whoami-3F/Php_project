<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login Details</title>
    <link rel="stylesheet" href="..//css/index.css"
</head>
<body>
    <?php
    include("database.php");
    ?>
    <?php
    $users = [];
    $sql = "SELECT * from user_information";
    $query = $conn->prepare($sql);
    $query->execute();
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $users = $query->fetchAll();
    ?>

    <div class="table-container">
    <table border="1px solid;" id="table-section">
        <thead>
            <th>ID</th>
            <th>User</th>
            <th>email</th>
            <th>Password</th>
            <th colspan="2">Action</th>
        </thead>
        <tbody>
            </div>
            <?php
            foreach ($users as $key => $value) {
                echo "
                <tr>
                <td>" . $key+1 . "</td>
                <td>" . $value['username'] . "</td>
                <td>" . $value['email'] . "</td>
                <td>" . $value['password'] . "</td>
                <td><a href = '../edit_delete/delete.php?id=$value[id]'>Delete</td>
                <td><a href = '../edit_delete/update.php?id=$value[id]'>Update</td>
                </tr>
                ";
                
            }
            ?>
        </tbody>
    </table>
    <br>
    <button id="addUser-btn" class="button"><a href="/mysite/PHP_PROJECT/register.php">Add Users</a></button>
    <button id="addUser-btn" class="button"><a href="/mysite/PHP_PROJECT/Pages/Home.php">Home Page</a></button>
</body>

</html>