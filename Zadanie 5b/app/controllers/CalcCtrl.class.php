<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCtrl {

	private $messages;
	private $form;
	private $result; 

	public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	public function getParams(){
		$this->form->wiek = getFromRequest('wiek');
		$this->form->kwotaKredytu = getFromRequest('kwotaKredytu');
		$this->form->oprocent = getFromRequest('oprocent');
	}

	public function validate() {
		if (! (isset ( $this->form->wiek ) && isset ( $this->form->kwotaKredytu ) && isset ( $this->form->oprocent ))) {
			return false;
		}
		
		if ($this->form->wiek == "") {
			getMessages()->addError('Nie podano okresu splaty');
		}
		if ($this->form->kwotaKredytu == "") {
			getMessages()->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->oprocent == "") {
			getMessages()->addError('Nie podano oprocentowania kredytu');
		}
                
		
		if (! getMessages()->isError()) {
			
			if (! is_numeric ( $this->form->wiek )) {
				getMessages()->addError('Okres splaty nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->kwotaKredytu )) {
				getMessages()->addError('Kwota kredytu nie jest liczbą całkowitą');
			}
                        
			if (!is_numeric ( $this->form->oprocent )) {
				getMessages()->addError('Oprocentowanie kredytu nie jest liczbą rzeczywistą');
			}
                        
		}
		
		return ! getMessages()->isError();
	}
	
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			$this->form->wiek = intval($this->form->wiek);
			$this->form->kwotaKredytu = intval($this->form->kwotaKredytu);
			$this->form->oprocent = floatval($this->form->oprocent);
			getMessages()->addInfo('Parametry poprawne.');
				
			
                        $this->result->result = ($this->form->kwotaKredytu * (1 + ($this->form->oprocent / 100))) / ($this->form->wiek * 12);
                        
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	

    public function generateView(){
		
		getSmarty()->assign('page_title','Kalkulator');
					
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('calc_view.tpl'); 
	}
}