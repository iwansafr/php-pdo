<?php

class route{
	public function __construct(){
		$this->init();
	}
	var $uri = [];
	public function init(){
		if(!empty($_SERVER['PATH_INFO'])){
			$this->uri = explode('/',$_SERVER['PATH_INFO']);
			$this->uri = array_filter($this->uri);
		}
	}
	public function uri(){
		$this->uri = $this->init();
		return $this->uri;
	}
	public function module(){
		if(!empty($this->uri[1])){
			return $this->uri[1];
		}
	}
	public function task(){
		if(!empty($this->uri[2])){
			return $this->uri[2];
		}else if(!empty($this->uri[1])){
			return 'index';
		}
	}
}
$route = new route();