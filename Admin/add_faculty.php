<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $department = $_POST['department'];
    $designation = $_POST['designation'];
    $h_q = $_POST['h_q'];

    // Upload Profile Picture
    $profile_pic = $_FILES['profile_pic']['name'];
    $temp_name = $_FILES['profile_pic']['tmp_name'];
    $folder = "uploads/" . $profile_pic;

    if (move_uploaded_file($temp_name, $folder)) {
        $sql = "INSERT INTO faculties (name, mobile, email, gender, address, department, desiganation, h_q, profile_pic) 
                VALUES ('$name', '$mobile', '$email', '$gender', '$address', '$department', '$designation', '$h_q', '$profile_pic')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Faculty added successfully!'); window.location.href='faculties.php';</script>";
        } else {
            echo "Database Error: " . mysqli_error($conn);
        }
    } else {
        echo "Image Upload Failed.";
    }
}
?>

<!-- HTML Form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Faculty</title>
</head>
<body>
    <h2>Add Faculty</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Mobile:</label><br>
        <input type="text" name="mobile" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Gender:</label><br>
        <select name="gender" required>
            <option value="">--Select--</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br><br>

        <label>Address:</label><br>
        <textarea name="address" required></textarea><br><br>

        <label>Department:</label><br>
        <input type="text" name="department" required><br><br>

        <label>Designation:</label><br>
        <input type="text" name="designation" required><br><br>

        <label>Highest Qualification:</label><br>
        <input type="text" name="h_q" required><br><br>

        <label>Profile Picture:</label><br>
        <input type="file" name="profile_pic" accept="image/*" required><br><br>

        <input type="submit" name="submit" value="Add Faculty">
    </form>
</body>
</html>
