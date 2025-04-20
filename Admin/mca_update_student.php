<?php

include '../connection.php';

$id = intval($_REQUEST['id']);

$qry = "SELECT * FROM mca_4th_sem WHERE id = '$id'";
$res = mysqli_query($conn, $qry);
$rows = mysqli_fetch_array($res);

?>

<?php include 'header_section.php'; ?>

<div class="row mx-5 update_form">
    <div class="col-md-6">
        <h1 class="text-primary my-4">
            <i class="bi bi-pencil-square"></i>
            Update Student
        </h1>
    </div>
    <div class="col-md-6">
        <a href="mca_4th_sem.php" class="btn btn-primary my-4 shadow float-end">
            <i class="bi bi-arrow-left"></i>
            Go Back
        </a>
    </div>
    <form class="rounded shadow p-3 list-group-item list-group-item-primary" action="mca_update_student1.php" method="POST" style="height: 68vh; overflow-y: scroll;">

        <div class="row ">
            <input type="hidden" name="id" id="id" class="" value="<?php echo $rows['id']; ?>" />
            <!-- Student Name  -->
            <div class=" mb-3 col-md-4 input_box">
                <label for="name" class="form-label">Student Name</label>
                <input type="text" class="form-control" id="name" name="name"
                    placeholder="Enter Student Name" value="<?php echo $rows['name']; ?>">
            </div>

            <!-- Roll Number  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="roll_no" class="form-label">Roll Number</label>
                <input type="number" class="form-control" id="roll_no" name="roll_no"
                    placeholder="Enter Roll Number" value="<?php echo isset($rows['roll_no']) ? $rows['roll_no'] : ''; ?>" min="1">
            </div>

            <?php
            include '../connection.php'; // Database connection include karein

            $id = $_GET['id']; // URL se student ka ID fetch karein

            // Database se student ka course fetch karein
            $query = "SELECT course FROM first_ct WHERE id = '$id'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $course = $row['course']; // Course ka value assign karein
            ?>


            <!-- Course -->
            <div class="mb-3 col-md-4 input_box">
                <label for="course" class="form-label">Course</label>
                <select class="form-select" aria-label="Default select example" name="course" id="course" required>
                    <option value="">Select Course</option>
                    <option value="BCA 1st Sem" <?= ($course == "BCA 1st Sem") ? "selected" : "" ?>>BCA 1st Sem</option>
                    <option value="BCA 2nd Sem" <?= ($course == "BCA 2nd Sem") ? "selected" : "" ?>>BCA 2nd Sem</option>
                    <option value="BCA 3rd Sem" <?= ($course == "BCA 3rd Sem") ? "selected" : "" ?>>BCA 3rd Sem</option>
                    <option value="BCA 4th Sem" <?= ($course == "BCA 4th Sem") ? "selected" : "" ?>>BCA 4th Sem</option>
                    <option value="BCA 5th Sem" <?= ($course == "BCA 5th Sem") ? "selected" : "" ?>>BCA 5th Sem</option>
                    <option value="BCA 6th Sem" <?= ($course == "BCA 6th Sem") ? "selected" : "" ?>>BCA 6th Sem</option>
                    <option value="MCA 1st Sem" <?= ($course == "MCA 1st Sem") ? "selected" : "" ?>>MCA 1st Sem</option>
                    <option value="MCA 2nd Sem" <?= ($course == "MCA 2nd Sem") ? "selected" : "" ?>>MCA 2nd Sem</option>
                    <option value="MCA 3rd Sem" <?= ($course == "MCA 3rd Sem") ? "selected" : "" ?>>MCA 3rd Sem</option>
                    <option value="MCA 4th Sem" <?= ($course == "MCA 4th Sem") ? "selected" : "" ?>>MCA 4th Sem</option>
                </select>
            </div>


            <!-- father name  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="father_name" class="form-label">Father Name</label>
                <input type="text" class="form-control" id="father_name" name="father_name"
                    placeholder="Enter Father Name" value="<?php echo $rows['father_name']; ?>">
            </div>
        </div>

        <div class="row">
            <!-- mother name  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="mother_name" class="form-label">Mother Name</label>
                <input type="text" class="form-control" id="mother_name" name="mother_name"
                    placeholder="Enter Mother Name" value="<?php echo $rows['mother_name']; ?>">
            </div>

            <!-- Date of Birth  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob"
                    value="<?php echo $rows['dob']; ?>" max="<?php echo date('Y-m-d'); ?>">
            </div>

            <!-- Gender in one line  -->
            <div class="col-md-4">
                <label for="gender" class="form-label">Gender</label><br>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male"
                        <?php echo ($rows['gender'] == 'male') ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="male">Male</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female"
                        <?php echo ($rows['gender'] == 'female') ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="female">Female</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="others" value="others"
                        <?php echo ($rows['gender'] == 'others') ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="others">Others</label>
                </div>
            </div>

        </div>

        <div class="row">
            <!-- Enrollment Number  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="enroll_no" class="form-label">Enrollment Number</label>
                <input type="number" class="form-control" id="enroll_no" name="enroll_no"
                    placeholder="Enter Enrollment Number" value="<?php echo $rows['enroll_no']; ?>"
                    oninput="this.value = this.value.replace(/[^0-9]/g, '');">
            </div>

            <!-- College Name  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="college_name" class="form-label">College Name</label>
                <select class="form-select" aria-label="Default select example" id="college_name" name="college_name" required>
                    <option value="" disabled>Select College Name</option>
                    <option value="Sunder Deep Engineering College, Ghaziabad"
                        <?php echo ($rows['college_name'] == 'Sunder Deep Engineering College, Ghaziabad') ? 'selected' : ''; ?>>
                        Sunder Deep Engineering College, Ghaziabad
                    </option>
                    <option value="Sunder Deep College of Management & Technology, Ghaziabad"
                        <?php echo ($rows['college_name'] == 'Sunder Deep College of Management & Technology, Ghaziabad') ? 'selected' : ''; ?>>
                        Sunder Deep College of Management & Technology, Ghaziabad
                    </option>
                    <option value="Sunder Deep College of Engineering, Ghaziabad"
                        <?php echo ($rows['college_name'] == 'Sunder Deep College of Engineering, Ghaziabad') ? 'selected' : ''; ?>>
                        Sunder Deep College of Engineering, Ghaziabad
                    </option>
                    <option value="Sunder Deep Pharmacy College, Ghaziabad"
                        <?php echo ($rows['college_name'] == 'Sunder Deep Pharmacy College, Ghaziabad') ? 'selected' : ''; ?>>
                        Sunder Deep Pharmacy College, Ghaziabad
                    </option>
                    <option value="Sunder Deep College of Architecture, Ghaziabad"
                        <?php echo ($rows['college_name'] == 'Sunder Deep College of Architecture, Ghaziabad') ? 'selected' : ''; ?>>
                        Sunder Deep College of Architecture, Ghaziabad
                    </option>
                    <option value="Sunder Deep College of Hotel Management, Ghaziabad"
                        <?php echo ($rows['college_name'] == 'Sunder Deep College of Hotel Management, Ghaziabad') ? 'selected' : ''; ?>>
                        Sunder Deep College of Hotel Management, Ghaziabad
                    </option>
                    <option value="Sunder Deep College of Commerce, Ghaziabad"
                        <?php echo ($rows['college_name'] == 'Sunder Deep College of Commerce, Ghaziabad') ? 'selected' : ''; ?>>
                        Sunder Deep College of Commerce, Ghaziabad
                    </option>
                    <option value="Sunder Deep College of Law, Ghaziabad"
                        <?php echo ($rows['college_name'] == 'Sunder Deep College of Law, Ghaziabad') ? 'selected' : ''; ?>>
                        Sunder Deep College of Law, Ghaziabad
                    </option>
                    <option value="Sunder Deep College of Education, Ghaziabad"
                        <?php echo ($rows['college_name'] == 'Sunder Deep College of Education, Ghaziabad') ? 'selected' : ''; ?>>
                        Sunder Deep College of Education, Ghaziabad
                    </option>
                </select>
            </div>

            <!-- Max Mark  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="max_mark" class="form-label">Max Mark</label>
                <input type="number" class="form-control" id="max_mark" name="max_mark"
                    placeholder="Enter Max Mark" value="<?php echo $rows['max_mark']; ?>">
            </div>
        </div>

        <div class="row">
            <!-- First Subject Name  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="first_sub_name" class="form-label">First Subject Name</label>
                <input type="text" class="form-control" id="first_sub_name" name="first_sub_name"
                    placeholder="Enter First Subject Name" value="<?php echo $rows['first_sub_name']; ?>">
            </div>

            <!-- First Subject Code  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="first_sub_code" class="form-label
                            ">First Subject Code</label>
                <input type="text" class="form-control" id="first_sub_code" name="first_sub_code"
                    placeholder="Enter First Subject Code" value="<?php echo $rows['first_sub_code']; ?>">
            </div>

            <!-- First Subject Mark  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="first_sub_mark" class="form-label">First Subject Mark</label>
                <input type="text" class="form-control" id="first_sub_mark" name="first_sub_mark"
                    placeholder="Enter First Subject Mark" value="<?php echo $rows['first_sub_mark']; ?>">
            </div>
        </div>

        <div class="row">
            <!-- Second Subject Name  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="second_sub_name" class="form-label
                            ">Second Subject Name</label>
                <input type="text" class="form-control" id="second_sub_name" name="second_sub_name"
                    placeholder="Enter Second Subject Name" value="<?php echo $rows['second_sub_name']; ?>">
            </div>

            <!-- Second Subject Code  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="second_sub_code" class="form-label
                            ">Second Subject Code</label>
                <input type="text" class="form-control" id="second_sub_code" name="second_sub_code"
                    placeholder="Enter Second Subject Code" value="<?php echo $rows['second_sub_code']; ?>">
            </div>

            <!-- Second Subject Mark  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="second_sub_mark" class="form-label">Second Subject Mark</label>
                <input type="text" class="form-control" id="second_sub_mark" name="second_sub_mark"
                    placeholder="Enter Second Subject Mark" value="<?php echo $rows['second_sub_mark']; ?>">
            </div>
        </div>

        <div class="row">
            <!-- Third Subject Name  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="third_sub_name" class="form-label
                            ">Third Subject Name</label>
                <input type="text" class="form-control" id="third_sub_name" name="third_sub_name"
                    placeholder="Enter Third Subject Name" value="<?php echo $rows['third_sub_name']; ?>">
            </div>

            <!-- Third Subject Code  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="third_sub_code" class="form-label
                            ">Third Subject Code</label>
                <input type="text" class="form-control" id="third_sub_code" name="third_sub_code"
                    placeholder="Enter Third Subject Code" value="<?php echo $rows['third_sub_code']; ?>">
            </div>

            <!-- Third Subject Mark  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="third_sub_mark" class="form-label
                            ">Third Subject Mark</label>
                <input type="text" class="form-control" id="third_sub_mark" name="third_sub_mark"
                    placeholder="Enter Third Subject Mark" value="<?php echo $rows['third_sub_mark']; ?>">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-4 input_box">
                <label for="total_sub" class="form-label
                            ">Select Total Subjects</label>
                <!-- select  -->
                <select class="form-select" aria-label="Default select example" id="total_sub" name="total_sub" required>
                    <option value="">Select</option>
                    <option value="1" <?php echo ($rows['total_sub'] == '1') ? 'selected' : ''; ?>>1</option>
                    <option value="2" <?php echo ($rows['total_sub'] == '2') ? 'selected' : ''; ?>>2</option>
                    <option value="3" <?php echo ($rows['total_sub'] == '3') ? 'selected' : ''; ?>>3</option>
                    <option value="4" <?php echo ($rows['total_sub'] == '4') ? 'selected' : ''; ?>>4</option>
                    <option value="5" <?php echo ($rows['total_sub'] == '5') ? 'selected' : ''; ?>>5</option>
                    <option value="6" <?php echo ($rows['total_sub'] == '6') ? 'selected' : ''; ?>>6</option>
                </select>

            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary w-50 my-4 shadow">
                <i class="bi bi-pencil-square"></i>
                Update
            </button>
            <!-- discard  -->
            <button type="button" class="btn btn-danger w-50 my-4 shadow" onclick="window.location.href = 'mca_4th_sem.php';">
                <i class="bi bi-x-circle"></i>
                Discard
            </button>
        </div>
    </form>

</div>

<?php include 'footer_section.php'; ?>