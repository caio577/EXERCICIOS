<?php
    include "classCamiseta.php";
    include "cabecalho.php";
    $c = new camiseta();

    $c->cor = $_POST["cor"];
    $c->tamanho = $_POST["tamanho"];
    $c->quantidade = $_POST["quantidade"];


    $_SESSION["camiseta"][]=$c;
    
?>
    <h3>Camiseta inserida com sucesso.</h3>

</body>
</html>