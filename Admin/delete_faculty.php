<?php
include 'connection.php'; // ya jahan aapka connection file ho

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Get profile pic name to delete from uploads folder
    $getQuery = "SELECT profile_pic FROM faculties WHERE id = $id";
    $result = mysqli_query($conn, $getQuery);
    $row = mysqli_fetch_assoc($result);

    // Delete faculty from DB
    $deleteQuery = "DELETE FROM faculties WHERE id = $id";
    if (mysqli_query($conn, $deleteQuery)) {

        // Remove profile image if it's not default
        if (!empty($row['profile_pic']) && $row['profile_pic'] !== 'default.png') {
            $file_path = 'uploads/' . $row['profile_pic'];
            if (file_exists($file_path)) {
                unlink($file_path); // delete image
            }
        }

        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "invalid";
}
?>
