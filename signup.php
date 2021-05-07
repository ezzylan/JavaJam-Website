<!DOCTYPE html>
<html lang="en">

<?php include 'include\head.php'; ?>

<body>
    <div class="container-fluid container-lg">
        <?php $page = 'signup'; include 'include\header.php'; ?>
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

        <?php include 'include\footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>

</html>