<?php
header('Access-Control-Allow-Origin: *');
class Home extends Controllers{
	public function __construct(){
		
		//invocar para que se ejecute el metodo de la herencia
		parent::__construct();
	}
	public function home(){
		$data['page_title'] = "Pagina Principal";
		$data['page_link'] = "home";
		$data['page_menu_open'] = "empty";
		$data['page_link_acitvo'] = "empty";
		$data['page_function'] = "function.home.js";
		$this->views->getViews($this, "home",$data);
	}
	// van las funciones necesarias para el funcionanmiento del sistema
}