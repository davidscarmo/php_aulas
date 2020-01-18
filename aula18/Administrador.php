<?php 
require_once "Profissional.php";

class Administrador extends Profissional 
{
    private $cra; 

    /**
     * Get the value of cra
     */ 
    public function getCra()
    {
        return $this->cra;
    }

  
    public function setCra($cra)
    {
        $this->cra = $cra;

        return $this;
    }

    public function contratar($func)
    {
        echo "<h3>Contratar</h3>";
        echo "<p>O contrato do(a) profissional $func foi realizado com sucesso!</p>";
    }
}
?>