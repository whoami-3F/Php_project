<?php
    $root_directory = $_SERVER['DOCUMENT_ROOT'] . '/mysite/PHP_PROJECT';
    include("$root_directory/database/database.php");
try {
    
    // Including the database connection file
    
    // Getting the ID of the data from the URL and validating it as an integer
    $id = intval($_GET['id']);
    
    // Deleting the row from the table
    $sql = "DELETE FROM user_information WHERE id=:id";

    $query = $conn->prepare($sql);  //errror section
    $query->execute(array(':id' => $id));

    // Checking if the deletion was successful
    $affectedRows = $query->rowCount();
    if ($affectedRows > 0) {
        // Successful deletion, redirecting to the display page.
        header("Location: /mysite/PHP_PROJECT/database/return_database.php");
    } else {
        // Row with the provided ID not found or no rows were affected
        echo "Deletion failed. Record not found or already deleted.";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
