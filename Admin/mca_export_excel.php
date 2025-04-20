<?php
include 'connection.php';

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=faculty_list.xls");

echo "<table border='1'>";
echo "<tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Roll No.</th>
                    <th>Course & Sem</th>
                    <th>Father's Name</th>
                    <th>Mother's Name</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Enrollment No</th>
                    <th>College Name</th>
                    <th>Max Marks</th>
                    <th>First Sub Name</th>
                    <th>First Sub Code</th>
                    <th>First Sub Mark</th>
                    <th>Second Sub Name</th>
                    <th>Second Sub Code</th>
                    <th>Second Sub Mark</th>
                    <th>Third Sub Name</th>
                    <th>Third Sub Code</th>
                    <th>Third Sub Mark</th>
                    <th>Total Max Marks</th>
                    <th>Total Obt. Marks</th>
                    <th>Percentage</th>
                    <th>Result</th>
                    <th>Division</th>
                    <th>Update</th>
                    <th>Delete</th>
    </tr>";

$qry = "SELECT * FROM mca_4th_sem";
$res = mysqli_query($conn, $qry);
while ($row = mysqli_fetch_assoc($res)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['roll_no']}</td>
            <td>{$row['course']}</td>
            <td>{$row['father_name']}</td>
            <td>{$row['mother_name']}</td>
            <td>{$row['dob']}</td>
            <td>{$row['gender']}</td>
            <td>{$row['enroll_no']}</td>
            <td>{$row['college_name']}</td>
            <td>{$row['max_mark']}</td>
            <td>{$row['first_sub_name']}</td>
            <td>{$row['first_sub_code']}</td>
            <td>{$row['first_sub_mark']}</td>
            <td>{$row['second_sub_name']}</td>
            <td>{$row['second_sub_code']}</td>
            <td>{$row['second_sub_mark']}</td>
            <td>{$row['third_sub_name']}</td>
            <td>{$row['third_sub_code']}</td>
            <td>{$row['third_sub_mark']}</td>
            <td>{$row['total_max_mark']}</td>
            <td>{$row['total_obt_mark']}</td>
            <td>{$row['percentage']}</td>
            <td>{$row['result']}</td>
            <td>{$row['division']}</td>
        </tr>";
}
echo "</table>";
