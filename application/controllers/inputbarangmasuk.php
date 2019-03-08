<?php 

/**
 * 
 */
class inputbarangmasuk extends CI_Controller{
	
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('inputbarangmasuk/index');
		$this->load->view('templates/footer');
	}
}

 ?>