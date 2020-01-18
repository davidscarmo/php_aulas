<?php 

require_once 'Politico.php';

class Vereador extends Politico
{
    public function funcao()
    {
        echo "<h3>Função</h3>";
        echo "<p>O vereador tem a função de elaborar leis municipais e fiscalizar as ações da prefeitura</p>"; 
    }

    public function criarLei($numero, $descricao)
    {
        echo "<h3>Criar lei</h3>"; 
        echo "Lei nº $numero - $descricao"; 
    }
}
?>