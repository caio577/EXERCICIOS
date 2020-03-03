<?php 
include "cabecalho.php";


?>
        <h1>criar objeto carro</h1>
        <form action="instanciarCarro.php" method="post">
            Definir cor carro:
            <input type="color" name="cor">
            <br />

            <input type="number" step="1" min="1" max="5" name="qtd_porta" placeholder="Quantidade Portas..."/>
            <br/>

            <input type="number" step="20" min="20" max="500" name="velocidade_maxima" placeholder="Velocidade Máxima..."/>
            <br />

            <input type="submit" value="Criar Carro"/>
    
</body>
</html>