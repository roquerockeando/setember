<?php


class chatController extends Controller{

	public function __construct(){

		
	}

	
	public function index(){
		$user = new Users();
		$chat = new Chat();

		

		$data = array(
			'name'=> $user->getName(),
			'id'=> $user->getId(),

			
			);
		


		
		
		$this->loadTemplate('chat', $data);
	}

	

	public function check(){

		if(isset($_POST['username']) && !empty($_POST['username'])){

			$username = addslashes($_POST['username']);

			$user = new Users();
			if(!$user->userExist($username)){
				$user->insertUser($username);	
			}
			
			
			header("location: /chat");

		}

	}

	

}

?>