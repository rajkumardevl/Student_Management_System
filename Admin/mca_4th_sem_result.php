<?php

include 'header_section.php';

?>

<div class="row">
    <div class="col-md-3 d-flex justify-content-center align-items-center">
        <h1 class="text-center d-flex align-items-center ms-2 text-primary">
            <lord-icon src="https://cdn.lordicon.com/daeumrty.json" trigger="hover"
                state="hover-jump" style="width: 60px; height: 60px">
            </lord-icon>
            <span>
                MCA 4th Sem
            </span>
        </h1>
    </div>
    <div class="col-md-3  d-flex justify-content-center align-items-center">
        <div class="">
            <a href="add_mca_stu.php" class="btn btn-primary shadow"><i class="bi bi-plus-circle"></i> Add New Student</a>
        </div>
    </div>
    <div class="col-md-3  d-flex justify-content-center align-items-center">
        <div class="text-end me-3">
            <a href="mca_export_excel.php" class="btn btn-success my-2"><i class="bi bi-file-earmark-excel"></i> Export to Excel</a>
        </div>
    </div>
    <div class="col-md-3 d-flex justify-content-center align-items-center pe-2">
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
            <input type="text" class="form-control" id="searchInput" placeholder="Search by name, roll no, etc." aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3 p-2">
        <div class="card shadow border border-dark rounded">
            <div class="card-body d-flex justify-content-between align-items-center">
                <lord-icon src="https://cdn.lordicon.com/daeumrty.json" trigger="hover"
                    state="hover-jump" style="width: 100px; height: 100px">
                </lord-icon>
                <div class="text-center">
                    <h5 class="card-title">Total Students</h5>
                    <h1 class="card-text text-primary display-4">
                        <?php
                        $qry = "SELECT COUNT(*) as total_students FROM mca_4th_sem";
                        $res = mysqli_query($conn, $qry);
                        $row = mysqli_fetch_assoc($res);
                        echo $row['total_students'];
                        ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 p-2">
        <div class="card shadow border border-dark rounded">
            <div class="card-body d-flex justify-content-between align-items-center">
                <lord-icon src="https://cdn.lordicon.com/fowheryq.json" trigger="hover"
                    state="hover-jump" style="width: 100px; height: 100px">
                </lord-icon>
                <div class="text-center">
                    <h5 class="card-title">Pass Students</h5>
                    <h1 class="card-text text-success display-4">
                        <?php
                        $qry = "SELECT COUNT(*) as pass_students FROM mca_4th_sem WHERE result = 'Pass'";
                        $res = mysqli_query($conn, $qry);
                        $row = mysqli_fetch_assoc($res);
                        echo $row['pass_students'];
                        ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 p-2">
        <div class="card shadow border border-dark rounded">
            <div class="card-body d-flex justify-content-between align-items-center">
                <lord-icon src="https://cdn.lordicon.com/jrvgxhep.json" trigger="hover"
                    state="hover-jump" style="width: 100px; height: 100px">
                </lord-icon>
                <div class="text-center">
                    <h5 class="card-title">Fail Students</h5>
                    <h1 class="card-text text-danger display-4">
                        <?php
                        $qry = "SELECT COUNT(*) as fail_students FROM mca_4th_sem WHERE result = 'Fail'";
                        $res = mysqli_query($conn, $qry);
                        $row = mysqli_fetch_assoc($res);
                        echo $row['fail_students'];
                        ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 p-2">
        <div class="card shadow border border-dark rounded">
            <div class="card-body d-flex justify-content-between align-items-center">
                <lord-icon src="https://cdn.lordicon.com/daeumrty.json" trigger="hover"
                    state="hover-jump" style="width: 100px; height: 100px">
                </lord-icon>
                <div class="text-center">

                    <?php
                    // result_analysis.php
                    include('connection.php'); // aapka DB connection file

                    $qry = "SELECT * FROM mca_4th_sem ORDER BY total_obt_mark DESC";
                    $res = mysqli_query($conn, $qry);

                    $pass_count = 0;
                    $fail_count = 0;
                    $absent_count = 0;
                    $total_students = mysqli_num_rows($res);

                    $students = [];
                    while ($row = mysqli_fetch_assoc($res)) {
                        $students[] = $row;

                        if (strtolower($row['result']) === 'pass') {
                            $pass_count++;
                        } elseif (strtolower($row['result']) === 'fail') {
                            $fail_count++;
                        }

                        if (
                            (strtolower($row['first_sub_mark']) == 'ab' || $row['first_sub_mark'] == 0) &&
                            (strtolower($row['second_sub_mark']) == 'ab' || $row['second_sub_mark'] == 0) &&
                            (strtolower($row['third_sub_mark']) == 'ab' || $row['third_sub_mark'] == 0)
                        ) {
                            $absent_count++;
                        }
                    }
                    ?>

                    <!-- Modal Trigger -->
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#resultAnalysisModal">
                        Show Result Analysis
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="resultAnalysisModal" tabindex="-1" aria-labelledby="resultAnalysisLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header bg-dark text-light">
                                    <h5 class="modal-title" id="resultAnalysisLabel">Result Analysis - MCA 4th Sem</h5>
                                    <button type="button" class="btn-close border border-light shadow text-light bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped table-bordered text-center">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>Rank</th>
                                                <th>Student Name</th>
                                                <th>Roll No</th>
                                                <th>Total Marks</th>
                                                <th>Percentage</th>
                                                <th>Result</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $rank = 1;
                                            foreach ($students as $student):
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php
                                                        echo $rank;
                                                        if ($rank === 1) {
                                                            echo ' <i class="bi bi-award-fill text-warning"></i>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><?= $student['name']; ?></td>
                                                    <td><?= $student['roll_no']; ?></td>
                                                    <td><?= $student['total_obt_mark']; ?></td>
                                                    <td><?= $student['percentage']; ?>%</td>
                                                    <td style="color: <?= strtolower($student['result']) === 'fail' ? 'red' : 'black'; ?>">
                                                        <?= $student['result']; ?>
                                                    </td>
                                                </tr>
                                            <?php $rank++;
                                            endforeach; ?>
                                        </tbody>
                                    </table>


                                    <div class="row mt-4">
                                    <!-- Total Students -->
                                    <div class="col-md-3 p-2">
                                        <div class="card shadow h-100 text-center bg-primary text-light shadow-lg rounded border border-light border-2">
                                            <lord-icon
                                                src="https://cdn.lordicon.com/dycatgju.json"
                                                trigger="loop"
                                                colors="primary:#121331,secondary:#08a88a"
                                                style="width:60px;height:60px;margin:auto;">
                                            </lord-icon>
                                            <div class="card-body">
                                                <h5 class="card-title">Total Students</h5>
                                                <p class="card-text fs-4 fw-bold"><?= $total_students; ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pass Students -->
                                    <div class="col-md-3 p-2">
                                        <div class="card shadow h-100 text-center bg-success text-light shadow-lg rounded border border-light border-2">
                                            <lord-icon
                                                src="https://cdn.lordicon.com/lupuorrc.json"
                                                trigger="loop"
                                                colors="primary:#121331,secondary:#30e849"
                                                style="width:60px;height:60px;margin:auto;">
                                            </lord-icon>
                                            <div class="card-body">
                                                <h5 class="card-title">Pass</h5>
                                                <p class="card-text fs-4 fw-bold text-light"><?= $pass_count; ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fail Students -->
                                    <div class="col-md-3 p-2">
                                        <div class="card shadow h-100 text-center bg-danger text-light shadow-lg rounded border border-light border-2">
                                            <lord-icon
                                                src="https://cdn.lordicon.com/ygvjgdmk.json"
                                                trigger="loop"
                                                colors="primary:#121331,secondary:#f24c4c"
                                                style="width:60px;height:60px;margin:auto;">
                                            </lord-icon>
                                            <div class="card-body">
                                                <h5 class="card-title">Fail</h5>
                                                <p class="card-text fs-4 fw-bold text-light"><?= $fail_count; ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- All Absent -->
                                    <div class="col-md-3 p-2">
                                        <div class="card shadow h-100 text-center bg-secondary text-light shadow-lg rounded border border-light border-2">
                                            <lord-icon
                                                src="https://cdn.lordicon.com/jrvgxhep.json"
                                                trigger="loop"
                                                colors="primary:#121331,secondary:#3dc2ff"
                                                style="width:60px;height:60px;margin:auto;">
                                            </lord-icon>
                                            <div class="card-body">
                                                <h5 class="card-title">All Subjects Absent</h5>
                                                <p class="card-text fs-4 fw-bold text-light"><?= $absent_count; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                </div>

                                


                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- table  -->
    <div class="table-responsive m-2 border border-dark rounded" style="height: 56vh;">
        <?php
        // Sabse pehle topper ka total_obt_mark nikal lein
        $topper_qry = "SELECT MAX(total_obt_mark) AS max_marks FROM mca_4th_sem";
        $topper_res = mysqli_query($conn, $topper_qry);
        $topper_row = mysqli_fetch_assoc($topper_res);
        $topper_marks = $topper_row['max_marks'];

        // Ab pura data fetch karke topper identify karenge
        $qry = "SELECT * FROM mca_4th_sem";
        $res = mysqli_query($conn, $qry);
        ?>

        <table class="table table-hover table-striped table-bordered border-dark rounded table-light text-center shadow">
            <thead class="table-dark table_head sticky-top">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Roll No.</th>
                    <th scope="col">Course & Sem</th>
                    <th scope="col">Father's Name</th>
                    <th scope="col">Mother's Name</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Enrollment No</th>
                    <th scope="col">College Name</th>
                    <th scope="col">Max Marks</th>
                    <th scope="col">First Sub Name</th>
                    <th scope="col">First Sub Code</th>
                    <th scope="col">First Sub Mark</th>
                    <th scope="col">Second Sub Name</th>
                    <th scope="col">Second Sub Code</th>
                    <th scope="col">Second Sub Mark</th>
                    <th scope="col">Third Sub Name</th>
                    <th scope="col">Third Sub Code</th>
                    <th scope="col">Third Sub Mark</th>
                    <th scope="col">Total Max Marks</th>
                    <th scope="col">Total Obt. Marks</th>
                    <th scope="col">Percentage</th>
                    <th scope="col">Result</th>
                    <th scope="col">Division</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($res)) { ?>
                    <tr>
                        <td> <?php echo $row['id']; ?> </td>
                        <td>
                            <?php echo $row['name']; ?>
                            <?php if ($row['total_obt_mark'] == $topper_marks): ?>
                                <i class="bi bi-award-fill text-warning ms-1" title="Topper"></i>
                            <?php endif; ?>
                        </td>
                        <td> <?php echo $row['roll_no']; ?> </td>
                        <td> <?php echo $row['course']; ?> </td>
                        <td> <?php echo $row['father_name']; ?> </td>
                        <td> <?php echo $row['mother_name']; ?> </td>
                        <td> <?php echo $row['dob']; ?> </td>
                        <td> <?php echo $row['gender']; ?> </td>
                        <td> <?php echo $row['enroll_no']; ?> </td>
                        <td> <?php echo $row['college_name']; ?> </td>
                        <td> <?php echo $row['max_mark']; ?> </td>
                        <td> <?php echo $row['first_sub_name']; ?> </td>
                        <td> <?php echo $row['first_sub_code']; ?> </td>
                        <td style="color: <?php echo (is_numeric($row['first_sub_mark']) ? 'black' : 'red'); ?>">
                            <?php echo $row['first_sub_mark']; ?>
                        </td>
                        <td> <?php echo $row['second_sub_name']; ?> </td>
                        <td> <?php echo $row['second_sub_code']; ?> </td>
                        <td style="color: <?php echo (is_numeric($row['second_sub_mark']) ? 'black' : 'red'); ?>">
                            <?php echo $row['second_sub_mark']; ?>
                        </td>
                        <td> <?php echo $row['third_sub_name']; ?> </td>
                        <td> <?php echo $row['third_sub_code']; ?> </td>
                        <td style="color: <?php echo (is_numeric($row['third_sub_mark']) ? 'black' : 'red'); ?>">
                            <?php echo $row['third_sub_mark']; ?>
                        </td>
                        <td> <?php echo $row['total_max_mark']; ?> </td>
                        <td> <?php echo $row['total_obt_mark']; ?> </td>
                        <td> <?php echo $row['percentage']; ?> </td>
                        <td style="color: <?php echo (strtolower($row['result']) == 'fail' ? 'red' : 'black'); ?>">
                            <?php echo $row['result']; ?>
                        </td>
                        <td> <?php echo $row['division']; ?> </td>
                        <td> <a href="mca_update_student.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"> <i class="bi bi-pencil-square"></i> Update</a> </td>
                        <td> <a href="delete_student.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"> <i class="bi bi-trash"></i> Delete</a> </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>

<script>
    document.getElementById('searchInput').addEventListener('keyup', function() {
        let filter = this.value.toUpperCase();
        let rows = document.querySelectorAll("table tbody tr");

        rows.forEach(row => {
            let text = row.textContent.toUpperCase();
            row.style.display = text.includes(filter) ? "" : "none";
        });
    });

    // Print PDF Script

    function exportToPDF() {
        const element = document.getElementById("faculty-table");
        html2pdf().from(element).set({
            margin: 0.5,
            filename: 'faculty_list.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'in',
                format: 'a4',
                orientation: 'landscape'
            }
        }).save();
    }
</script>


<?php

include 'footer_section.php';

?>