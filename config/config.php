<?php
// Definir la URL base de la aplicación
define('BASE_URL', 'http://localhost/CI_I_APF2_V3'); // Ajusta esta URL según tu entorno

class Conectar{
    function AbrirConexion_MSSQL(){
        $Ip='localhost';
        $db='Eventos_Peru';
        $user='EventoPeru';
        $pass='12345678';

        try{
            $conn = new PDO("sqlsrv:Server=$Ip;Database=$db", $user, $pass);
            //echo("Conexión exitosa");
        }
        catch(PDOException $exp){
            echo("No se conectó con $db. Error: $exp");
        }

        return $conn;
    }


    // private $conn;

    // function AbrirConexion_MSSQL() {
    //     $Ip = 'localhost';
    //     $db = 'Eventos_Peru';
    //     $user = 'EventoPeru';
    //     $pass = '12345678';

    //     try {
    //         $this->conn = new PDO("sqlsrv:Server=$Ip;Database=$db", $user, $pass);
    //         echo("Conexión exitosa");
    //     } catch (PDOException $exp) {
    //         echo("No se conectó con $db. Error: $exp");
    //     }

    //     return $this->conn;
    // }

    // function CerrarConexion_MSSQL() {
    //     $this->conn = null; // Cierra la conexión
    //     echo("Conexión cerrada");
    // }
}

?>