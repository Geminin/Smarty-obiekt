<?php

require_once 'core/Config.class.php';
$conf = new core\Config();
require_once 'config.php'; 

function &getConf(){ global $conf; return $conf; }


require_once 'core/Msg.class.php';
$msgs = new core\Msg();

function &getMessages(){ global $msgs; return $msgs; }

$smarty = null;	
function &getSmarty(){
	global $smarty;
	if (!isset($smarty)){
		
		include_once 'libs/Smarty.class.php';
		$smarty = new Smarty();	
		
		$smarty->assign('conf',getConf());
		$smarty->assign('msgs',getMessages());
		
		$smarty->setTemplateDir(array(
			'one' => getConf()->root_path.'/app/Views',
			'two' => getConf()->root_path.'/app/Views/templates'
		));
	}
	return $smarty;
}

require_once 'core/ClassLoad.class.php';
$cloader = new core\ClassLoad();
function &getLoader() {
    global $cloader;
    return $cloader;
}

require_once 'core/Function.php';

$action = getFromRequest('action');