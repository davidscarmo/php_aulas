<?php

class Telefone implements Controle
{
    private $botaoLigar;
    private $botaoVolume;
    private $botaoMenu;

    public function __construct()
    {
        $this->setBotaoLigar(false);
        $this->setBotaoVolume(10);
        $this->setBotaoMenu(false);
    }

    /**
     * Get the value of botaoLigar
     */ 
    private function getBotaoLigar()
    {
        return $this->botaoLigar;
    }

    /**
     * Set the value of botaoLigar
     *
     * @return  self
     */ 
    private function setBotaoLigar($botaoLigar)
    {
        $this->botaoLigar = $botaoLigar;

        return $this;
    }

    /**
     * Get the value of botaoVolume
     */ 
    private function getBotaoVolume()
    {
        return $this->botaoVolume;
    }

    /**
     * Set the value of botaoVolume
     *
     * @return  self
     */ 
    private function setBotaoVolume($botaoVolume)
    {
        $this->botaoVolume = $botaoVolume;

        return $this;
    }
    

    /**
     * Get the value of botaoMenu
     */ 
    private function getBotaoMenu()
    {
        return $this->botaoMenu;
    }

    /**
     * Set the value of botaoMenu
     *
     * @return  self
     */ 
    private function setBotaoMenu($botaoMenu)
    {
        $this->botaoMenu = $botaoMenu;

        return $this;
    }
    public function ligar()
    {
        $this->setBotaoLigar(true);
    }

    public function desligar()
    {
        $this->setBotaoLigar(false);
    }

    public function abrirMenu()
    {
        if($this->getBotaoLigar() == true)
        {
            echo "<p>O botão do menu foi acionado</p>";
            echo "<p>Você selecionou o aplicativo de contatos</p>";        
        }
        else
        {
            echo "<p>O Botão do menu não pode ser acionado, pois o telefone está desligado!</p>";
        }
    }
    
    public function fecharMenu()
    {
        echo "<p>O botão do menu foi fechado</p>";
    }
    
    public function maisVolume()
    {
        if($this->getBotaoLigar() == true)
        {
            $this->setBotaoVolume($this->getBotaoVolume()+1);
            echo "<p>Volume aumentou para " . $this->getBotaoVolume()."</p>";
        }
        else
        {
          echo "<p>O Botão do volume não pode aumentar, pois o telefone está desligado.</p>";
        }
    }
    
    public function menosVolume()
    {
        if($this->getBotaoLigar() == true)
        {
            $this->setBotaoVolume($this->getBotaoVolume()-1);
            echo "<p>Volume diminuiu para " . $this->getBotaoVolume()."</p>";
        }
        else
        {
          echo "<p>O Botão do volume não pode diminuir, pois o telefone está desligado.</p>";
        }
    }

    }



?>