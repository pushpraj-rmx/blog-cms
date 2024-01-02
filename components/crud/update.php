<?php
include_once '../../includes/db.php';

$sql = "UPDATE users SET column1='new_value' WHERE some_condition";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
