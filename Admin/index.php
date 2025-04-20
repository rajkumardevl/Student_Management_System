<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.lordicon.com//libs/mssddfmo/lord-icon-2.0.2.css">


    <style>
        body {
            background-color: #f8f9fa;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        img {
            width: 50px;
            height: 50px;
        }
    </style>
    <script>
        // input validation 
    </script>
</head>

<body class="">

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card p-4 pt-0 shadow" style="width: 350px;">

            <!-- lord icon  -->
            <lord-icon class="d-block mx-auto"
                src="https://cdn.lordicon.com/hcghxuhk.json"
                trigger="hover"
                style="width:100px;height:100px">
            </lord-icon>
            <h1 class="text-center border-bottom pb-3">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSBut1tctK5lFw5VFtMp8CzCyptec9N3iK_Q&s" alt="">
                <span class="text-danger">S</span>
                <span class="text-warning">D</span>
                <span class="text-success">E</span>
                <span class="text-info">C</span>
            </h1>
            <h3 class="text-center mb-3">Admin Login</h3>
            <form class="needs-validation" action="admin_verify.php" method="POST" novalidate>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-person-fill"></i>
                    </span>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Enter Username" name="username" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-lock-fill"></i>
                    </span>
                    <input type="password" class="form-control" placeholder="Enter Password" name="password" aria-label="password" aria-describedby="basic-addon1" required>
                </div>
                <button type="submit" name="login" class="btn btn-primary w-100 mt-3">
                    <i class="bi bi-box-arrow-in-right"></i> Login
                    Login
                </button>
            </form>
        </div>
    </div>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
    
<!-- Lord Icon -->
<script src="https://cdn.lordicon.com/lordicon.js"></script>
</body>

</html>