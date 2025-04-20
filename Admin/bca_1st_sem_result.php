<?php
include 'header_section.php';
include 'connection.php';
?>

<div class="row">
    <div class="col-md-3 d-flex justify-content-center align-items-center">
        <h1 class="text-center d-flex align-items-center ms-2  text-primary">
            <lord-icon src="https://cdn.lordicon.com/daeumrty.json" trigger="hover"
                state="hover-jump" style="width: 60px; height: 60px">
            </lord-icon>
            <span>
                BCA 1st Sem
            </span>
        </h1>
    </div>
    <div class="col-md-3 d-flex justify-content-center align-items-center">
        <div class="">
            <a href="add_bca_1st_year_student.php" class="btn btn-primary shadow"><i class="bi bi-plus-circle"></i> Add New Student</a>
        </div>
    </div>
    <div class="col-md-3 d-flex justify-content-center align-items-center">
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
            <input type="text" class="form-control" id="searchInput" placeholder="Search by name, roll no, etc." aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>
    <div class="col-md-3 d-flex justify-content-center align-items-center">
        <div class="">
            <a href="export_excel.php" class="btn btn-success shadow"><i class="bi bi-file-earmark-spreadsheet"></i> Export to Excel</a>
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
                        $qry = "SELECT COUNT(*) as total_students FROM first_ct";
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
                <lord-icon src="https://cdn.lordicon.com/jrvgxhep.json" trigger="hover"
                    state="hover-jump" style="width: 100px; height: 100px">
                </lord-icon>
                <div class="text-center">
                    <h5 class="card-title">Fail Students</h5>
                    <h1 class="card-text text-danger display-4">
                        <?php
                        $qry = "SELECT COUNT(*) as fail_students FROM first_ct WHERE result = 'Fail'";
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
                <lord-icon
                    src="https://cdn.lordicon.com/jrvgxhep.json"
                    trigger="hover"
                    state="hover-up"
                    style="width:100px;height:100px">
                </lord-icon>
                <div class="text-center">
                    <h5 class="card-title">Pass Students</h5>
                    <h1 class="card-text text-success display-4">
                        <?php
                        $qry = "SELECT COUNT(*) as pass_students FROM first_ct WHERE result = 'Pass'";
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
                <!-- lord icon  -->
                <lord-icon src="https://cdn.lordicon.com/fowheryq.json" trigger="hover"
                    state="hover-jump" style="width: 100px; height: 100px">
                </lord-icon>
                <div class="text-center">

                    <!-- Modal Trigger -->
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#resultAnalysisModal">
                        Show Result Analysis
                    </button>

                    <!-- Bootstrap Modal -->
                    <div class="modal fade" id="resultAnalysisModal" tabindex="-1" aria-labelledby="resultAnalysisModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="resultAnalysisModalLabel">📊 BCA 1st Year Result Analysis</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style=" height: 70vh; overflow-y: scroll;">

                                    <!-- Table -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover text-center shadow">
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
                                                include 'connection.php';
                                                $rank = 1;
                                                $result = mysqli_query($conn, "SELECT name, roll_no, total_obt_mark, ROUND(CAST(percentage AS DECIMAL(6,2)), 2) AS percent, result 
                                              FROM first_ct 
                                              ORDER BY CAST(percentage AS DECIMAL(6,2)) DESC");
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<tr>
                        <td>{$rank}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['roll_no']}</td>
                        <td>{$row['total_obt_mark']}</td>
                        <td>{$row['percent']}%</td>
                        <td>{$row['result']}</td>
                      </tr>";
                                                    $rank++;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Charts -->
                                    <div class="row mt-4">
                                        <div class="col-md-6">
                                            <canvas id="barChart"></canvas>
                                        </div>
                                        <div class="col-md-6">
                                            <canvas id="pieChart"></canvas>
                                        </div>
                                    </div>
                                </div>



                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chart.js CDN -->
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                    <!-- PHP: Fetch Stats -->
                    <?php
                    $total = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM first_ct"));
                    $pass = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM first_ct WHERE result = 'Pass'"));
                    $fail = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM first_ct WHERE result = 'Fail'"));
                    $absent = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM first_ct WHERE 
    (first_sub_mark = 'AB' AND second_sub_mark = 'AB' AND third_sub_mark = 'AB' AND fourth_sub_mark = 'AB' AND fifth_sub_mark = 'AB')"));
                    ?>

                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
                        const barCtx = document.getElementById('barChart').getContext('2d');
                        const pieCtx = document.getElementById('pieChart').getContext('2d');

                        const barChart = new Chart(barCtx, {
                            type: 'bar',
                            data: {
                                labels: ['Pass', 'Fail', 'All Subjects Absent'],
                                datasets: [{
                                    label: 'Students Count',
                                    data: [<?= $pass ?>, <?= $fail ?>, <?= $absent ?>],
                                    backgroundColor: ['#28a745', '#dc3545', '#6c757d']
                                }]
                            },
                            options: {
                                responsive: true,
                                plugins: {
                                    legend: {
                                        display: false
                                    },
                                    title: {
                                        display: true,
                                        text: 'Result Summary - Bar Chart'
                                    }
                                }
                            }
                        });

                        const pieChart = new Chart(pieCtx, {
                            type: 'pie',
                            data: {
                                labels: ['Pass', 'Fail', 'All Subjects Absent'],
                                datasets: [{
                                    data: [<?= $pass ?>, <?= $fail ?>, <?= $absent ?>],
                                    backgroundColor: ['#28a745', '#dc3545', '#6c757d']
                                }]
                            },
                            options: {
                                responsive: true,
                                plugins: {
                                    title: {
                                        display: true,
                                        text: 'Result Distribution - Pie Chart'
                                    }
                                }
                            }
                        });
                    </script>



                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="table-responsive m-2 border border-dark rounded" style="height: 56vh;">
        <table class="table table-hover table-striped table-bordered border-dark rounded table-light text-center shadow" id="studentTable">
            <thead class="table-dark table_head sticky-top">
                <tr>
                    <th scope="col">Sr. No.</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Roll No.</th>
                    <th scope="col">Course & Sem</th>
                    <th scope="col">Father's Name</th>
                    <th scope="col">Mother's Name</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Gender</th>
                    <th scope="col">College Name</th>
                    <th scope="col">Max Marks</th>
                    <th scope="col">First Subject Name</th>
                    <th scope="col">First Subject Code</th>
                    <th scope="col">First Subject Marks</th>
                    <th scope="col">Second Subject Name</th>
                    <th scope="col">Second Subject Code</th>
                    <th scope="col">Second Subject Marks</th>
                    <th scope="col">Third Subject Name</th>
                    <th scope="col">Third Subject Code</th>
                    <th scope="col">Third Subject Marks</th>
                    <th scope="col">Fourth Subject Name</th>
                    <th scope="col">Fourth Subject Code</th>
                    <th scope="col">Fourth Subject Marks</th>
                    <th scope="col">Fifth Subject Name</th>
                    <th scope="col">Fifth Subject Code</th>
                    <th scope="col">Fifth Subject Marks</th>
                    <th scope="col">Totale Max Marks</th>
                    <th scope="col">Total Obt. Marks</th>
                    <th scope="col">Total Subject</th>
                    <th scope="col">Percentage</th>
                    <th scope="col">Result</th>
                    <th scope="col">Division</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $qry = "SELECT * FROM first_ct";
                $res = mysqli_query($conn, $qry);
                while ($row = mysqli_fetch_array($res)) {
                ?>
                    <tr>
                        <!-- Sr. No.  -->
                        <td class="sr_no"></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['roll_no']; ?></td>
                        <td><?php echo $row['course']; ?></td>
                        <td><?php echo $row['father_name']; ?></td>
                        <td><?php echo $row['mother_name']; ?></td>
                        <td><?php echo $row['dob']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['college_name']; ?></td>
                        <td><?php echo $row['max_mark']; ?></td>
                        <td><?php echo $row['first_sub_name']; ?></td>
                        <td><?php echo $row['first_sub_code']; ?></td>
                        <td><?php echo $row['first_sub_mark']; ?></td>
                        <td><?php echo $row['second_sub_name']; ?></td>
                        <td><?php echo $row['second_sub_code']; ?></td>
                        <td><?php echo $row['second_sub_mark']; ?></td>
                        <td><?php echo $row['third_sub_name']; ?></td>
                        <td><?php echo $row['third_sub_code']; ?></td>
                        <td><?php echo $row['third_sub_mark']; ?></td>
                        <td><?php echo $row['fourth_sub_name']; ?></td>
                        <td><?php echo $row['fourth_sub_code']; ?></td>
                        <td><?php echo $row['fourth_sub_mark']; ?></td>
                        <td><?php echo $row['fifth_sub_name']; ?></td>
                        <td><?php echo $row['fifth_sub_code']; ?></td>
                        <td><?php echo $row['fifth_sub_mark']; ?></td>
                        <td><?php echo $row['total_max_mark']; ?></td>
                        <td><?php echo $row['total_obt_mark']; ?></td>
                        <td><?php echo $row['total_sub']; ?></td>
                        <td><?php echo $row['percentage']; ?></td>
                        <td><?php echo $row['result']; ?></td>
                        <td><?php echo $row['division']; ?></td>
                        <td> <a href="update_student.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"> <i class="bi bi-pencil-square"></i> Update</a> </td>
                        <td> <a href="delete_bca_1st_year_students.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"> <i class="bi bi-trash"></i> Delete</a> </td>
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

    // Serial Number 

    function updateSerialNumbers() {
        let rows = document.querySelectorAll("#studentTable tbody tr");
        rows.forEach((row, index) => {
            row.querySelector(".sr_no").innerText = index + 1;
        });
    }

    // Delete button click event
    document.addEventListener("click", function(e) {
        if (e.target && e.target.classList.contains("delete-btn")) {
            let row = e.target.closest("tr");
            row.remove(); // Remove the row
            updateSerialNumbers(); // Recalculate serial numbers
        }
    });

    window.onload = updateSerialNumbers;
</script>

<?php include 'footer_section.php'; ?>