
<?php
include_once '../../includes/db.php';
echo 'hello';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];

    $sql = "INSERT INTO users (name, age) VALUES ('$name', '$age')";
    if ($connection->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location:" . BASE_URL . 'index.php');
        exit(); // Make sure to stop the script execution after setting the header
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}
