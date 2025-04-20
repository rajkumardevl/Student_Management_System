<?php
include 'connection.php';

$column = isset($_POST['column']) ? $_POST['column'] : 'roll_no';
$order = isset($_POST['order']) ? $_POST['order'] : 'ASC';

$qry = "SELECT * FROM first_ct ORDER BY $column $order";
$res = mysqli_query($conn, $qry);

while ($row = mysqli_fetch_array($res)) {
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
            <td>{$row['total_obt_mark']}</td>
            <td>{$row['percentage']}</td>
            <td>{$row['result']}</td>
            <td>{$row['division']}</td>
            <td><a href='update_student.php?id={$row['id']}' class='btn btn-primary'><i class='bi bi-pencil-square'></i> Update</a></td>
            <td><a href='delete_student.php?id={$row['id']}' class='btn btn-danger'><i class='bi bi-trash'></i> Delete</a></td>
        </tr>";
}
?>
