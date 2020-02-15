<?php

class connection{
	public function __construct($db = array()){
		$this->init($db);
	}

	var $conn;
	var $formName;

	public function init($db = array()){
		try{
			$config = $db;
			$host = $config['host'];
			$database = $config['database'];
			$username = $config['username'];
			$password = $config['password'];
			$this->conn = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			echo $e->getMessage();die();
		}
	}
	public function query($q = '',$data = array()){
		if(!empty($q)){
			$stmt = $this->conn->prepare($q);
			if(!empty($data))
			{
				$stmt->execute($data);
			}else{
				$stmt->execute();
			}

			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$data = $stmt->fetchAll();
			$stmt = null;
			return $data;
		}
	}
	public function save($q = '', $data = array()){
		if(!empty($q)){
			$stmt = $this->conn->prepare($q);
			if(!empty($data))
			{
				$stmt->execute($data);
			}else{
				$stmt->execute();
			}
		}
	}

	public function formName($name = ''){
		$this->formName = $name;
	}

}
$db = new connection($db);
