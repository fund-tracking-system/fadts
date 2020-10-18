<?php 

require_once('app/core/Application.php');


define('ROOT',__DIR__.DIRECTORY_SEPARATOR);
define('APP',ROOT.'app'.DIRECTORY_SEPARATOR);
define('VIEW',ROOT.'app'.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR);
define('MODEL',ROOT.'app'.DIRECTORY_SEPARATOR.'model'.DIRECTORY_SEPARATOR);
define('CONTROLLER',ROOT.'app'.DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR);
define('CONN',ROOT.'app'.DIRECTORY_SEPARATOR.'conn'.DIRECTORY_SEPARATOR);
define('CORE',ROOT.'app'.DIRECTORY_SEPARATOR.'core'.DIRECTORY_SEPARATOR);
define('CSS',DIRECTORY_SEPARATOR.'fadts'.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'css'.DIRECTORY_SEPARATOR);



$modules = [ROOT,APP,CORE,CONTROLLER,CONN,CSS];

set_include_path(get_include_path().PATH_SEPARATOR.implode(PATH_SEPARATOR,$modules));
spl_autoload_register('spl_autoload',false);


new Application();
