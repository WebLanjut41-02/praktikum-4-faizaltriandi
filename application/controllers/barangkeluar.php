<?php 
class barangkeluar extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('barangkeluar_model');
		$this->load->library('form_validation');
		$this->load->library('table');
	}
    

	public function index(){
		// $this->load->database();
		// $this->load->model('barangmasuk_model');
		$data['judul'] = 'Daftar Barang Keluar';
		// $data['barangmasuk'] = $this->barangmasuk_model->getAllbarangmasuk();
		$data['barangkeluar'] = $this->barangkeluar_model->getAllbarangkeluar();  //--> Memanggil model getAllbarangmasuk di barangmasuk_model.php, Setelah itu ke view barangmasuk/index
		$this->load->view('templates/header', $data);
		$this->load->view('inputbarangmasuk/index', $data);
		$this->load->view('templates/footer');

		// $this->data['barangmasuk'] = $this->barangmasuk_model->get();
 	//  	$this->load->view('barangmasuk', $this->data);
	}
 ?>