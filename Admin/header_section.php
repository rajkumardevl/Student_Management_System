<?php

include '../../../SMS/Admin/connection.php';
include '../connection.php';

session_start();
$id = $_SESSION['id'];


?>

<!doctype html>
<html lang="en">

<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- bootstrap icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>


</head>

<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    .header {
        height: 10vh;
    }

    .top_profile_image img {
        height: 30px;
        width: 30px;
        border-radius: 50%;

    }

    .sidebar {
        height: 90vh;
        width: 100%;
        overflow-y: scroll;
        overflow-x: hidden;
    }

    .sidebar::-webkit-scrollbar {
        display: none;
    }

    .left_top_image img {
        height: 100px;
        width: 100px;
        border-radius: 50%;
        display: block;
        margin-left: auto;
        margin-right: auto;

    }

    .nav-item a {
        border: 2px solid rgb(38, 137, 252);
        height: 40px;
        width: 100%;
        display: flex;
        align-items: center;
        text-decoration: none;
        color: white;
        font-weight: 600;
        transition: all 0.5s ease;
        border-radius: 5px;
        padding: 0px 0px 0px 15px;
        box-shadow: 0px 0px 10px 0px rgb(38, 137, 252) inset;
    }

    .nav-item a:hover {
        box-shadow: 0px 0px 10px 0px rgb(255, 255, 255), 0px 0px 10px 0px rgb(255, 255, 255) inset;
        border: 2px solid rgb(255, 255, 255);
        color: white;
        border-radius: 20px;
    }

    .row {
        --bs-gutter-x: 0;
    }

    .nav-item lord-icon {
        height: 35px;
        width: 35px;
        margin-right: 10px;
    }

    .card-body lord-icon {
        height: 150px;
        width: 150px;
    }

    .fetch_data img {
        height: 100px;
        width: 100px;
        border-radius: 50px;
        transition: .3s;
        box-shadow: 0px 0px 5px 0px rgb(0, 0, 0);
        /* border: 2px solid rgb(0, 0, 0); */
    }

    .fetch_data img:hover {
        transform: scale(1.3);
        margin-left: 0px;
    }

    th,
    td {
        text-align: center;
        vertical-align: middle !important;
        white-space: nowrap;
    }

    .input_box {
        padding: 0px 10px;
    }

    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");

    .bg_color {
        height: 90vh;
        width: 100%;
        /*gradiant background color*/
        /*background: linear-gradient(to top, #ec82ff 0%, #cafffc 100%); */
        overflow-y: scroll;
    }

    .menu_card {
        transition: .5s;
    }

    .sidebar li .submenu {
        list-style: none;
        margin: 0;
        padding: 0;
        padding-left: 1rem;
        padding-right: 1rem;
    }
</style>

