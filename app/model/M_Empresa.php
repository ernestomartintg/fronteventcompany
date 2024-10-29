<?php
require_once  __DIR__ . '/../../config/config.php';

class M_Empresa {
    private $db;

    public function __construct() {
        $this->db = new Conectar();
    }

    public function obtenerEmpresas() {
        $query = "EXEC SP_EMPRESA_LISTAR";
        $stmt = $this->db->AbrirConexion_MSSQL()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Devuelve los datos // Retorna todos los perfiles como un array asociativo
    }
}