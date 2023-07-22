<?php
/**
 * Clase de Conexion a La Base de Datos
 */
class MySQLDB
{
    private $host="localhost";
    private $user="root";
    private $clave = "";
    private $db = "consultorio";
    private $conn;

    function __construct()
    {
        $this->conn = mysqli_connect($this->host,$this->user,$this->clave,$this->db);

        if(mysqli_connect_errno())
        {
            print "Error al conectarse a la Base de Datos.";
            exit();
        }
        else
        {
           // print "Conexión Exitosa.<br>";
        }

        if(mysqli_set_charset($this->conn,"utf8"))
        {
            //print "Conjunto de caracteres: ".mysqli_character_set_name($this->conn).".<br>";
            
        }
        else
        {
            print "Error de conversión de caracteres en la base de datos.";
            exit();
        }
    }
}
?>