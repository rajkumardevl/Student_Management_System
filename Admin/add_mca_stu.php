<?php

include 'header_section.php';

echo "<pre>";
print_r($_POST);
echo "</pre>";

?>

<div class="row">
    <div class="bg_color bg-success bg-opacity-25 rounded border  border-2 border-dark">
        <!-- <div class="top_header text-center p-3 rounded shadow border border-2 border-dark bg-secondary text-light sticky-top mt-2">
                    <img class="img-fluid" src="images/4 (1).png" alt="">
                </div> -->
        <div class="head d-flex align-items-center ms-5 my-2">
            <lord-icon class=""
                src="https://cdn.lordicon.com/zdwrqfmb.json"
                trigger="hover" style="width:80px;height:80px">
            </lord-icon>
            <h2 class=" text-decoration-underline">
                Add Students
            </h2>
        </div>
        <div class="row mx-5 pb-4">
            <form action="insert_mca_stu.php" method="POST">
                <div class="row">
                    <!-- Student Name  -->
                    <div class=" mb-3 col-md-3 px-1">
                        <label for="name" class="form-label">Student Name</label>
                        <input type="text" class="form-control
                        " id="name" name="name"
                            placeholder="Enter Student Name" required>
                    </div>

                    <!-- Roll Number  -->
                    <div class="mb-3 col-md-3 px-1">
                        <label for="roll_no" class="form-label">Roll Number</label>
                        <input type="number" class="form-control" id="roll_no" name="roll_no"
                            placeholder="Enter Roll Number" required>
                    </div>

                    <!-- Course  -->
                    <div class="mb-3 col-md-3 px-1">
                        <label for="course" class="form-label">Course</label>
                        <!-- select  -->
                        <select class="form-select" aria-label="Default select example" name="course" id="course" required>
                            <option>Open this select menu, you can click to select</option>
                            <option value="BCA 1st Sem">BCA 1st Sem</option>
                            <option value="BCA 2nd Sem">BCA 2nd Sem</option>
                            <option value="BCA 3rd Sem">BCA 3rd Sem</option>
                            <option value="BCA 4th Sem">BCA 4th Sem</option>
                            <option value="BCA 5th Sem">BCA 5th Sem</option>
                            <option value="BCA 6th Sem">BCA 6th Sem</option>
                            <option value="MCA 1st Sem">MCA 1st Sem</option>
                            <option value="MCA 2nd Sem">MCA 2nd Sem</option>
                            <option value="MCA 3rd Sem">MCA 3rd Sem</option>
                            <option selected value="MCA 4th Sem">MCA 4th Sem</option>
                        </select>
                    </div>
                    <!-- father name  -->
                    <div class="mb-3 col-md-3 px-1">
                        <label for="father_name" class="form-label">Father Name</label>
                        <input type="text" class="form-control" id="father_name" name="father_name"
                            placeholder="Enter Father Name">
                    </div>
                </div>

                <div class="row">
                    <!-- mother name  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="mother_name" class="form-label">Mother Name</label>
                        <input type="text" class="form-control" id="mother_name" name="mother_name"
                            placeholder="Enter Mother Name">
                    </div>

                    <!-- Date of Birth  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob">
                    </div>

                    <!-- Gender in one line  -->
                    <div class="col-md-4 px-1">
                        <label for="gender" class="form-label ">Gender</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female"
                                value="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="others"
                                value="others">
                            <label class="form-check-label" for="others">Others</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Enrollment Number  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="enroll_no" class="form-label">Enrollment Number</label>
                        <input type="text" class="form-control" id="enroll_no" name="enroll_no"
                            placeholder="Enter Enrollment Number">
                    </div>

                    <!-- College Name  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="college_name" class="form-label">College Name</label>
                        <!-- select  -->
                        <select class="form-select" aria-label="Default select example" id="college_name"
                            name="college_name" required>
                            <option value="" >Select College Name</option>
                            <option selected value="Sunder Deep Engineering College, Ghaziabad">Sunder Deep Engineering
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
                    <div class="mb-3 col-md-4 px-1">
                        <label for="max_mark" class="form-label">Max Mark</label>
                        <input type="number" class="form-control" id="max_mark" name="max_mark"
                            placeholder="Enter Max Mark" required value="30">
                    </div>
                </div>

                <div class="row">
                    <!-- First Subject Name  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="first_sub_name" class="form-label">First Subject Name</label>
                        <input type="text" class="form-control" id="first_sub_name" name="first_sub_name"
                            placeholder="Enter First Subject Name" required value="Software Quality Engineering">
                    </div>

                    <!-- First Subject Code  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="first_sub_code" class="form-label
                            ">First Subject Code</label>
                        <input type="text" class="form-control" id="first_sub_code" name="first_sub_code"
                            placeholder="Enter First Subject Code" required value="KCA035">
                    </div>

                    <!-- First Subject Mark  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="first_sub_mark" class="form-label">First Subject Mark</label>
                        <input type="text" class="form-control" id="first_sub_mark" name="first_sub_mark"
                            placeholder="Enter First Subject Mark" required>
                    </div>
                </div>

                <div class="row">
                    <!-- Second Subject Name  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="second_sub_name" class="form-label
                            ">Second Subject Name</label>
                        <input type="text" class="form-control" id="second_sub_name" name="second_sub_name"
                            placeholder="Enter Second Subject Name" required value="Distributed Database System">
                    </div>

                    <!-- Second Subject Code  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="second_sub_code" class="form-label
                            ">Second Subject Code</label>
                        <input type="text" class="form-control" id="second_sub_code" name="second_sub_code"
                            placeholder="Enter Second Subject Code" required value="KCA045">
                    </div>

                    <!-- Second Subject Mark  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="second_sub_mark" class="form-label">Second Subject Mark</label>
                        <input type="text" class="form-control" id="second_sub_mark" name="second_sub_mark"
                            placeholder="Enter Second Subject Mark" required>
                    </div>
                </div>

                <div class="row">
                    <!-- Third Subject Name  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="third_sub_name" class="form-label
                            ">Third Subject Name</label>
                        <input type="text" class="form-control" id="third_sub_name" name="third_sub_name"
                            placeholder="Enter Third Subject Name" required value="Mobile Computing">
                    </div>

                    <!-- Third Subject Code  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="third_sub_code" class="form-label
                            ">Third Subject Code</label>
                        <input type="text" class="form-control" id="third_sub_code" name="third_sub_code"
                            placeholder="Enter Third Subject Code" required value="KCA051">
                    </div>

                    <!-- Third Subject Mark  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="third_sub_mark" class="form-label
                            ">Third Subject Mark</label>
                        <input type="text" class="form-control" id="third_sub_mark" name="third_sub_mark"
                            placeholder="Enter Third Subject Mark" required>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-2 px-1">
                        <label for="total_sub" class="form-label
                            ">Select Total Subjects</label>
                        <!-- select  -->
                        <select class="form-select" aria-label="Default select example" id="total_sub" name="total_sub">
                            <option value="">Select</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option selected value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>

                </div>
                <div class="d-flex justify-content-center align-items-center flex-column">
                    <button type="submit" class="btn btn-primary w-50 my-2 shadow">Submit</button>
                    <button type="reset" class="btn btn-warning w-50 my-2 shadow">Reset</button>
                    <button type="button" class="btn btn-danger w-50 my-2 shadow"
                        onclick="window.location.href='mca_4th_sem.php'">Discard</button>
                </div>
        </div>
    </div>
</div>

<?php

include 'footer_section.php';

?>