<?php
    include "classCamiseta.php";
    include "cabecalho.php";
?>

<h2>Objetos "camiseta" instanciada no sistema</h2>

<?php 
    foreach($_SESSION["camiseta"] as $c){
        echo "
        cor: <span style 'color=$c->cor'>$c->cor</span><br />
        Tamanho: $c->tamanho <br />
        Quantidade = $c->quantidade <br />
        <hr />";
    }
?>
</body>
</html>