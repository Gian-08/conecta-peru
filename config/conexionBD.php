<?php 

    class Conexion {

        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $db = "conectaperu";
        private $conectar;

        public function __construct(){
            $conexion = "mysql:host=".$this->host.";dbname".$this->db.";charset=utf8";
            try {
                $this->conectar = new PDO($conexion,$this->user,$this->password);
                $this->conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "conexion exitosa";
            } catch (Exception $e) {
                $this->conectar = "Error de conexion";
                echo "ERROR: ".$e->getMessage();
            }
        }
    }
    
    if (!function_exists('ejecutarConsulta'))
{
	function ejecutarConsulta($sql)
	{
		global $conectar;
		$query = $conectar->query($sql);
		return $query;
	}

	function ejecutarConsultaSimpleFila($sql)
	{
		global $conectar;
		$query = $conectar->query($sql);		
		$row = $query->fetch_assoc();
		return $row;
	}

	function ejecutarConsulta_retornarID($sql)
	{
		global $conectar;
		$query = $conectar->query($sql);		
		return $conectar->insert_id;			
	}

	function limpiarCadena($str)
	{
		global $conectar;
		$str = mysqli_real_escape_string($conectar,trim($str));
		return htmlspecialchars($str);
	}
}
?>