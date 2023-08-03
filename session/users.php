<?php
/* User Login */
$root_directory = $_SERVER['DOCUMENT_ROOT'] . '/PHP_PROJECT';
include_once("$root_directory/database/database.php");

/* User Details */
function userDetails($uid)
{
    global $conn;
    try {
        $stmt = $conn->prepare("SELECT email,username FROM user_information WHERE id=:id");
        $stmt->bindParam("id", $uid, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_OBJ); //User data
        return $data;
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}
?>