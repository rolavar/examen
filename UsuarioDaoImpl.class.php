<?php
	/**
	 * Object represents table 'usuario'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2016-11-16 15:16	 
	 */
	 
	require_once ('/dao/UsuarioDao.class.php');
	require_once ('/sql/conexion.php');
	
	class UsuarioDaoImpl implements UsuarioDao{
	
	private $conn;
	
	function __construct()
	{
		$conexion = new conexion();
		$conn = $conexion->getConexion();
	}
	
	public function getUsuarioById($id){
		return "hola";
	}
	
	function login($user,$password){
		if(!isset($conn))
		{
			$conexion = new conexion();
			$conn = $conexion->getConexion();
		}
		$resultado = $conn->query("SELECT * FROM usuario WHERE  usuario = '".$user."' and password = '".$password."'");
		$usuario = new Usuario();
		if(!$resultado)
		{
			echo "Errno: " . $conn->errno . "\n";
			echo "Error: " . $conn->error. "\n";
			return "Fallo consulta ".$conn->error;
		}else{
			while($fila = $resultado->fetch_assoc()){
				$usuario->id = $fila['id'];
				$usuario->usuario = $fila['usuario'];
				$usuario->password = $fila['password'];
				$usuario->estado = $fila['estado'];
			}
		}
		
		return $usuario;
	}
		
	}
?>