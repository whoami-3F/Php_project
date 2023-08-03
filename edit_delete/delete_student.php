<?php
    $root_directory = $_SERVER['DOCUMENT_ROOT'] . '/mysite/PHP_PROJECT';
    include("$root_directory/database/database.php");
try {
    
    // Including the database connection file
    
    // Getting the student_id of the data from the URL and validating it as an integer
    $student_id = intval($_GET['student_id']);
    
    // Deleting the row from the table
    $sql = "DELETE FROM student_details WHERE student_id=:student_id";

    $query = $conn->prepare($sql);  //errror section
    $query->execute(array(':student_id' => $student_id));

    // Checking if the deletion was successful
    $affectedRows = $query->rowCount();
    if ($affectedRows > 0) {
        // Successful deletion, redirecting to the display page.
        header("Location: /mysite/PHP_PROJECT/database/student_database.php");
    } else {
        // Row with the provided ID not found or no rows were affected
        echo "Deletion failed. Record not found or already deleted.";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
