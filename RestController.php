<?php
require_once("LoginRestHandler.php");

$user = "";
$password = "";

$view = $_GET['view'];
if(!isset($view))
{
	$view = $_POST['view'];
}

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
			//echo file_get_contents('php://input');
			//$json = $_GET["json"];
			//if(!isset($json))
			//{
			$json =json_decode( file_get_contents('php://input') );
			//}

			$handler = new LoginRestHandler();
			$handler->verificaLogin($json->{'user'},$json->{'password'});
			
		
	}
}




?>


