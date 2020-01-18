<?php 
    require_once 'Prefeito.php'; 

    class Secretario extends Prefeito
    {
        private $cargaHorario; 

        public function getCargaHorario()
        {
                return $this->cargaHoraria;
        }

        public function setCargaHorario($cargaHoraria)
        {
                $this->cargaHoraria = $cargaHoraria;

                return $this;
        }

        public function funcao()
        {
             echo "<h3>Função</h3>";
             echo "<p>O secretario tem a função da sua pasta (Saúde, Educação etc)</p>";
        }

        public function executarTrabalho()
        {
            echo "<h3>Executar trabalho</h3>";
            echo "<p>Inspecionar o trabalho dos funcionários</p>";
        }
    }
?>