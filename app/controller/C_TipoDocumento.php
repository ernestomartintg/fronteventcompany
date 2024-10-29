<?php
require_once __DIR__ . '/../model/M_TipoDocumento.php'; // Asegúrate de ajustar la ruta si es necesario

class C_TipoDocumento {
    private $modelo;

    public function __construct() {
        $this->modelo = new M_TipoDocumento();
    }

    public function obtenerTipoDocumentos() {
        return $this->modelo->obtenerTipoDocumentos(); // Llama al método del modelo
    }
}

?>