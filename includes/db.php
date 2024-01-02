<?php

// Include the configuration file
include_once 'config.php';

// Function to execute SQL queries
function executeQuery($sql)
{
    global $connection;
    return mysqli_query($connection, $sql);
}

// Function to fetch data from the database
function fetchData($sql)
{
    global $connection;
    $result = executeQuery($sql);

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}
