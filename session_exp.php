<?php

    session_start();
    $id = $_SESSION['id'];
    session_destroy();
    header("location:student_signin_form.html");

?>