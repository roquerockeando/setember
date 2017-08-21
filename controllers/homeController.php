<?php


class homeController extends Controller{

	
	public function index(){

		$chat = new Chat();

		$data = array(
			'messages'=> $chat->getMessages(5)
			);

		


		$this->loadTemplate('home', $data);
	}

	

	

}

?>