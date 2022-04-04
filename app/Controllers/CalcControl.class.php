<?php

namespace app\Controllers;

use app\Forms\CalcForm;
use app\Transfer\CalcRes;


class CalcControl {

	private $form;   
	private $result; 


	public function __construct(){
		
		$this->form = new CalcForm();
		$this->result = new CalcRes();
	}
	

	public function getParams(){
		$this->form->x = getFromRequest('x');
		$this->form->y = getFromRequest('y');
		$this->form->op = getFromRequest('op');
	}
	

	public function validate() {
		
		if (! (isset ( $this->form->x ) && isset ( $this->form->y ) && isset ( $this->form->op ))) {
			
			return false;
		}
		
		
		if ($this->form->x == "") {
			getMessages()->addError('Nie podano liczby 1');
		}
		if ($this->form->y == "") {
			getMessages()->addError('Nie podano liczby 2');
		}
		
		
		if (! getMessages()->isError()) {
			
			
			if (! is_numeric ( $this->form->x )) {
				getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->y )) {
				getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	
	public function process(){

		$this->getParams();
		
		if ($this->validate()) {
				
			
			$this->form->x = intval($this->form->x);
			$this->form->y = intval($this->form->y);
			
				
			
			switch ($this->form->op) {
				case 'minus' :
					$this->result->result = $this->form->x - $this->form->y;
					$this->result->op_name = '-';
					break;
				case 'times' :
					$this->result->result = $this->form->x * $this->form->y;
					$this->result->op_name = '*';
					break;
				case 'div' :
					$this->result->result = $this->form->x / $this->form->y;
					$this->result->op_name = '/';
					break;
				case 'pow' :
					$this->result->result = pow($this->form->x,$this->form->y);
					$this->result->op_name = '^';
					break;
							
				default :
					$this->result->result = $this->form->x + $this->form->y;
					$this->result->op_name = '+';
					break;
			}
			
			getMessages()->addInfo('Yo, POG to działa');
		}
		
		$this->generateView();
	}
	
	

	public function generateView(){
		
		
		getSmarty()->assign('tytul','Kalkulator');
		getSmarty()->assign('under','Potrafi wykonywać proste działania');
					
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('view_calc.tpl'); 
	}
}
