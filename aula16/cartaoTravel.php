<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    class CartaoTravel
    {
        private $numero ;
        private $tipo ;
        private $usuario ;
        private $saldo ;
        private $situacao;

        //construct 
        public function __construct()
        {
            $this->setSaldo(0);
            $this->setSituacao(false);
            echo "<p>Conta do cartão travel criada com sucesso!</p>";
        }

        // getters and setters 
        public function getNumero()
        {
                return $this->numero;
        }

        public function setNumero($numero)
        {
                $this->numero = $numero;

                return $this;
        }

        public function getTipo()
        {
                return $this->tipo;
        }
    
        public function setTipo($tipo)
        {
                $this->tipo = $tipo;

                return $this;
        }

        public function getUsuario()
        {
                return $this->usuario;
        }

        public function setUsuario($usuario)
        {
                $this->usuario = $usuario;

                return $this;
        }

        public function getSaldo()
        {
                return $this->saldo;
        }

        public function setSaldo($saldo)
        {
                $this->saldo = $saldo;

                return $this;
        }

        public function getSituacao()
        {
                return $this->situacao;
        }

        public function setSituacao($situacao)
        {
                $this->situacao = $situacao;

                return $this;
        }

        //métodos
        public function cadastrarCartao($t)
        {
            $this->setTipo($t);
            if ($t == "Compacto") 
            {
                $this->setSituacao(true);
                $this->setSaldo(10);
            }
            else if ($t == "Master") 
            {
                $this->setSituacao(true);
                $this->setSaldo(50);
            }
            else if ($t == "Black") 
            {
                $this->setSituacao(true);
                $this->setSaldo(100);
            }
            else
            {
                echo "<p>Cartão travel inválido!</p>";
            }
        }
        public function encerrarCartao()
        {
                if ($this->getSaldo() > 0) {
                        echo "<p>O cartão travel ainda tem saldo, não é possível encerrar.</p>";
                }
                else
                {
                        $this->setSituacao(false);
                        echo "<p>O Cartão travel de " . $this->getUsuario() . " foi encerrado com sucesso</p>";
                }
        }
        public function carregarCartao()
        {
                if ($this->getSituacao() == true)
                {
                        $this->setSaldo($this->getSaldo()+$valor);
                        echo "<p>Depósito de R$ $valor realizado no cartão travel de " . $this->getUsuario() . "</p>";
                } else {
                        echo "<p>Cartão travel encerrado. Não pode carregar.</p>";
                }
                
        }
        public function usarCartao()
        {
                if($this->getSituacao()==true)
                {
                        if($this->getSaldo() >= $valor)
                        {
                                $this->setSaldo($this->getSaldo() - $valor);
                                echo "<p>Pagamento do R$ $valor autorizado no cartão travel de" . $this->setUsuario() . "</p>";
                        }
                        else
                        echo "<p>Slado Insuficiente para pagamento.</p>";
                }
                else
                        echo "<p>Não pode pagar com cartão travel encerrado.</p>";
        }
        public function tarifarCartao()
        {
                if($this->getTipo() =="Compacto")
                        $valor = 5;
                else if($this->getTipo() =="Master")
                        $valor = 25;
                else if($this->getTipo()== "Black")
                        $valor = 50;
                
                if ($this->getSituacao() == true) {
                        $this->setSaldo($this->getSaldo() - $valor);
                        echo "<p>Tarifa de R$ $valor debitada do cartão travel de" . $this->getUsuario() . "</p>";
                }
                else
                        echo "<p>Saldo insuficiente </p>";
        }
    }
    
    ?>
</body>
</html>