<?php
	/**
	 * Object represents table 'usuario'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2016-11-16 15:16	 
	 */
	interface UsuarioDao{
		
		public function getUsuarioById($id);
		public function login($user,$password);
		
	}
?>