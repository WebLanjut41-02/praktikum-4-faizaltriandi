<?php 

/**
 * 
 */
class barangmasuk extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('barangmasuk_model');
		$this->load->library('form_validation');
		$this->load->library('table');
	}
    

	public function index(){
		$data['judul'] = 'Daftar Barang Masuk';
		$data['barangmasuk'] = $this->barangmasuk_model->getAllbarangmasuk();  //--> Memanggil model getAllbarangmasuk di barangmasuk_model.php, Setelah itu ke view barangmasuk/index
		//PAGINATION
		$this->load->library('pagination');

		$row = $this->barangmasuk_model->barisbarangmasuk();
		echo $row; // menampilkan jumlah baris di database
		$config['base_url'] = 'http://localhost/ci-app/';
		$config['total_rows'] = $row;
		$config['per_page'] = 2;

		$start = $this->uri->segment(3);
		$this->pagination->initialize($config);

		$data['barangkeluar'] = $this->barangkeluar_model->getAllbarangkeluar();
		$this->load->view('templates/header', $data);
		$this->load->view('inputbarangmasuk/index', $data);
		$this->load->view('templates/footer');

		// $this->data['barangmasuk'] = $this->barangmasuk_model->get();
 	//  	$this->load->view('barangmasuk', $this->data);
	}

	// public function tambah(){
	// 	$data['judul']=['Input Barang Masuk']
	// 	$this->load->view('templates/header');
	// 	$this->load->view('barangmasuk/tambah');
	// 	$this->load->view('templates/footer');
	// }

	public function tambah(){
		$data['judul'] = 'Input Barang Masuk';
		$this->form_validation->set_rules('barcode','Barcode','required');
		$this->form_validation->set_rules('namaproduk','Nama Produk','required');
		$this->form_validation->set_rules('jumlah','Jumlah','required');
		$this->form_validation->set_rules('namasuplier','Nama Suplier','required');
		$this->form_validation->set_rules('tanggal','Tanggal','required');
		// if( $this->form_validation->run() == FALSE ){
		if( $this->form_validation->run() == FALSE){

			$this->load->view('templates/header',$data);
			$this->load->view('inputbarangmasuk/tambah');
			$this->load->view('templates/footer');
		} else{
			$this->barangmasuk_model->tambahDatabarangmasuk();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('barangmasuk');
		}
		
	}
	public function hapus($barcode){
		$this->barangmasuk_model->hapusDatabarangmasuk($barcode);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('barangmasuk');
	}

}

	// public function tambah2(){
	// 	$data['pilihsuplier'] = ['PT', 'Kelompok Tani', 'Individu','BPTP'];
	// }

 ?>