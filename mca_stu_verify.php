<?php
include 'connection.php';

$roll_no = $_POST['roll_no']; 
$dob = $_POST['dob'];  // Make sure this is in correct format: YYYY-MM-DD

$qry = "SELECT id, roll_no, dob FROM mca_4th_sem WHERE roll_no = '$roll_no' AND dob = '$dob'";
$res = mysqli_query($conn, $qry);

if (mysqli_num_rows($res) > 0) {
    $myrow = mysqli_fetch_array($res);
    $id = $myrow['id'];  

    session_start();

    $_SESSION['id'] = $myrow['id'];
    $_SESSION['roll_no'] = $myrow['roll_no'];

    header("Location: mca_result.php?id=$id");
    exit(); 
} else {
    echo "<script>
        alert('Wrong Roll Number or Date of Birth! Please try again. 😊');
        window.history.back();
    </script>";
    exit();
}
?>
