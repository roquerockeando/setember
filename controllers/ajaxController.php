<?php


class ajaxController extends Controller{

	public function __construct() {

	}
	
	public function index(){}

	
	public function nickname(){

		if(isset($_POST['username']) && !empty($_POST['username'])){
			$username = addslashes($_POST['username']);

			$user = new Users();
			if($user->userExist($username)){
				echo "Usuario existente";
			}else{
				$user->insertUser($username);
			}

		}
	}

	public function send(){

		if(isset($_POST['username']) && !empty($_POST['username'])){

			$username = addslashes($_POST['username']);
			$message = addslashes($_POST['message']);

			$chat = new Chat();
			$chat->insertMessage($username, $message);
		}
	}

	public function getMessages(){
		$chat = new Chat();
		$messages = $chat->getMessages(10);
		echo json_encode($messages);
	}

}

?>