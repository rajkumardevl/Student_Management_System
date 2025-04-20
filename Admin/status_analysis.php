<?php
include '../connection.php';

// Total, Pass, Fail, Absent students
$total = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM mca_4th_sem"))['total'];
$pass = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS pass FROM mca_4th_sem WHERE result = 'Pass'"))['pass'];
$fail = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS fail FROM mca_4th_sem WHERE result = 'Fail'"))['fail'];
$absent = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS absent FROM mca_4th_sem WHERE first_sub_mark = 'AB' AND second_sub_mark = 'AB' AND third_sub_mark = 'AB'"))['absent'];
$topper = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT name, ROUND(percentage, 2) AS percent FROM mca_4th_sem ORDER BY percentage DESC LIMIT 1")
);
?>

<div class="container">
    <h3 class="mb-4 text-primary">📊 MCA 4th Sem Result Analysis</h3>

    <!-- Progress Bars -->
    <div class="row">

        <div class=" p-2">
            <div class="card p-2 shadow border border-dark border-2">
                <h1 class="text-center text-primary p-1 mb-3 border border-dark rounded shadow bg-light border-2 ">
                    Progress Bar
                </h1>
                <label>Total Students: <?= $total ?></label>
                <div class="progress mb-3 shadow border border-white">
                    <div class="progress-bar bg-info shadow" role="progressbar" style="width: 100%">Total</div>
                </div>

                <label>Pass Students: <?= $pass ?></label>
                <div class="progress mb-3 shadow border border-white">
                    <div class="progress-bar bg-success" role="progressbar" style="width: <?= ($total ? ($pass / $total * 100) : 0) ?>%">
                        <?= round(($total ? ($pass / $total * 100) : 0), 1) ?>%
                    </div>
                </div>

                <label>Fail Students: <?= $fail ?></label>
                <div class="progress mb-3 shadow border border-white">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: <?= ($total ? ($fail / $total * 100) : 0) ?>%">
                        <?= round(($total ? ($fail / $total * 100) : 0), 1) ?>%
                    </div>
                </div>

                <label>All Subjects Absent: <?= $absent ?></label>
                <div class="progress mb-3 shadow border border-white">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?= ($total ? ($absent / $total * 100) : 0) ?>%">
                        <?= round(($total ? ($absent / $total * 100) : 0), 1) ?>%
                    </div>
                </div>

                <!-- Topper Info -->
                <div class="alert alert-success mt-4">
                    🏆 <strong>Topper:</strong> <?= $topper['name'] ?> - <?= $topper['percent'] ?>%
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6 p-2">
            <div class="card p-2 shadow border border-dark border-2">
                <h1 class="text-center text-primary p-1 mb-2 border border-dark rounded shadow bg-light border-2 ">
                    Bar Chart
                </h1>
                <canvas class="card shadow" id="barChart" height="330"></canvas>
            </div>
        </div>
        <div class="col-md-6 p-2">
            <div class="card p-2 shadow border border-dark border-2">
                <h1 class="text-center text-primary p-1 mb-2 border border-dark rounded shadow bg-light border-2 ">
                    Pie Chart
                </h1>
                <div class="center d-flex justify-content-center" style="height: 330px; width: auto;">
                    <canvas class="" id="pieChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const pieData = {
        labels: ['Pass', 'Fail', 'All Absent'],
        datasets: [{
            label: 'Result Distribution',
            data: [<?= $pass ?>, <?= $fail ?>, <?= $absent ?>],
            backgroundColor: ['#198754', '#dc3545', '#ffc107'],
            borderWidth: 1
        }]
    };

    const barData = {
        labels: ['Pass', 'Fail', 'All Absent'],
        datasets: [{
            label: 'Students',
            data: [<?= $pass ?>, <?= $fail ?>, <?= $absent ?>],
            backgroundColor: ['#198754', '#dc3545', '#ffc107'],
            borderColor: ['#145c38', '#9c1b1b', '#cc9d0b'],
            borderWidth: 1
        }]
    };

    new Chart(document.getElementById('pieChart'), {
        type: 'pie',
        data: pieData,
        options: {
            responsive: true
        }
    });

    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: barData,
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    precision: 0,
                    stepSize: 1
                }
            },
            responsive: true
        }
    });
</script>