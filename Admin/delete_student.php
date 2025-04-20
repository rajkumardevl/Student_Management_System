<?php

include '../connection.php';
session_start();

// Admin session check
if (!isset($_SESSION['id'])) {
    echo '<script>alert("Unauthorized access! Please login.")</script>';
    echo '<script>window.location.href = "login.php"</script>';
    exit();
}

$admin_id = $_SESSION['id'];

// Fetching admin details (if needed)
$qry = "SELECT * FROM admin WHERE id = ?";
$stmt = mysqli_prepare($conn, $qry);
mysqli_stmt_bind_param($stmt, "i", $admin_id);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
if ($myrow = mysqli_fetch_assoc($res)) {
}

// Checking if student ID is set
if (isset($_GET['id'])) {
    $stu_id = $_GET['id'];

    // Secure Delete Query
    $qry = "DELETE FROM mca_4th_sem WHERE id = ?";
    $stmt = mysqli_prepare($conn, $qry);
    mysqli_stmt_bind_param($stmt, "i", $stu_id);
    $res = mysqli_stmt_execute($stmt);

    if ($res) {
        echo '<script>alert("Student Deleted Successfully 😊")</script>';
    } else {
        echo '<script>alert("Something Went Wrong! Please Try Again 😊")</script>';
    }
    
    echo '<script>window.location.href = "mca_4th_sem.php"</script>';
    exit();
}

?>
