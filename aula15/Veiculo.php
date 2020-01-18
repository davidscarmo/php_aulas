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
    private $nome;
    private $cor;
    private $ano;
    protected $botao;
    

    public function __construct($n, $a, $b)
    {
        $this->nome = $n;
        $this->cor =  "Amarelo";
        $this->ano = $a;
        $this->botao = $b;
        
    }

	
    
    public function acelerar()
    {
        //echo "<p>O carro está acelerando... </p>";
        if($this->botao == true){
            echo "<p>O carro está acelerando...</p>";
        }else{
            echo "<p>O carro está parado...</p>";
        }
    }

    public function ligar()
    {
        $this->botao = true;
    }

    public function desligar()
    {
        $this->botao = false;
    }

    

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;

        return $this;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    public function getBotao()
    {
        return $this->botao;
    }
    
    public function setBotao($botao)
    {
        $this->botao = $botao;

        return $this;
    }
}
