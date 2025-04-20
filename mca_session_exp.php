<?php

    session_start();
    $id = $_SESSION['id'];
    session_destroy();
    header("location:mca_sudents_signin_form.html");

?>