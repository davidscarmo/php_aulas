<?php
require_once 'Telefone.php'; 
interface Controle {

    public function ligar();

    public function desligar();

    public function abrirMenu();
    
    public function fecharMenu();
    
    public function maisVolume();
    
    public function menosVolume();

}

?>