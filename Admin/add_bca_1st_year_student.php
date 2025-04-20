<?php

include 'header_section.php';

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
        <div class="row mx-5">
            <form action="insert.php" method="POST" id="studentForm" enctype="multipart/form-data">
                <div class="row">
                    <!-- Student Name  -->
                    <div class=" mb-3 col-md-4 px-1">
                        <label for="name" class="form-label">Student Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Student Name" required>
                    </div>

                    <!-- Roll Number  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="roll_no" class="form-label">Roll Number</label>
                        <input type="number" class="form-control" id="roll_no" name="roll_no" placeholder="Enter Roll Number" value="240302106001" required>
                    </div>

                    <!-- Course  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="course" class="form-label">Course</label>
                        <!-- select  -->
                        <select class="form-select" aria-label="Default select example" name="course" id="course" required>
                            <option>Open this select menu, you can click to select</option>
                            <option value="BCA 1st Sem">BCA 1st Sem</option>
                            <option selected value="BCA 2nd Sem">BCA 2nd Sem</option>
                            <option value="BCA 3rd Sem">BCA 3rd Sem</option>
                            <option value="BCA 4th Sem">BCA 4th Sem</option>
                            <option value="BCA 5th Sem">BCA 5th Sem</option>
                            <option value="BCA 6th Sem">BCA 6th Sem</option>
                            <option value="MCA 1st Sem">MCA 1st Sem</option>
                            <option value="MCA 2nd Sem">MCA 2nd Sem</option>
                            <option value="MCA 3rd Sem">MCA 3rd Sem</option>
                            <option value="MCA 4th Sem">MCA 4th Sem</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <!-- father name  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="father_name" class="form-label">Father Name</label>
                        <input type="text" class="form-control" id="father_name" name="father_name"
                            placeholder="Enter Father Name" required>
                    </div>

                    <!-- mother name  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="mother_name" class="form-label">Mother Name</label>
                        <input type="text" class="form-control" id="mother_name" name="mother_name"
                            placeholder="Enter Mother Name" required>
                    </div>

                    <!-- Date of Birth  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date of Birth"
                            required>
                    </div>
                </div>

                <div class="row">
                    <!-- Gender in one line  -->
                    <div class="col-md-4 px-1">
                        <label for="gender" class="form-label ">Gender</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
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

                    <!-- College Name  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="college_name" class="form-label">College Name</label>
                        <!-- select  -->
                        <select class="form-select" aria-label="Default select example" id="college_name"
                            name="college_name" required>
                            <option value="">Select College Name</option>
                            <option value="Sunder Deep Engineering College, Ghaziabad">Sunder Deep Engineering
                                College, Ghaziabad</option>
                            <option selected value="Sunder Deep College of Management & Technology, Ghaziabad">Sunder Deep College of Management & Technology, Ghaziabad</option>
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
                            placeholder="Enter Max Mark" value="30" required>
                    </div>
                </div>

                <div class="row">
                    <!-- First Subject Name  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="first_sub_name" class="form-label">First Subject Name</label>
                        <input type="text" class="form-control" id="first_sub_name" name="first_sub_name"
                            placeholder="Enter First Subject Name" value="Mathematics-II" required>
                    </div>

                    <!-- First Subject Code  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="first_sub_code" class="form-label
                            ">First Subject Code</label>
                        <input type="text" class="form-control" id="first_sub_code" name="first_sub_code"
                            placeholder="Enter First Subject Code" value="BCA-201" required>
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
                            placeholder="Enter Second Subject Name" value="C-Programming" required>
                    </div>

                    <!-- Second Subject Code  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="second_sub_code" class="form-label
                            ">Second Subject Code</label>
                        <input type="text" class="form-control" id="second_sub_code" name="second_sub_code"
                            placeholder="Enter Second Subject Code" value="BCA-202" required>
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
                            placeholder="Enter Third Subject Name" value="Organization Behaviour" required>
                    </div>

                    <!-- Third Subject Code  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="third_sub_code" class="form-label
                            ">Third Subject Code</label>
                        <input type="text" class="form-control" id="third_sub_code" name="third_sub_code"
                            placeholder="Enter Third Subject Code" value="BCA-203" required>
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
                    <!-- Fourth Subject Name  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="fourth_sub_name" class="form-label
                            ">Fourth Subject Name</label>
                        <input type="text" class="form-control" id="fourth_sub_name" name="fourth_sub_name"
                            placeholder="Enter Fourth Subject Name" value="Digital Electronics and Computer Organisation" required>
                    </div>

                    <!-- Fourth Subject Code  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="fourth_sub_code" class="form-label
                            ">Fourth Subject Code</label>
                        <input type="text" class="form-control" id="fourth_sub_code" name="fourth_sub_code"
                            placeholder="Enter Fourth Subject Code" value="BCA-204" required>
                    </div>

                    <!-- Fourth Subject Mark  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="fourth_sub_mark" class="form-label
                            ">Fourth Subject Mark</label>
                        <input type="text" class="form-control" id="fourth_sub_mark" name="fourth_sub_mark"
                            placeholder="Enter Fourth Subject Mark" required>
                    </div>
                </div>

                <div class="row">
                    <!-- Fifth Subject Name  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="fifth_sub_name" class="form-label
                            ">Fifth Subject Name</label>
                        <input type="text" class="form-control" id="fifth_sub_name" name="fifth_sub_name"
                            placeholder="Enter Fifth Subject Name" value="Financial Accounting and Management" required>
                    </div>

                    <!-- Fifth Subject Code  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="fifth_sub_code" class="form-label
                            ">Fifth Subject Code</label>
                        <input type="text" class="form-control" id="fifth_sub_code" name="fifth_sub_code"
                            placeholder="Enter Fifth Subject Code" value="BCA-205" required>
                    </div>

                    <!-- Fifth Subject Mark  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="fifth_sub_mark" class="form-label
                            ">Fifth Subject Mark</label>
                        <input type="text" class="form-control" id="fifth_sub_mark" name="fifth_sub_mark"
                            placeholder="Enter Fifth Subject Mark" required>
                    </div>
                </div>

                <div class="row">
                    <!-- select  -->
                    <div class="mb-3 col-md-4 px-1">
                        <label for="total_sub" class="form-label
                            ">Select Total Subjects</label>
                        <!-- select  -->
                        <select class="form-select" aria-label="Default select example" id="total_sub" name="total_sub">
                            <option value="">Select</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option selected value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center flex-column">
                    <button type="submit" class="btn btn-primary my-2 shadow w-50">Submit</button>
                    <button type="reset" class="btn btn-warning my-2 shadow w-50">Reset</button>
                    <button type="button" class="btn btn-danger my-2 shadow w-50"
                        onclick="window.location.href='bca_1st_sem.php'">Discard</button>
                </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#studentForm').on('submit', function(e) {
            e.preventDefault(); // Page reload rok dega

            $.ajax({
                url: 'insert_student.php',
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    if (response.trim() === 'exists') {
                        $('#alertMessage').text('⚠️ Roll Number already exists!');
                    } else if (response.trim() === 'inserted') {
                        $('#alertMessage').css('color', 'green').text('✅ Student added successfully!');
                        $('#studentForm')[0].reset(); // Form clear ho jayega
                    } else {
                        $('#alertMessage').text('❌ Something went wrong!');
                    }
                }
            });
        });
    });
</script>

<?php

include 'footer_section.php';

?>