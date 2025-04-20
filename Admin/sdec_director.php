<?php

include 'header_section.php';

?>

<?php

$qry = "SELECT * FROM faculties WHERE desiganation = 'Director of SDEC'";
$res = mysqli_query($conn, $qry);

while ($rows = mysqli_fetch_array($res)) {
?>

    <div class="row">
        <div class="col-md-5 offset-md-4 px-5">
            <div class="card text-center mt-5 list-group-item list-group-item-primary shadow-lg border border-dark border-2  rounded-3">
                <div class="card-header list-group-item list-group-item-danger pt-2 pb-1 shadow">
                    <h3>Profile</h3>
                </div>
                <div class="card-body admin_profile_img ">
                    <?php
                    $profile_pic_path = 'uploads/' . $rows['profile_pic'];
                    $profile_pic = (!empty($rows['profile_pic']) && file_exists($profile_pic_path))
                        ? $profile_pic_path
                        : 'uploads/default.png';
                    ?>
                    <img style="height: 170px; width: 170px; border-radius: 50%;" class="img-responsive pro_img shadow border border-dark border-2" src="<?php echo $profile_pic; ?>" alt="Profile Image" />

                    <div class="card-body">
                        <h2 class="card-title"> <?php echo $rows['name']; ?> </h2>
                        <a href="tel:<?php echo $rows['mobile']; ?>">
                            <h5 class="card-text"> <?php echo $rows['mobile']; ?> </h5>
                        </a>
                        <a href=" mailto:<?php echo $rows['email']; ?>">
                            <p class="card-text"> <?php echo $rows['email']; ?> </p>
                        </a>
                        <h3 class="card-text"> <?php echo $rows['desiganation']; ?> </h3>
                        <h5 class="card-text"> <?php echo $rows['h_q']; ?> </h5>
                        <h5 class="card-text"> <?php echo $rows['address']; ?> </h5>
                       
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-pencil-square"></i>
                            Update Profile
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Profile</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="update_profile.php" method="POST" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="<?php echo $rows['name']; ?>" required placeholder="Enter Name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="mobile" class="form-label">Mobile</label>
                                                <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $rows['mobile']; ?>" required placeholder="Enter Mobile">
                                            </div>
                                            <div class="mb-3">
                                                <label for="Email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="Email" name="email" value="<?php echo $rows['email']; ?>" required placeholder="Enter Email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="City" class="form-label">Address</label>
                                                <input type="text" class="form-control" id="address" name="address" value="<?php echo $rows['address']; ?>" required placeholder="Enter City">
                                            </div>
                                            <div class="mb-3">
                                                <label for="Designation" class="form-label">Designation</label>
                                                <input type="text" class="form-control" id="Designation" name="desiganation" value="<?php echo $rows['desiganation']; ?>" required placeholder="Enter Designation">
                                            </div>
                                            <div class="mb-3">
                                                <label for="Qualifications" class="form-label">Qualifications</label>
                                                <input type="text" class="form-control" id="Qualifications" name="h_q" value="<?php echo $rows['h_q']; ?>" required placeholder="Enter Qualifications">
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
}
?>

<?php

include 'footer_section.php';

?>