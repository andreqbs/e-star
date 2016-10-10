<?php 

ini_set('display_errors', true);
error_reporting(E_ALL);

use App\Models\TCC as TCC;
use App\DAO\DAOTCC as DAOTCC;
require_once dirname(__FILE__).'/../Model/TCC.php';
require_once dirname(__FILE__).'/../DAO/DAOTCC.php';

//INSERT
//$meuTcc = new TCC("TalkingHand", "Luva Foda", "1", "Fazer uma luva foda!!", "Pq eh massa!!!", "1", "1");
//$meuDAOTCC = new DAOTCC();
//$meuDAOTCC->create($meuTcc);

//UPDATE
//$meuTcc = new TCC("fuckingdrone", "Drone loko", "2", "Fazer um drone loko!!", "Pq eh show!!!", "2", "1");
//$meuDAOTCC = new DAOTCC();
//$meuDAOTCC->update($meuTcc, "12");

//DELETE
//$meuDAOTCC = new DAOTCC();
//$meuDAOTCC->delete("13");