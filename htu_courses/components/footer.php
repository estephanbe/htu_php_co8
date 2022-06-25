    <footer>
        <nav class="navbar navbar-dark bg-dark d-flex justify-content-center align-items-center">
            <p class="m-0">
                <?php 
                // https://www.php.net/manual/en/datetime.format.php
                // date('Y/m/d');
                // date('Y-m-d');
                // date('M, Y');
                ?>
                Copyright © <?= date('Y'); ?> HTU PHP Cohort 8 - All Rights Reserved.
            </p>
        </nav>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="<?= BASE_URL; ?>/htu_courses/assets/js/app.js"></script>
</body>

</html>
