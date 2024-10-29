<?php
require_once __DIR__ . '/../model/M_Perfil.php'; // Asegúrate de ajustar la ruta si es necesario

class C_Perfil {
    private $modelo;

    public function __construct() {
        $this->modelo = new M_Perfil();
    }

    public function obtenerPerfiles() {
        return $this->modelo->obtenerPerfiles(); // Llama al método del modelo
    }
}

?>