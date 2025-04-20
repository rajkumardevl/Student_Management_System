<?php
include 'connection.php';

$roll_no = $_POST['roll_no']; 

$qry = "SELECT id, roll_no FROM first_ct WHERE roll_no = '$roll_no'";  
$res = mysqli_query($conn, $qry);

if (mysqli_num_rows($res) > 0) {
    $myrow = mysqli_fetch_array($res);
    $id = $myrow['id'];  

    // session with 1 min timeout
    session_start();

    $_SESSION['id'] = $myrow['id'];
    $_SESSION['roll_no'] = $myrow['roll_no'];

    // redirect to the index page
    header("Location: index_page1.php?id=$id");
    exit(); 
} 
else {
    // JavaScript alert and redirect back
    echo "<script>
        alert('Wrong Roll Number! Please try again. 😊');
        window.history.back();  // Redirects back to the previous page
    </script>";
    exit();
}
?>
