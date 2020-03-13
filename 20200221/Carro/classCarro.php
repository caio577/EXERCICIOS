<?php
class Carro{
    //lista de atributos
    private $cor;
    private $qtd_porta;
    private $velocidade_maxima;
    private $velocidade_atual;


    public function __construct($c, $q, $v){
        $this->cor = $c;
        $this->qtd_porta = $q;
        $this->velocidade_maxima = $v;
        $this->velocidade_atual = 0;
    }

    public function get_cor(){
        return($this->cor);
    }
    public function get_qtd_porta(){
        return($this->qtd_porta);
    }
    public function get_velocidade_maxima(){
        return($this->velocidade_maxima);
    }
    public function get_velocidade_atual(){
        return($this->velocidade_atual);
    }


    //lista de metodos
    public function acelerar($valor_aceleracao){
        $this->velocidade_atual = 
        $this->velocidade_atual + $valor_aceleracao*$tempo; 

        if($this->velocidade_atual > $this->velocidade_maxima){
            $this->velocidade_atual = $this->velocidade_maxima;
        }

    }

    private function frear($valor_frenagem, $tempo){
        $this->velocidade_atual = 
        $this->velocidade_atual - $valor_frenagem*$tempo;

        if($this->velocidade_atual < 0){
            $this->velocidade_atual = 0;
        }

    }

    private function virar($lado){


    }
    
}







?>