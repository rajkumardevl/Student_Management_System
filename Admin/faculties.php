<?php include 'header_section.php'; ?>

<div class="row">
    <div class="col-md-6">
        <h1 class="text-center d-flex align-items-center mt-3 ms-2 text-decoration-underline text-primary">
            <lord-icon src="https://cdn.lordicon.com/hroklero.json" trigger="hover"
                state="hover-looking-around" style="width: 60px; height: 60px">
            </lord-icon>
            <span> Faculties </span>
        </h1>
    </div>
    <div class="col-md-6 d-flex justify-content-center align-items-center px-2">
        <div class="input-group border border-dark rounded">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
            <input type="text" class="form-control" id="searchInput" placeholder="Search by name, roll no, etc." aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>
</div>
<div class="row">
    <div class="text-end me-3">
        <!-- Add New Faculty Button -->
        <div class="text-end me-3">
            <button class="btn btn-primary shadow" data-bs-toggle="modal" data-bs-target="#addFacultyModal">
                <i class="bi bi-plus-circle"></i> Add New Faculty
            </button>
            <!-- Add Faculty Modal -->
            <div class="modal fade" id="addFacultyModal" tabindex="-1" aria-labelledby="addFacultyLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <!-- Button to open modal -->
                        <div class="text-end me-3">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form id="addFacultyForm" enctype="multipart/form-data">
                            <div class="modal-body row g-3">
                                <!-- Form Fields (same as before) -->
                                <div class="col-md-6">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Mobile</label>
                                    <input type="text" name="mobile" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Gender</label>
                                    <select name="gender" class="form-select" required>
                                        <option value="">--Select--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label>Address</label>
                                    <textarea name="address" class="form-control" required></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label>Department</label>
                                    <input type="text" name="department" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Designation</label>
                                    <input type="text" name="designation" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Highest Qualification</label>
                                    <input type="text" name="h_q" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Profile Picture</label>
                                    <input type="file" name="profile_pic" class="form-control" accept="image/*" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Print Button -->
<!-- <div class="text-end me-3">
    <button class="btn btn-success my-3" onclick="printFacultyTable()">Print Faculty List</button>
</div> -->
<!-- Export to Excel Button -->
<!-- <div class="text-end me-3">
    <a href="export_excel.php" class="btn btn-primary my-3">Export to Excel</a>
</div> -->


