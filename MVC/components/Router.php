<?php

Class Router
{
	Private $routes;

	public function __construct()
	{
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);
	}


	//Получить строку запроса
	Private function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI'])) {
			return trim($_SERVER['REQUEST_URI'], '/');	
		}
	}

	public function run()
	{
		//Получить строку запроса
		$uri = $this->getURI();

		//Проверить наличие такого запроса в routes.php
		foreach ($this->routes as $uriPattern => $path) {
			if (preg_match("~$uriPattern~", $uri)) {
				//Внутрений путь
				
				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);
				
				$segments = explode('/', $internalRoute);
				$controllerName = array_shift($segments).'Controller';
				$controllerName = ucfirst($controllerName);

				$actionName = 'action'.ucfirst(array_shift($segments));
				$parameters = $segments;
				
				//Подключить файл класс-контролеера
				$controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
				if (file_exists($controllerFile)) {
					include_once($controllerFile);
				}

				//Создать объект, вызвать метод
				$controllerObject = new $controllerName;

				$result = call_user_func_array(array($controllerObject, $actionName), 
					$parameters);
				if ($result != null) {
					break;
				}
			}
		}
	}
}
?> 