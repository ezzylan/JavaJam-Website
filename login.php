<?php include 'include\head.php'; ?>

<body>
    <div class="container-fluid container-lg">
        <?php 
        
        $page = 'login'; 
        include 'include\header.php'; 
        echo '<hr>';

        if (isset($_GET["action"])) {
            if ($_GET["action"] == 'login_failed') {
                echo '
                <div class="container-fluid px-4 pt-3 pb-1 mb-3 bg-danger text-white rounded">
                    <p>Access Denied.<br>Incorrect email or password.</p>
                </div>
                ';
            }
        }

        ?>

        <main class="p-4">
            <h1>Login</h1>
            <p>Log in to view profile details.</p>

            <form action="processLogin.php" method="post" class="form-group needs-validation" novalidate>
                <div class="form-group row g-3">
                    <div class="col-sm">
                        <label for="myEmail" class="form-label">*E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" required />
                    </div>
                    <div class="col-sm">
                        <label for="password" class="form-label">*Password:</label>
                        <input class="form-control" id="password" name="password" type="password" required />
                    </div>
                </div>
                <br />

                <div class="form-group row">
                    <div class="col-sm">
                        <button type="submit" class="btn btn-primary">
                            Log In
                        </button>
                    </div>
                </div>
            </form>
        </main>
        <hr>

        <?php include 'include\footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>

</html>