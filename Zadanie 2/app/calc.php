<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

function getParams(&$x,&$y,&$operation){
	$kwotaKredytu = isset($_REQUEST['kwotaKredytu']) ? $_REQUEST['kwotaKredytu'] : null;
	$wiek = isset($_REQUEST['wiek']) ? $_REQUEST['wiek'] : null;
	$oprocent = isset($_REQUEST['oprocent']) ? $_REQUEST['oprocent'] : null;	
}

function validate(&$kwotaKredytu,&$wiek,&$oprocent,&$messages){
	if ( ! (isset($kwotaKredytu) && isset($wiek) && isset($oprocent))) {
		return false;
	}

if ( ! (isset($kwotaKredytu) && isset($wiek) && isset($oprocent))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
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

if (empty( $messages )) {
	
	if (! is_numeric( $kwotaKredytu )) {
		$messages [] = 'Wartość "Kwota kredytu" nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $wiek )) {
		$messages [] = 'Wartość "Wiek" nie jest liczbą całkowitą';
	}	

	if (! is_numeric( $oprocent )) {
		$messages [] = 'Wartość "Oprocentowanie" nie jest liczbą całkowitą';
	}	

}
}
function operacja($kwotaKredytu,$wiek,$oprocent,$messages,$result){
	global $role;
	
	$kwotaKredytu = intval($kwotaKredytu);
	$wiek = intval($wiek);
	$oprocent = floatval($oprocent);
	
	if($oprocent < 8 && $role = "pracownik"){
		$messages [] = "Tylko kierownik moze obliczyc rate kredytu dla takich danych";
		}	
		else{
		$result = ($kwotaKredytu * (1 + ($oprocent / 100))) + ($wiek * 12);
	}
}

$kwotaKredytu = null;
$wiek = null;
$oprocent = null;
$result = null;
$messages = array();

getParams($kwotaKredytu,$wiek,$oprocent);
if ( validate($kwotaKredytu,$wiek,$oprocent,$messages) ) { 
	operacja($kwotaKredytu,$wiek,$oprocent,$messages,$result);
}

include 'calc_view.php';