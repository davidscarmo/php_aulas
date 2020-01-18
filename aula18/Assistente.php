<?php 
    require_once 'Contador.php';

    class Assistente extends Contador 
    {
        private $vale; 

        public function getVale()
        {
                return $this->vale;
        }

        public function setVale($vale)
        {
                $this->vale = $vale;

        }

        public function pagar($func, $s)
        {
            echo "<h3>Pagar Salário</h3>";
            $total = $s +500;
            echo "<p>O pagamento para o(a) profissional $func com o salário de R$ $total foi efetuado!</p>";
        }
    }
?>