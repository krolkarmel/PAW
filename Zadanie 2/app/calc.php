<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

function getParams(&$kwotaKredytu,&$wiek,&$oprocent){
	$kwotaKredytu = isset($_REQUEST['kwotaKredytu']) ? $_REQUEST['kwotaKredytu'] : null;
	$wiek = isset($_REQUEST['wiek']) ? $_REQUEST['wiek'] : null;
	$oprocent = isset($_REQUEST['oprocent']) ? $_REQUEST['oprocent'] : null;	
}

function validate(&$kwotaKredytu,&$wiek,&$oprocent,&$messages){
	if ( ! (isset($kwotaKredytu) && isset($wiek) && isset($oprocent))) {
		return false;
	}

	if ( $kwotaKredytu == "") {
		$messages [] = 'Nie podano kwoty kredytu';
	}
	if ( $wiek == "") {
		$messages [] = 'Nie podano wieku';
	}
	if ( $oprocent == "") {
		$messages [] = 'Nie podano stopy oprocentowania';
	}

	return empty($messages);
}

function operacja(&$kwotaKredytu,&$wiek,&$oprocent,&$messages,&$result){
	global $role;
	
	$kwotaKredytu = intval($kwotaKredytu);
	$wiek = intval($wiek);
	$oprocent = floatval($oprocent);
	
	if($oprocent < 8 && $role == "pracownik"){
		$messages [] = "Tylko kierownik może obliczyć ratę kredytu dla takich danych";
	} else {
		$result = ($kwotaKredytu * (1 + ($oprocent / 100))) + ($wiek * 12);
	}
}

$kwotaKredytu = null;
$wiek = null;
$oprocent = null;
$result = null;
$messages = array();

getParams($kwotaKredytu,$wiek,$oprocent);
if (validate($kwotaKredytu,$wiek,$oprocent,$messages)) { 
	operacja($kwotaKredytu,$wiek,$oprocent,$messages,$result);
}

include 'calc_view.php';
?>
