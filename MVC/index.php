<?php 
//FRONT CONTROLLER

/*Вывод ошибок*/
 ini_set('display_errors', 0);
 error_reporting(E_ALL);


/*Подключение файлов*/
//    Имя_пер.   Путь к корню
define('ROOT', dirname(__FILE__));
//Подключение файла
require_once(ROOT.'/components/Autoload.php');



/*Вызов роутера*/
$router = new Router();
$router->run();



?>