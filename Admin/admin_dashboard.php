<?php

include 'header_section.php'

?>
<div class="dashboard_all m-0 p-0" style="height: 90vh; overflow-y: scroll; overflow-x: hidden;">
    <div class="row m-0 p-0">
        <h1 class="text-center d-flex align-items-center mt-3 ms-2 text-decoration-underline text-primary">
            <lord-icon
                src="https://cdn.lordicon.com/hcghxuhk.json"
                trigger="loop"
                delay="1000"
                style="width:60px;height:60px">
            </lord-icon>
            <span>
                Admin Dashboard
            </span>
        </h1>
        <!-- create three column  -->
        <div class="col-md-4 menu_card">
            <div class="card bg-primary m-3 text-light shadow border border-dark border-2">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="">
                        <p class="fs-3 fw-bold">Admin Profile</p>
                        <h3 class="display-5 fw-bold">
                            <?php

                            $qry = "SELECT id FROM admin ORDER BY id";
                            $qry_run = mysqli_query($conn, $qry);

                            $row = mysqli_num_rows($qry_run);

                            echo '' . $row . '';

                            ?>
                        </h3>
                    </div>
                    <lord-icon
                        src="https://cdn.lordicon.com/byicyhmi.json"
                        trigger="loop"
                        delay="1000">
                    </lord-icon>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-warning m-3 text-light shadow border border-dark border-2">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="">
                        <p class="fs-3 fw-bold">Total Students</p>
                        <h3 class="display-5 fw-bold">
                            <?php
                            $qry1 = "SELECT id FROM first_ct";
                            $qry2 = "SELECT id FROM mca_4th_sem";

                            $qry_run1 = mysqli_query($conn, $qry1);
                            $qry_run2 = mysqli_query($conn, $qry2);

                            $count1 = mysqli_num_rows($qry_run1);
                            $count2 = mysqli_num_rows($qry_run2);

                            $total = $count1 + $count2;

                            echo $total;
                            ?>


                        </h3>
                    </div>
                    <lord-icon src="https://cdn.lordicon.com/daeumrty.json" trigger="loop"
                        delay="1000"
                        state="hover-jump">
                    </lord-icon>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-secondary m-3 text-light shadow border border-dark border-2">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="">
                        <p class="fs-3 fw-bold">Faculties</p>
                        <h3 class="display-5 fw-bold">
                            <?php

                            $qry = "SELECT id FROM faculties ORDER BY id";
                            $qry_run = mysqli_query($conn, $qry);

                            $row = mysqli_num_rows($qry_run);

                            echo '' . $row . '';

                            ?>
                        </h3>
                    </div>
                    <lord-icon src="https://cdn.lordicon.com/hroklero.json" trigger="loop"
                        delay="1000"
                        state="hover-looking-around">
                    </lord-icon>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-success m-3 text-light shadow border border-dark border-2">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="">
                        <p class="fs-3 fw-bold">Add Students</p>
                        <h3 class="display-5 fw-bold">00</h3>
                    </div>
                    <lord-icon
                        src="https://cdn.lordicon.com/zdwrqfmb.json"
                        trigger="loop"
                        delay="1000">
                    </lord-icon>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-danger m-3 text-light shadow border border-dark border-2">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="">
                        <p class="fs-3 fw-bold">Add Class</p>
                        <h3 class="display-5 fw-bold">00</h3>
                    </div>
                    <lord-icon src="https://cdn.lordicon.com/juejqbyr.json" trigger="morph"
                        state="morph-open">
                    </lord-icon>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-info m-3 text-light shadow border border-dark border-2">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="">
                        <p class="fs-3 fw-bold">Add Result</p>
                        <h3 class="display-5 fw-bold">00</h3>
                    </div>
                    <lord-icon src="https://cdn.lordicon.com/juejqbyr.json" trigger="morph"
                        state="morph-open">
                    </lord-icon>
                </div>
            </div>
        </div>
    </div>

    <div class="row">


        <?php
         include 'status_analysis.php';
        ?>

        <?php
        include 'mca_status_bar.php'; 
        ?>



    </div>
</div>
<?php
include('footer_section.php');
?>