<?php

	class Chat extends Model {

		public function __construct(){

			parent::__construct();

		}

		public function getMessages($limit){
			
			$array = array();

			$sql = "SELECT who_remetente, message FROM messages ORDER BY id DESC LIMIT ".$limit;
			$sql = $this->db->query($sql);

			if($sql->rowCount() > 0){

				$array = $sql->fetchAll();

			}

			return $array;

		}

		public function insertMessage($from, $message){


			$sql = "INSERT INTO messages SET who_remetente = '$from', message = '$message' ";
			$sql = $this->db->query($sql);

		}

		
	}


  ?>