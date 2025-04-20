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
    <div class="table-responsive m-2 border border-dark rounded" style="height: 77vh;">
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