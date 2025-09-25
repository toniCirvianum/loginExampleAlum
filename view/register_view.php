<?php
session_start();
include('../templates/navbar_out.php');
include('../language/ca.php'); ?>



<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4"> <?= $text['register_title'] ?></h2>
            <form action="" method="POST" class="border p-4 bg-light">
                <div class="mb-3">
                    <label for="name" class="form-label"><?= $text['register_name'] ?></label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label"><?= $text['register_username'] ?></label>
                    <input type="text" name="username" class="form-control" placeholder="<?= $text['placeholder_userLogin'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label"><?= $text['register_password'] ?></label>
                    <input type="password" name="pass1" class="form-control" placeholder="<?= $text['placeholder_password'] ?>"  required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label"> <?= $text['register_password_repeat'] ?></label>
                    <input type="password" name="pass2" class="form-control" placeholder="<?= $text['placeholder_password'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label"><?= $text['register_email'] ?> </label>
                    <input type="text" name="mail" class="form-control" required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary"><?= $text['send_button'] ?></button>
                </div>
                <!-- control error -->
                <div class="mt-3 text-center">
                    <p class="from-label mb-3 text-danger fw-bold fs-6">
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                            if (isset($_GET['error']) && $_GET['error'] == 1) echo $text['register_error_1'];
                            if (isset($_GET['error']) && $_GET['error'] == 2) echo $text['register_error_2'];
                            if (isset($_GET['error']) && $_GET['error'] == 3) echo $text['register_error_3'];
                            if (isset($_GET['error']) && $_GET['error'] == 4) echo $text['register_error_4'];
                        }
                        ?>
                    </p>
                    <p class="from-label mb-3 text-success fw-bold fs-6">
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                            if (isset($_GET['error']) && $_GET['error'] == 0) echo $text['register_exit_0'];;
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