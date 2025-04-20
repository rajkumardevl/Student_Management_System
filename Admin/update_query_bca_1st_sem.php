<?php
include 'connection.php';

if(isset($_POST["id"]) && isset($_POST["column"]) && isset($_POST["value"])){
    $id = $_POST["id"];
    $column = $_POST["column"];
    $value = $_POST["value"];

    if ($column == "first_sub_mark" || $column == "second_sub_mark" || $column == "third_sub_mark") {
        if ($value == "AB") {
            $value = "AB"; 
        } else {
            $value = intval($value); 
        }
    }

    $query = "UPDATE mca_4th_sem SET $column = '$value' WHERE id = '$id'";
    if(mysqli_query($conn, $query)){
        echo "Updated Successfully!";
    } else {
        echo "Error updating: " . mysqli_error($conn);
    }
}
?>
