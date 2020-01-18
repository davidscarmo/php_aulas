<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Veiculo
 *
 * @author PC 05
 */
class Veiculo {
    public $nome;
    public $cor;
    public $ano;
    public $botao;
    
    public function acelerar(){
        //echo "<p>O carro está acelerando... </p>";
        if($this->botao == true){
            echo "<p>O carro está acelerando...</p>";
        }else{
            echo "<p>O carro está parado...</p>";
        }
    }
}
