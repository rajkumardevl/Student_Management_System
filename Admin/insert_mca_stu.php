<?php

include 'connection.php';

$name = $_POST['name'];
$roll_no = $_POST['roll_no'];
$course = $_POST['course'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$enroll_no = $_POST['enroll_no'];
$college_name = $_POST['college_name'];
$max_mark = intval($_POST['max_mark']); // Convert to integer

$first_sub_name = $_POST['first_sub_name'];
$first_sub_code = $_POST['first_sub_code'];
$first_sub_mark = $_POST['first_sub_mark'];  // String (could be "AB" or number)
$second_sub_name = $_POST['second_sub_name'];
$second_sub_code = $_POST['second_sub_code'];
$second_sub_mark = $_POST['second_sub_mark'];
$third_sub_name = $_POST['third_sub_name'];
$third_sub_code = $_POST['third_sub_code'];
$third_sub_mark = $_POST['third_sub_mark'];

// Function to validate marks and convert non-numeric values to "AB"
function getValidMarks($marks) {
    return is_numeric($marks) ? $marks : "AB";
}

// Convert input marks before storing in database
$first_sub_mark = getValidMarks($_POST['first_sub_mark']);
$second_sub_mark = getValidMarks($_POST['second_sub_mark']);
$third_sub_mark = getValidMarks($_POST['third_sub_mark']);

// Total obtained marks calculation (ignoring "AB")
$total_obt_mark = 0;
$total_obt_mark += is_numeric($first_sub_mark) ? $first_sub_mark : 0;
$total_obt_mark += is_numeric($second_sub_mark) ? $second_sub_mark : 0;
$total_obt_mark += is_numeric($third_sub_mark) ? $third_sub_mark : 0;

// Total max marks calculation (only counting subjects where marks are not "AB")
$total_sub = 3;
$total_max_mark = $max_mark * $total_sub;

// Percentage calculation (Avoid division by zero)
$percentage = ($total_max_mark > 0) ? ($total_obt_mark / $total_max_mark) * 100 : 0;

// Result and Division Calculation
if ($percentage < 33) {
    $result = "Fail";
    $division = "None";
} elseif ($percentage >= 33 && $percentage < 50) {
    $result = "Pass";
    $division = "Third";
} elseif ($percentage >= 50 && $percentage < 60) {
    $result = "Pass";
    $division = "Second";
} else {
    $result = "Pass";
    $division = "First";
}


// Check if roll number already exists
$checkQuery = "SELECT * FROM mca_4th_sem WHERE roll_no = '$roll_no'";
$checkResult = mysqli_query($conn, $checkQuery);

if (mysqli_num_rows($checkResult) > 0) {
    echo "<script>alert('Roll Number already exists!'); window.location.href='mca_4th_sem.php';</script>";
    exit(); // Stop further execution
}


// Insert Query
$sql = "INSERT INTO mca_4th_sem 
(name, roll_no, course, father_name, mother_name, dob, gender, enroll_no, college_name, max_mark, 
first_sub_name, first_sub_code, first_sub_mark, second_sub_name, second_sub_code, second_sub_mark, 
third_sub_name, third_sub_code, third_sub_mark, total_max_mark, total_obt_mark, total_sub, percentage, result, division) 
VALUES 
('$name', '$roll_no', '$course', '$father_name', '$mother_name', '$dob', '$gender', '$enroll_no', '$college_name', '$max_mark', 
'$first_sub_name', '$first_sub_code', '$first_sub_mark', '$second_sub_name', '$second_sub_code', '$second_sub_mark', 
'$third_sub_name', '$third_sub_code', '$third_sub_mark', '$total_max_mark', '$total_obt_mark', '$total_sub', '$percentage', '$result', '$division')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Data Inserted Successfully";
    header("location:mca_4th_sem.php");
} else {
    echo "Error: " . mysqli_error($conn);

    echo "<script>alert('Data Not Inserted');</script>";
    echo "<script>window.location.href='mca_4th_sem.php';</script>";
}

?>
