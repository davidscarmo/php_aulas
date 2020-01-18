<?php 
require_once 'Politico.php'; 

class Prefeito extends Politico 
{
    private $gratificacao; 

    public function getGratificacao()
    {
        return $this->gratificacao;
    }

    public function setGratificacao($gratificacao)
    {
        $this->gratificacao = $gratificacao;

        return $this;
    }

    public function funcao()
    {
        echo "<h3>Função</h3>";
        echo "<p>O Prefeito tem a função de administrar o município</p>";
    }

    public function sancionarLei()
    {
        echo "<h3>Sancionar Lei</h3>";
        echo "Leis sancionadas"; 
    }

    public function nomearSecretario($nomeSec, $nomePref)
    {
        echo "<h3>Nomear secretário</h3>"; 
        echo "O secretário $nomeSec foi nomeado pelo Prefeito $nomePref";
    }
}
?>