<div class="row mx-3 rounded">
    <div class="table-responsive m-2 border border-dark rounded" id="faculty-table" style="height: 70vh;">
        <table class=" table table-light table-bordered table-striped table-hover border-dark rounded">
            <thead class=" table_head text-center shadow sticky-top table-dark">
                <th>Id</th>
                <th>Profile Image</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>City</th>
                <th>Gender</th>
                <th>Desiganation</th>
                <th>Highest Qualifications</th>
                <th>View</th>
                <th>Delete</th>
            </thead>
            <?php
            $qry = "SELECT * FROM faculties";
            $res = mysqli_query($conn, $qry);
            while ($rows = mysqli_fetch_array($res)) {
            ?>
                <tr class="fetch_data">
                    <td class=" text-dark"><?php echo $rows['id']; ?></td>
                    <td>
                        <?php
                        $profile_pic_path = 'uploads/' . $rows['profile_pic'];
                        $profile_pic = (!empty($rows['profile_pic']) && file_exists($profile_pic_path))
                            ? $profile_pic_path
                            : 'uploads/default.png';
                        ?>
                        <img style="height: 120px; width: 120px; border-radius: 50%;" class="img-responsive pro_img shadow border  border-dark" src="<?php echo $profile_pic; ?>" alt="Profile Image" />

                    </td>
                    <td class=" text-primary"><?php echo $rows['name']; ?></td>
                    <td class=" text-primary"><a href="tel:<?php echo $rows['mobile']; ?>"><?php echo $rows['mobile']; ?></a></td>
                    <td class=" text-primary"><a href="mailto:<?php echo $rows['email']; ?>"><?php echo $rows['email']; ?></a></td>
                    <td class=" text-primary"><?php echo $rows['address']; ?></td>
                    <td class=" text-primary"><?php echo $rows['gender']; ?></td>
                    <td class=" text-primary"><?php echo $rows['desiganation']; ?></td>
                    <td class=" text-primary"><?php echo $rows['h_q']; ?></td>
                    <td class=" text-primary">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_<?php echo $rows['id']; ?>">
                            <i class="bi bi-eye-fill"></i>
                            View
                        </button>

                        <!-- Modal with unique ID -->
                        <div class="modal fade" id="modal_<?php echo $rows['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title text-center" id="exampleModalLabel">Profile</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card text-center shadow border border-light border-3 list-group-item list-group-item-primary">
                                            <div class="card-header list-group-item list-group-item-danger">
                                            </div>
                                            <div class="card-body ">
                                                <?php
                                                $profile_pic_path = 'uploads/' . $rows['profile_pic'];
                                                $profile_pic = (!empty($rows['profile_pic']) && file_exists($profile_pic_path))
                                                    ? $profile_pic_path
                                                    : 'uploads/default.png';
                                                ?>
                                                <img style="height: 200px; width: 200px; border-radius: 50%;" class="img-responsive pro_img shadow" src="<?php echo $profile_pic; ?>" alt="Profile Image" />

                                                <div class="card-body">
                                                    <h1 class="card-title"> <?php echo $rows['name']; ?> </h1>
                                                    <a href="tel:<?php echo $rows['mobile']; ?>">
                                                        <h5 class="card-text"> <?php echo $rows['mobile']; ?> </h5>
                                                    </a>
                                                    <a href="mailto:<?php echo $rows['email']; ?>">
                                                        <p class="card-text"> <?php echo $rows['email']; ?> </p>
                                                    </a>
                                                    <h3 class="card-text"> <?php echo $rows['desiganation']; ?> </h3>
                                                    <h5 class="card-text"> <?php echo $rows['h_q']; ?> </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            <i class="bi bi-x-circle"></i>
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Modal -->
                    </td>
                    <td>
                        <!-- delete  -->
                        <button class="btn btn-danger" onclick="deleteFaculty(<?php echo $rows['id']; ?>)">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>

<!-- Ajax Script for Adding Faculty -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#addFacultyForm').on('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: 'add_faculty_ajax.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.trim() === "success") {
                    alert("Faculty added successfully!");
                    $('#addFacultyModal').modal('hide');
                    $('#addFacultyForm')[0].reset();
                    location.reload(); // Or dynamically update table
                } else {
                    alert("Error: " + response);
                }
            }
        });
    });

    // Delete Faculty Script

    function deleteFaculty(id) {
        if (confirm("Are you sure you want to delete this faculty?")) {
            $.ajax({
                url: 'delete_faculty.php',
                type: 'POST',
                data: {
                    id: id
                },
                success: function(response) {
                    if (response.trim() === "success") {
                        alert("Faculty deleted successfully.");
                        location.reload();
                    } else {
                        alert("Error deleting faculty.");
                        console.error(response);
                    }
                }
            });
        }
    }


    // Search script 

    document.getElementById('searchInput').addEventListener('keyup', function() {
        let filter = this.value.toUpperCase();
        let rows = document.querySelectorAll("table tbody tr");

        rows.forEach(row => {
            let text = row.textContent.toUpperCase();
            row.style.display = text.includes(filter) ? "" : "none";
        });
    });
</script>


<?php include 'footer_section.php'; ?>

<!-- JavaScript for Print Functionality -->
<script>
    function printFacultyTable() {
        var printContent = document.getElementById("faculty-table").innerHTML;
        var originalContent = document.body.innerHTML;

        document.body.innerHTML = printContent;
        window.print();
        document.body.innerHTML = originalContent;
        location.reload(); // Page reload to restore UI
    }
</script>

<!-- CSS for Print Media -->
<style>
    @media print {
        body * {
            visibility: hidden;
        }

        #faculty-table,
        #faculty-table * {
            visibility: visible;
        }

        #faculty-table {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
        }
    }

    @media print {
        body * {
            visibility: hidden;
        }

        #faculty-table,
        #faculty-table * {
            visibility: visible;
        }

        #faculty-table {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
        }

        th:nth-last-child(1),
        /* Last column (View) ke liye */
        td:nth-last-child(1) {
            display: none !important;
        }
    }
</style>