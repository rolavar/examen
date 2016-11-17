<?php

class conexion{


	function getConexion()
	{
		// Create connection
		$conn = new mysqli("localhost:3306", "root", "", "mysql") or die("Connection failed: " . $conn->connect_error);
		//$conn = new mysqli("sql9.freesqldatabase.com:3306", "sql9144163", "GjIQ4CvrNs","sql9144163") or die("Connection failed: " . $conn->connect_error);
		
		return $conn;
	}

	
}



?>