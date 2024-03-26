<?php
require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'\smarty\libs\Smarty.class.php';

function getParams(&$form){
    $form['wiek'] = isset($_REQUEST['wiek']) ? $_REQUEST['wiek'] : null;
    $form['kwotaKredytu'] = isset($_REQUEST['kwotaKredytu']) ? $_REQUEST['kwotaKredytu'] : null;
    $form['oprocent'] = isset($_REQUEST['oprocent']) ? $_REQUEST['oprocent'] : null;
}

function validate(&$form, &$infos, &$msg) {
    if (!(isset($form['wiek']) && isset($form['kwotaKredytu']) && isset($form['oprocent']))) {
        return false;
    }

    $infos[] = "Przekazano parametry.";

    if ($form['kwotaKredytu'] == "") $msg[] = 'Nie podano kwoty kredytu';
    if ($form['wiek'] == "") $msg[] = 'Nie podano wieku';
    if ($form['oprocent'] == "") $msg[] = 'Nie podano oprocentowania';

    if (count($msg) == 0) {
        if (!is_numeric($form['wiek'])) $msg[] = 'Wiek nie jest liczbą';
        if (!is_numeric($form['kwotaKredytu'])) $msg[] = 'Kwota kredytu nie jest liczbą';
        if (!is_numeric($form['oprocent'])) $msg[] = 'Oprocentowanie nie jest liczbą';
    };

    if (count($msg) > 0) return false;
    else return true;
}

function process(&$form, &$infos, &$msg, &$result) {
    $infos[] = "Parametry poprawne. Wykonuję obliczenia.";
    
    $form['wiek'] = intval($form['wiek']);
    $form['kwotaKredytu'] = intval($form['kwotaKredytu']); // Poprawiono zmienną
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

$smarty->display(_ROOT_PATH.'/app/calc_view.tpl');
