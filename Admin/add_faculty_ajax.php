<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $department = $_POST['department'];
    $designation = $_POST['designation'];
    $h_q = $_POST['h_q'];

    $profile_pic = $_FILES['profile_pic']['name'];
    $temp_name = $_FILES['profile_pic']['tmp_name'];
    $folder = "uploads/" . $profile_pic;

    if (move_uploaded_file($temp_name, $folder)) {
        $sql = "INSERT INTO faculties (name, mobile, email, gender, address, department, desiganation, h_q, profile_pic)
                VALUES ('$name', '$mobile', '$email', '$gender', '$address', '$department', '$designation', '$h_q', '$profile_pic')";
        if (mysqli_query($conn, $sql)) {
            echo "success";
        } else {
            echo "Database Error: " . mysqli_error($conn);
        }
    } else {
        echo "Image Upload Failed.";
    }
}
?>
