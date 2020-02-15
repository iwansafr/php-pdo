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
	public function query($q = ''){
		if(!empty($q)){
			$stmt = $this->conn->prepare($q);
			$stmt->execute();

			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$data = $stmt->fetchAll();
			return $data;
		}
	}
	public function insert($q = ''){
		if(!empty($q)){
			$this->conn->exec($q);
		}
	}

	public function formName($name = ''){
		$this->formName = $name;
	}

}
$db = new connection($db);
