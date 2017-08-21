<?php

// Core -> the class where is running the app;

class Core {

	// the run method;
	public function run() {
		/* the url variable;
		   store the explode function,
		   then will be separate all things
		   which the user is gonna put in url line;
		 */
		$url = explode("index.php", $_SERVER['PHP_SELF']);
		$url = end($url);

		// set an variable with no data in the array;
		$params = array();

		/*
		the condition check if is not empty in url variable;
		then->
		*/
		if(!empty($url)){
			// url is gonna to separate again with a '/'
			$url = explode('/', $url);

			//this will pull the variable to a 'no data' array;
			array_shift($url); 

			// the current controller is now the url in index [0];
			$currentController = $url[0].'Controller';
			array_shift($url);

			/*
				if is set the url then
				will put the current action = url in index [0]
				and pull array;
			*/
			if(isset($url[0])){

				$currentAction = $url[0];
				array_shift($url);

				//else the current action is INDEX;
			}else{

				$currentAction = 'index';

			}

			// if the count of url is than more 0, the 'no data' array will be the url;
			if(count($url) > 0){

				$params = $url;
			}

			// else this, the current controller is the homeController
			// and the current action is the index;
		} else {

			$currentController = 'homeController';
			$currentAction = 'index';

		}

		// require the file;
		require_once 'core/controller.php';

		$c = new $currentController();
		call_user_func_array(array($c, $currentAction), $params);
			
			/*
			else the url does not receive an argument,
			create a condition to redirect to index action
			*/
	}

}

?>