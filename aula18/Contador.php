<?php 
require_once 'Profissional.php';

class Contador extends Profissional 
{
    private $crc; 

    /**
     * Get the value of crc
     */ 
    public function getCrc()
    {
        return $this->crc;
    }

    /**
     * Set the value of crc
     *
     * @return  self
     */ 
    public function setCrc($crc)
    {
        $this->crc = $crc;

        return $this;
    }

    public function pagar($func, $s)
    {
        echo "<h3>Pagar Salário</h3>"; 
        echo "<p>O pagamento para o(a) profissional $func com o salário de R$ $s foi efetuado!</p>";
    }
}
?>