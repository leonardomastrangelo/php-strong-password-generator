<?php
include __DIR__ . "/partials/header.php";
?>

<main class="container">
    <section>
        <h2>Genera una password sicura</h2>
    </section>
    <form action="login.php" method="GET">
        <div class="row flex-column">
            <div class="col-12 d-flex align-items-center py-4">
                <label for="password" class="form-label w-25 text-center">
                    Lunghezza password:
                </label>
                <input type="number" class="form-control w-25" name="password_length" min="8" max="20"
                    placeholder="8-20">
            </div>
            <div class="col-12 d-flex align-items-center py-4">
                <label for="repetition" class="w-25 text-center">
                    Consenti ripetizioni
                </label>
                <div class="form-check me-4">
                    <input class="form-check-input" type="radio" name="repetition" value="si">
                    <label class="form-check-label" for="repetition">
                        Sì
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="repetition" value="no" checked>
                    <label class="form-check-label" for="repetition">
                        No
                    </label>
                </div>
            </div>
            <div class="col-12 d-flex align-items-center py-4">
                <div class="w-25">
                    <h2 class="fs-5 text-center">
                        Cosa vuoi integrare
                    </h2>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="letters" id="letters" name="opt[]">
                    <label class="form-check-label" for="letters">
                        Letters
                    </label>
                </div>
                <div class="form-check ms-4">
                    <input class="form-check-input" type="checkbox" value="lettersM" id="lettersM" name="opt[]">
                    <label class="form-check-label" for="lettersM">
                        Letters Maiusc
                    </label>
                </div>
                <div class="form-check px-5">
                    <input class="form-check-input" type="checkbox" value="numbers" id="numbers" name="opt[]">
                    <label class="form-check-label" for="numbers">
                        Numbers
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="characters" id="characters" name="opt[]">
                    <label class="form-check-label" for="characters">
                        Characters
                    </label>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Genera</button>
        <button class="btn btn-secondary" type="reset">Reset</button>
    </form>
</main>
</body>

</html>