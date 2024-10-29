<?php
require_once  __DIR__ . '/../../config/config.php';

class M_TipoDocumento {
    private $db;
 
    public function __construct() {
        $this->db = new Conectar();
    }

    public function obtenerTipoDocumentos() {
        $query = "EXEC SP_TIPO_DOCUMENTO_LISTAR";
        $stmt = $this->db->AbrirConexion_MSSQL()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Devuelve los datos // Retorna todos los perfiles como un array asociativo
    }
}