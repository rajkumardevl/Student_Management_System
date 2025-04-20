<?php
include '../connection.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['id']) || empty($_POST['id'])) {
        die("Error: Student ID is missing!");
    }

    $id = intval($_POST['id']);

    // Fetch values from form, with default values if empty
    $name = trim($_POST['name']) ?? "Unknown";
    $roll_no = trim($_POST['roll_no']) ?? "N/A";
    $course = trim($_POST['course']) ?? "Not Selected";
    $father_name = trim($_POST['father_name']) ?? "Unknown";
    $mother_name = trim($_POST['mother_name']) ?? "Unknown";
    $dob = trim($_POST['dob']) ?? "0000-00-00";
    $gender = trim($_POST['gender']) ?? "Other";
    $enroll_no = trim($_POST['enroll_no']) ?? "N/A";
    $college_name = trim($_POST['college_name']) ?? "Unknown College";
    $max_mark = isset($_POST['max_mark']) ? intval($_POST['max_mark']) : 100;

    $first_sub_name = trim($_POST['first_sub_name']) ?? "N/A";
    $first_sub_code = trim($_POST['first_sub_code']) ?? "N/A";
    $first_sub_mark = trim($_POST['first_sub_mark']) ?? "AB";

    $second_sub_name = trim($_POST['second_sub_name']) ?? "N/A";
    $second_sub_code = trim($_POST['second_sub_code']) ?? "N/A"; // FIXED
    $second_sub_mark = trim($_POST['second_sub_mark']) ?? "AB";

    $third_sub_name = trim($_POST['third_sub_name']) ?? "N/A"; // FIXED
    $third_sub_code = trim($_POST['third_sub_code']) ?? "N/A";
    $third_sub_mark = trim($_POST['third_sub_mark']) ?? "AB";

    // Function to check valid marks
    function getValidMarks($marks) {
        return (is_numeric($marks) && $marks !== "") ? intval($marks) : "AB";
    }

    $first_sub_mark = getValidMarks($first_sub_mark);
    $second_sub_mark = getValidMarks($second_sub_mark);
    $third_sub_mark = getValidMarks($third_sub_mark);

    $total_obt_mark = 0;
    if (is_numeric($first_sub_mark)) $total_obt_mark += $first_sub_mark;
    if (is_numeric($second_sub_mark)) $total_obt_mark += $second_sub_mark;
    if (is_numeric($third_sub_mark)) $total_obt_mark += $third_sub_mark;

    $total_sub = 3;
    $total_max_mark = $max_mark * $total_sub;
    $percentage = ($total_max_mark > 0) ? ($total_obt_mark / $total_max_mark) * 100 : 0;

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

    // Update Query
    $qry = "UPDATE mca_4th_sem SET 
        name = ?, roll_no = ?, course = ?, father_name = ?, mother_name = ?, dob = ?, gender = ?, 
        enroll_no = ?, college_name = ?, max_mark = ?, first_sub_name = ?, first_sub_code = ?, 
        first_sub_mark = ?, second_sub_name = ?, second_sub_code = ?, second_sub_mark = ?, 
        third_sub_name = ?, third_sub_code = ?, third_sub_mark = ?, total_obt_mark = ?, 
        percentage = ?, result = ? WHERE id = ?";

    $stmt = $conn->prepare($qry);
    $stmt->bind_param(
        "ssssssssisssisisisisdis",
        $name, $roll_no, $course, $father_name, $mother_name, $dob, $gender, 
        $enroll_no, $college_name, $max_mark, $first_sub_name, $first_sub_code, 
        $first_sub_mark, $second_sub_name, $second_sub_code, $second_sub_mark, 
        $third_sub_name, $third_sub_code, $third_sub_mark, $total_obt_mark, 
        $percentage, $result, $id
    );

    if ($stmt->execute()) {
        echo '<script>alert("Student Updated Successfully 😊");</script>';
        header('Location: mca_4th_sem.php');
        exit();
    } else {
        die("SQL Error: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
}
?>
