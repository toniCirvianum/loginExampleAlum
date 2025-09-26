<?php
session_start();
include('../language/ca.php');
if (!isset($_SESSION['user_logged'])) {
    header ('Location: ./home.php');
    exit();
}

$taskList = $_SESSION['todoList'];
include ('../templates/navbar_app.php');
include('../language/ca.php');


?>

<div class="text-center vh-50 d-flex flex-column justify-content-center m-5">
    <h1 class="display-3 mb-4"><?= $text['title_app'] ?></h1>

<img src="../img/05_Cicles_dreta.png" class="rounded mx-auto d-block" alt="...">

</div>

<div class="container mx-auto mt-3 my-6">
    <div class="row mb-4">
        <?php
        foreach ($taskList as $task) {
           
       

        ?>
        <!-- Comença la fila amb les tasques -->
        <div class="col-md-3 md-2">
            <!-- Comença la tasca -->
            <div class="card my-3 bg-danger-subtle" style="width: 18rem;">
                <div class="card-body">
                    <!-- Contingut de la tasca -->
                    <h5 class="card-title fw-bold">First to do Raquel </h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary fw-light">
                    </h6>
                    <p class="card-text overflow-hidden " style="height:10rem; "> He de fer una 1 </p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-success mx-2">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
            <!-- Acaba la tasca -->
        </div>
        <!-- Acaba la fila-->
         <?php }?>
    </div>
</div>

<?php

include ('../templates/footer.php');
?>