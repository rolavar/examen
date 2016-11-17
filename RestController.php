<?php
require_once("LoginRestHandler.php");

$user = "";
$password = "";

$view = $_GET['view'];

if(isset($view))
{
	switch($view)
	{
		case "login":
			if(isset($_GET["user"]) && isset($_GET["password"]))
			{
				$user = $_GET["user"];
				$password = $_GET["password"];
				
				$handler = new LoginRestHandler();
				$handler->verificaLogin($user,$password);
			}
			break;
		case "login2":
			echo "hola ".$_GET['json'];
		
	}
}




?>


