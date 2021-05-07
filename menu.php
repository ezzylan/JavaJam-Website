<!DOCTYPE html>
<html lang="en">

<?php include 'include\head.php'; ?>

<body>
    <div class="container-fluid container-lg">
        <?php $page = 'menu'; include 'include\header.php'; ?>
        <hr>

        <main class="p-4">
            <div class="text-center">
                <img src="./img/mugs.jpg" alt="mugs on a wall" class="rounded float-md-end mb-3">
            </div>

            <h2>Coffee at JavaJam</h2>
            <p>
                Indulge in our locally roasted free-trade coffee and enjoy the aroma, the smooth taste, the
                caffeine! Join our Mug Club and get a 10% discount on each cup of coffee you purchase —
                ask the barista for details.
            </p>

            <dl>
                <dt><strong>Just Java</strong></dt>
                <dd>Regular house blend, decaffeinated coffee, or flavor of the day.<br>
                    Endless Cup $2.00</dd>

                <dt><strong>Cafe au Lait</strong></dt>
                <dd>House blended coffee infused into a smooth, steamed milk.<br>
                    Single $2.00 Double $3.00</dd>

                <dt><strong>Iced Cappuccino</strong></dt>
                <dd>Sweetened espresso blended with icy-cold milk and served in a chilled glass.<br>
                    Single $4.75 Double $5.75</dd>
            </dl>
        </main>
        <hr>

        <?php include 'include\footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>

</html>