<?php
include '../connection.php';

// Fetch all students
$qry = "SELECT * FROM mca_4th_sem";
$res = mysqli_query($conn, $qry);

$total = 0;
$pass = 0;
$fail = 0;
$absent_all = 0;
$topper = '';
$top_marks = -1;

while ($row = mysqli_fetch_assoc($res)) {
    $total++;
    $marks = [$row['first_sub_mark'], $row['second_sub_mark'], $row['third_sub_mark']];
    $is_absent_all = true;
    $is_fail = false;
    $total_marks = 0;

    foreach ($marks as $m) {
        $mark = trim($m);
        if (strtolower($mark) != 'ab') {
            $is_absent_all = false;
            $int_mark = (int)$mark;
            if ($int_mark < 40) $is_fail = true;
            $total_marks += $int_mark;
        }
    }

    if ($is_absent_all) {
        $absent_all++;
    } else if ($is_fail) {
        $fail++;
    } else {
        $pass++;
    }

    if (!$is_absent_all && !$is_fail && $total_marks > $top_marks) {
        $top_marks = $total_marks;
        $topper = $row['name'];
    }
}
?>
