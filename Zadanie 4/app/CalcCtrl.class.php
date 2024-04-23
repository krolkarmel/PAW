<?php

require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';


class CalcCtrl {

	private $messages;
	private $form;
	private $result; 

	public function __construct(){
		$this->messages = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	public function getParams(){
		$this->form->wiek = isset($_REQUEST ['wiek']) ? $_REQUEST ['wiek'] : null;
		$this->form->kwotaKredytu = isset($_REQUEST ['kwotaKredytu']) ? $_REQUEST ['kwotaKredytu'] : null;
		$this->form->oprocent = isset($_REQUEST ['oprocent']) ? $_REQUEST ['oprocent'] : null;
	}

	public function validate() {
		if (! (isset ( $this->form->wiek ) && isset ( $this->form->kwotaKredytu ) && isset ( $this->form->oprocent ))) {
			return false;
		}
		
		if ($this->form->wiek == "") {
			$this->messages->addError('Nie podano okresu splaty');
		}
		if ($this->form->kwotaKredytu == "") {
			$this->messages->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->oprocent == "") {
			$this->messages->addError('Nie podano oprocentowania kredytu');
		}
                
		
		if (! $this->messages->isError()) {
			
			if (! is_numeric ( $this->form->wiek )) {
				$this->messages->addError('Okres splaty nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->kwotaKredytu )) {
				$this->messages->addError('Kwota kredytu nie jest liczbą całkowitą');
			}
                        
			if (!is_numeric ( $this->form->oprocent )) {
				$this->messages->addError('Oprocentowanie kredytu nie jest liczbą rzeczywistą');
			}
                        
		}
		
		return ! $this->messages->isError();
	}
	
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			$this->form->years = intval($this->form->wiek);
			$this->form->cost = intval($this->form->kwotaKredytu);
			$this->form->percent = floatval($this->form->oprocent);
			$this->messages->addInfo('Parametry poprawne.');
				
			
                        $this->result->result = ($this->form->kwotaKredytu * (1 + ($this->form->oprocent / 100))) / ($this->form->wiek * 12);
                        
			$this->messages->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	

    public function generateView(){
        global $conf;

        $smarty = new Smarty();

        $smarty->assign('conf',$conf);
        $smarty->assign('page_title','Kalkulator');

        $smarty->assign('form',$this->form);
        $smarty->assign('res',$this->result);
        $smarty->assign('messages',$this->messages);

        $smarty->display($conf->root_path.'/app/calc_view.tpl');
    }


}