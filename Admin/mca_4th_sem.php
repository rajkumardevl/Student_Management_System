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
    <!-- table  -->
    <div class="table-responsive m-2 border border-dark rounded" style="height: 77vh;">
        <?php
        
        $topper_qry = "SELECT MAX(total_obt_mark) AS max_marks FROM mca_4th_sem";
        $topper_res = mysqli_query($conn, $topper_qry);
        $topper_row = mysqli_fetch_assoc($topper_res);
        $topper_marks = $topper_row['max_marks'];

        $qry = "SELECT * FROM mca_4th_sem";
        $res = mysqli_query($conn, $qry);
        ?>

        <table class="table table-hover table-striped table-bordered border-dark rounded table-light text-center shadow">
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
                    <th scope="col">Enrollment No</th>
                    <th scope="col">College Name</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($res)) { ?>
                    <tr>
                    <td class="sr_no"></td>
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