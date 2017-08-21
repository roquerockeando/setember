<?php

// Model Class-> All of the logical, and codes will be writed here!
class Model {
	// set an protected variable;
	protected $db;
	protected $numRows;
	protected $array;
	
	public function __construct(){

		global $config;
		try{
		$this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
		}catch(PDOException $error){
			echo "An error ocurred: ".$error->getMessage();
		}



	}

	public function query($sql){
			$query = $this->db->query($sql);
			$this->numRows = $query->rowCount();
			$this->array = $query->fetchAll();
		}

	public function get_result(){
			return $this->array;
		}

	public function get_numRows(){
			return $this->numRows;
		}

	public function insert($table, $data){

			if(!empty($table) && ( is_array($data) && count($data) > 0 )){

				$sql = "INSERT INTO".$table." SET ";
				$dados = array();
				foreach($data as $key => $value){
					$dados[] = $key." = '".addslashes($value)."' ";
				}
				$sql = $sql.implode(', ', $dados);
				$this->db->query($sql);
			}

		}

	public function update($table, $data, $where = array(), $where_cond = "AND"){

			if(!empty($table) && (is_array($data) && count($data) > 0 ) && is_array($where)){
				$sql = "UPDATE ".$table." SET ";
				$dados = array();
				foreach($data as $key => $value){
					$dados[] = $key." = '".addslashes($value)."' ";
				}
				$sql = $sql.implode(', ', $dados);

				if(count($where) > 0){
					$dados = array();
					foreach($where as $key => $value){
					$dados[] = $key." = '".addslashes($value)."' ";
					}
					$sql = $sql."WHERE".implode(" ".$where_cond." ", $dados);
				}

				$this->db->query($sql);
			}
		}


	public function delete($table, $where, $where_cond = "AND"){
		
			if(!empty($table) && (is_array($where) && count($where) > 0)){
				$sql = "DELETE FROM ".$table;

				if(count($where) > 0){
					$dados = array();
					foreach($where as $key => $value){
						$dados[] = $key." = '".addslashes($value)."' ";
						}
					$sql = $sql."WHERE".implode(" ".$where_cond." ", $dados);
				}

			$this->db->query($sql);
			}
		}
	}


?>