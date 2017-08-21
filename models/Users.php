<?php 
	
	class Users extends Model {

		private $uid;
		public function __construct($id=''){

			parent::__construct();
			if(!empty($id)){
				$this->uid = $id;
			}

		}


		public function userExist($username){
			$sql = "SELECT username FROM users WHERE username = '$username' LIMIT 1";
			$sql = $this->db->query($sql);

			if($sql->rowCount() == 0){

				return false;

			}else{

				return true;
				
			}
		}

		public function insertUser($username){

			$sql = "INSERT INTO users SET username = '$username' ";
			$sql = $this->db->query($sql);
			
		}


		

		// public function isLogged(){

		// 	// se está preenchido a variavel de sessão loggedIn, e não está vazia então
		// 	if(isset($_SESSION['lgdChat']) && !empty($_SESSION['lgdChat'])){

		// 		// retorne true
		// 		return true;

		// 	// se não
		// 	} else {

		// 		// retorne false
		// 		return false;
		// 	}

		// }

		public function getName(){

			if(!empty($this->uid)){

				$sql = "SELECT username FROM users WHERE id = '$id' ";
				$sql = $this->db->query($sql);

				if($sql->rowCount() > 0){

					$sql = $sql->fetch();

					return $sql['username'];

				}else{
					return '';
				}

			}

		}

		public function getId(){
			$session = $_SESSION['lgdChat'];
			$sql = "SELECT id FROM users WHERE id = '$session' ";

			$sql = $this->db->query($sql);

			if($sql->rowCount() > 0){

				$sql = $sql->fetch();
				return $sql['id'];
			}
		}

}	

 ?>