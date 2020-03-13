<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>exibe animal </title>
        <style>
            input{
                margin: 5px;
                width: 400px;
            }
            fieldset {
                width: 1000px;
            }
        </style>
    </head>
    <body>
        <h1>exibe animal: <b>repteis</b></h1>
        <form action="exibe_animal.php" method="post">
            <fieldset>
                <?php
                    if($_SESSION["animal"][] == "mamifero"){
                        include_once "mamiferos.php";
                        include_once "exibe_mamifero.php";

                    } elseif($_SESSION["animal"][] == "ave"){
                        include_once "aves.php";
                        include_once "exibe_ave.php";

                    } elseif($_SESSION["animal"][] == "reptil"){
                        include_once "repteis.php";
                        include_once "exibe_reptil.php";

                    } elseif($_SESSION["animal"][] == "anfibio"){
                        include_once "anfibios.php";
                        include_once "exibe_anfibio.php";

                    } elseif($_SESSION["animal"][] == "peixe"){
                        include_once "peixes.php";
                        include_once "exibe_peixe.php";
                    }
                ?>
            </fieldset>
        </form>
    </body>
</html>