<body class="bg-light">

    <div class="container-fluid ps-0">
        <div class="row bg-dark text-light m-0 p-0">
            <div class="col-md-12 m-0 p-0">
                <div class="header d-flex justify-content-between align-items-center">
                    <div class=""></div>
                    <h1 class="d-flex align-items-center ">
                        <lord-icon class="me-2" src="https://cdn.lordicon.com/dznelzdk.json" trigger="loop"
                            delay="1000"
                            style="width:50px;height:50px; ">
                        </lord-icon>
                        <span class=" text-warning">S</span>
                        <span class=" text-primary">D</span>
                        <span class=" text-danger">E</span>
                        <span class=" text-success">C</span>
                    </h1>
                    <!-- dropdown  -->
                    <div class="dropdown mx-2">
                        <button class="btn btn-primary dropdown-toggle top_profile_image" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://gyaanarth.com/wp-content/uploads/2022/07/logo-11.png"
                                alt="">
                            Admin
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="sdec_director.php">
                                    <i class="bi bi-person"></i>
                                    Profile
                                </a></li>
                            <li><a class="dropdown-item text-danger" href="log_out.php">
                                    <i class="bi bi-gear"></i>
                                    Logout
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <!-- sidebar menu -->
                <div class="sidebar bg-dark px-3">
                    <div class="left_top_image pb-3">
                        <img src="https://gyaanarth.com/wp-content/uploads/2022/07/logo-11.png"
                            alt="">
                    </div>
                    <!-- links  -->
                    <ul class="nav flex-column">
                        <li class="nav-item my-2">
                            <a href="admin_dashboard.php" class="">
                                <lord-icon src="https://cdn.lordicon.com/dznelzdk.json" trigger="loop"
                                    delay="1000">
                                </lord-icon>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item my-2">
                            <a href="admin_profile.php" class="">
                                <lord-icon
                                    src="https://cdn.lordicon.com/byicyhmi.json"
                                    trigger="loop"
                                    delay="1000">
                                </lord-icon>
                                Admin Profile
                            </a>
                        </li>
                        <li class="nav-item my-2 has-submenu " style="cursor: pointer;">
                            <a class="nav-link ">
                                <lord-icon src="https://cdn.lordicon.com/daeumrty.json" trigger="loop"
                                    delay="1000"
                                    state="hover-jump">
                                </lord-icon>
                                Students
                                <i class="bi bi-caret-down ms-2 mt-1 fs-4"></i></a>
                            <ul class="submenu collapse">
                                <li><a class="nav-link my-2" href="bca_1st_sem.php"><i class="bi bi-mortarboard me-2"></i> BCA 1st Sem </a></li>
                                <li><a class="nav-link my-2" href="bca_2nd_sem.php"><i class="bi bi-mortarboard me-2"></i> BCA 2nd Sem </a></li>
                                <li><a class="nav-link my-2" href="#"><i class="bi bi-mortarboard me-2"></i> BCA 3rd Sem </a></li>
                                <li><a class="nav-link my-2" href="#"><i class="bi bi-mortarboard me-2"></i> BCA 4th Sem </a></li>
                                <li><a class="nav-link my-2" href="#"><i class="bi bi-mortarboard me-2"></i> BCA 5th Sem </a></li>
                                <li><a class="nav-link my-2" href="#"><i class="bi bi-mortarboard me-2"></i> BCA 6th Sem </a></li>

                                <li><a class="nav-link my-2" href="#"><i class="bi bi-mortarboard me-2"></i> MCA 1st Sem </a></li>
                                <li><a class="nav-link my-2" href="#"><i class="bi bi-mortarboard me-2"></i> MCA 2nd Sem </a></li>
                                <li><a class="nav-link my-2" href="#"><i class="bi bi-mortarboard me-2"></i> MCA 3rd Sem </a></li>
                                <li><a class="nav-link my-2" href="mca_4th_sem.php"><i class="bi bi-mortarboard me-2"></i> MCA 4th Sem </a></li>
                            </ul>
                        </li>

                        <!-- Stdents Result  -->

                        <li class="nav-item my-2 has-submenu " style="cursor: pointer;">
                            <a class="nav-link ">
                                <lord-icon src="https://cdn.lordicon.com/daeumrty.json" trigger="loop"
                                    delay="1000"
                                    state="hover-jump">
                                </lord-icon>
                                Students Result
                                <i class="bi bi-caret-down ms-2 mt-1 fs-4"></i></a>
                            <ul class="submenu collapse">
                                <li><a class="nav-link my-2" href="bca_1st_sem_result.php"><i class="bi bi-mortarboard me-2"></i> BCA 1st Sem </a></li>
                                <li><a class="nav-link my-2" href="#"><i class="bi bi-mortarboard me-2"></i> BCA 2nd Sem </a></li>
                                <li><a class="nav-link my-2" href="#"><i class="bi bi-mortarboard me-2"></i> BCA 3rd Sem </a></li>
                                <li><a class="nav-link my-2" href="#"><i class="bi bi-mortarboard me-2"></i> BCA 4th Sem </a></li>
                                <li><a class="nav-link my-2" href="#"><i class="bi bi-mortarboard me-2"></i> BCA 5th Sem </a></li>
                                <li><a class="nav-link my-2" href="#"><i class="bi bi-mortarboard me-2"></i> BCA 6th Sem </a></li>
                                <li><a class="nav-link my-2" href="#"><i class="bi bi-mortarboard me-2"></i> MCA 1st Sem </a></li>
                                <li><a class="nav-link my-2" href="#"><i class="bi bi-mortarboard me-2"></i> MCA 2nd Sem </a></li>
                                <li><a class="nav-link my-2" href="#"><i class="bi bi-mortarboard me-2"></i> MCA 3rd Sem </a></li>
                                <li><a class="nav-link my-2" href="mca_4th_sem_result.php"><i class="bi bi-mortarboard me-2"></i> MCA 4th Sem </a></li>
                            </ul>
                        </li>
                        <li class="nav-item my-2">
                            <a href="faculties.php" class="">
                                <lord-icon src="https://cdn.lordicon.com/hroklero.json" trigger="loop"
                                    delay="1000"
                                    state="hover-looking-around">
                                </lord-icon>
                                Faculties
                            </a>
                        </li>
                        <!-- director of department add to bottom  -->
                        <li class="nav-item mt-5">
                            <a href="sdec_director.php" class="mt-5">
                                <lord-icon src="https://cdn.lordicon.com/hroklero.json" trigger="loop"
                                    delay="1000"
                                    state="hover-looking-around">
                                </lord-icon>
                                SDEC Director
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    document.querySelectorAll('.sidebar .nav-link').forEach(function(element) {

                        element.addEventListener('click', function(e) {

                            let nextEl = element.nextElementSibling;
                            let parentEl = element.parentElement;

                            if (nextEl) {
                                e.preventDefault();
                                let mycollapse = new bootstrap.Collapse(nextEl);

                                if (nextEl.classList.contains('show')) {
                                    mycollapse.hide();
                                } else {
                                    mycollapse.show();
                                    // find other submenus with class=show
                                    var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                                    // if it exists, then close all of them
                                    if (opened_submenu) {
                                        new bootstrap.Collapse(opened_submenu);
                                    }
                                }
                            }
                        }); // addEventListener
                    }) // forEach
                });
            </script>
            <div class="col-md-10">