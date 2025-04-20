<?php

include '../connection.php';

$id = $_REQUEST['id'];

$qry = "SELECT * FROM first_ct WHERE id = '$id'";
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
    <div class="col-md-6 d-flex justify-content-end">
        <a href="students.php" class="btn btn-primary my-4 shadow">
            <i class="bi bi-arrow-left"></i>
            Go Back
        </a>
    </div>
    <form class="rounded shadow p-3 list-group-item list-group-item-primary" action="student_update_query.php" method="POST" style="height: 68vh; overflow-y: scroll;">
        <div class="row ">
        <input type="hidden" name="id" id="id" class="" value="<?php echo $rows['id']; ?>"/>
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
                    placeholder="Enter Roll Number" value="<?php echo $rows['roll_no']; ?>">
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
                <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $rows['dob']; ?>">
            </div>

            <!-- Gender in one line  -->
            <div class="col-md-4">
                <label for="gender" class="form-label">Gender</label><br>
                <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female"
                        value="female" checked>
                    <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="others"
                        value="others" checked>
                    <label class="form-check-label" for="others">Others</label>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Enrollment Number  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="enroll_no" class="form-label">Enrollment Number</label>
                <input type="number" class="form-control" id="enroll_no" name="enroll_no"
                    placeholder="Enter Enrollment Number" value="<?php echo $rows['enroll_no']; ?>">
            </div>

            <!-- College Name  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="college_name" class="form-label">College Name</label>
                <!-- select  -->
                <select class="form-select" aria-label="Default select example" id="college_name"
                    name="college_name" required value="<?php echo $rows['college_name']; ?>">
                    <option value="" selected>Select College Name</option>
                    <option value="Sunder Deep Engineering College, Ghaziabad">Sunder Deep Engineering
                        College, Ghaziabad</option>
                    <option value="Sunder Deep College of Management & Technology, Ghaziabad">Sunder
                        Deep
                        College of Management & Technology, Ghaziabad</option>
                    <option value="Sunder Deep College of Engineering, Ghaziabad">Sunder Deep College of
                        Engineering, Ghaziabad</option>
                    <option value="Sunder Deep Pharmacy College, Ghaziabad">Sunder Deep Pharmacy
                        College,
                        Ghaziabad</option>
                    <option value="Sunder Deep College of Architecture, Ghaziabad">Sunder Deep College
                        of
                        Architecture, Ghaziabad</option>
                    <option value="Sunder Deep College of Hotel Management, Ghaziabad">Sunder Deep
                        College
                        of Hotel Management, Ghaziabad</option>
                    <option value="Sunder Deep College of Commerce, Ghaziabad">Sunder Deep College of
                        Commerce, Ghaziabad</option>
                    <option value="Sunder Deep College of Law, Ghaziabad">Sunder Deep College of Law,
                        Ghaziabad</option>
                    <option value="Sunder Deep College of Education, Ghaziabad">Sunder Deep College of
                        Education, Ghaziabad</option>
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
                <input type="number" class="form-control" id="first_sub_mark" name="first_sub_mark"
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
                <input type="number" class="form-control" id="second_sub_mark" name="second_sub_mark"
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
                <input type="number" class="form-control" id="third_sub_mark" name="third_sub_mark"
                    placeholder="Enter Third Subject Mark" value="<?php echo $rows['third_sub_mark']; ?>">
            </div>
        </div>

        <div class="row">
            <!-- Fourth Subject Name  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="fourth_sub_name" class="form-label
                            ">Fourth Subject Name</label>
                <input type="text" class="form-control" id="fourth_sub_name" name="fourth_sub_name"
                    placeholder="Enter Fourth Subject Name" value="<?php echo $rows['fourth_sub_name']; ?>">
            </div>

            <!-- Fourth Subject Code  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="fourth_sub_code" class="form-label
                            ">Fourth Subject Code</label>
                <input type="text" class="form-control" id="fourth_sub_code" name="fourth_sub_code"
                    placeholder="Enter Fourth Subject Code" value="<?php echo $rows['fourth_sub_code']; ?>">
            </div>

            <!-- Fourth Subject Mark  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="fourth_sub_mark" class="form-label
                            ">Fourth Subject Mark</label>
                <input type="number" class="form-control" id="fourth_sub_mark" name="fourth_sub_mark"
                    placeholder="Enter Fourth Subject Mark" value="<?php echo $rows['fourth_sub_mark']; ?>">
            </div>
        </div>

        <div class="row">
            <!-- Fifth Subject Name  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="fifth_sub_name" class="form-label
                            ">Fifth Subject Name</label>
                <input type="text" class="form-control" id="fifth_sub_name" name="fifth_sub_name"
                    placeholder="Enter Fifth Subject Name" value="<?php echo $rows['fifth_sub_name']; ?>">
            </div>

            <!-- Fifth Subject Code  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="fifth_sub_code" class="form-label
                            ">Fifth Subject Code</label>
                <input type="text" class="form-control" id="fifth_sub_code" name="fifth_sub_code"
                    placeholder="Enter Fifth Subject Code" value="<?php echo $rows['fifth_sub_code']; ?>">
            </div>

            <!-- Fifth Subject Mark  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="fifth_sub_mark" class="form-label
                            ">Fifth Subject Mark</label>
                <input type="number" class="form-control" id="fifth_sub_mark" name="fifth_sub_mark"
                    placeholder="Enter Fifth Subject Mark" value="<?php echo $rows['fifth_sub_mark']; ?>">
            </div>
        </div>

        <div class="row">
            <!-- Sixth Subject Name  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="sixth_sub_name" class="form-label
                            ">Sixth Subject Name</label>
                <input type="text" class="form-control" id="sixth_sub_name" name="sixth_sub_name"
                    placeholder="Enter Sixth Subject Name" value="<?php echo $rows['sixth_sub_name']; ?>">
            </div>

            <!-- Sixth Subject Code  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="sixth_sub_code" class="form-label
                            ">Sixth Subject Code</label>
                <input type="text" class="form-control" id="sixth_sub_code" name="sixth_sub_code"
                    placeholder="Enter Sixth Subject Code" value="<?php echo $rows['sixth_sub_code']; ?>">
            </div>

            <!-- Sixth Subject Mark  -->
            <div class="mb-3 col-md-4 input_box">
                <label for="sixth_sub_mark" class="form-label
                            ">Sixth Subject Mark</label>
                <input type="number" class="form-control" id="sixth_sub_mark" name="sixth_sub_mark"
                    placeholder="Enter Sixth Subject Mark" value="<?php echo $rows['sixth_sub_mark']; ?>">
            </div>
        </div>

        <div class="row">
            <!-- Total Max Mark  -->
            <div class="mb-3 col-md-2 input_box">
                <label for="total_max_mark" class="form-label
                            ">Total Max Mark</label>
                <input type="number" class="form-control" id="total_max_mark" name="total_max_mark"
                    placeholder="Enter Total Max Mark" value="<?php echo $rows['total_max_mark']; ?>">
            </div>

            <!-- Total Obtained Mark -->
            <div class="mb-3 col-md-2 input_box">
                <label for="total_obt_mark" class="form-label
                            ">Total Obtained Mark</label>
                <input type="number" class="form-control" id="total_obt_mark" name="total_obt_mark"
                    placeholder="Enter Total Obtained Mark" value="<?php echo $rows['total_obt_mark']; ?>">
            </div>

            <!-- Total Subjects  -->
            <!-- select  -->
            <div class="mb-3 col-md-2 input_box">
                <label for="total_sub" class="form-label
                            ">Select Total Subjects</label>
                <!-- select  -->
                <select class="form-select" aria-label="Default select example" id="total_sub" name="total_sub" required value="<?php echo $rows['total_sub']; ?>">
                    <option value="">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>

            <!-- Percentage  -->
            <div class="mb-3 col-md-2 input_box">
                <label for="percentage" class="form-label
                            ">Percentage</label>
                <input type="number" class="form-control" id="percentage" name="percentage"
                    placeholder="Enter Percentage" value="<?php echo $rows['percentage']; ?>">
            </div>

            <!-- Result  -->
            <div class="mb-3 col-md-2 input_box">
                <label for="result" class="form-label
                            ">Result</label>
                <input type="text" class="form-control" id="result" name="result"
                    placeholder="Enter Result" value="<?php echo $rows['result']; ?>">
            </div>

            <!-- Division -->
            <div class="mb-3 col-md-2 input_box">
                <label for="division" class="form-label
                            ">Division</label>
                <input type="text" class="form-control" id="division" name="division"
                    placeholder="Enter Division" value="<?php echo $rows['division']; ?>">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary w-50 my-4 shadow">
                <i class="bi bi-pencil-square"></i>
                Update
            </button>
        </div>
    </form>

</div>

<?php include 'footer_section.php'; ?>