<?php
	/**
	 * Object represents table 'empleado'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2016-11-16 15:16	 
	 */
	 
	require_once ('../EmpleadoDao.class.php');
	require_once ('../../sql/conexion.php');
	 
	class EmpleadoDaoImpl implements EmpleadoDao{
	
		private $conexion;
		
		public function __construct()
		{
			$conn = new conexion();
			$conexion = $conn->retornaConexion();
		}
		
		public function getEmpleadoById($id)
		{
			$resultado = mysql_query("SELECT * FROM EMPLEADO WHERE ID = "$id);
			$empleado = new Empleado();
			if(!$resultado)
			{
				return "Fallo consulta".mysql_error();
			}else{
				while($fila = mysql_fetch_assoc($resultado)){
					$empleado->id = $fila['id'];
					$empleado->nombre = $fila['nombre'];
				}
			}
		}
				
	}
?>