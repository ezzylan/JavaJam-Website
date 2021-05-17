<?php include 'include\head.php'; ?>

<body>
    <div class="container-fluid container-lg">
        <?php $page = 'home'; include 'include\header.php'; ?>
        <hr>

        <main class="p-4">
            <div class="text-center">
                <img src="./img/windingroad.jpg" alt="winding road through the woods" class="rounded float-md-end mb-3">
            </div>

            <h2>Follow the Winding Road to JavaJam</h2>
            <p>We're a little out of the way, but take a drive down Route 42 to JavaJam today! Indulge in
                our locally roasted free-trade coffee and home-made pastries. You'll feel right at home at
                JavaJam!</p>

            <h3>JavaJam Coffee House features:</h3>
            <ul>
                <li>Specialty Coffee and Tea</li>
                <li>Bagels, Muffins, and Organic Snacks</li>
                <li>Music and Poetry Readings</li>
                <li>Open Mic Night</li>
            </ul>

            <h3>Visit us:</h3>
            <div>
                54321 Route 42<br>
                Ellison Bay, WI 54210<br>
                1-888-555-5555<br>
            </div>
        </main>

        <section class="bg-light">
            <div class="container-fluid container-lg p-4">
                <div class="row">
                    <div class="col-md mb-3">
                        <h3>How to Brew Coffee</h3>
                        <h6>The NCA Guide to Brewing Essentials</h6>
                        <p>Coffee is personal - the right way to make it is how you like it best. That being said,
                            mastering a few fundamentals will help you perfect your technique. From here, we encourage
                            you to experiment with different roasts, origins, or preparation methods. Here are our tips
                            to brew a classic cup of coffee.</p>

                        <a href="#" class="text-dark text-decoration-none">View details &twoheadrightarrow;</a>
                    </div>
                    <div class="col-md mb-3">
                        <h3>Coffee Benefits</h3>

                        <h6>Health benefits and risks of drinking coffee</h6>
                        <p>A cup of coffee in the morning may provide more than just an energy boost. The potential
                            health benefits associated with drinking coffee include protecting against type 2 diabetes,
                            Parkinson's disease, liver disease, liver cancer, and promoting a healthy heart.</p>

                        <a href="#" class="text-dark text-decoration-none">View details &twoheadrightarrow;</a>
                    </div>
                    <div class="col-md">
                        <h3>Upcoming Events</h3>

                        <h6>January 2021:</h6>
                        <p>Melanie Morris entertains with her melodic fold style.</p>
                        <h6>February 2021:</h6>
                        <p>Tahoe Greg is back from his tour. New songs. New stories.</p>

                        <a href="music.php" class="text-dark text-decoration-none">View details &twoheadrightarrow;</a>
                    </div>
                </div>
            </div>
        </section>
        <hr>

        <?php include 'include\footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>

</html>
