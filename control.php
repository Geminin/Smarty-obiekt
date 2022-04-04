<?php
require_once 'init.php';

switch ($action) {
	default : 
	
		$control = new app\Controllers\CalcControl();
		$control->generateView ();
	break;
	case 'calcCompute' :
		
		$control = new app\Controllers\CalcControl();
		$control->process ();
	break;
	case 'action1' :
		
		print('hello');
	break;
	case 'action2' :
		
		print('goodbye');
	break;
}
