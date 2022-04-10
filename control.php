<?php
require_once 'init.php';

getRouter()->setDefaultRoute('calcShow'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

getRouter()->addRoute('calcShow',    'CalcControl',  ['user','admin']);
getRouter()->addRoute('calcCompute', 'CalcControl',  ['user','admin']);
getRouter()->addRoute('login',       'LoginControl');
getRouter()->addRoute('logout',      'LoginControl', ['user','admin']);

getRouter()->go();
