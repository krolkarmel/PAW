<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'\smarty\libs\Smarty.class.php';

function getParams(&$form){
	$form = isset($_REQUEST['kwotaKredytu']) ? $_REQUEST['kwotaKredytu'] : null;
	$form = isset($_REQUEST['wiek']) ? $_REQUEST['wiek'] : null;
	$form = isset($_REQUEST['oprocent']) ? $_REQUEST['oprocent'] : null;	
}

function validate(&$form,&$infos,&$messages){
    if ( ! (isset($form['wiek']) && isset($form['kwotaKredytu']) && isset($form['oprocent']))) {
        return false;
    }

	$infos [] = "Przekazano informacje";

	if ($form['wiek'] == "") {
		$messages [] = 'Nie podano okresu kredytowania';
		}
	
		if ($form['kwotaKredytu'] == "") {
		$messages [] = 'Nie podano kwoty kredytu';
		}
	
		if ($form['oprocent'] == "") {
		$messages [] = 'Nie podano oprocentowania kredytu';
		}

		if(count ($messages) != 0) return false;

    if (! is_numeric($form['wiek'])) {
        $messages [] = 'Okres kredytowania nie jest liczbą całkowitą';
    }

    if (! is_numeric($form['kwotaKredytu'])) {
        $messages [] = 'Kwota kredytu nie jest liczbą całkowitą';
    }

    if (! is_numeric($form['oprocent'])) {
        $messages [] = 'Oprocentowanie kredytu nie jest liczbą rzeczywistą';
    }

    if(count ($messages) != 0) return false;
    else return true;
}

function process(&$form,&$infos,&$messages,&$result){
    $infos [] = "Parametry poprawne. Wykonuję obliczenia.";
    
    $form['wiek'] = intval($form['wiek']);
    $form['kwotaKredytu'] = intval($form['kwotaKredytu']);
    $form['oprocent'] = floatval($form['oprocent']);

    $result = ($form['kwotaKredytu'] * (1 + ($form['oprocent'] / 100))) / ($form['wiek'] * 12);
}

$form = null;
$infos = array();
$result = null;
$messages = array();

getParams($form);
if ( validate($form,$infos,$messages) ) {
    process($form, $infos, $messages, $result);
}


$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator');

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('infos',$infos);
$smarty->assign('messages',$messages);

$smarty->display(_ROOT_PATH.'/app/calc.tpl');
