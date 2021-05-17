<?php include 'include\head.php'; ?>

<body>
    <div class="container-fluid container-lg">
        <?php $page = 'jobs'; include 'include\header.php'; ?>
        <hr>

        <main class="p-4">
            <h2>Jobs at JavaJam</h2>
            <p>Want to work at JavaJam? Fill out the form below to start your application. Required
                fields are marked with an asterisk (*).</p>

            <form action="http://webdevbasics.net/scripts/javajam8.php" method="post" class="row g-2 needs-validation"
                novalidate>
                <div class="col-md">
                    <label for="name" class="form-label">*Name:</label>
                    <div class="row">
                        <div class="col-sm">
                            <input type="text" id="name" class="form-control" placeholder="First name" required>
                            <div class="invalid-feedback">
                                Please enter your first name.
                            </div>
                        </div>
                        <div class="col-sm">
                            <input type="text" id="name" class="form-control" placeholder="Last name" required>
                            <div class="invalid-feedback">
                                Please enter your last name.
                            </div>
                        </div>
                    </div><br>
                </div>

                <label for="experience" class="form-label">*Experience:</label>
                <textarea name="experience" id="experience" rows="5" class="form-control"
                    placeholder="Insert experience here..." required></textarea>
                <div class="invalid-feedback">
                    Please enter your experience.
                </div>
                <br>

                <div class="col-md">
                    <label for="job-position" class="form-label">Select job position:</label>
                    <select name="job-position" id="job-position" class="form-select">
                        <!-- <option value="barista">Barista</option>
                        <option value="singer">Performer</option>
                        <option value="waiter">Waiter</option>
                        <option value="manager">Manager</option>
                        <option value="staff">Staff</option> -->

                        <script>
                            let jobclass = [{ code: 'ba', name: 'Barista', scope: 'Preparing and serving hot and cold drinks such as coffee, tea, artisan and speciality beverages.' },
                            { code: 'ma', name: 'Manager', scope: 'Managing day-to-day operations of the cafe.' },
                            { code: 'tr', name: 'Trainee', scope: 'Supporting daily operations of the cafe.' }]

                            jobclass.forEach((job) => {
                                document.write('<option value="' + job.code + '">' + job.name + '</option>')
                            })

                            document.getElementById('job-position').addEventListener('change', (e) => {
                                let scope = document.getElementById('jobScope')
                                jobclass.forEach((job) => {
                                    if (job.code == e.target.value) {
                                        scope.textContent = job.scope
                                    }
                                })
                            })
                        </script>
                    </select>

                    <div class="container-fluid">
                        <p id="jobScope" class="fst-italic pt-1">
                            Preparing and serving hot and cold drinks such as coffee, tea, artisan and speciality
                            beverages.
                        </p>
                    </div>

                    <div class="col-md">
                        <label for="email" class="form-label">*E-mail:</label>
                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="Insert email here..." required>
                        <div class="invalid-feedback">
                            Please enter your email.
                        </div>
                        <br>
                    </div>
                </div>

                <div class="col-md">
                    <label for="date-time" class="form-label">Preferred Interview Date and Time:</label>
                    <input type="datetime-local" name="date-time" id="date-time" class="form-control"><br>

                    <label for="photo" class="form-label">Upload your photo:</label>
                    <input type="file" name="photo" id="photo" class="form-control"><br>

                    <button class="btn btn-primary" type="submit">Apply Now</button>
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