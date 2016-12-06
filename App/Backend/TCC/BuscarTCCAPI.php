<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();


use App\Model\TCC as TCC;
use App\DAO\DAOTCC as DAOTCC;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';












function is_ajax() 
	{
	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
	}

if (is_ajax()) 
	{
	if (isset($_GET["filter"]) && !empty($_GET["filter"])) 
		{ 
			$filter = $_GET["filter"];
			switch($filter) 
			{ 
				case "alltcc": allTCC(); break;
				case "tccfindby": TCCBy(); break;
				
			}
		}
	}
	
	
	
	
	function allTCC()
	{
	
	$Controller = new mainController();
	$Result = $Controller->listarTCC();

	echo json_encode($Result);
	}

	function TCCBy()
	{
	$idTCC = 1;
	$Controller = new mainController();
	$Result = $Controller->buscarTCC($idTCC);

	echo json_encode($Result);
	}

	
           	allTCC();
           	TCCBy();   








