<?php
	/**
	 * Object represents table 'usuario'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2016-11-16 15:16	 
	 */
	class Usuario{
		
		var $id;
		var $usuario;
		var $password;
		var $estado;
		
		
	public function verificarLogin($user,$password){
		if($user != "" && $password != "")
			return true;
		else
			return false;
	}
		
	}
?>