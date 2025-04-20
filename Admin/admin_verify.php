<?php

include '../connection.php';

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$qry = "SELECT id, username, password FROM admin WHERE username = '$username' AND password = '$password'";
$res = mysqli_query($conn, $qry);
if ($rows = mysqli_num_rows($res) > 0) {
    $myrow = mysqli_fetch_array($res);

    // START SESSION



    session_start();
    $id = $_SESSION['id'] = $myrow['id'];
    $username = $_SESSION['username'] = $myrow['username'];

    header("Location:admin_dashboard.php");

    // END SESSION

    echo 'logged In <br>';
} else {
    // alert box
    
    echo '<script>alert("Invalid Username or Password Please Try Again 😊")</script>';
    echo '<script> window.location.href = "index.php"; </script>';
    
}
