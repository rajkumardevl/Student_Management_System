<?php
    // Database Connection
    $conn = new mysqli('localhost', 'root', '', 'students_ct_results');

    // Check Connection
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } 
    else {
        // echo 'Connection Successful';
    }
?>
