<?php

include 'connection.php';


if (!isset($_GET['id'])) {
    header("Location: student_signin_form.html");
    exit();
}

$id = $_GET['id'];

?>

<!doctype html>
<html lang="en">

<head>
    <title>Students Result</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <link rel="icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSBut1tctK5lFw5VFtMp8CzCyptec9N3iK_Q&s">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />

    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSBut1tctK5lFw5VFtMp8CzCyptec9N3iK_Q&s">

    <style>
        body {
            /* background image and opacity 0.5;  */
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: center;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

        }

        .top_logo img {
            width: auto;
            height: 20vh;
            display: block;
            margin: auto;
            padding: 10px;
        }
    </style>
</head>

<body class="bg-light" oncontextmenu="return false;">
    <div class="container-fluid">
        <div class="row sticky-top">
            <div class="col-12 bg-primary text-white text-center">
                <h1>SDGI Global University, Ghaziabad</h1>
            </div>
            <div class="col-12 bg-dark text-white text-center">
                <h3>Statement of Marks - Examination 2025</h3>
            </div>
        </div>
        <div class="top_logo my-2">
            <img class="rounded border border-dark" src="https://www.sgu.edu.in/assets/img/logo/5.png"
                alt="Image not found" />
        </div>
        <?php

        $qry = "SELECT * FROM mca_4th_sem WHERE id = '$id'";
        $res = mysqli_query($conn, $qry);

        while ($row = mysqli_fetch_array($res)) {



        ?>
            <div class="container">
                <div class="row">
                    <div class="course text-center d-flex justify-content-between align-items-center my-2">
                        <div class="">
                            <!-- back  -->
                            <a href="mca_session_exp.php" class="btn btn-warning shadow"><i class="bi bi-arrow-left"></i> Back</a>
                        </div>
                        <h2>Course: <?php echo $row['course']; ?></h2>
                        <button onclick="window.print()" class="btn btn-success my-3 shadow"><i class="bi bi-printer"></i> Print Page</button>
                    </div>
                    <h4 class="text-center">Branch: Computer Application</h4>
                    <div class="table-responsive px-2">
                        <table class="table table-warning table-striped table-hover table-bordered text-center w-100 shadow ">
                            <thead>
                                <tr>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Roll No.</th>
                                    <th scope="col">Father's Name</th>
                                    <th scope="col">Mother's Name</th>
                                    <th scope="col">Date of Birth</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Enrollment No</th>
                                    <th scope="col">College Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <?php echo $row['name']; ?></td>
                                    <td><?php echo $row['roll_no']; ?></td>
                                    <td><?php echo $row['father_name']; ?></td>
                                    <td><?php echo $row['mother_name']; ?></td>
                                    <td><?php echo $row['dob']; ?></td>
                                    <td><?php echo $row['gender']; ?></td>
                                    <td><?php echo $row['enroll_no']; ?></td>
                                    <td><?php echo $row['college_name']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="col-12 bg-primary text-white text-center rounded shadow">
                        <h1>CT 1 Result</h1>
                    </div>
                    <div class="row">
                        <div class="table-responsive w-100 p-2 my-2">
                            <table
                                class="marks_table table table-fixed table-striped table-hover table-primary table-bordered text-center w-100 m-0 shadow">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Sr. No.</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Subject Code</th>
                                        <th scope="col">Max Mark</th>
                                        <th scope="col">Obtained Mark</th>
                                        <th scope="col">Grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="text-start"><?php echo $row['first_sub_name']; ?></td>
                                        <td><?php echo $row['first_sub_code']; ?></td>
                                        <td><?php echo $row['max_mark']; ?></td>
                                        <td><?php echo $row['first_sub_mark']; ?></td>
                                        <td>
                                            <?php
                                            if ($row['first_sub_mark'] == 25) {
                                                echo "A++";
                                            } elseif ($row['first_sub_mark'] >= 23) {
                                                echo "A+";
                                            } elseif ($row['first_sub_mark'] >= 20) {
                                                echo "A";
                                            } elseif ($row['first_sub_mark'] >= 10) {
                                                echo "B";
                                            } else {
                                                echo "C";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="text-start"><?php echo $row['second_sub_name']; ?></td>
                                        <td><?php echo $row['second_sub_code']; ?></td>
                                        <td><?php echo $row['max_mark']; ?></td>
                                        <td><?php echo $row['second_sub_mark']; ?></td>
                                        <td>
                                            <?php
                                            if ($row['second_sub_mark'] == 25) {
                                                echo "A++";
                                            } elseif ($row['second_sub_mark'] >= 23) {
                                                echo "A+";
                                            } elseif ($row['second_sub_mark'] >= 20) {
                                                echo "A";
                                            } elseif ($row['second_sub_mark'] >= 10) {
                                                echo "B";
                                            } else {
                                                echo "C";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="text-start"><?php echo $row['third_sub_name']; ?></td>
                                        <td><?php echo $row['third_sub_code']; ?></td>
                                        <td><?php echo $row['max_mark']; ?></td>
                                        <td><?php echo $row['third_sub_mark']; ?></td>
                                        <td>
                                            <?php
                                            if ($row['third_sub_mark'] == 25) {
                                                echo "A++";
                                            } elseif ($row['third_sub_mark'] >= 23) {
                                                echo "A+";
                                            } elseif ($row['third_sub_mark'] >= 20) {
                                                echo "A";
                                            } elseif ($row['third_sub_mark'] >= 10) {
                                                echo "B";
                                            } else {
                                                echo "C";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Total</th>
                                        <td></td>
                                        <td></td>
                                        <td><?php echo $row['total_max_mark']; ?></td>
                                        <td><?php echo $row['total_obt_mark']; ?></td>
                                        <td>
                                            <?php
                                            if ($row['total_obt_mark'] == 25) {
                                                echo "A++";
                                            } elseif ($row['total_obt_mark'] >= 23) {
                                                echo "A+";
                                            } elseif ($row['total_obt_mark'] >= 20) {
                                                echo "A";
                                            } elseif ($row['total_obt_mark'] >= 10) {
                                                echo "B";
                                            } else {
                                                echo "C";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-danger table-striped table-hover table-bordered text-center w-100 shadow">
                                <thead>
                                    <tr>
                                        <th scope="col">Total Subjects</th>
                                        <th scope="col">Total Marks</th>
                                        <th scope="col">Percentage</th>
                                        <th scope="col">Result</th>
                                        <th scope="col">Division</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?php
                                            $total_sub = $row['total_sub'];
                                            echo $total_sub;
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $subjects = ['first_sub_mark', 'second_sub_mark', 'third_sub_mark']; // Yahan jitne subject chahiye wo likh sakte hain
                                            $totalMarks = 0;

                                            foreach ($subjects as $sub) {
                                                if (isset($row[$sub]) && is_numeric($row[$sub])) {
                                                    $totalMarks += $row[$sub];
                                                }
                                            }

                                            echo $totalMarks;
                                            ?>

                                        </td>
                                        <td>
                                            <?php
                                            $totalMarksObtained = 0;
                                            $totalMaxMarks = 0;

                                            // Subject mark variables safe tarikay se assign karo
                                            $subjects = ['first_sub_mark', 'second_sub_mark', 'third_sub_mark'];

                                            foreach ($subjects as $sub) {
                                                if (isset($row[$sub]) && is_numeric($row[$sub])) {
                                                    $totalMarksObtained += $row[$sub];
                                                    $totalMaxMarks += 30; // Har subject ka full mark 100 maana hai
                                                }
                                            }

                                            if ($totalMaxMarks > 0) {
                                                $percentage = ($totalMarksObtained / $totalMaxMarks) * 100;
                                                echo number_format($percentage, 2) . "%"; // 2 decimal places ke saath
                                            } else {
                                                echo "0%"; // ya "NA" agar sab subjects me AB ho
                                            }
                                            ?>

                                        </td>
                                        <td>
                                            <?php
                                            if ($totalMaxMarks > 0) {
                                                if ($percentage >= 33) {
                                                    echo "Pass";
                                                } else {
                                                    echo "Fail";
                                                }
                                            } else {
                                                echo "NA"; // Not Applicable, agar sabhi subject me AB ho
                                            }
                                            ?>

                                        </td>
                                        <td>
                                            <?php
                                            if (isset($percentage)) {
                                                if ($percentage >= 60) {
                                                    echo "First";
                                                } elseif ($percentage >= 50) {
                                                    echo "Second";
                                                } elseif ($percentage >= 33) {
                                                    echo "Third";
                                                } else {
                                                    echo "Fail";
                                                }
                                            } else {
                                                echo "NA"; // Division not applicable if percentage is not calculated
                                            }
                                            ?>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="text-dark fw-bold my-2 rounded mt-5">
                        <p class="text-center">
                            Note: This is Computer generated marksheet. This does not require signature. In case of any discripency between the entries in the Marksheet issued & in the university record then university record will be final.
                        </p>
                        <h5 class="text-center fw-bold">This is to certify that the above mentioned student has appeared in the examination held in 2025 and has been declared successful.</h5>
                        <span class="text-primary">Date and Time:</span>
                        <div id="datetime"></div>
                        </h5>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <script>
        // Date and Time 
        function updateDateTime() {
            let now = new Date();

            // Format Date (DD-MM-YYYY)
            let day = now.getDate().toString().padStart(2, '0');
            let month = (now.getMonth() + 1).toString().padStart(2, '0'); // Month is zero-based
            let year = now.getFullYear();
            let dateString = `${day}-${month}-${year}`;

            // Format Time (HH:MM:SS)
            let hours = now.getHours().toString().padStart(2, '0');
            let minutes = now.getMinutes().toString().padStart(2, '0');
            let seconds = now.getSeconds().toString().padStart(2, '0');
            let timeString = `${hours}:${minutes}:${seconds}`;

            // Set in HTML
            document.getElementById('datetime').innerText = `${dateString} | ${timeString}`;
        }

        setInterval(updateDateTime, 1000); // Update every second
        updateDateTime(); // Initial call to set time immediately
    </script>
</body>

</html>