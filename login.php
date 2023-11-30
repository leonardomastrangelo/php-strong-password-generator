<?php
include __DIR__ . "/partials/header.php";
include __DIR__ . "/logic/functions.php";
$new_password = generatePassword();
?>

<main class="container">
    <div class="row flex-column justify-content-center align-items-center">
        <div class="col-6">
            <h2 class="display-5 text-center">Ecco la tua password</h2>
            <div class="alert alert-success fs-5 text-center">
                <?= $_SESSION['password'] ?>
            </div>
        </div>
    </div>
</main>
</body>

</html>