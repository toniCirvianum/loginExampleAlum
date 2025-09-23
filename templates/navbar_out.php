<?php
$path = __DIR__."/../language/ca.php";
// echo $path;
include($path); //language text
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>login example</title>
</head>
<body>

    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="../index.php" >
          
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
            class="bi bi-people-fill" viewBox="0 0 16 16" style="margin-right:10px;">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
            </svg>
              <?= $text['title_index'] ?> 

               
        </a>
        
       
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="../view/login_view.php"><?= $text['login'] ?> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?= $text['register'] ?></a>
                </li>

                
            </ul>
       
    </div>
</nav>
    
</body>
</html>