<?php

session_start();
if(!isset($_SESSION['id']))
{
    header("location:student_signin_form.html");
}

?>