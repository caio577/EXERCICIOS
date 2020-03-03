<?php
include "classCarro.php";
include "cabecalho.php";
?>
Objetos "Carro" instanciados no sistema:

<?php 
    foreach($_SESSION["carro"] as $i => $c) {
        echo "
            cor: <span style='color:".$c->get_cor()." '>".$c->get_cor()."</span><br />
            Quantidade Portas: ".$c->get_qtd_porta()." <br />
            Velocidade Máxima: ".$c->get_velocidade_maxima()." <br />
            Quantidade Portas: ".$c->get_velocidade_atual()."<hr />
            <form method='post' action='acelerar_frear.php'>
            <input type='number' name='tempo' placeholder='aceleracao / frenagem' />

            <input type='number' name='aceleracao_frenagem' placeholder='acelerar /frenagem' />
                <br />
            <input type='radio' class='radio' name='tipo' value='a' />
                Aceleração
            <br />
            <input type='radio' class='radio' name='tipo' value='f' />
                Frenagem
            <br />
            <input type='hidden' name='id' value='$i' />
            <input type='submit' value='acelerar / frear' />
            </form>
            <hr />";    
    }
?>
</body>
</html>
