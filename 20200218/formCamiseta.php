<?php
    include "cabecalho.php";
?>
    <h1>Criar objeto camiseta</h1>
    <form action="instanciarCamiseta.php" method="post">
        Definir cor da camiseta :
        <input type="color" name="cor" />
        <br />
        Informe o tamanho da camiseta:
         <p>
            <select name="tamanho">
                <option value="P">P</option>
                <option value="M">M</option>
                <option value="G">G</option>
                <option value="GG">GG</option>
            </select>
         </p>   

        <br />
        Insira a quantidade de camisetas
        <input type="number" step="1" max="10" name="quantidade" placeholder="Quantidade..." />
        <br />

        <input type="submit" value="Criar Camiseta" />
        
        </form>
</body>
</html>