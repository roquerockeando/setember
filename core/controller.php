<?php

// Controller -> the controller of all other, Views and Models;
class Controller {

	// loadView Method-> gonna take the name of view, and data of him;
	public function loadView ( $viewName, $viewData = array() ){

		// the data will be extracted to an variable; Before, the data was an array;
		extract($viewData);

		// and include the file;
		include ('views/'.$viewName.'.php');

	}

	// loadTemplate Method-> gonna take the view name and data of him;
	public function loadTemplate( $viewName, $viewData = array() ){

		// just include the template file;
		include 'views/template.php';
	}

	// loadViewInTemplate Method-> gonna take, blah, you know this;
	public function loadViewInTemplate( $viewName, $viewData = array() ){
		
		// the data will be extracted to an variable;
		extract($viewData);

		// include the file;
		include ('views/'.$viewName.'.php');

	}

}

?>