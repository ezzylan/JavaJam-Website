<?php include 'include\head.php'; ?>

<body>
    <div class="container-fluid container-lg">
        <?php $page = 'music'; include 'include\header.php'; ?>
        <hr>

        <main class="p-4">
            <h2>Music at JavaJam</h2>
            <p>The first Friday night each month at JavaJam is a special night. Join us from 8 pm to 11
                pm for some music you won&rsquo;t want to miss!</p>

            <div class="row">
                <div class="col-md pb-3">
                    <h3 class="pb-2">January</h3>
                    <div class="row gap-3">
                        <div class="col-3">
                            <img src="img\melaniethumb.jpg" alt="melaniethumb" data-bs-toggle="modal"
                                data-bs-target="#melanieModal">

                            <div class="modal fade" id="melanieModal" tabindex="-1" aria-labelledby="melanieModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="melanieModalLabel">Melanie Morris</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="img\melanie.jpg" alt="melaniethumb">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <p class="fs-5 fst-italic">Melanie Morris entertains with her melodic folk style.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <h3 class="pb-2">February</h3>
                    <div class="row gap-3">
                        <div class="col-3">
                            <img src="img\gregthumb.jpg" alt="melaniethumb" data-bs-toggle="modal"
                                data-bs-target="#gregModal">

                            <div class="modal fade" id="gregModal" tabindex="-1" aria-labelledby="gregModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="gregModalLabel">Tahoe Greg</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="img\greg.jpg" alt="gregthumb">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <p class="fs-5 fst-italic">Tahoe Greg is back from his tour. New songs. New stories.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <hr>

        <?php include 'include\footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>

</html>