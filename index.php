<?php
include __DIR__ . "/partials/header.php";
?>

<main class="container">
    <section>
        <h2>Genera una password sicura</h2>
    </section>
    <form action="login.php" method="GET">
        <div class="row flex-column">
            <div class="col-12 d-flex align-items-center">
                <label for="password" class="form-label w-25 text-center">
                    Lunghezza password:
                </label>
                <input type="number" class="form-control w-25" name="password_length" min="8" max="20"
                    placeholder="8-20">
            </div>
            <div class="col-6"></div>
        </div>
        <button class="btn btn-primary" type="submit">Genera</button>
        <button class="btn btn-secondary" type="reset">Reset</button>
    </form>
</main>
</body>

</html>