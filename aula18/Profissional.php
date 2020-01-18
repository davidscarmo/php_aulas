<?php 
    abstract class Profissional 
    {
        private $id;
        private $nome;
        private $salario;

        public function getId()
        {
                return $this->id;
        }

     
        public function setId($id)
        {
                $this->id = $id;

                return $this;
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

   
        public function getSalario()
        {
                return $this->salario;
        }

 
        public function setSalario($salario)
        {
                $this->salario = $salario;

                return $this;
        }
        public function consultar()
        {
            echo "<h3>Consultar</h3>";
            echo "<p>O(a) profissional {$this->getNome()} possui o salário de R$ {$this->getSalario()}</p>";
        }
    }
?>