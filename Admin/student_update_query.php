<?php
include '../connection.php';

$id = $_POST['id'];

$name = $_POST['name'];
$roll_no = $_POST['roll_no'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$enroll_no = $_POST['enroll_no'];
$college_name = $_POST['college_name'];
$max_mark = $_POST['max_mark'];
$first_sub_name = $_POST['first_sub_name'];
$first_sub_code = $_POST['first_sub_code'];
$first_sub_mark = $_POST['first_sub_mark'];
$second_sub_name = $_POST['second_sub_name'];
$second_sub_code = $_POST['second_sub_code'];
$second_sub_mark = $_POST['second_sub_mark'];
$third_sub_name = $_POST['third_sub_name'];
$third_sub_code = $_POST['third_sub_code'];
$third_sub_mark = $_POST['third_sub_mark'];
$fourth_sub_name = $_POST['fourth_sub_name'];
$fourth_sub_code = $_POST['fourth_sub_code'];
$fourth_sub_mark = $_POST['fourth_sub_mark'];
$fifth_sub_name = $_POST['fifth_sub_name'];
$fifth_sub_code = $_POST['fifth_sub_code'];
$fifth_sub_mark = $_POST['fifth_sub_mark'];
$sixth_sub_name = $_POST['sixth_sub_name'];
$sixth_sub_code = $_POST['sixth_sub_code'];
$sixth_sub_mark = $_POST['sixth_sub_mark'];
$total_max_mark = $_POST['total_max_mark'];
$total_obt_mark = $_POST['total_obt_mark'];
$total_sub = $_POST['total_sub'];
$percentage = $_POST['percentage'];
$result = $_POST['result'];
$division = $_POST['division'];


$qry = "UPDATE first_ct SET name = '$name', roll_no = '$roll_no', father_name = '$father_name', mother_name = '$mother_name', dob = '$dob', gender = '$gender', enroll_no = '$enroll_no', college_name = '$college_name', max_mark = '$max_mark', first_sub_name = '$first_sub_name', first_sub_code = '$first_sub_code', first_sub_mark = '$first_sub_mark', second_sub_name = '$second_sub_name', second_sub_code = '$second_sub_code', second_sub_mark = '$second_sub_mark', third_sub_name = '$third_sub_name', third_sub_code = '$third_sub_code', third_sub_mark = '$third_sub_mark', fourth_sub_name = '$fourth_sub_name', fourth_sub_code = '$fourth_sub_code', fourth_sub_mark = '$fourth_sub_mark', fifth_sub_name = '$fifth_sub_name', fifth_sub_code = '$fifth_sub_code', fifth_sub_mark = '$fifth_sub_mark', sixth_sub_name = '$sixth_sub_name', sixth_sub_code = '$sixth_sub_code', sixth_sub_mark = '$sixth_sub_mark', total_max_mark = '$total_max_mark', total_obt_mark = '$total_obt_mark', total_sub = '$total_sub', percentage = '$percentage', result = '$result', division = '$division' WHERE id = '$id'";

// Run query and check for errors
$res = mysqli_query($conn, $qry);

if (!$res) {
    die("SQL Error: " . mysqli_error($conn)); // Show exact MySQL error
} else {
    echo '<script>alert("Course Updated Successfully 😊")</script>';
    header('Location: students.php');
    exit(); // Ensure header works
}
?>
