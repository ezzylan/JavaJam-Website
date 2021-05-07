<!DOCTYPE html>
<html lang="en">

<?php include 'include\head.php'; ?>

<body>
    <div class="container-fluid container-lg">
        <?php $page = 'login'; include 'include\header.php'; ?>
        <hr>

        <main class="p-4">
            <h1>Login</h1>
            <p>Please sign in.</p>

            <form action="processLogin.php" method="post" class="form-group needs-validation" novalidate>
                <div class="form-group row g-3">
                    <div class="col-sm">
                        <label for="myEmail" class="form-label">*E-mail:</label>
                        <input type="email" class="form-control" id="mEmail" name="mEmail" required />
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
                            Sign In
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