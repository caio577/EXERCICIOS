<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>formulario animal </title>
    </head>
    <body>
        <h1>cadastrar animal</h1>
        <form action="index.php" method="post">
            <?php
                if(empty($_SESSION[animal]){
                    include "cadastro_animal.php";
                } else {
                    include "exibe_animal.php";
                }
            ?>
        </form>
    </body>
</html>