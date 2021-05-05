<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JavaJam Coffee House</title>
    <link rel="shortcut icon" href="./img/javajamlogo_HQg_icon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="javajam.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid container-lg">
        <header>
            <div class="container text-center p-2">
                <h1>JavaJam Coffee House</h1>
            </div>

            <nav class="navbar navbar-expand navbar-light">
                <div class="container-fluid justify-content-center">
                    <div class="navbar-nav">
                        <a class="nav-link" href="index.php">Home</a>
                        <a class="nav-link" href="menu.html">Menu</a>
                        <a class="nav-link" href="music.html">Music</a>
                        <a class="nav-link" href="jobs.html">Jobs</a>
                        <a class="nav-link active" aria-current="page" href="signup.php">Sign Up</a>
                        <a class="nav-link" href="login.php">Login</a>
                        <a class="nav-link" href="profile.php">Profile</a>
                        <a class="nav-link" href="logout.php">Logout</a>
                    </div>
                </div>
            </nav>
        </header>
        <hr />

        <main class="p-4">
            <h1>Sign Up as JavaJam Member</h1>
            <p>
                Please fill in this form to create an account. Required
                information is marked with an asterisk (*).
            </p>

            <form action="processSignup.php" method="post" class="form-group needs-validation" novalidate>
                <div class="form-group row g-3">
                    <div class="col-sm">
                        <label for="name" class="form-label">*Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required />
                    </div>
                    <div class="col-sm">
                        <label for="email" class="form-label">*E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" required />
                    </div>
                </div>
                <br />

                <div class="form-group row g-3">
                    <div class="col-sm">
                        <label for="password" class="form-label">*Password:</label>
                        <input class="form-control" id="password" name="password" type="password" required />
                    </div>
                    <div class="col-sm">
                        <label for="rpassword" class="form-label">*Repeat Password:</label>
                        <input class="form-control" id="rpassword" name="rpassword" type="password" required />
                    </div>
                </div>
                <br />

                <div class="form-group row">
                    <div class="col-sm">
                        <button type="submit" class="btn btn-primary">
                            Sign Up
                        </button>
                    </div>
                </div>
            </form>
        </main>
        <hr />

        <footer class="container-fluid container-lg text-center fst-italic p-3">
            Copyright &copy; 2021 JavaJam Coffee House<br />
            <a class="text-decoration-none" href="mailto:javajam@gmail.com">javajam@gmail.com</a>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>

</html>