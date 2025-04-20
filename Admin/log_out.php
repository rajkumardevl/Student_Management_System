<?php

    session_start();
    $id = $_SESSION['id'];
    session_destroy();
    header("location:index.php");

?>