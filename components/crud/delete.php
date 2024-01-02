<?php
include_once '../../includes/db.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $id = $_POST['id'];
    $delete_user = $_POST['delete'];

    $sql = "DELETE FROM users WHERE id = $delete_user";
    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location:" . BASE_URL . 'index.php');
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}
