<?php
include('../templates/navbar_out.php');
include('../language/ca.php'); //language text
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5"> <!-- Login wodth colums -->
            <h2 class="text-center mb-4">Log in</h2>
            <form action="../controller/login_controller.php" method="POST" class="border p-4 bg-light">
                <div class="mb-3">
                    <label for="username" class="form-label">Usuari</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="<?= $text['placeholder_userLogin'];?>" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">contrasenya</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="<?= $text['placeholder_password'];?>"  required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary"><?= $text['send_button'];?></button>
                </div>
                <!-- Direct acces to register -->
                <div class="mt-3 text-center">
                    <p><?= $text['no_useraccount']?><a href="signup_view.php"> <?= $text['register_link']?></a></p>
                </div>
                <!-- Errors control -->
                <div class="mt-3 text-center">
                    <p class="from-label mb-3 text-danger fw-bold fs-4">
                        <?php
                        if ($_SESSION['REQUEST_METHOD'] = 'GET') {
                            if (isset($_GET['error']) && $_GET['error'] == 1) echo "L'usuari no compleix regex";
                            if (isset($_GET['error']) && $_GET['error'] == 2) echo "Contrasenya incorrecta";
                        }
                        ?>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>


<?php

include ('../templates/footer.php');
?>