<?php
require_once __DIR__ . '/../model/M_Empresa.php'; // Asegúrate de ajustar la ruta si es necesario

class C_Empresa {
    private $modelo;

    public function __construct() {
        $this->modelo = new C_Empresa();
    }

    public function obtenerEmpresas() {
        return $this->modelo->obtenerEmpresas(); // Llama al método del modelo
    }
}

?>