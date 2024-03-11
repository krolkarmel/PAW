<?php
require_once dirname(__FILE__).'/../config.php';


$x = $_REQUEST ['x'];
$y = $_REQUEST ['y'];
$z = $_REQUEST ['z'];


if ( ! (isset($x) && isset($y) && isset($z))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ( $x == "") {
	$messages [] = 'Nie podano kwoty kredytu';
}
if ( $y == "") {
	$messages [] = 'Nie podano wieku';
}
if ( $z == "") {
	$messages [] = 'Nie podano stopy oprocentowania';
}

if (empty( $messages )) {
	
	if (! is_numeric( $x )) {
		$messages [] = 'Wartość "Kwota kredytu" nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Wartość "Wiek" nie jest liczbą całkowitą';
	}	

	if (! is_numeric( $z )) {
		$messages [] = 'Wartość "Oprocentowanie" nie jest liczbą całkowitą';
	}	

}

if (empty($messages)) {
    $x = intval($x);
    $y = intval($y);
    $z = floatval($z);

    $result = ($x * (1 + ($z / 100))) / ($y * 12);
}




include 'calc_view.php';