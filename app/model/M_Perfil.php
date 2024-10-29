<?php
require_once  __DIR__ . '/../../config/config.php';

class M_Perfil {
    private $db;

    public function __construct() {
        $this->db = new Conectar(); // Establece la conexión
    }

    // Método para obtener todos los perfiles
    public function obtenerPerfiles() {
        $query = "EXEC SP_PERFIL_LISTAR";
        $stmt = $this->db->AbrirConexion_MSSQL()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Devuelve los datos // Retorna todos los perfiles como un array asociativo
    }
/*
    // Método para agregar un nuevo perfil
    public function agregarPerfil($perfil) {
        // Primero verifica si el perfil ya existe
        if ($this->perfilExiste($perfil)) {
            return "El perfil ya existe en la base de datos.";
        }

        // Llama al procedimiento almacenado para insertar el perfil
        $query = "EXEC sp_agregarPerfil :perfil, :estado";
        $stmt = $this->db->prepare($query);
        $estado = 1; // Estado por defecto (activo)
        $stmt->bindParam(':perfil', $perfil);
        $stmt->bindParam(':estado', $estado, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return "Perfil agregado exitosamente.";
        } else {
            return "Error al agregar el perfil.";
        }
    }

    // Método para verificar si un perfil ya existe en la base de datos
    public function perfilExiste($perfil) {
        $query = "EXEC sp_perfilExiste :perfil";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':perfil', $perfil);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['perfil_count'] > 0; // Retorna verdadero si existe
    }

    // Método para actualizar el estado de un perfil
    public function actualizarEstadoPerfil($perfilId, $nuevoEstado) {
        $query = "EXEC sp_actualizarEstadoPerfil :perfilId, :nuevoEstado";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':perfilId', $perfilId, PDO::PARAM_INT);
        $stmt->bindParam(':nuevoEstado', $nuevoEstado, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return "Estado del perfil actualizado correctamente.";
        } else {
            return "Error al actualizar el estado del perfil.";
        }
    }

    // Método para obtener un perfil por su ID
    public function obtenerPerfilPorId($perfilId) {
        $query = "EXEC sp_obtenerPerfilPorId :perfilId";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':perfilId', $perfilId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); // Retorna el perfil como un array asociativo o false si no existe
    }
        */
}
    
?>