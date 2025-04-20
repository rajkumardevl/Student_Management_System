<?php

// include '../connection.php';
include '../../../SMS/Admin/connection.php';
include '../connection.php';
session_start();
$id = $_SESSION['id'];
//
// Fetch admin data
$qry = "SELECT * FROM sms.teacher_registration WHERE id = '$id'";
$res = mysqli_query($conn, $qry);
$rows = mysqli_fetch_array($res);
// Check if the form is submitted
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $desiganation = $_POST['desiganation'];
    $h_q = $_POST['h_q'];
    

    $qry = "UPDATE sms.teacher_registration SET name = '$name', mobile = '$mobile', email = '$email', city = '$city', desiganation = '$desiganation', h_q = '$h_q' WHERE id = '$id'";
    $res = mysqli_query($conn, $qry);

    if ($res) {
        echo '<script>alert("Profile Updated Successfully 😊")</script>';
        header('Location: admin_profile.php');
        exit(); // Ensure header works
    } else {
        echo '<script>alert("Profile Not Updated")</script>';
    }
}

?>