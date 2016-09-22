<?php 

class Route
{
	static function start()
	{
		// контроллер и действие по умолчанию
		$controller_name = 'Main';
		$action_name = 'index';
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		// получаем имя контроллера
		if ( !empty($routes[1]) )
		{	
			$controller_name = $routes[1];
<<<<<<< HEAD
=======
			if(strpos($controller_name, '?')){
				$controller_name = explode("?", $controller_name)[0];
			}
>>>>>>> 21d5169fc23218d30a75a819af941e9e9cc861b6
		}
		
		// получаем имя экшена
		if ( !empty($routes[2]) )
		{
			$action_name = $routes[2];
<<<<<<< HEAD
=======
			if(strpos($action_name, '?')){
				$action_name = explode("?", $action_name)[0];
			}
>>>>>>> 21d5169fc23218d30a75a819af941e9e9cc861b6
		}

		if ( !empty($routes[3]) )
		{
			$action_param = $routes[3];
		}

		// добавляем префиксы
		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;
		$action_name = 'action_'.$action_name;

		// подцепляем файл с классом модели (файла модели может и не быть)

		$model_file = strtolower($model_name).'.php';
		$model_path = "application/models/".$model_file;

		if(file_exists($model_path))
		{
			include "application/models/".$model_file;
		}

		// подцепляем файл с классом контроллера
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "application/controllers/".$controller_file;


		if(file_exists($controller_path))
		{
			include "application/controllers/".$controller_file;
		}
		else
		{
<<<<<<< HEAD
=======
			var_dump($controller_name);
			die('Not found');
>>>>>>> 21d5169fc23218d30a75a819af941e9e9cc861b6
			/*
			правильно было бы кинуть здесь исключение,
			но для упрощения сразу сделаем редирект на страницу 404
			*/

			Route::ErrorPage404();
		}
		
		// создаем контроллер
		$controller = new $controller_name;
		$action = $action_name;
		
		if(method_exists($controller, $action))
		{
			// вызываем действие контроллера
			if(isset($action_param)){
				$controller->$action($action_param);	
			} else {
				$controller->$action();
			}
			
		}
		else
		{
<<<<<<< HEAD
=======
			var_dump($controller_name);
			die('Not found');
>>>>>>> 21d5169fc23218d30a75a819af941e9e9cc861b6
			// здесь также разумнее было бы кинуть исключение
			Route::ErrorPage404();
		}
	
	}
	
	function ErrorPage404()
	{
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
    }
}

?>